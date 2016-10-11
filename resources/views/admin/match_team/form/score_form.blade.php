<div class="form-group">
    <label class="col-md-2 control-label">Nama Tim</label>
    <div class="col-md-10">
        {!! Form::select('member_id', $members, null, ['class' => 'form-control input-md', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Score</label>
    <div class="col-md-10">
        {!! Form::text('score', null, ['class' => 'form-control input-md', 'required'], '') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
