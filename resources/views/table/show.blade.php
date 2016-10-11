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
    <h3>Point <span>Statistics</span><span class="point-little">.</span></h3>
    <table class="tab-score">
      <tr class="top-scrore-table">
        <td class="score-position">POS.</td>
        <td>PLAYER</td>
        <td>GOLD</td>
        <td>SILVER</td>
        <td>BRONZE</td>
        <td>POINTS</td>
      </tr>
      <tr>
        <td class="score-position">1.</td>
        <td><a href="single_player.html">Rodak Noraky </a></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>12770</td>
      </tr>
      <tr>
        <td class="score-position">2.</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>12770</td>
        <td>10670</td>
      </tr>
      <tr>
        <td class="score-position">3.</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>12770</td>
        <td>10670</td>
      </tr>
    </table>
  </div>

</div>
@include('layouts.bottom-content')
</section>
@endsection
