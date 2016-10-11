<div class="modal fade" id="con-close-modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Payment Alert</h4>
      </div>
      <div class="modal-body">
        <i style="font-size:15px">Info: Silahkan Cek email anda untuk melakukan pembayaran !</i>
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'Email', 'action' => ['ParticipantController@pembayaran']]) !!}
        <button type="submit" class="btn btn-info" ><i class="fa fa-trash"></i> Ok</button>
        {!! Form::close() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
