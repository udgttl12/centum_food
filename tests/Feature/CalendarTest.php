<?php

namespace Tests\Feature;

use App\Models\FoodCalendar;
use Database\Factories\FoodCalendarFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalendarTest extends TestCase
{

    use RefreshDatabase,WithFaker;

    /**
     * A basic test example.
     *
     * @return void
     *
     * @test
     */
    public function index()
    {
        $response = $this->get('/calendar');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function create(){
        $response = $this->get('/calendar/create');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function store(){
        $foodCalendar = FoodCalendar::factory()->create();
        $response = $this->post('/calendar/store',$foodCalendar->toArray());
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function show(){
        $foodCalendar = FoodCalendar::factory()->create();
        $response = $this->post('/calendar/'.$foodCalendar->id.'/show/',$foodCalendar->toArray());
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function edit(){
        $foodCalendar = FoodCalendar::factory()->create();
        $response = $this->post('/calendar/'.$foodCalendar->id.'/edit/',$foodCalendar->toArray());
        $response->assertStatus(200);
    }

}
