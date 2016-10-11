<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
     Route::auth();
     Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
     Route::get('', 'HomeController@index');
     Route::post('register/{id}/upload', 'BuktiBayarController@store');
     Route::get('register/pembayaran', 'ParticipantController@pembayaran');
     Route::post('register/pembayaran', 'ParticipantController@postPembayaran');
     Route::get('login', 'LogController@login');
     Route::get('register', 'LogController@register');
     Route::get('redirect/{provider}', 'SocialAuthController@redirect');
     Route::get('callback/{provider}', 'SocialAuthController@callback');
     Route::get('schedule', 'ScheduleUserController@index');
     Route::get('tables', 'TableUserController@index');
     Route::get('tables/{id}', 'TableUserController@show');
     Route::get('contact', 'ContactController@index');
     Route::post('contact', 'ContactController@store');
     Route::get('youtube', 'EventStreamController@index');
     Route::get('youtube/{id}', 'EventStreamController@show');
     Route::get('results', 'ResultUserController@index');
     Route::get('fixtures', 'FixturesUserController@index');
     Route::get('news', 'NewsUserController@index');
     Route::get('news/{slug}', 'NewsUserController@show');
     Route::get('tags/{id}', 'TagUserController@index');
     Route::get('gallery', 'GalleryUserController@index');
     Route::get('join/{id}', 'RegisterController@index');
     Route::post('join/{id}', 'RegisterController@store');
     Route::patch('join/{id}', 'RegisterController@update');
     Route::get('bracket', 'BracketUserController@index');
     Route::get('bracket/{id}', 'BracketUserController@show');
     Route::get('bracket/{id}/getPDF', 'BracketUserController@getPDF');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('profil', 'ProfileController@index');
    Route::patch('profil{id}', 'ProfileController@update');
    Route::post('team/{id}', 'MemberUserController@store');
    Route::get('team/{id}', 'ParticipantUserController@index');
    Route::patch('team/{id}', 'ParticipantUserController@update');
    Route::patch('team/{id}/member/{member}', 'MemberUserController@update');
    Route::delete('team/{id}/member/{member}', 'MemberUserController@destroy');
    Route::post('comment/{id}', 'CommentUserController@store');
});

Route::group(['middleware' => 'admin'], function () {
    // Route::get('admin', 'AdminController@login');
    Route::get('admin', 'AdminController@index');
    Route::post('admin/pro_login', 'AdminController@pro_login');
    Route::get('admin/logout', 'Auth\AuthController@getLogout');
    Route::resource('admin/user', 'UserAdminController');
    Route::resource('admin/sponsor', 'SponsorController');
    Route::resource('admin/event', 'EventController');
    Route::resource('admin/tag', 'TagController');
    Route::resource('admin/rank', 'RankController');
    Route::resource('admin/gallery', 'GalleryController');
    Route::resource('admin/schedule', 'ScheduleController');
    Route::post('admin/event/search', 'EventController@search');
    Route::resource('admin/news', 'NewsController');
    Route::resource('admin/news.comment', 'CommentController');
    Route::get('admin/event-match', 'EventMatchController@index');
    Route::post('admin/event-match.autoAdd', 'MatchController@autoAdd');
    Route::resource('admin/event-match.part.match', 'MatchController');
    Route::resource('admin/event-match.part.match.team', 'MatchTeamController');
    Route::get('admin/event-match/{id}/part/{id_part}/match-score/{id_match}', 'EventMatchScoreController@show');
    Route::post('admin/event-match/{id}/part/{id_part}/match-score/{id_match}', 'EventMatchScoreController@endmatch');
    Route::patch('admin/event-match/{id}/part/{id_part}/match-score/{id_match}', 'EventMatchScoreController@startmatch');
    Route::patch('admin/event-match/{id}/part/{id_part}/match-score/{id_match}/team/{id_team}', 'EventMatchScoreController@update');
    Route::get('admin/event/get_event','EventController@getEvent');
    Route::get('admin/event-statistic', 'EventStatisticController@index');
    Route::get('admin/event-statistic/{id}', 'EventStatisticController@show');
    Route::resource('admin/event-statistic.statistic', 'StatisticController');
    Route::get('admin/result', 'ResultController@index');
    Route::get('admin/logout', 'Auth\AuthController@getLogout');
    Route::get('admin/participant-event', 'ParticipantController@event_index');
    Route::get('admin/participant-event/{id}', 'ParticipantController@show_event');
    Route::resource('admin/participant-event.participant', 'ParticipantController');
    Route::get('admin/participant-event.participant/{id}/bukti_pembayaran', 'ParticipantController@bukti_pembayaran');
    Route::post('admin/participant-event.participant/{id}/bukti_pembayaran', 'ParticipantController@validation');
    Route::post('admin/participant/search', 'ParticipantController@search');
    Route::resource('admin/participant-event.participant.member', 'MemberController');
    Route::get('admin/role-user', 'RoleUserController@index');
    Route::post('admin/role-user', 'RoleUserController@store');
    Route::get('admin/pemasukan', 'PemasukanController@index');
});
