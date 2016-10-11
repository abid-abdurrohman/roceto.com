<div class="form-group">
    <label class="col-md-3 control-label">Tag</label>
    <div class="col-md-9">
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Write a tag name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-0 col-sm-12']) !!}
</div>
