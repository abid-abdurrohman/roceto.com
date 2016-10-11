@extends('layouts.app')

@section('content')

<section class="drawer">
            <div class="col-md-12 size-img back-img-news">
                    <div class="effect-cover">
                        <h3 class="txt-advert animated">News World Tour of Roceto</h3>
                        <p class="txt-advert-sub animated">Your all-access pass to experience the action on tour</p>
                    </div>
              </div>

        <section id="news" class="container secondary-page">
          <div class="general general-results players">
           <div class="top-score-title right-score col-md-12">
                <h3>NEWS <span>ARCHIVES</span><span class="point-little">.</span></h3>
                @foreach($news as $newss)
                <div class="col-md-12 news-page">
                  <div class="col-md-4">
                    <img class="img-djoko" src="{!! asset('').$newss->thumbnail !!}" alt="" />
                  </div>
                  <div class="col-md-8 data-news-pg">
                    <p class="news-dd">{{ $newss->created_at }}</p>
                    <h3>{{ $newss->judul }}</h3>
                     <p>{!! str_limit($newss->deskripsi, 350) !!}</p>
                    <div class="col-md-12 news-more"><a href="{{ action('NewsUserController@show', $newss->slug) }}" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a></div>
                  </div>
                </div>
                @endforeach
                <div class="col-md-12 news-page-page">
                  {!! $news->links() !!}
                  <!-- <span class="news-page-active">1</span><span>2</span><span>3</span><span class="page-point">....</span><span>10</span> -->
                </div>
           </div><!--Close Top Match-->
         </div>
        </section>
@endsection
