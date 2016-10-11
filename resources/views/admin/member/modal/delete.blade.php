<div id="myModal-{{ $events->id }}-{{ $participants->id }}-{{ $member->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Member?</h4>
      </div>
      <div class="modal-body">
        Note: The member that has been deleted can not be restored.
      </div>
      <div class="modal-footer">
        {!! Form::open(array('method' => 'DELETE', 'action' => array('MemberController@destroy', $events->id, $participants->id, $member->id))) !!}
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
        {!! Form::close() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
