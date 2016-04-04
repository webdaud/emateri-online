<?php

class PenggunaController extends \BaseController {

 //halaman awal
	public function list_matakuliah()
	{
		$id_saya = Auth::user()->id;
		$dosen = User::where('tipe_user', '=', 'Educator')->orderBy('nama_lengkap', 'ASC')->get();
		$list_dosen = Favorit::where('id_saya', '=', $id_saya)->get();
		return View::make('/pengguna/list_matakuliah', ['dosen'=>$dosen], ['list_dosen'=>$list_dosen]);
	}
//Fungsi Tambah Dosen Favorit
	public function tambah_favorit($id)
	{
		if (Auth::check())
			{
			    $Favorit = new Favorit;
			    $Favorit->id_dosen_favorit = $id;
			    $Favorit->id_saya = Auth::user()->id;
			    $Favorit->save();
			    return Redirect::to("list_matakuliah")->with('info_box', 'Dosen telah  ditambahkan');
			}
					

 		return Redirect::to('login')->with('register_error', 'Maaf Anda Harus Login Dulu ke Sistem. Silahkan Ulang dari Awal Setelah Anda login');
 		
	}

public function g_password_pengguna()
	{
	
		return View::make('/pengguna/ganti_password');
	}
//Hapus Favorit Pengguna	
public function favorit_hapus($id)
	{


//Multiple Kriteria Delete field1, field2
		// $kriteria = ['id_dosen_favorit' => $id_dosen_favorit, 'id_saya' => $id_saya];
		// $ambil_dari_kriteria = Favorit::where($kriteria)->get();
		// $ambil_dari_kriteria->delete();

		$hapus = Favorit::find($id);
		$hapus->delete();
		return Redirect::to("/list_matakuliah")->with('info_box', 'File telah dihapus');
	}

public function p_password_pengguna()
	{
		$captcha =  array('captcha' => array('required', 'captcha'));
		$validator = Validator::make(Input::all(), $captcha);
        if ($validator->fails())
        	{	
                return Redirect::to("/pengguna/password")->with('info_box2', 'Error, Captcha Salah.');
            }
            else
            {
				$id_login = Auth::user()->id;
				$ganti = User::find($id_login);
				$p_baru = Hash::make(Input::get('password_baru'));
							$ganti->password= $p_baru;
							$ganti->save();
					return Redirect::to("/pengguna/password")->with('info_box', 'Password telah dirubah');
				 

            }

        }
}