@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Nikol Radek</h3>
      <p class="txt-advert-sub">Lifelong dream of becoming the No. 1 player on the ATP World Tour </p>
    </div>
  </div>

  <section id="summary" class="container secondary-page">
    <div class="general general-results">
  <div class="top-score-title player-vs">
   <h3>Ashe Stadium - <span>Final</span><span class="point-little">.</span></h3>
    <div class="main">
      <div class="tabs standard">
        <div class="col-md-12 player-photo">
          <div class="col-md-4">
            <img class="img-face" src="http://placehold.it/120x114" alt="" />
            <h2>1</h2>
          </div>
          <div class="col-md-4">
                <img class="img-face" src="http://placehold.it/120x114" alt="" />
                <h2>2</h2>
              </div>
              <div class="col-md-4">
                <img class="img-face" src="http://placehold.it/120x114" alt="" />
                <h2>3</h2>
              </div>
          </div>
      </div>
    </div>
</div>
@include('layouts.bottom-content')
</section>
@endsection
