<div class="form-group">
    <label class="col-md-3 control-label">Title</label>
    <div class="col-md-9">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Write a title',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Deskripsi</label>
    <div class="col-md-9">
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => '3',
        'placeholder' => 'Write a description', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Point</label>
    <div class="col-md-9">
        {!! Form::number('point', null, ['class' => 'form-control', 'placeholder' => 'Write a point number',
        'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-0 col-sm-12']) !!}
</div>
