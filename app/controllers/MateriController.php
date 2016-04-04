<?php

class matericontroller extends \BaseController {

	
//Fungsi Lihat Materi
	public function lihat_materi($id)
	{

		$matakuliah = DB::table('matakuliah')
                    ->where('id', '=', $id)
                    ->get();
		$isi_konten = DB::table('konten')
                    ->where('id_matakuliah', '=', $id)
                    ->orderBy('Nama_File', 'ASC')
                    ->get();



  
        $dosen= DB::table('login')->where('tipe_user', 'Educator' )->first();
     	

 		return View::make('lihat_materi', ['matakuliah'=>$matakuliah])
 		->with('dosen', $dosen)  
 		->with ('isi_konten', $isi_konten); 
 		
	}

//Fungsi Lihat Educator
public function lihat_educator($id)
	{

		$matakuliah = DB::table('matakuliah')
                    ->where('id_login', '=', $id)
                    ->get();
		$isi_konten = DB::table('konten')
                    ->where('id_login', '=', $id)
                    ->orderBy('Nama_File', 'ASC')
                    ->get();

        $dosen= DB::table('login')->where('id', $id)->first();
     	

 		return View::make('educator', ['matakuliah'=>$matakuliah])
 		->with('dosen', $dosen)  
 		->with ('isi_konten', $isi_konten); 
 		
	}





	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}











	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
