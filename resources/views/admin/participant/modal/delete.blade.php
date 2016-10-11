<div class="modal fade" id="myModal-{{ $id }}-{{ $id_participant }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Participant?</h4>
      </div>
      <div class="modal-body">
        Note: The participant that has been deleted can not be restored.
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'DELETE', 'action' => ['ParticipantController@update', $events->id,  $participant->id]]) !!}
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
        {!! Form::close() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
