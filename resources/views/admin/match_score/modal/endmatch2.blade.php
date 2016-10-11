<div class="modal fade" id="myModal-{{ $events->id }}-{{ $id_part }}-{{ $matches->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ending This Match?</h4>
      </div>
      <div class="modal-body">
        Note: This Match that has ended can not be edit again.
      </div>
      <div class="modal-footer">
        {!! Form::open(array('method' => 'POST', 'action' => array('EventMatchScoreController@endmatch', $events->id, $id_part, $matches->id))) !!}
          <button type="submit" class="btn btn-danger"><i class="fa fa-stop"></i> Done This! </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
