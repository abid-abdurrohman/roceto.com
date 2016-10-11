<div class="modal fade" id="myModal-{{ $events->id }}-{{ $participant->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Validation Payment?</h4>
      </div>
      <div class="modal-body">
        Note: Did you checked proof of payment properly?
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'POST', 'action' => ['ParticipantController@validation', $events->id,  $participant->id]]) !!}
          <button type="submit" class="btn btn-info"><i class="fa fa-trash"></i> Validation</button>
        {!! Form::close() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
