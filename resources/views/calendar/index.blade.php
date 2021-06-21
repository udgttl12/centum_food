@extends('include.layout_calendar')

@push('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>
    <script src="{{asset('/js/fullcalendar/ko.js')}}"></script>
@endpush

@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
@endpush

@section('content')
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
@endsection
