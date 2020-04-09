@extends('layouts.admin')
@section('pagetitle','Calender')
@section('extra_styles')
      <!--calendar css-->
      <link href="/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">@yield('pagetitle')</h4>
        </div>
    </div>


    <div class="page-content-wrapper ">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- <div class="col-xl-2 col-md-3">

                                    <h4 class="m-t-5 m-b-15">Created Events</h4>
                                    <form method="post" id="add_event_form" class="m-t-5">
                                        <input type="text" class="form-control new-event-form" placeholder="Add new event..." />
                                    </form>

                                    <div id='external-events'>
                                        <h4 class="m-b-15">Draggable Events</h4>
                                        <div class='fc-event'>My Event 1</div>
                                        <div class='fc-event'>My Event 2</div>
                                        <div class='fc-event'>My Event 3</div>
                                        <div class='fc-event'>My Event 4</div>
                                        <div class='fc-event'>My Event 5</div>
                                    </div>
                                    <div class="checkbox checkbox-custom">
                                        <input id="drop-remove" type="checkbox">
                                        <label for="drop-remove">
                                            Remove after drop
                                        </label>
                                    </div>
                                </div> -->

                                <div id='calendar' class="col-xl-12 col-md-12"></div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div><!-- container-fluid -->

    </div> <!-- Page content Wrapper -->




</div> <!-- Page content Wrapper -->

   


</div>
@endsection


@section('extra_scripts')
        <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="/assets/plugins/moment/moment.js"></script>
        <script src='/assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        {{-- <script src="/assets/pages/calendar-init.js"></script> --}}
        <script>
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                editable: false,
                events: [
                    {
                    title: 'Family Plan 04 - Praveenram Balachandran ',
                    start: '2020-04-01'
                    },
              
                ]
            });
        </script>
@endsection