<h3>Data Perusahaan</h3>
<hr>
<div class="form-group">
    <label class="col-md-3 control-label">Nama Perusahaan</label>
    <div class="col-md-9">
        {!! Form::text('nama_pt', null, ['class' => 'form-control', 'placeholder' => 'Write a company name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Alamat Perusahaan</label>
    <div class="col-md-9">
        {!! Form::textarea('alamat_pt', null, ['class' => 'form-control', 'rows' => '3',
        'placeholder' => 'Write a company address', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">No Telp Perusahaan</label>
    <div class="col-md-9">
        {!! Form::text('no_hp_pt', null, ['class' => 'form-control', 'placeholder' => 'Write a telephone number',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Email Perusahaan</label>
    <div class="col-md-9">
        {!! Form::email('email_pt', null, ['class' => 'form-control', 'placeholder' => 'Write a email address',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Website URL Perusahaan</label>
    <div class="col-md-9">
        {!! Form::text('website_pt', null, ['class' => 'form-control', 'placeholder' => 'Write a website URL',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Foto Perusahaan</label>
    <div class="col-md-9">
        {!! Form::file('foto_pt', null, ['class' => 'form-control', 'required'],'') !!}
    </div>
</div>
<hr>
<h3> Data Contact Person </h3>
<hr>
<div class="form-group">
    <label class="col-md-3 control-label">Nama Contact Person</label>
    <div class="col-md-9">
        {!! Form::text('nama_cp', null, ['class' => 'form-control', 'placeholder' => 'Write a contact person name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Job Title Contact Person</label>
    <div class="col-md-9">
        {!! Form::text('job_title_cp', null, ['class' => 'form-control', 'placeholder' => 'Write a job title',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">No Hp Contact Person</label>
    <div class="col-md-9">
        {!! Form::text('no_hp_cp', null, ['class' => 'form-control', 'placeholder' => 'Write a contact person handphone number',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Email Contact Person</label>
    <div class="col-md-9">
        {!! Form::email('email_cp', null, ['class' => 'form-control', 'placeholder' => 'Write a contact person email',
        'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-0 col-sm-12']) !!}
</div>
