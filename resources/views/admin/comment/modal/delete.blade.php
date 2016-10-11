<div id="myModal-{{ $news->id }}-{{ $comment->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Event?</h4>
      </div>
      <div class="modal-body">
        Note: The event that has been deleted can not be restored.
      </div>
      <div class="modal-footer">
        {!! Form::open(array('method' => 'DELETE', 'action' => array('CommentController@destroy', $news->id, $comment->id))) !!}
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
        {!! Form::close() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
