<?php

class AdminController extends BaseController {
//Fungsi Update Semester
public function post_semester()
	{
		$aturan =  array('captcha' => array('required', 'captcha'));
        $validator = Validator::make(Input::all(), $aturan);
            if ($validator->fails())
            {	
                return Redirect::to("/daftar")->with('register_gagal', 'Error, Captcha Salah.');
            }
            else
            {	
            	$aturan2 =  array('username' => 'unique:login,username');
            	$validator2 = Validator::make(Input::all(), $aturan2);
            	if ($validator2->fails())
            	{	
                	return Redirect::to("/daftar")->with('register_gagal', 'Error, Username Telah Terdaftar.');
           		}	
           		else
           		{
					$tambah = new Tahun;
				    $tambah->tahun_semester     = Input::get('tahun_semester');
				    $tambah->save();
					return Redirect::to("/admin/semester")->with('register_success', 'Tahun Semester Berhasil Ditambahkan.');
				}
            }		
	}

//Fungsi Lihat Semester
public function get_semester()
	{
		$tahun = tahun::all();
		return View::make('/admin/semester', ['tahun'=>$tahun]);	
	}

//Fungsi Hapus Baris Admin
public function hapus_baris_admin($id_hapus)
    {
        $hapus = User::find($id_hapus);
        $hapus->delete();
        return Redirect::to('admin')->with('infobox', 'Data telah dihapus.');
    }
}