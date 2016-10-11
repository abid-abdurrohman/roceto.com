@extends('layouts.app')

@section('content')

<script src="{{ URL::asset('fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ URL::asset('fullcalendar/fullcalendar.min.js') }}"></script>

 <section class="drawer">
    <div class="col-md-12 size-img back-img">
        <div class="effect-cover">
        <h3 class="txt-advert animated">22-04-2015 Roceto INDONESIA</h3>
        <p class="txt-advert-sub animated">Only the best eight singles players and best eight doubles teams.</p>
        </div>
    </div>
    <section id="summary" class="container secondary-page">
      <div class="general general-results tournaments">
           
           <div id="c-calend" class="top-score-title right-score col-md-12">
                <h3>2015 <span>CALENDAR</span><span class="point-little">.</span></h3>
                <p class="txt-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="txt-right txt-dd-second">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                
                <div class="container">
                  <div class="row"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                      <div id="my-calendar"></div>

                    </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
                  </div><!--(./row)-->
                </div><!--(./COntainer")-->             

           </div><!--Close Top Match-->

           <div id='calendar'></div>    
        </section>

@endsection
@push('script')
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listMonth'
      },
      defaultDate: '2016-09-12',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      events: [
        {
          title: 'Business Lunch',
          start: '2016-09-03T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Meeting',
          start: '2016-09-13T11:00:00',
          constraint: 'availableForMeeting', // defined below
          color: '#257e4a'
        },
        {
          title: 'Conference',
          start: '2016-09-18',
          end: '2016-09-20'
        },
        {
          title: 'Party',
          start: '2016-09-29T20:00:00'
        },

        // areas where "Meeting" must be dropped
        {
          id: 'availableForMeeting',
          start: '2016-09-11T10:00:00',
          end: '2016-09-11T16:00:00',
          rendering: 'background'
        },
        {
          id: 'availableForMeeting',
          start: '2016-09-13T10:00:00',
          end: '2016-09-13T16:00:00',
          rendering: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2016-09-24',
          end: '2016-09-28',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        },
        {
          start: '2016-09-06',
          end: '2016-09-08',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        }
      ]
    });
    
  });

</script>
@endpush