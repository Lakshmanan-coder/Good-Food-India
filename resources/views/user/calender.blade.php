@extends('layouts.user')
@section('header_type','header_in')
@section('extra_styles')
<!-- SPECIFIC CSS -->
<link href="/css/home.css" rel="stylesheet">
<link href="/css/Calender.css" rel="stylesheet">
<!-- FULL PAGE CALENDER -->
<link href='./fullcalendar-4.4.0/packages/core/main.css' rel='stylesheet' />
<link href='./fullcalendar-4.4.0/packages/daygrid/main.css' rel='stylesheet' />
<script src='./fullcalendar-4.4.0/packages/core/main.js'></script>
<script src='./fullcalendar-4.4.0/packages/interaction/main.js'></script>
<script  src='./fullcalendar-4.4.0/packages/daygrid/main.js'></script>   
@endsection
@section('content')
<main>

    <div id='calendar'></div>
</main>
@endsection
@section('extra_scripts')
    
      <!--specific script for calender-->
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
      
          var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid' ],
            defaultDate: '2020-02-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
              {
                title: 'All Day Event',
                start: '2020-02-01'
              },
              {
                title: 'Long Event',
                start: '2020-02-07',
                end: '2020-02-10'
              },
              {
                groupId: 999,
                title: 'Repeating Event',
                start: '2020-02-09T16:00:00'
              },
              {
                groupId: 999,
                title: 'Repeating Event',
                start: '2020-02-16T16:00:00'
              },
              {
                title: 'Conference',
                start: '2020-02-11',
                end: '2020-02-13'
              },
              {
                title: 'Meeting',
                start: '2020-02-12T10:30:00',
                end: '2020-02-12T12:30:00'
              },
              {
                title: 'Lunch',
                start: '2020-02-12T12:00:00'
              },
              {
                title: 'Meeting',
                start: '2020-02-12T14:30:00'
              },
              {
                title: 'Happy Hour',
                start: '2020-02-12T17:30:00'
              },
              {
                title: 'Dinner',
                start: '2020-02-12T20:00:00'
              },
              {
                title: 'Birthday Party',
                start: '2020-02-13T07:00:00'
              },
              {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2020-02-28'
              }
            ]
          });
      
          calendar.render();
        });
      
        
      
      
            </script>
@endsection