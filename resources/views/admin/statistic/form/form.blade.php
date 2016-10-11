<div class="form-group">
    <label class="col-md-2 control-label">Nama Participant</label>
    <div class="col-md-10">
        {!! Form::select('participant_id', $participants, null, ['class' => 'form-control', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        {!! Form::select('rank_id', $ranks, null, ['class' => 'form-control', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
