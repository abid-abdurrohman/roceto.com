<div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-10">
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Jenis Kelamin</label>
    <div class="col-md-10">
        {!! Form::select('jk', ['L' => 'Laki-Laki', 'P' => 'Perempuan'], null, ['class' => 'form-control',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Tanggal Lahir</label>
    <div class="col-md-10">
        {!! Form::date('tgl_lhr', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">No Hp</label>
    <div class="col-md-10">
        {!! Form::text('no_hp', null, ['class' => 'form-control', 'placeholder' => 'Write a handphone number',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Posisi</label>
    <div class="col-md-10">
        {!! Form::text('posisi', null, ['class' => 'form-control', 'placeholder' => 'Write a position',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">No Punggung</label>
    <div class="col-md-10">
        {!! Form::text('no_punggung', null, ['class' => 'form-control', 'placeholder' => 'Write a back number',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Foto</label>
    <div class="col-md-10">
        {!! Form::file('foto', null, ['class' => 'form-control', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
