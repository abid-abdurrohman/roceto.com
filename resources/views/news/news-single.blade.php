@extends('layouts.app')

@section('content')
<!-- Social Share Kit CSS -->
<link rel="stylesheet" href="{{ URL::asset('socialsharekit/css/social-share-kit.css?v=1.0.10') }}">

<section class="drawer">
  <div class="col-md-12 size-img back-img-shop">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best news ROCETO</h3>
      <p class="txt-advert-sub">News - Match - Player</p>
    </div>
  </div>
</section>
  <section id="single_news" class="container secondary-page">
    <div class="general general-results">
     <div class="top-score-title col-md-9">
      <h3>{!! $news->judul !!}<span class="point-little">.</span></h3>
      <div class="col-md-4">
        <img class="img-djoko" src="{!! asset('').$news->thumbnail !!}" alt="" />
      </div>
      <div class="data-news-pg">
        <p>{!! $news->deskripsi !!}</p>
      </div>

      <div class="row">
        <p class="desc_news important_news data">by {{ $news->author }}<i class="fa fa-calendar"></i>{{ $news->created_at }} - Depok, Indonesia</p>
        <div class="tab_news">
          @unless ($news->tags->isEmpty())
          <i class="fa fa-tag"></i><span>TAGS:</span>
          @foreach ($news->tags as $tag)
          <a href="{{ action('TagUserController@index', $tag->id) }}" class="tag">{{ $tag->nama }}</a>
          @endforeach
          @endunless
        </div>
      </div>

      <div class="row">
        <div class="top-score-title col-md-12">
          <div class="col-md-3 col-md-offset-9">
            <h4>Share with :</h4>
            @include('news.share', [
                'url' => request()->fullUrl(),
                'description' => $news->judul,
                'image' => asset('').$news->thumbnail
            ])
          </div>
        </div>
      </div>
      <br><hr><br>

      <!--Open comment-->
      <div class="comment-tabs">
          <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
              @if (Auth::guest())
               <li><a href="#add-comment" role="tab" data-toggle="modal" data-target="#myModal"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                <!-- sample modal content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Please Login</h4>
                            </div>
                            <div class="modal-body">
                              <p>If you want to comment this news. Login first</p>
                              <div style="padding-left:400px">
                                <a href="{{ action('LogController@login') }}" type="button" class="btn btn-primary waves-effect waves-light" ><i class="fa fa-btn fa-sign-in"></i> Login</a>
                                <a type="button" class="btn btn-default" data-dismiss="modal">Cancel</a>
                              </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              @else
              <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
              @endif
          </ul>
          <div class="tab-content">
              <div class="tab-pane active" id="comments-logout">
                  @foreach( $comments as $comment )
                  <ul class="media-list">
                    <li class="media">
                      <a class="pull-left" href="#">
                        @if (substr($comment->avatar_user,0,6) == 'images')
                            <img class="media-object img-circle" src="{!! asset('').$comment->avatar_user !!}" alt="profile">
                        @else
                            <img class="media-object img-circle" src="{!! $comment->avatar_user !!}" alt="profile">
                        @endif
                      </a>
                      <div class="media-body">
                        <div class="well well-lg">
                            <h4 class="media-heading text-uppercase reviews">{{ $comment->nama_user }} </h4>
                            <ul class="media-date text-uppercase reviews list-inline">
                              <li class="dd">{{ substr($comment->created_at,8,2) }}</li>
                              <li class="mm">{{ substr($comment->created_at,5,2) }}</li>
                              <li class="aaaa">{{ substr($comment->created_at,0,4) }}</li>
                            </ul>
                            <p class="media-comment">
                                {!! $comment->comment !!}
                            </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  @endforeach
              </div>
              <div class="tab-pane" id="add-comment">
                  {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'id' => 'commentForm',
                  'action' => array('CommentUserController@store', $news->id))) !!}
                      <div class="form-group">
                          <label for="email" class="col-sm-2 control-label">Comment</label>
                          <div class="col-sm-10">
                            {!! Form::textarea('comment', null, ['placeholder' => 'Write a comment', 'id' => 'addComment',
                            'class' => 'form-control', 'rows' => 5, 'required'],'') !!}
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button class="btn btn-success" type="submit" id="submitComment"><span class="fa fa-send"></span>  Submmit comment</button>
                          </div>
                      </div>
                  {!! Form::close() !!}
              </div>
          </div>
    </div>
      <!--Close comment-->
    </div>
    <!--right content-->
    @include('layouts.right-content')
    </div>
    @include('layouts.bottom-content')
  </section>

@endsection

@push('scripts')
<script>
  tinymce.init({
    selector: '#addComment', theme: "modern",
    plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table contextmenu directionality emoticons template paste textcolor save'
    ], //The plugins configuration option allows you to enable functionality within the editor.
    toolbar: 'insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | save',
    save_enablewhendirty: true,
    image_advtab: true,
    relative_urls: false,
    external_filemanager_path: "{!! str_finish(asset('../filemanager'),'/') !!}",
    filemanager_title: "Filemanager" ,
    external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
  });
</script>
<script>
    var popupSize = {
        width: 780,
        height: 550
    };
    $(document).on('click', '.social-buttons > a', function(e){
        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);
        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');
        if (popup) {
            popup.focus();
            e.preventDefault();
        }
    });
</script>
@endpush
