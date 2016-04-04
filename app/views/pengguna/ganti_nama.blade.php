
@extends('layouts.layout_index')

@section('title')
    @parent
    - Ganti Password.
@stop
@section('content')
 

{{ HTML::script ('js/validator.min.js') }}

<div class="row">
<?php if(Session::has('info_box')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
        <div class="alert alert-info alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('info_box') ?>
         <?php endif; ?> 
      
  </div>
</div>
  
<div class="container">
    <h3 >Menu Profil </h3>
   <p>&nbsp;</p>
</div>

{{Form::open(array('url'=>'/pengguna/profil'))}}


    <div class="row">
    <div class="form-group col-xs-5 col-xs-offset-3"> 
    <div class=""> 
    <input type="text" placeholder="Nama Anda" name="namapengguna" class="form-control input-lg" value="{{ $nama_pengguna->nama_lengkap}}"  >
    <p>&nbsp;</p>
    <div > 
    <input type="hidden" name="id" readonly="readonly" class="form-control input-lg" value="{{ $nama_pengguna->id}}"  >
    </div>
    </div>
</div>
 <button type="submit" class="btn btn-lg btn-default"> Simpan
        </button>
        <div class="form-group col-xs-1"> 
             <a href="/list_matakuliah" class="btn btn-lg btn-default btn-block">Batal</a>
        </div>

     {{Form::close()}}
    @endsection

