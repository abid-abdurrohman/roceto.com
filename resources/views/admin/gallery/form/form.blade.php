<div class="form-group">
    <label class="col-md-2 control-label">Judul</label>
    <div class="col-md-10">
        {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Write a title',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Deskripsi</label>
    <div class="col-md-10">
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Write a description', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Thumbnail</label>
    <div class="col-md-10">
        {!! Form::file('thumbnail', null, ['class' => 'form-control input-md', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Kategori</label>
    <div class="col-md-10">
        {!! Form::select('kategori', $event, null, ['class' => 'form-control input-md', 'required'], '') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
