<div id="con-close-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit {{ $participants->nama_tim }} Team</h4>
            </div>
            <div class="modal-body">
              {!! Form::model($participants, ['method' => 'PATCH', 'action' => ['ParticipantUserController@update', $participants->id], 'class'=>'form-horizontal']) !!}
                  @include('participant.form.edit_participant', ['submit_text' => '  Update' ])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->