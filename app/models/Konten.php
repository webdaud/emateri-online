<?php

class Konten extends Eloquent {
	protected $table = 'konten';

public static function Ambil($id)
    {
      
        return DB::table('Konten')->where('id_matakuliah', '=', $id)->get();
        
    }


}