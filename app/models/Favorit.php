 <?php

class Favorit extends Eloquent {
	protected $table = 'favorit_pengguna';

public static function Ambil($id)
    {
      
        return DB::table('Konten')->where('id_matakuliah', '=', $id)->get();
        
    }
public static function tidak_ada($id_favorit)
    {
    	 
    }



}