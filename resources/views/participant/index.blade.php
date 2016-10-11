@extends('layouts.app')

@section('content')

<style type="text/css">
.btn{transition:all 0.8s;-o-transition:all 0.8s;-moz-transition:all 0.8s;-webkit-transition:all 0.8s;border-radius:0px;margin-top:10px}

.btn-rounded{border-radius:50px}
.btn-bordered-warning{color:#F0AD4E;background:#FFFFFF;border:2px solid #F0AD4E}
.btn-bordered-warning:hover{color:#FFFFFF;background:#F0AD4E;border:2px solid #FFFFFF}

</style>

<section class="drawer">
  <div class="col-md-12 size-img back-img-match">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Palyer</h3>
      <p class="txt-advert-sub">Lifelong dream of becoming the No. 1 player on the ATP World Tour </p>
    </div>
  </div>
  <section id="players" class="container secondary-page">
    <div class="general general-results players">
      <div class="top-score-title right-score col-md-9">
        <h3> {{ $participants->nama_tim }} <span>Team</span><span class="point-little">.</span></h3>

        <table class="table" style="border:10px">
          <tbody>
            <tr>
               <td>Email</td>
              <td >:</td>
              <td>{{ $participants->email}}</td>
            </tr>
            <tr>
              <td style="width:180px"> No. Hp</td>
              <td style="width:20px;">:</td>
              <td>{{ $participants->no_hp}}</td>
            </tr>
            <tr>
               <td>Warna Kostum</td>
              <td >:</td>
              <td>{{ $participants->warna_kostum}}</td>
            </tr>
            <tr>
             <td>Jumlah Pemain</td>
              <td >:</td>
              <td>{{ $participants->jumlah_pemain}}</td>
            </tr>
            <tr>
              <td>Status</td>
              <td >:</td>
              <td>{{ $participants->status}}</td>
            </tr>
          </tbody>
        </table>

      <div class="div-content">
        <a class="btn btn-bordered-warning col-md-offset-8 col-md-4" data-toggle="modal" data-target="#con-close-modal4"><span class="fa fa-edit"></span> Edit Your Tim</a>
         @include('participant.modal.edit_participant')
      </div><br>

      <hr>

        <h3>{{ $participants->nama_tim }} <span>Players</span><span class="point-little">.</span></h3>
        @foreach($participants->member as $members)
        <div class="col-md-3 atp-player">
          <a data-toggle="modal" data-target="#con-close-modal-{{ $members->id }}">
            <img src="{!! asset('').'/'.$members->foto !!}" style="width:148px; height:198px; " alt="" />
            <p> {{ $members->nama }} </p>
          </a>
        <div class="div-content">
          <a class="btn btn-rounded btn-bordered-warning  col-md-offset-1 col-md-3" data-toggle="modal" data-target="#con-close-modal5-{{ $members->id }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
          @include('participant.modal.edit_player', ['id' => $members->id])
          <a class="btn btn-rounded btn-bordered-warning  col-md-offset-2 col-md-3" data-toggle="modal" data-target="#myModal-{{ $members->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
          @include('participant.modal.delete_player', ['id' => $members->id])
        </div>
        </div>
        @include('participant.modal.player', ['nama' => $members->nama])
        @endforeach
        @if ($jml_member < $events->jumlah_pemain)
        <div class="col-md-3 atp-player">
          <a data-toggle="modal" data-target="#con-close-modal2">
            <img src="{{ URL::asset('images/player/face.jpg') }}" alt="" />
            <p> Add a Player </p>
          </a>
        </div>
        @include('participant.modal.players')
        @endif



      </div><!--Close Top Match-->
    @include('layouts.right-content')
  </section>
  @endsection
