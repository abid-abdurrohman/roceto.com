@extends('layouts.app')

@section('content')

<style type="text/css">
		/*
		*  Flex Layout Specifics
		*/
		main{
		display:flex;
		flex-direction:row;
		}
		.round{
		display:flex;
		flex-direction:column;
		justify-content:center;
		width:200px;
		list-style:none;
		padding:0;
		}
		.round .spacer{ flex-grow:1; }
		.round .spacer:first-child,
		.round .spacer:last-child{ flex-grow:.5; }
		.round .game-spacer{
			flex-grow:1;
		}

		/*
		*  General Styles
		*/

		li.game{
		padding-left:20px;
		}

		li.game.winner{
			font-weight:bold;
		}
		li.game span{

		}

		li.game-top{ border-bottom:0px solid #aaa; }

		li.game-spacer{
			border-right:0px solid #aaa;
			min-height:40px;
		}

		li.game-bottom{
			border-top:0px solid #aaa;
		}
</style>

<section class="drawer">
	<div class="col-md-12 size-img back-img-single">
		<div class="effect-cover">
			<h3 class="txt-advert animated">Bracket Tournament</h3>
			<p class="txt-advert-sub">Player on the Roceto World Tour </p>
		</div>
	</div>

	<section id="single-match-pl" class="container secondary-page">
		<div class="general general-results players">
			<div class="top-score-title right-score col-md-12">
				<div class="top-score-title player-vs">
					<h3>Bracket <span>Competition</span><span class="point-little">.</span></h3>
					<div class="main">

						<div class="tabs standard single-pl">
							<ul class="tab-links-match tb-set">
								<li class="active"><a class="first-tabs" href="#tab1">Futsal</a></li>
								<li><a class="first-tabs" href="#tab2">Basket</a></li>
								<li><a href="#tab3">Bulu Tangkis</a></li>
								<li><a href="#tab4">Voli</a></li>
								<li><a href="#tab5">Berenang</a></li>
								<li><a href="#tab6">Marathon</a></li>
								<li><a href="#tab7">Catur</a></li>
								<li><a href="#tab8">Lompat Tinggi</a></li>
							</ul>
							<div class="tab-content single-match">
								<!--bracket futsal-->
								<div id="tab1" class="tab active">
									<h3 class="tab-match-title">Futsal Basket Compotition</h3>
									<div class="row">
										<div class="col-xs-4 panel-match ">
											<div class="panel panel-default ">
												<div class="panel-heading">
													Team 1
												</div>
												<!-- /panel-header -->
												<div class="panel-footer">
													Team 2
												</div>
												<!-- /panel-footer -->
											</div>
											<!-- /panel panel-default panel-match -->
										</div>
										<!-- /col-xs-4 col-fixed-4 -->
										<div class="col-xs-4 col-fixed-4 tree-child">
											<div class="panel panel-default panel-match">
												<div class="panel-heading">
													Team 1
												</div>
												<!-- /panel-header -->
												<div class="panel-footer">
													Team 3
												</div>
												<!-- /panel-footer -->
											</div>
											<!-- /panel panel-default panel-match -->
										</div>
										<!-- /col-xs-4 col-fixed-4 -->
									</div>
									<!-- row -->
									<div class="row">
										<div class="col-xs-4 col-fixed-4">
											<div class="bracket-big"></div>
											<div class="panel panel-default panel-match">
												<div class="panel-heading">
													Team 3
												</div>
												<!-- /panel-header -->
												<div class="panel-footer">
													Team 4
												</div>
												<!-- /panel-footer -->
											</div>
											<!-- /panel panel-default panel-match -->
										</div>
										<!-- /col-sm-5 -->
										<div class="col-xs-4 col-fixed-4 col-xs-offset-4 tree-child">
											<div class="panel panel-default panel-match">
												<div class="panel-heading">
													Team 3
												</div>
												<!-- /panel-header -->
												<div class="panel-footer">
													Team 5
												</div>
												<!-- /panel-footer -->
											</div>
											<!-- /panel panel-default panel-match -->
										</div>
										<!-- /col-xs-4 col-fixed-4 -->
									</div>
									<!-- row -->
									<div class="row">
										<div class="col-xs-4 col-fixed-4">
											<div class="panel panel-default panel-match">
												<div class="panel-heading">
													Team 5
												</div>
												<!-- /panel-header -->
												<div class="panel-footer">
													Team 6
												</div>
												<!-- /panel-footer -->
											</div>
											<!-- /panel panel-default panel-match -->
										</div>
										<!-- /col-sm-5 -->
										<div class="col-xs-4 col-fixed-4 tree-child">
											<div class="panel panel-default panel-match">
												<div class="panel-heading">
													Team 5
												</div>
												<!-- /panel-header -->
												<div class="panel-footer">
													Team 7
												</div>
												<!-- /panel-footer -->
											</div>
											<!-- /panel panel-default panel-match -->
										</div>
										<!-- /col-xs-4 col-fixed-4 -->
									</div>
									<!-- row -->
									<div class="row">
										<div class="col-xs-4 col-fixed-4">
											<div class="panel panel-default panel-match">
												<div class="panel-heading">
													Team 7
												</div>
												<!-- /panel-header -->
												<div class="panel-footer">
													Team 8
												</div>
												<!-- /panel-footer -->
											</div>
											<!-- /panel panel-default panel-match -->
										</div>
										<!-- /col-sm-5 -->
									</div>
									<!-- row -->
								</div><!--end futsal-->

								<!--bracket basket-->
								<div id="tab2" class="tab">
									<h3 class="tab-match-title">Basket Competition</h3>
									<div class="row">
										<div class="col-md-12">
											<table class="table-condensed" style="width:100%; ">
												<tr>
													<td class="col-md-2"><div class="input-group"><div class="form-control">Team 1</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div></td>
													<td class="col-md-1" rowspan="2" style="padding:0px;">
														<div class="bracketline1"></div>
														<div class="bracketline2"></div>
														<div class="bracketline3"></div>
													</td>
													<td class="col-md-2" rowspan="2"><div class="input-group"><div class="form-control">Team 1</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div>
													</td>
													<td class="col-md-1" rowspan="4" style="padding:0px;">
														<div class="bracketline1"></div>
														<div class="bracketline2"></div>
														<div class="bracketline3"></div>
													</td>

													<td class="col-md-2" rowspan="4"><div class="input-group"><div class="form-control">Team 1</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div>

														<td class="col-md-1" rowspan="8" style="padding:0px;">
															<div class="bracketline1"></div>
															<div class="bracketline2"></div>
															<div class="bracketline3"></div>
														</td>
														<td class="col-md-5" rowspan="8"><div class="input-group"><div class="form-control">Team 1</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div>
														</td>
													</tr>

													<tr>
														<td><div class="input-group"><div class="form-control">Team 2</div><span class="input-group-addon"><span class="badge pull-right">0</span></span></div></td>
													</tr>

													<tr>
														<td class="col-md-2"><div class="input-group"><div class="form-control">Team 3</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div></td>
														<td class="col-md-1" rowspan="2" style="padding:0px;">
															<div class="bracketline1"></div>
															<div class="bracketline2"></div>
															<div class="bracketline3"></div>
														</td>
														<td class="col-md-2" rowspan="2"><div class="input-group"><div class="form-control">Team 3</div><span class="input-group-addon"><span class="badge pull-right">0</span></span></div>
														</td>
													</tr>

													<tr>
														<td><div class="input-group"><div class="form-control">Team 4</div><span class="input-group-addon"><span class="badge pull-right">0</span></span></div></td>
													</tr>
													<tr>
														<td class="col-md-2"><div class="input-group"><div class="form-control">Team 5</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div></td>
														<td class="col-md-1" rowspan="2" style="padding:0px;">
															<div class="bracketline1"></div>
															<div class="bracketline2"></div>
															<div class="bracketline3"></div>
														</td>
														<td class="col-md-2" rowspan="2"><div class="input-group"><div class="form-control">Team 5</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div>
														</td>
														<td class="col-md-1" rowspan="4" style="padding:0px;">
															<div class="bracketline1"></div>
															<div class="bracketline2"></div>
															<div class="bracketline3"></div>
														</td>
													</tr>
													<tr>
														<td><div class="input-group"><div class="form-control">Team 6</div><span class="input-group-addon"><span class="badge pull-right">0</span></span></div></td>

														<td class="col-md-2" rowspan="2"><div class="input-group"><div class="form-control">Team 5</div><span class="input-group-addon"><span class="badge pull-right">0</span></span></div>
															</td>
													</tr>
													<tr>
														<td class="col-md-2"><div class="input-group"><div class="form-control">Team 7</div><span class="input-group-addon"><span class="badge pull-right">1</span></span></div></td>
														<td class="col-md-1" rowspan="2" style="padding:0px;">
															<div class="bracketline1"></div>
															<div class="bracketline2"></div>
															<div class="bracketline3"></div>
														</td>
														<td class="col-md-2" rowspan="2"><div class="input-group"><div class="form-control">Team 7</div><span class="input-group-addon"><span class="badge pull-right">0</span></span></div></td>
													</tr>
													<tr>
														<td><div class="input-group"><div class="form-control">Team 8</div><span class="input-group-addon"><span class="badge pull-right">0</span></span></div></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<!--end bracket basket-->

									<div id="tab3" class="tab">
									<h3 class="tab-match-title">Bulu Tangkis Compotition</h3>
										<div class="row">
											<div class="col-md-12">
												<main id="tournament">
												 <ul class="round round-1">
												<?php
														$con = mysqli_connect('localhost', 'root','','eo_sport');
														if(!$con){
															die('Could not Connect');
														}
														mysqli_select_db($con ,'eo_sport');
														$sql = "SELECT * FROM matches WHERE matches.category_id=1 AND matches.no_match=1";
														$result = mysqli_query($con, $sql);
														while ($row = mysqli_fetch_array($result)) {
															$id_match = $row['id'];
															$sql2 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
																INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
															$result2 = mysqli_query($con, $sql2);
															$i[0] = "top";
															$i[1] = "bottom";
															$j = 0;
															echo "<li class='spacer'>&nbsp;</li>";
															while ($row2 = mysqli_fetch_array($result2)) {
												?>
													 <li class="game game-{{ $i[$j] }}">
														 <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
														 <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
													</li>
												<?php
															if ($j == 0) {
																	echo "<li class='game game-spacer'>&nbsp;</li>";
															}
															$j++;
															}
														echo "<li class='spacer'>&nbsp;</li>";
													}
												?>
												 </ul>
												 <ul class="round round-2">
													 <?php
	 														$sql = "SELECT * FROM matches WHERE matches.category_id=1 AND matches.no_match=2";
	 														$result = mysqli_query($con, $sql);
	 														while ($row = mysqli_fetch_array($result)) {
	 															$id_match = $row['id'];
	 															$sql2 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
	 																INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
	 															$result2 = mysqli_query($con, $sql2);
	 															$i[0] = "top";
	 															$i[1] = "bottom";
	 															$j = 0;
	 															echo "<li class='spacer'>&nbsp;</li>";
	 															while ($row2 = mysqli_fetch_array($result2)) {
	 												?>
													<li class="game game-{{ $i[$j] }}">
														<div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
														<span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
												 </li>
	 												<?php
	 															if ($j == 0) {
	 																	echo "<li class='game game-spacer'>&nbsp;</li>";
	 															}
	 															$j++;
	 															}
	 													}
																echo "<li class='spacer'>&nbsp;</li>";
	 												?>
												 </ul>
												 <ul class="round round-3">
													 <?php
	 														$sql = "SELECT * FROM matches WHERE matches.category_id=1 AND matches.no_match=3";
	 														$result = mysqli_query($con, $sql);
	 														while ($row = mysqli_fetch_array($result)) {
																echo "<li class='spacer'>&nbsp;</li>";
	 															$id_match = $row['id'];
	 															$sql2 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
	 																INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
	 															$result2 = mysqli_query($con, $sql2);
	 															$i[0] = "top";
	 															$i[1] = "bottom";
	 															$j = 0;
	 															while ($row2 = mysqli_fetch_array($result2)) {
	 												?>
													<li class="game game-{{ $i[$j] }}">
													 <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
													 <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
												</li>
	 												<?php
	 															if ($j == 0) {
	 																	echo "<li class='game game-spacer'>&nbsp;</li>";
	 															}
	 															$j++;
	 															}
	 													}
																echo "<li class='spacer'>&nbsp;</li>";
	 												?>
												 </ul>
												 <ul class="round round-4">
													 <?php
	 														$sql = "SELECT * FROM matches WHERE matches.category_id=1 AND matches.no_match=4";
	 														$result = mysqli_query($con, $sql);
	 														while ($row = mysqli_fetch_array($result)) {
																echo "<li class='spacer'>&nbsp;</li>";
	 															$id_match = $row['id'];
	 															$sql2 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
	 																INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
	 															$result2 = mysqli_query($con, $sql2);
	 															$i[0] = "top";
	 															$j = 0;
	 															while ($row2 = mysqli_fetch_array($result2)) {
	 												?>
													<li class="game game-{{ $i[$j] }}">
													 <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
													 <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
												</li>
	 												<?php
	 															$j++;
	 															}
	 													}
																echo "<li class='spacer'>&nbsp;</li>";
	 												?>
												 </ul>
												</main>
											</div>
										</div>
									</div>
									<div id="tab4" class="tab">
									<h3 class="tab-match-title">Voli Compotition</h3>
									</div>
									<div id="tab5" class="tab">
									<h3 class="tab-match-title">Berenang Compotition</h3>
									</div>
									<div id="tab6" class="tab">
									<h3 class="tab-match-title">Marathon Compotition</h3>
									</div>
									<div id="tab7" class="tab">
									<h3 class="tab-match-title">Catur Compotition</h3>
									</div>
									<div id="tab8" class="tab">
									<h3 class="tab-match-title">Lompat Tinggi Compotition</h3
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--Close Top Match-->
			</div>
		</section>
		@endsection
