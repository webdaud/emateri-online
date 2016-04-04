<?php

class DosenController extends \BaseController {

	//Fungsi Lihat Dosen
public function lihat_dosen($id)
	{

		$matakuliah = DB::table('matakuliah')
                    ->where('id_login', '=', $id)
                    ->get();
		$isi_konten = DB::table('konten')
                    ->where('id_login', '=', $id)
                    ->orderBy('Nama_File', 'ASC')
                    ->get();

        $dosen= DB::table('login')->where('id', $id)->first();
     	

 		return View::make('lihat_dosen', ['matakuliah'=>$matakuliah])
 		->with('dosen', $dosen)  
 		->with ('isi_konten', $isi_konten); 
 		
	}




	//Fungsi Showing Menu Upload Materi
public function show_upload_materi()
	{	

		//--------------------ini yang dipakai---------------
		$id_dosen2 = Auth::user()->id;
		$matakuliah = DB::table('matakuliah')
                    ->where('id_login', '=', $id_dosen2)
                    ->get();
     
			 $isi_konten = DB::table('Konten')
                    ->where('id_login', '=', $id_dosen2)
                    ->orderBy('nama_file', 'ASC')
                    ->get();
                    
		Konten::all();
		return View::make
			('admin/upload_materi', 
			['matakuliah'=>$matakuliah], 
			['isi_konten2'=>$isi_konten]);
	}
public function proses_upload_materi($id_matakuliah)
	{
		
		$file = Input::file('file_materi');
		if ($file===null)
		{
			return Redirect::to("/upload_materi")->with('register_success', 'Tidak dapat Mengupload karena Materi tidak ada');
		}
		else
		{
		$nama_original = $file->getClientOriginalName();
		$extensi = $file->getClientOriginalExtension();
		$id_login = Auth::user()->id;
		var_dump($extensi);
		
		$tempatfile = 'Data_Upload/'.$id_matakuliah;
		if($file->move($tempatfile, $nama_original, $extensi)){
			$filedownload = $file->getClientOriginalName();
			$konten = new Konten;
			$konten->id_login = $id_login;
			$konten->nama_file = $nama_original;
			$konten->tipe_file = $extensi;
			$konten->lokasi = $tempatfile.'/'.$nama_original;
			$konten->id_matakuliah = $id_matakuliah;
			$konten->save();
			return Redirect::to("/upload_materi")->with('register_success', 'Materi telah sukses ditambahkan');
		}else{
			return 'error';
		}
		}
	}


public function konten_hapus($id)
	{
		$hapus = Konten::find($id);
		File::delete($hapus->lokasi);
		$hapus->delete();
		return Redirect::to("/upload_materi")->with('register_success', 'File telah dihapus');
	}

public function konten_edit($id)
	{
		$edit = Konten::find($id);
		return View::make('admin/konten_input_data', ['edit'=>$edit]);
	}

public function konten_input_data()
	{
		$namafile = Input::get('namafile');
		$id = Input::get('id');
		$edit = Konten::find($id);
		$edit->nama_file=$namafile;
		$edit->save();
		return Redirect::to("/upload_materi")->with('register_success', 'Nama File telah dirubah');
	}

public function matakuliah_hapus($id)
	{
		$hapus = matakuliah::find($id);
		File::delete($hapus->lokasi);
		$hapus->delete();
		return Redirect::to("/upload_materi")->with('register_success', 'File telah dihapus');
	}	
public function matakuliah_edit($id)
	{
		$edit = matakuliah::find($id);
		
		return View::make('admin/matakuliah_input_data', ['edit'=>$edit]);
	}

public function matakuliah_input_data()
	{
		$namafile = Input::get('matakuliah');
		$id = Input::get('id');
		$edit = matakuliah::find($id);
		$edit->matakuliah=$namafile;
		$edit->save();
		return Redirect::to("/upload_materi")->with('register_success', 'Nama Matakuliah telah dirubah');
	}
public function g_setting()
	{	
		$id= Auth::user()->id;
		$isi = User::find($id);
		return View::make('admin/setting', ['isi'=>$isi]);
	}

public function p_setting()
	{
		$nama_lengkap = Input::get('namalengkap');
		$nik = Input::get('nik');
		$pesan = Input::get('pesan');
		$id= Auth::user()->id;	
		$edit = User::find($id);
		$edit->nama_lengkap=$nama_lengkap;
		$edit->nik=$nik;
		$edit->pesan=$pesan;
		$edit->save();
		return Redirect::to("/dosen/setting")->with('info_box', 'Perubahan telah disimpan');

	}

public function g_password_dosen()
	{
	
		return View::make('/admin/ganti_password_dosen');
	}

public function p_password_dosen()
	{
		$captcha =  array('captcha' => array('required', 'captcha'));
		$validator = Validator::make(Input::all(), $captcha);
        if ($validator->fails())
        	{	
                return Redirect::to("/dosen/password")->with('danger', 'Error, Captcha Salah.');
            }
            else
            {
				$id_login = Auth::user()->id;
				$ganti = User::find($id_login);
				$p_baru = Hash::make(Input::get('password_baru'));
					 
							$ganti->password= $p_baru;
							$ganti->save();
					return Redirect::to("/dosen/password")->with('info_box', 'Password telah dirubah');
				 

            }




		
		
		
	}



public function tambah_matakuliah()
	{
		$data=Input::get('matakuliah');
		if ($data==='')
		{
			 return Redirect::to("/upload_materi")->with('register_success', 'Maaf Anda Harus Mengisi Judul Matakuliah');
		}
		else 
		{
		$t_matakuliah = new matakuliah;
	    $t_matakuliah->matakuliah    = $data;
	    $t_matakuliah->id_login = Auth::user()->id;
	    $t_matakuliah->save();
 	    return Redirect::to("/upload_materi")->with('register_success', 'Matakuliah telah sukses ditambahkan');
	}
	
	}


public function nama_mhs_id($id)
	{   
		$nama_pengguna=User::find($id);

		return View::make('pengguna/ganti_nama', ['nama_pengguna'=>$nama_pengguna]); 
	}

public function nama_mhs_input()
	{
		 
		$namapengguna = Input::get('namapengguna');
		$id = Input::get('id');
		$edit = User::find($id);
		$edit->nama_lengkap=$namapengguna;
		$edit->save();
		return Redirect::to("/list_matakuliah")->with('info_box', 'Nama Anda Sudah dirubah');
	}


 




}