<div class="form-group">
    <label class="col-md-2 control-label"><center>Nama</center></label>
    <div class="col-md-10">
        {!! Form::text('nama_tim', null, ['class' => 'form-control', 'placeholder' => 'Write your name', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"><center>Photo</center></label>
    <div class="col-md-10">
        {!! Form::file('logo_tim', null, ['class' => 'form-control input-md', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"><center>Nomer HP</center></label>
    <div class="col-md-10">
        {!! Form::text('no_hp', null, ['class' => 'form-control', 'placeholder' => 'Write your phone number', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"><center>Warna Kostum</center></label>
    <div class="col-md-10">
        {!! Form::text('warna_kostum', null, ['class' => 'form-control', 'placeholder' => 'Write yours color', 'required'], '') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
