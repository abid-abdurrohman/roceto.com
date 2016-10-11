<script>
  tinymce.init({
    selector: '#deskripsi',
    plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table contextmenu directionality emoticons template paste textcolor save'
    ], //The plugins configuration option allows you to enable functionality within the editor.
    toolbar: 'insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | save',
    save_enablewhendirty: true,
  });
</script>
<div class="form-group">
  <label class="col-md-2 control-label" for="exampleInputFile" >Judul</label>
  <div class="col-md-10">
  {!! Form::text('judul', null, ['class' => 'form-control input-md', 'placeholder' => 'Write a title',
  'files' => true, 'required'],'') !!}
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="exampleInputFile">Thumbnail</label>
    <div class="col-md-10">
    {!! Form::file('thumbnail', null, ['class' => 'form-control input-md', 'placeholder' => 'Write a title',
    'required'],'') !!}
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label"  for="exampleInputFile">Kategori</label>
    <div class="col-md-10">
      <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kategori" required>
        <option selected="selected" value="news">News</option>
        <option value="informasi">Informasi</option>
      </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="exampleInputFile">Tag</label>
  <!-- {!! Form::text('tag', null, ['class' => 'form-control input-md', 'placeholder' => 'Separate Tags with a (,)',
  'required'],'') !!} -->
  <div class="col-md-10">
  {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'multiple', 'required'],'') !!}
</div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="exampleInputFile">Deskripsi </label>
    <div class="col-md-10">
      {!! Form::textarea('deskripsi', null, ['placeholder' => 'Write a detail', 'id' => 'deskripsi', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-4 col-sm-4']) !!}
</div>

@push('scripts')
  <script type="text/javascript">
    $('#tag_list').select2({ width : '100%' });
  </script>
@endpush
