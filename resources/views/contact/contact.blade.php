@extends('layouts.app')
@section('content')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY7wGSKUT2V59H8Kw2Or5WSnxPh-soJIU&callback=initMap"
    type="text/javascript"></script>
<section id="contact" class="secondary-page">
    <div class="general">
     <!--Google Maps-->
     <div id="map_container">
       <div id="map_canvas">
          <div id="map" style="width:100%; height:500px; margin-bottom: 10px"></div>
       </div>
     </div>
     <div class="container">
       <div class="content-link col-md-12">
        <div class="top-score-title col-md-9 align-center">
          <h3>Contact <span>form</span><span class="point-little">.</span></h3>
          {!! Form::open(['action' => 'ContactController@store', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
              <label for="name">* Name:</label><div class="clear"></div>
              {!! Form::text('nama', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'e.g. Mr. John Doe',
              'required'],'') !!}
            </div>
            <div class="form-group">
              <label for="email">* Email:</label><div class="clear"></div>
              {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'example@domain.com',
              'required'],'') !!}
            </div>
            <div class="form-group">
              <label for="message"> Message:</label>
              {!! Form::textarea('message', null, ['id' => 'message', 'class' => 'form-control', 'rows' => '4', 'cols' => '30',
              'placeholder' => 'Write a Message', 'required'],'') !!}
            </div>
            <div class="form-group">
              {!! Form::button('Submit', ['type'=>'submit']) !!}
            </div>
          {!! Form::close() !!}
        </div>
        <div id="info-company" class="top-score-title col-md-3 align-center">
          <h3>Info</h3>
          <div class="col-md-12">
            <p><i class="fa fa-phone"></i> 021 412182018 </p>
            <p><i class="fa fa-envelope-o"></i>info@roceto.com </p>
            <p><i class="fa fa-globe"></i>Mawar Raya Street no.12</p>
            <p><i class="fa fa-map-marker"></i>Depok Jawa Barat, 1234</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.bottom-content')
</section>
@endsection
@push('scripts')
    <script type="text/javascript">
        /********************************************
        GOOGLE MAPS
        ********************************************/

        // The following example creates a marker in Stockholm, Sweden
        // using a DROP animation. Clicking on the marker will toggle
        // the animation between a BOUNCE animation and no animation.
        $(document).ready(function ($) {
            "use strict";
            var stockholm = new google.maps.LatLng(-6.3620991, 106.8338115);
            var parliament = new google.maps.LatLng(-6.3620991, 106.8338115);
            var image = "{{ URL::asset('images/marker2.png') }}";
            var marker;
            var map;

            function initialize() {
                var styleArray = [
            {
                featureType: 'all',
                stylers: [
                { saturation: -1000 }
                ]
            }, {
                featureType: 'road.arterial',
                elementType: 'geometry',
                stylers: [
                { hue: '#00ffee' },
                { saturation: -100 },
                { "lightness": -8 },
                { "gamma": 1.18 }
                ]
            }
            ];
                var mapOptions = {
                    zoom: 14,
                    styles: styleArray,
                    center: stockholm
                };

                map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    position: parliament
                });
                google.maps.event.addListener(marker, 'click', toggleBounce);
            }

            function toggleBounce() {

                if (marker.getAnimation() != null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        });
    </script>
@endpush
