<div class="form-group">
	<label class="col-md-2 control-label"><center>Nama Pengirim </center></label>
	<div class="col-md-10">
		{!! Form::text('atas_nama', null, ['class' => 'form-control', 'placeholder' => 'Write a name', 'required'], '') !!}
	</div>
</div>
<div class="form-group">
	<label class="col-md-2 control-label"><center>Nomer Rekening </center></label>
	<div class="col-md-10">
		{!! Form::text('no_rek', null, ['class' => 'form-control', 'placeholder' => 'Write numbers', 'required'], '') !!}
	</div>
</div>
<div class="form-group">
     <label class="col-md-2 control-label"><center>Nama Bank </center></label>
      <div class="col-md-10">
          {!! Form::select('bank', ['BRI'=>'BRI','Mandiri'=>'Mandiri', 'BCA'=>'BCA', 'BNI'=>'BNI'], null, ['class' => 'form-control', 'required'],'') !!}
   </div>
 </div>
<div class="form-group">
    <label class="col-md-2 control-label"><center>Bukti Pembayaran </center></label>
    <div class="col-md-10">
        {!! Form::file('thumbnail', null, ['class' => 'form-control input-md', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
