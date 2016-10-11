<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Create Event</h4>
            </div>
            <div class="modal-body">
              {!! Form::model(new App\Model\Match_team, array('class' => 'form-horizontal', 'method' => 'POST',
              'action' => array('MatchTeamController@store', $events->id, $id_part, $matches->id))) !!}
                  @include('admin.match_team.form.form', ['submit_text' => 'Add Team'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
