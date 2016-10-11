{{ csrf_field() }}
<div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-10">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'readonly'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Write a email',
        'readonly'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Panggilan</label>
    <div class="col-md-10">
        {!! Form::text('nick_name', null, ['class' => 'form-control', 'placeholder' => 'Write a nick name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Mobile</label>
    <div class="col-md-10">
        {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Write a mobile phone',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Avatar</label>
    <div class="col-md-10">
        {!! Form::file('avatar', null, ['class' => 'form-control', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Background</label>
    <div class="col-md-10">
        {!! Form::file('background', null, ['class' => 'form-control', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
