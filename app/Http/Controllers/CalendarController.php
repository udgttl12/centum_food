<?php

namespace App\Http\Controllers;

use Acaronlex\LaravelCalendar\Calendar;
use App\Models\FoodCalendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    protected function index()
    {
        $events = [];

        $foodCalendars = FoodCalendar::all();

        foreach ($foodCalendars as $foodCalendar) {
            $events[] = Calendar::event(
                $foodCalendar->food, //event title
                true, //full day event?
                new \DateTime($foodCalendar->date), //start time (you can also use Carbon instead of DateTime)
                new \DateTime($foodCalendar->date), //end time (you can also use Carbon instead of DateTime)
                $foodCalendar->id, //optionally, you can specify an event ID
                [
                    'url' => route('calendar.show',$foodCalendar->id),
                ],
            );
        }

        $calendar = new Calendar();
        $calendar->addEvents($events)
            ->setOptions(
                [
                    'locale' => 'ko',
                    'firstDay' => 0,
                    'displayEventTime' => true,
                    'selectable' => true,
                    'initialView' => 'dayGridMonth',
                    'headerToolbar' => [
                        'end' => '오늘 prev,next dayGridMonth timeGridWeek timeGridDay',
                    ],
                ]
            );
        $calendar->setId('1');
        $calendar->setCallbacks(
            [
                'select' => 'function(selectionInfo){}',
                'eventClick' => 'function(event){}',
            ]
        );

        return view('calendar.index', compact('calendar'));
    }

    public function create()
    {
        return view('calendar.create');
    }

    public function store(Request $request)
    {
        $foodCalendar = new FoodCalendar();
        $foodCalendar->food = $request->post('food');
        $foodCalendar->content = $request->post('content');
        $foodCalendar->date = $request->post('date');
//        $foodCalendar->created_by = Auth::user()->id;
        $foodCalendar->created_by = 1;

        $foodCalendar->save();

        return redirect()->route('calendar.index');
    }

    public function show(FoodCalendar $foodCalendar)
    {
        return view('calendar.show', compact('foodCalendar'));
    }

    public function edit(FoodCalendar $foodCalendar){
        return view('calendar.edit',compact('foodCalendar'));
    }
}
