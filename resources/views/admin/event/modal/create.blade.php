<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Create Event</h4>
            </div>
            <div class="modal-body">
              {!! Form::model(new App\Model\Event, ['action' => 'EventController@store', 'files' => true,  'class'=>'form-horizontal']) !!}
                  @include('admin.event.form.form', ['submit_text' => 'Add Event'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
