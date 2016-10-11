@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('socialsharekit/css/social-share-kit.css?v=1.0.10') }}">
<style type="text/css">
    /*
    *  Flex Layout Specifics
    */
    main{ display:flex;flex-direction:row; }
    .round{ display:flex;flex-direction:column;justify-content:center;width:200px;list-style:none;padding:0; }
    .round .spacer{ flex-grow:1; }
    .round .spacer:first-child,
    .round .spacer:last-child{ flex-grow:.5; }
    .round .game-spacer{flex-grow:1;border-right: solid; }
    /*
    *  General Styles
    */
    li.game{ padding-left:20px; }
    li.game.winner{ font-weight:bold; }
    li.game span{  }
    li.game-top{ border-bottom:0px solid #aaa; }
    li.game-spacer{ border-right:0px solid #aaa;min-height:40px; }
    li.game-bottom{ border-top:0px solid #aaa; }
</style>
<section class="drawer">
	<div class="col-md-12 size-img back-img-single">
		<div class="effect-cover">
			<h3 class="txt-advert animated">The best ROGER FEDERER</h3>
			<p class="txt-advert-sub">Player on the ATP World Tour </p>
		</div>
	</div>
</section>
<section id="single-match-pl" class="container secondary-page">
	<div class="general general-results players">
		<div class="top-score-title right-score col-md-12">
			<div class="top-score-title player-vs">
                <h3>Bracket Competition<span class="point-little">.</span></h3>
                <h3 class="tab-match-title">{{ $event->nama }}</h3>
                </hr>
				<div class="col-md-12 main">
                    @include('bracket.include.bracket',  ['id_event' => $event->id])
				</div>
                <div class="col-md-12">
                  <div class="col-md-6 ">
                    <h4>Convert with :</h4>
                    <div class="social-buttons ssk-group ssk-round">
                      <a class="btn btn-default" href="{{ action('BracketUserController@getPDF', $event->id) }}" target="_blank">
                          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
                      </a>
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-4">
                    <h4>Share with :</h4>
                    @include('bracket.include.share', [
                        'url' => request()->fullUrl(),
                        'description' => $event->nama.' Bracket',
                        'image' => asset('').'/'.$event->thumbnail
                    ])
                  </div>
                </div>
            </div>
        </div>
    </div>

</section>
 @include('layouts.bottom-content')
@endsection
@push('scripts')
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
