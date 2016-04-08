<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Halaman Awal
	Route::get('/', ['as'=>'home', 'uses' => 'HomeController@home']);

//Cari 
	Route::post('/cari', ['as'=>'cari', 'uses' => 'HomeController@cari']);

//About 
	Route::get('/about', ['as'=>'about', 'uses' => 'HomeController@about']);


//List Materi
	Route::get('/listmateri', ['as'=>'listmateri', 'uses' => 'HomeController@listmateri']);

//Untuk Melihat Isi Materi 
	Route::post('/lihat_materi/{id}', ['as'=>'lihat_materi2', 'uses' => 'MateriController@lihat_materi']);

//Untuk Melihat Educator
	Route::get('/educator/{id}', ['as'=>'educator2', 'uses' => 'MateriController@lihat_educator']);

	//Untuk Login
	Route::get('/login', function()
	{
		return View::make('/admin/login');
	});
	Route::post('login', array('uses' => 'HomeController@Login'));
	// Masuk Kembali
	Route::get('masuk_admin', ['as' => 'masuk_admin', 'uses' => 'HomeController@masuk_admin']);
	//Untuk Logout
	Route::get('logout', ['as' => 'logout', 'uses' => 'HomeController@hapus_session']);


//========== Untuk Halaman Admin =========
//========================================
	Route::get('admin', function()
	{
		$users = User::all();

		return View::make('admin/admin', ['users'=>$users]);
	});
		//Untuk Menghapus Baris di Admin
	Route::get('admin/hapus/{id_hapus}', ['as'=>'admin_hapus', 'uses' => 'AdminController@hapus_baris_admin']);

	

	//Untuk Pilihan Semester
	Route::post('/admin/semester', ['as'=>'p_semester', 'uses' => 'AdminController@post_semester']);

	Route::get('/admin/semester', ['as'=>'g_semester', 'uses' => 'AdminController@get_semester']);


//Untuk Tambah Username
	Route::get('/admin/tambah_pengguna', function()
		{
	return View::make('/admin/tambah_pengguna');
	});

	Route::post('/admin/tambah_pengguna', function()
	{
	    $user = new User;
	    $user->username    = Input::get('username');
	    $user->password = Hash::make(Input::get('password'));
	    $user->tipe_user    = Input::get('tipe_user');
	    $user->save();
 	    return Redirect::to("/admin/tambah_pengguna")->with('register_success', 'Username sukses didaftarkan');
	});


//========== Untuk Halaman Dosen =========
//========================================
	//Untuk Handle Proses Menambah Matakuliah
	Route::post('/upload_materi/tambah_matakuliah', ['as'=>'tambah_matakuliah', 'uses' => 'DosenController@tambah_matakuliah']);

	//Untuk get Upload Materi
	Route::get('/upload_materi', ['as'=>'show_upload_materi', 'uses' => 'DosenController@show_upload_materi']);

	//Untuk Upload Materi Kuliah
	Route::post('upload_materi/kuliah/{id_matakuliah}', ['as'=>'proses_upload_materi', 'uses' => 'DosenController@proses_upload_materi']);
	
	//Untuk get Setting Dosen
	Route::get('/dosen/setting', ['as'=>'g_setting', 'uses' => 'DosenController@g_setting']);
	
	//Untuk Post Setting Dosen
	Route::post('/dosen/setting', ['as'=>'p_setting', 'uses' => 'DosenController@p_setting']);
	
	//Untuk get Ganti Password Dosen
	Route::get('/dosen/password', ['as'=>'g_setting', 'uses' => 'DosenController@g_password_dosen']);
	
	//Untuk Post Ganti Password Dosen
	Route::post('/dosen/password', ['as'=>'p_setting', 'uses' => 'DosenController@p_password_dosen']);

	//Untuk Konten Edit (Dosen)
	Route::get('/dosen/konten_edit/{id}', ['as'=>'konten_edit', 'uses' => 'DosenController@konten_edit']);
	
	//Untuk Konten Input data (Dosen)
	Route::post('/dosen/konten_edit/input_data', ['as'=>'konten_input_data', 'uses' => 'DosenController@konten_input_data']);



	//Untuk Ganti Nama Pelajar/Mahasiswa
	Route::get('/pengguna/profil/{id}', ['as'=>'mhs_nama','uses' => 'DosenController@nama_mhs_id']);
	
	//Untuk Ganti Nama Pelajar/Mahasiswa
	Route::post('/pengguna/profil', ['as'=>'mhs_nama2', 'uses' => 'DosenController@nama_mhs_input']);




	//Untuk Konten Hapus (Dosen)
	Route::get('/dosen/konten_hapus/{id}', ['as'=>'konten_hapus', 'uses' => 'DosenController@konten_hapus']);

	//Untuk Matakuliah Hapus (Dosen)
	Route::get('/dosen/matakuliah_hapus/{id}', ['as'=>'matakuliah_hapus', 'uses' => 'DosenController@matakuliah_hapus']);

	//Untuk Matakuliah Edit (Dosen)
	Route::get('/dosen/matakuliah_edit/{id}', ['as'=>'matakuliah_edit', 'uses' => 'DosenController@matakuliah_edit']);

	//Untuk Matakuliah Input data (Dosen)
	Route::post('/dosen/matakuliah_edit/input_data', ['as'=>'matakuliah_input_data', 'uses' => 'DosenController@matakuliah_input_data']);

	
//========== Untuk Halaman Mahasiswa =========
//============================================

	//Untuk halaman Mahasiswa/Pengguna
	Route::get('/pengguna', ['as'=>'pengguna', 'uses' => 'HomeController@halaman_awal']);

	//Untuk Daftar Baru
	Route::post('/daftar', ['as'=>'p_daftar', 'uses' => 'HomeController@post_daftar']);

	Route::get('/daftar', ['as'=>'g_daftar', 'uses' => 'HomeController@get_daftar']);

	//Untuk mendownload file
	Route::post('/download/{id}', ['as'=>'download', 'uses' => 'HomeController@Download']);

	//Untuk Tambah Dosen Favorit
	Route::post('/list_matakuliah/{id}', ['as'=>'tambah_favorit', 'uses' => 'PenggunaController@tambah_favorit']);

	//Untuk List Matakuliah
	Route::get('/list_matakuliah', ['as'=>'list_matakuliah', 'uses' => 'PenggunaController@list_matakuliah']);


	//Untuk Favorit Hapus
	Route::get('/dosen/favorit_hapus/{id}', ['as'=>'favorit_hapus', 'uses' => 'PenggunaController@favorit_hapus']);

    //Untuk get Ganti Password Mahasiswa
	Route::get('/pengguna/password', ['as'=>'g_m_password', 'uses' => 'PenggunaController@g_password_pengguna']);
	
	//Untuk Post Ganti Password Mahasiswa
	Route::post('/pengguna/password', ['as'=>'p_m_password', 'uses' => 'PenggunaController@p_password_pengguna']);

    //Testinggg
	Route::post('/test/{id}', ['as'=>'test', 'uses' => 'HomeController@test']);


//Halaman Tidak Ditemukan
App::missing(function($exception)
{
    return Response::view('layouts/layout_halaman_tidak_ditemukan', array(), 404);
});