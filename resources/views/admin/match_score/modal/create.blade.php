<div id="con-close-modal-{{ $categories->id }}-{{ $matches->id }}-{{ $match_teams->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Score</h4>
            </div>
            <div class="modal-body">
              {!! Form::model(new App\Model\Match_score, array('class' => 'form-horizontal', 'method' => 'POST',
              'action' => array('MatchScoreController@store', $categories->id, $matches->id, $match_teams->id))) !!}
                  @include('admin.match_team.form.score_form', ['submit_text' => 'Add Score'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
