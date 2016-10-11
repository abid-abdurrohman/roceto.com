@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img-single">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best ROGER FEDERER</h3>
      <p class="txt-advert-sub">Player on the ATP World Tour </p>
    </div>
  </div>

  <section id="allmatch" class="container secondary-page">
      <div class="general general-results">
           <div class="top-score-title right-score col-md-9">
                <h3>COMPLETED <span>MATCHES</span><span class="point-little">.</span></h3>
                <div class="main">
                        <p class="news-title-right">Tournament Day</p>
                        <div class="tabs animated-slide-2 matches-tbs">
                            <ul class="tab-links-matches">
                                <li class="active"><a href="#tab1111">1</a></li>
                                <li><a href="#tab2222">2</a></li>
                                <li><a href="#tab3333">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1111" class="tab active">
                                   <table class="match-tbs">
                                         <tr>
                                          <td class="match-tbs-title" colspan="7">Arthur Ashe Stadium - Men's Doubles - Semifinals</td>
                                          </tr>
                                         <tr class="match-sets">
                                          <td></td>
                                          <td class="fpt" colspan="7">
                                            <div class="match-team-list">
                                                <img class="t-img1" src="images/team1.png" alt=""/>
                                                <span>Fernand</span>
                                                <span class="txt-vs"> - vs - </span>
                                                <span>Brain</span>
                                                <img class="t-img2" src="images/team1.png" alt=""/>
                                                <p>22/06/2015 14:30 - 16:00</p>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="match-more" colspan="7">
                                            <a href="match.html" class="ca-more">
                                              <i class="fa fa-angle-double-right"></i>Streaming Now!</a>
                                          </td>
                                        </tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Arthur Ashe Stadium - Exhibition Doubles</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">J.Doe (USA) / J.Siriu (USA)</td><td class="fpt">3</td><td class="fpt">2</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Courie (USA) / M.Blande (SWE) <i class="fa fa-check"></i></td><td class="fpt fpt2">4</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Arthur Ashe Stadium - Men's Singles - Quarterfinals</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">T.Susan (CZE) <i class="fa fa-check"></i></td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Paul (USA)</td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Court 17 - Junior Boys' Singles - Round 3</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">S.Doe (JPN)</td><td class="fpt">3</td><td class="fpt">5</td><td class="fpt">5</td><td class="fpt">6</td><td class="fpt">1</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">M.Siriu (FRA) <i class="fa fa-check"></i></td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                </div>
                                <div id="tab2222" class="tab">
                                   <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Court 5 - Women's Collegiate Invitational - Quarterfinals</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">J.Lol (USA) <i class="fa fa-check"></i></td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Carl (USA)</td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Arthur Ashe Stadium - Exhibition Doubles</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">J.Blake (USA) </td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Black (USA) <i class="fa fa-check"></i></td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Arthur Ashe Stadium - Men's Singles - Quarterfinals</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">T.Red (CZE) <i class="fa fa-check"></i></td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Fleur (USA)</td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                </div>
                                <div id="tab3333" class="tab">
                                   <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Court 13 - Wheelchair Quad Singles</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">A.Red (GBR) <i class="fa fa-check"></i></td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">S.Elles (GER) </td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Court 13 - Wheelchair Women's Singles - Quarterfinals</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">M.Gio (NED) </td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">3</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Broun (GBR) <i class="fa fa-check"></i></td><td class="fpt fpt2">6</td><td class="fpt fpt2">6</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Court 13 - Wheelchair Quad Singles</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">J.Jhon (BEL) <i class="fa fa-check"></i></td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Paul (USA)</td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Arthur Ashe Stadium - Men's Singles - Quarterfinals</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">T.Jerry (CZE) <i class="fa fa-check"></i></td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Dior (USA)</td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                    <table class="match-tbs">
                                         <tr><td class="match-tbs-title" colspan="7">Arthur Ashe Stadium - Men's Singles - Quarterfinals</td></tr>
                                         <tr class="match-sets"><td class=""></td><td class="fpt">Pts</td><td class="fpt">1</td><td class="fpt">2</td><td class="fpt">3</td><td class="fpt">4</td><td>5</td></tr>
                                        <tr><td class="fpt">T.Bled (CZE) <i class="fa fa-check"></i></td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">6</td><td class="fpt">4</td><td>6</td></tr>
                                        <tr><td class="fpt fpt2">J.Courier (USA)</td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt fpt2">5</td><td class="fpt fpt2">6</td><td class="fpt2">4</td></tr>
                                        <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
           </div><!--Close Top Match-->
@include('layouts.right-content')
</section>

@endsection