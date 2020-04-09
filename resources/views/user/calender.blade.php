@extends('layouts.user')
@section('header_type','header_in')
@section('extra_styles')
<!-- SPECIFIC CSS -->
<link href="/css/home.css" rel="stylesheet">
<link href="/css/Calender.css" rel="stylesheet">

<link href="/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
<style>
  .fc-content {
    background: #589442;
    border: #589442;
    color: #fff;
}
</style>
@endsection
@section('content')
<main>

    <div id='calendar'></div>
</main>
@php
$data=json_encode($datas)    

@endphp
@endsection
@section('extra_scripts')
<script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/assets/plugins/moment/moment.js"></script>
<script src='/assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
      <!--specific script for calender-->
      {{-- <script>
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
      
        
      
      
            </script> --}}

            @php
            echo "<script>
                const events=";
                echo $data;
                echo"</script>";
    @endphp

    {{-- <script>
     const events=[
                {
                title: 'Family Plan 04 - Praveenram Balachandran ',
                start: '2020-04-01'
                },
          
            ]
    </script> --}}
    <script>
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            editable: false,
            events:events
        });
    </script>
@endsection