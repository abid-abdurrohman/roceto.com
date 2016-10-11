
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Join Competition</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(['action' => array('RegisterController@store', $events->id), 'files' => true,  'class'=>'form-horizontal']) !!}
                  @include('register.form.form', ['submit_text' => '  Daftar' ])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
