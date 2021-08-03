<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/matches', function () {
    return view('matches');
});

Route::get('/our_Teams', function () {
    return view('our_Teams');
});

Route::get('/_valorantMatches', function () {
    return view('_valorantMatches');
});

Route::get('/_leagueMatches', function () {
    return view('_leagueMatches');
});

Route::get('/_dotaMatches', function () {
    return view('_dotaMatches');
});

Route::get('/_callofdutyMatches', function () {
    return view('_callofdutyMatches');
});

Route::get('/_csgoMatches', function () {
    return view('_csgoMatches');
});

Route::get('/_creatorsPage', function () {
    return view('_creatorsPage');
});

Route::get('/-jibbles-player-page', function () {
    return view('-jibbles-player-page');
});

Route::get('/_cooked-player-bio', function () {
    return view('_cooked-player-bio');
});

Route::get('/_DK-player-page', function () {
    return view('_DK-player-page');
});

Route::get('/_froddo-swaggins', function () {
    return view('_froddo-swaggins');
});

Route::get('/_tibbles-player-page', function () {
    return view('_tibbles-player-page');
});

Route::get('/_badassbailey-player-page', function () {
    return view('_badassbailey-player-page');
});

Route::get('/_ceb-player-page', function () {
    return view('_ceb-player-page');
});

Route::get('/_cleansheet', function () {
    return view('_cleansheet');
});

Route::get('/_clown-player-page', function () {
    return view('_clown-player-page');
});

Route::get('/_dashy-player-page', function () {
    return view('_dashy-player-page');
});

Route::get('/_envoy-player-page', function () {
    return view('_envoy-player-page');
});

Route::get('/_fishy-player-page', function () {
    return view('_fishy-player-page');
});

Route::get('/_formal-player-page', function () {
    return view('_formal-player-page');
});

Route::get('/_jaysiin-player-page', function () {
    return view('_jaysiin-player-page');
});

Route::get('/_karna-player-page', function () {
    return view('_karna-player-page');
});

Route::get('/_kennys-player-page', function () {
    return view('_kennys-player-page');
});

Route::get('/_laney-player-page', function () {
    return view('_laney-player-page');
});

Route::get('/_NBK-player-page', function () {
    return view('_NBK-player-page');
});

Route::get('/_notail-player-page', function () {
    return view('_notail-player-page');
});

Route::get('/_saksa-player-page', function () {
    return view('_saksa-player-page');
});

Route::get('/_scump-player-page', function () {
    return view('_scump-player-page');
});

Route::get('/_singlecodpage', function () {
    return view('_singlecodpage');
});

Route::get('/_singlecsgopage', function () {
    return view('_singlecshopage');
});

Route::get('/_singledotapage', function () {
    return view('_singledotapage');
});

Route::get('/_singleleaguepage', function () {
    return view('_singleleaguepage');
});

Route::get('/_singlevalopage', function () {
    return view('_singlevalopage');
});

Route::get('/_sumail-player-page', function () {
    return view('_sumail-player-page');
});

Route::get('/_Topson-player-page', function () {
    return view('_Topson-player-page');
});

Route::get('/_unamed-player-page', function () {
    return view('_unamed-player-page');
});

Route::get('/_sassy-player-page', function () {
    return view('_sassy-player-page');
});