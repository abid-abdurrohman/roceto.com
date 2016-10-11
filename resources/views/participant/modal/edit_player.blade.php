<div id="con-close-modal5-{{ $members->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit {{ $participants->nama_tim }} Player</h4>
            </div>
            <div class="modal-body">
              {!! Form::model($members, ['method' => 'PATCH', 'files'=>true, 'action' => ['MemberUserController@update', $participants->id, $members->id], 'class'=>'form-horizontal']) !!}
                  @include('participant.form.edit_player', ['submit_text' => 'Update' ])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->