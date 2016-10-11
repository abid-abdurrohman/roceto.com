<div class="form-group">
    <label class="col-md-2 control-label">Comment</label>
    <div class="col-md-10">
        {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Write a comment', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
