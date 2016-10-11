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

						<div class="col-md-12">
							<div class="card hovercard">
								<div class="card-background">
								<img class="card-bkimg" alt="" src="{!! asset('').'/'.$users->background !!}">
								</div>
								<div class="useravatar">
									<img alt="" src="{!! $users->avatar !!}">
								</div>
							<div class="card-info">
							<span class="card-title">{{$users->nick_name}}</span>
						</div>
					</div>
							<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							<div class="panel-heading match-team">
								<p>Your Payment {{ $users->name }}</p>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
                                    <table id="datatable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
												<th>Competition</th>
												<th>Participant</th>
												<th>User</th>
												<th>Payment</th>
												<th colspan="1"><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1 ?>
                                        @foreach ($participants as $participant)
											<tr>
												<td>{{ $no++ }}</td>
												<td>{{ $participant->nama_event }}</td>
												<td>{{ $participant->nama_tim }}</td>
												<td>{{ $participant->user_id }}</td>
												<td>Rp. {{ $participant->payment }}</td>

												<td style="width:5px">
													<a href="" class="btn btn-bordered-danger" data-toggle="modal" data-target="#myModal">Cancel</a>
												</td>
												<!-- sample modal content -->
								                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								                    <div class="modal-dialog">
								                        <div class="modal-content">
								                            <div class="modal-header">
								                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								                                <h4 class="modal-title" id="myModalLabel">Cancel the Event? </h4>
								                            </div>
								                            <div class="modal-body">
								                              <p>Note : If you canceling this event, you can not join again</p>
								                              <div style="padding-left:460px">
								                                <a href="#" type="button" class="btn btn-danger waves-effect waves-light" >Yes</a>
								                                <a type="button" class="btn btn-default" data-dismiss="modal">No</a>
								                              </div>
								                            </div>
								                        </div><!-- /.modal-content -->
								                    </div><!-- /.modal-dialog -->
								                </div><!-- /.modal -->
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tr>
                                              <td colspan="4"><center><b>Total</b></center></td>
                                              <td><b>Rp. {{ $sum }}</b></td>
                                              <td colspan="1"></td>
                                          </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
									<!-- Personal-Information -->
							<!-- Kondisi Kirim Email dan Upload bukti bayar -->

							<div class="accordion waves-effect waves-light col-md-12" id="section11" data-toggle="modal" data-target="#con-close-modal2" style="text-align:center; font-size:20px; "  >Next</div>
							@include('register.modal.email')

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
