<div id="con-close-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Upload Bukti Pembayaran {{ $events->nama}} </h4>
            </div>
            <div class="modal-body">
              {!! Form::open(['action' => array('BuktiBayarController@store', $events->id), 'files' => true, 'class'=>'form-horizontal']) !!}
                  @include('register.form.formup', ['submit_text' => 'Upload'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->