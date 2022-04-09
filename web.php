<?php
use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
return view('welcome');
}); */

Route::get('/', 'HomeController@index')->name('beranda');

Route::get('/instagram', 'InstagramApiController@index')->name('instagram');
Route::get('/instagram/callback', 'InstagramApiController@callback')->name('instagram.callback');

Route::view('/welcome', 'welcome');
Route::view('/contoh', 'contoh');
Route::view('/visi', 'umum.visi')->name('visi');
Route::view('/partner', 'umum.partnership')->name('partner');
Route::view('/covid19', 'umum.covid19')->name('covid19');
Route::view('/faq', 'umum.faq')->name('faq');
Route::view('/kontak', 'umum.kontak')->name('kontak');
Route::view('/ulasan', 'umum.ulasan')->name('ulasan');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/kamar/saya', 'KamarController@indexKamarHost')->name('kamar.saya');
    Route::get('/kamar/{kamarId}/edit', 'KamarController@editKamar')->name('kamar.edit');

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile', 'ProfileController@update')->name('profile.update');

    // fitur ganti password
    Route::get('/profile/change-password', 'ProfileController@change')->name('auth.passwords.edit');
    Route::patch('/profile/change-password', 'ProfileController@changeUpdate')->name('auth.passwords.edit');

    Route::get('/kamar/{kamarId}/pesan', 'PemesananController@index')->name('kamar.pesan');
    Route::post('/kamar/{kamarId}/pesan', 'PemesananController@store')->name('kamar.pesan.simpan');

    Route::get('/pemesanan', 'PemesananController@history')->name('pemesanan');

    Route::get('/pemesanan/{uuid}/konfirmasi', 'PemesananController@konfirmasiDP')->name('pemesanan.konfirmasi');

    // Ajak Teman
    Route::post('/ajakteman', 'AjakTemanController@update')->name('ajakteman.referal');
    Route::post('/ajakteman/klaim', 'AjakTemanController@klaim')->name('ajakteman.klaim');

    // tamu ulasan
    Route::get('/ulasan/{pemesanan_id}/tamu', 'UlasanController@createTamuUlasan')->name('ulasan.tamu');
    Route::post('/ulasan/{pemesanan_id}/tamu', 'UlasanController@storeTamuUlasan')->name('ulasan.tamu');

    // host ulasan
    Route::get('/ulasan/{pemesanan_id}/host', 'UlasanController@createHostUlasan')->name('ulasan.host');
    Route::post('/ulasan/{pemesanan_id}/host', 'UlasanController@storeHostUlasan')->name('ulasan.host');

    Route::get('/host/verifikasi', 'KamarController@showAllKamarHost')->name('host.verifikasi');
    Route::get('/host/verifikasi/{id}', 'KamarController@VerifikasiKamarHost');

    Route::get('/kota', 'KotaController@index')->name('kota');
    Route::get('/kota/add', 'KotaController@add')->name('kota.add');
    Route::post('/kota', 'KotaController@addProccess')->name('kota');
    Route::get('/kota/edit/{id}', 'KotaController@edit');
    Route::patch('/kota/{id}', 'KotaController@editProccess');
    Route::delete('/kota/{id}', 'KotaController@delete');
});


Route::get('/kamar/filters', 'KamarController@filter');
Route::get('/kamar', 'KamarController@showAll')->name('kamar');
Route::get('/kamar/n/{negara}', 'KamarController@showAllByNegara');
Route::get('/kamar/k/{kota}', 'KamarController@showAllByKota');
Route::get('/kamar/baru', 'KamarController@create')->name('kamar.baru');
Route::post('/kamar/baru', 'KamarController@store')->name('kamar.store');
Route::view('/kamar/ketentuan', 'kamar/ketentuan')->name('kamar.ketentuan');
Route::get('/kamar/{kamarId}', 'KamarController@showOneKamar');
Route::get('/kamar/{kamarId}/ulasan', 'UlasanController@showAllUlasan');


Route::get('/pemesanan/{uuid}/terima', 'PemesananController@terima')->name('pemesanan.terima');
Route::get('/pemesanan/{uuid}/tolak', 'PemesananController@tolak')->name('pemesanan.tolak');

// Ajak Teman
Route::get('/ajakteman', 'AjakTemanController@index')->name('ajakteman');

Route::redirect('/t/oprec', 'https://docs.google.com/forms/d/e/1FAIpQLScTLKfFP1xXEnKjf7haNsZnnf9kPF1v8i977yBF3XLHHQUh7w/viewform?usp=sf_link');
Route::redirect('/oprec', 'https://docs.google.com/forms/d/e/1FAIpQLScTLKfFP1xXEnKjf7haNsZnnf9kPF1v8i977yBF3XLHHQUh7w/viewform?usp=sf_link');
Route::redirect('/karier', 'https://karier.kamarpelajar.com')->name('karier');

Route::view('/links', 'umum.links');
Route::redirect('/t/mediakit', 'https://drive.google.com/drive/folders/1Rjc_Ga9lUpGpWS3up-rygjNuyC04Ju1m?usp=sharing');
Route::redirect('/t/kolaborasi', 'https://docs.google.com/forms/d/e/1FAIpQLSeeNNZWR4qxqv3_HAPjG5FKrNJPG6SrS8l-5Na6w933xQFXiQ/viewform?usp=sf_link');
Route::redirect('t/youtube', 'https://www.youtube.com/channel/UCbKy6oyFR3XXJQ9X4cKCIww');

//Route Pesan Pemandu
Route::view('/pandu/{pemandu_id}/pesan', 'pemandu.pesan')->name('pemandu.pesan');
//Router Cari Pemandu
Route::view('/pandu', 'pemandu.info')->name('pemandu');
Route::get('/pandu/baru', 'PemanduController@baru')->name('pemandu.baru')->middleware(['auth', 'verified']);
Route::post('/pandu/baru', 'PemanduController@baruSimpan')->name('pemandu.baru.simpan')->middleware(['auth', 'verified']);
Route::get('/pandu/kelola', 'PemanduController@kelola')->name('pemandu.kelola')->middleware(['auth', 'verified']);
Route::get('/pandu/cari', 'PemanduController@cari')->name('pemandu.cari');
Route::get('/pandu/{pemandu_id}', 'PemanduController@detail')->name('pemandu.detail');