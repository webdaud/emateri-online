@extends('layouts.layout_login')

@section('title')
    @parent

    - Edit Profil Pengajar/Guru/Dosen.
@stop
@section('content')




  <!-- Registrasi Gagal -->
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
<div class="row">
         </div>

<div class="container">
 <p>&nbsp;</p>
    <h3 >Menu Edit Profil</h3>
   <p>&nbsp;</p>
</div>


  
<!-- Form Daftar -->
<div class="row">
  <div class="col-md-9 col-md-push-3">
<div class="form-group">

 
{{Form::open(array('url'=>'/dosen/setting'))}}
             <div class="row">
           
            <div class="form-group col-xs-6">
              <input type="text"  name="namalengkap" class="form-control input-lg" placeholder="Nama Lengkap" value ="{{$isi->nama_lengkap}}"  >
            </div>

            </div>
            
            <div class="row">
            <div class="form-group col-xs-6">
              <input type="text" name="nik"class="form-control input-lg" placeholder="NIK" value ="{{$isi->nik}}"  >
              
            </div>
            </div>

            <div class="row">
            <div class="form-group col-xs-6">
              <textarea name="pesan" class="form-control input-lg" rows="3" placeholder="Pesan">{{$isi->pesan}}</textarea>
              
              </div>
              </div>
 
            <input type="submit" class="btn btn-primary" value="Perbarui">
        </form>
  </div>
  </div>
 {{Form::close()}}
    @endsection