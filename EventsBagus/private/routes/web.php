<?php

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'AdminController@index')->name('adminpage');
Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');

Route::get('admin-login','AdminLoginController@showLoginForm');

Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'AdminLoginController@login']);

Route::get('admin-register','AdminLoginController@showRegisterPage');

Route::post('admin-register', 'AdminLoginController@register')->name('admin.register');

Route::get('/showAkun', 'HomeController@showAkun');

Route::get('/showEvent', 'HomeController@showEvent');

Route::get('/showJadwal', 'HomeController@showJadwal');

Route::get('/create-event', 'HomeController@createEvent');

Route::get('/create-jadwal', 'HomeController@createJadwal');

Route::get('/create-peserta', 'HomeController@createPeserta');

Route::get('/edit-event/{id}', 'HomeController@editEvent');

Route::get('/edit-peserta/{id}', 'HomeController@editPeserta');

Route::get('/edit-jadwal/{id}', 'HomeController@editJadwal');

Route::get('/edit-akun/{id}', 'HomeController@editAkun');

Route::get('/hapus-peserta/{id}', 'HomeController@hapusPeserta');

Route::get('/hapus-event/{id}', 'HomeController@hapusEvent');

Route::get('/hapus-jadwal/{id}', 'HomeController@hapusJadwal');

Route::get('/hapus-log/{id}', 'HomeController@hapusLog');

Route::get('/cari','HomeController@cari');




Route::get('/daftar-peserta/{id}', 'GuestController@daftarPeserta');

Route::post('/postEvent', 'HomeController@postEvent');

Route::post('/postJadwal', 'HomeController@postJadwal');

Route::post('/postPeserta', 'HomeController@postPeserta');

Route::post('/daftarPesertaEvent', 'GuestController@daftarPesertaEvent');

Route::post('/postEditEvent/{id}', 'HomeController@postEditEvent');

Route::post('/postEditPeserta/{id}', 'HomeController@postEditPeserta');

Route::post('/postEditJadwal/{id}', 'HomeController@postEditJadwal');

Route::post('/postEditAkun/{id}', 'HomeController@postEditAkun');


Route::get('/admin-peserta', 'AdminLoginController@adminPeserta');
Route::post('/adminDaftarPeserta', 'AdminLoginController@adminDaftarPeserta');


Route::get('/deskripsi-event/{id}', 'GuestController@deskripsiEvent');



Route::get('add-to-log', 'HomeController@myTestAddToLog');
Route::get('logActivity', 'HomeController@logActivity');