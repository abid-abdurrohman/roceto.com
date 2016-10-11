@extends('layouts.app')

@section('content')

<style type="text/css">
	.btn{transition:all 0.8s;-o-transition:all 0.8s;-moz-transition:all 0.8s;-webkit-transition:all 0.8s;border-radius:0px;}
	.btn-rounded{border-radius:50px}
	.btn-bordered-primary{color:#428BCA;background:#FFFFFF;border:2px solid #428BCA}
	.btn-bordered-primary:hover{color:#FFFFFF;background:#428BCA;border:2px solid #FFFFFF}
	.btn-bordered-edit{color:#79BDDA;background:#FFFFFF;border:2px solid #79BDDA; font-size:10px}
	.btn-bordered-edit:hover{color:#FFFFFF;background:#79BDDA;border:2px solid #FFFFFF}
	.btn-bordered-danger{color:#E62B2B;background:#FFFFFF;border:2px solid #E62B2B; font-size: 10px}
	.btn-bordered-danger:hover{color:#FFFFFF;background:#E62B2B;border:2px solid #FFFFFF}
</style>

<section class="container">

	<div class=" col-md-12">
		<div class="card hovercard">
			<div class="card-background">
				<img class="card-bkimg" alt="" src="{!! $users->background !!}">
				<!-- http://lorempixel.com/850/280/people/9/ -->
			</div>
			<div class="useravatar">
				<img alt="" src="{!! $users->avatar !!}">
			</div>
			<div class="card-info">
				<span class="card-title">{{$users->nick_name}}</span>
			</div>
		</div>

		<div class="tab-content">
			<div class="tab-pane fade in active" id="tab1">
				<div class="tab-pane active" id="home-2">
					<div class="row">

						<div class="col-md-3">
							<!-- Personal-Information -->
							<div class="panel panel-default panel-fill">
								<div class="panel-heading match-team">
									<p>Personal Information</p>
								</div>
								<div class="panel-body">
									<div class="about-info-p">
										<p><b>Full Name</b></p>
										<p class="text-muted">{{ $users->name }}</p>
									</div>
									<div class="about-info-p">
										<p><strong>Mobile</strong></p>
										<p class="text-muted">{{ $users->mobile }}</p>
									</div>
									<div class="about-info-p">
										<p><strong>Email</strong></p>
										<p class="text-muted">{{ $users->email }}</p>
									</div>
									<div class="about-info-p m-b-0">
										<a class="btn btn-bordered-primary" data-toggle="modal" data-target="#con-close-modal"><span class="fa fa-edit"></span> Edit Your Personal</a>
									</div>
									@include('profile.modal.edit', [$users->name])
								</div>
							</div>
						</div>
						<!-- Personal-Information -->
						<div class="col-md-9">
							<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							<div class="panel-heading match-team">
								<p>The Competition</p>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
                                    <table id="datatable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
												<th>Competition</th>
												<th>Single or Team</th>
												<th>No. Hp</th>
												<th>Status</th>
												<th colspan="2"><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1 ?>
                                        @foreach ($participants as $participant)
											<tr>
												<td>{{ $no++ }}</td>
												<td>{{ $participant->nama_events }}</td>
												<td>{{ $participant->nama_tim}}</td>
												<td>{{ $participant->no_hp}}</td>
												@if ($participant->status == "validated")
                                                <td style="width:5px"><span class="label label-success">{{ $participant->status }}</span>
                                                </td>

                                                <td style="width:5px"><a href="{{ action('ParticipantUserController@index', [$participant->id]) }}" class="btn btn-bordered-edit">Manage</a>
												</td>

												<td style="width:5px">
													<a href="" class="btn btn-bordered-danger" data-toggle="modal" data-target="#myModal">Cancel</a>
												</td>
												<!-- sample modal content -->
												@include('profile.modal.cancel', [$users->name])

                                                @else
                                                <td style="width:5px"><span class="label label-warning">{{ $participant->status }}</span>
                                                </td>
												<td style="width:5px"><a href="" class="btn btn-bordered-danger" data-toggle="modal" data-target="#myModal">Cancel</a></td>
												@include('profile.modal.cancel', [$users->name])
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
									<!-- Personal-Information -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			@include('layouts.bottom-content')
		</section>
		@endsection

		@push('script')
		<script type="text/javascript">
			$(document).ready(function() {
				$(".btn-pref .btn").click(function () {
					$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
		    // $(".tab").addClass("active"); // instead of this do the below
		    $(this).removeClass("btn-default").addClass("btn-primary");
			});
		});

		</script>
@endpush
