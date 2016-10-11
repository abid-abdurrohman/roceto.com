@extends('layouts.app')

@section('content')

 <section class="drawer">
  <div class="col-md-12 size-img back-img-match">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Palyer</h3>
      <p class="txt-advert-sub">Lifelong dream of becoming the No. 1 player on the ATP World Tour </p>
    </div>
  </div>

  <section id="single_player" class="container secondary-page">
    <div class="general general-results players">
     <div class="top-score-title right-score col-md-9">
      <h3>RODAK <span>JAMAL</span><span class="point-little">.</span></h3>
      <div class="col-md-12 atp-single-player">
        <img class="img-djoko" src="http://placehold.it/235x224" alt="" />
        <div class="col-md-2 data-player">
         <p>Birthdate:</p>
         <p>Birthplace:</p>
         <p>Height:</p>
         <p>Weight:</p>
         <p>Plays:</p>
         <p>Turned Pro:</p>
         <p>Nicknames:</p>
       </div>
       <div class="col-md-3 data-player-2">
         <p>May 22, 1987</p>
         <p>Belgrade, Serbia</p>
         <p>6' 2" (188 cm)</p>
         <p>176 lb (80 kg)</p>
         <p>Right-handed</p>
         <p>12 years on tour</p>
         <p>Nole</p>
       </div>
     </div>
     <div class="col-md-12 atp-single-player skill-content">
       <div class="exp-skill">
        <p class="exp-title-pp">SKILLS</p>
        <div class="skills-pp">
          <div class="skillbar-pp clearfix" data-percent="95%">
            <div class="skillbar-title-pp"><span>Grip   </span></div>
            <div class="skillbar-bar-pp"></div>
            <div class="skill-bar-percent-pp">95%</div>
          </div>
          <div class="skillbar-pp clearfix" data-percent="84%">
            <div class="skillbar-title-pp"><span>Serve  </span></div>
            <div class="skillbar-bar-pp"></div>
            <div class="skill-bar-percent-pp">84%</div>
          </div>
          <div class="skillbar-pp clearfix" data-percent="65%">
            <div class="skillbar-title-pp"><span>Forehand</span></div>
            <div class="skillbar-bar-pp"></div>
            <div class="skill-bar-percent-pp">65%</div>
          </div>
          <div class="skillbar-pp clearfix" data-percent="75%">
            <div class="skillbar-title-pp"><span>Backhand</span></div>
            <div class="skillbar-bar-pp"></div>
            <div class="skill-bar-percent-pp">75%</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 atp-single-player skill-content">
      <div class="ppl-desc">
        <p class="exp-title-pp">DESCRIPTION</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
          standard dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make a type specimen book.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
      </div><!--Close Top Match-->

      <!--Right Column-->
      @include('layouts.right-content')
 </section>

@endsection