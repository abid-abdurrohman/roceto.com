<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit {{ $users->name }}</h4>
            </div>
            <div class="modal-body">
              {!! Form::model($users, ['method' => 'PATCH', 'files' => true, 'action' => ['ProfileController@update', $users->id], 'class'=>'form-horizontal']) !!}
                  @include('profile.form.form', ['submit_text' => 'Update' ])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->