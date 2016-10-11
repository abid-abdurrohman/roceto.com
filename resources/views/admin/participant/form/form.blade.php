<div class="form-group">
    <label class="col-md-2 control-label">Nama Tim</label>
    <div class="col-md-10">
        {!! Form::text('nama_tim', null, ['class' => 'form-control', 'placeholder' => 'Write your team name', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Photo</label>
    <div class="col-md-10">
        {!! Form::file('logo_tim', null, ['class' => 'form-control input-md', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nomer HP</label>
    <div class="col-md-10">
        {!! Form::text('no_hp', null, ['class' => 'form-control', 'placeholder' => 'Write your phone number', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Write your mail', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Warna Kostum</label>
    <div class="col-md-10">
        {!! Form::text('warna_kostum', null, ['class' => 'form-control', 'placeholder' => 'Write yours color', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Jumlah Pemain</label>
    <div class="col-md-10">
        {!! Form::text('jumlah_pemain', null, ['class' => 'form-control', 'placeholder' => 'Write a num', 'required'], '') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
