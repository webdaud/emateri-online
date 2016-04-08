<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Disini Tempat Dekalrasi Halaman Awal, Login, Logout, dan Register
	|--------------------------------------------------------------------------
	|
	*/
//halaman awal
	public function home()
	{
		
 		
		return View::make('/indexutama');
 
	}

//halaman awal
	public function cari()
	{
		$yangdicari = Input::get('cari');



		$list_study = DB::table('matakuliah')->orderBy('matakuliah', 'ASC')->where('matakuliah', $yangdicari)->get();
		
		$pengajar =  DB::table('login')->get();
		return View::make('index', ['list_study'=>$list_study])
		->with('pengajar', $pengajar);
 
	}

//halaman awal
	public function about()
	{
		
 		
		return View::make('/about');
 
	}	
	
//List Materi
	public function listmateri()
	{
			// $list_dosen = User::where('tipe_user', '=', 'Educator')->orderBy('nama_lengkap', 'ASC')->get();
		$list_study = DB::table('matakuliah')->orderBy('matakuliah', 'ASC')->get();
		
		$pengajar =  DB::table('login')->get();
		// $konten = Konten::all();
		// $konten2 = DB::table('Konten')->groupBy('id_login')->count();
		// foreach ($list_dosen as $list_dosen2)
		// {
		// foreach ($konten as $konten2)
		// {
		// 	if ($list_dosen2->id === $konten2->id_login);
		// 		{
		// 			$total =count($konten2->id );
		// 		}
		// }
		// 	}
		return View::make('index', ['list_study'=>$list_study])
		->with('pengajar', $pengajar);
		// ->with('konten',$konten)
		// ->with('total',$total);
	}
//Fungsi Daftar
public function Daftar()
	{
		
		return View::make('/index');
	}
//Fungsi Download
public function Download($id)
	{
		$file = konten::find($id);
		$filedownload= public_path().'/'.$file->lokasi;


 		return Response::download($filedownload, $file->nama_file);    
	}

//Testing
public function test($id)
	{
		$file = konten::find($id);
		
		return View::make
			('test', 
			['file'=>$file]);	}


//fungsi login
    public function Login()
	{
			// validasi data
		{
		$input = Input::all();

		$rules = array('username' => 'required', 'password' => 'required');

		$v = Validator::make($input, $rules);

		if($v->fails())
		{

			return Redirect::to('/login')->with('register_error', 'Maaf Username/Password Anda Salah');

		} else { 

			$credentials = array('username' => $input['username'], 'password' => $input['password'], 'tipe_user'=>'Educator');
			$credentials2 = array('username' => $input['username'], 'password' => $input['password'], 'tipe_user'=>'Administrator');
			$credentials3 = array('username' => $input['username'], 'password' => $input['password'], 'tipe_user'=>'Learner');
			
			if(Auth::attempt($credentials3))
			{

            	
					return Redirect::to('/');
			

			} 
			if(Auth::attempt($credentials))
			{

            	
					return Redirect::to('/upload_materi');
			

			} 
			if(Auth::attempt($credentials2))
			{

            	
					return Redirect::to('/admin');
			
				echo "Salah";
			}
			else {

				return Redirect::to('login')->with('register_error', 'Maaf Username/Password Anda Salah');
			}
		}
	}
}
//fungsi hapus session
public function masuk_admin()
	{

			
	}
//fungsi Daftar
public function get_daftar()
	{
		return View::make('/admin/daftar');	
	}
public function post_daftar()
	{
		$aturan =  array('captcha' => array('required', 'captcha'));
		$input_tipe_user= Input::get('tipe_user');

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
					$user = new User;
				    $user->username    = Input::get('username');
				    $user->nama_lengkap = Input::get('nama_lengkap');
				    $user->password = Hash::make(Input::get('password'));

				    if ($input_tipe_user = "Pelajar/Mahasiswa")
				    {
				    	$user_type="Learner";
				    }
				    if ($input_tipe_user = "Guru/Dosen")
				    {
				    	$user_type="Educator";
				    }
				    $user->tipe_user = $user_type;
				    $user->save();
					return Redirect::to("/")->with('register_success', 'Anda berhasil terdaftar dalam sistem, silahkan login.');
				}
            }		
	}

//fungsi hapus session
public function hapus_session($id = null)
	{
		Auth::logout();

		return Redirect::home();
	}


	}