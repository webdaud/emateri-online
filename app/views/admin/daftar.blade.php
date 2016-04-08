@extends('layouts.layout_index')

@section('title')
    @parent
    - Registrasi Pengguna.
@stop
@section('content')
{{ HTML::script ('js/validator.min.js') }}

<!-- Registrasi Gagal -->
<div class="row">
<?php if(Session::has('register_gagal')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
      <div class="alert alert-danger alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('register_gagal') ?>
         <?php endif; ?>  
  </div>
</div>
<div class="row"></div>
<div class="container">
  <div>
    <h3>Registrasi Pengguna</h3>
  </div>

<!-- Form Daftar -->
<div class="row">
  <div class="col-md-9 col-md-push-3">
<div class="form-group">
        <form method="post" action="" class="forms" role="form" data-toggle="validator">
            <div class="row">
            <div class="form-group col-xs-3">
              <input type="text" name="username" class="form-control input-lg" placeholder="Username" data-minlength="4" data-minlength-error="Min 4 Karakter"  required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-xs-5">
              <input type="text" name="nama_lengkap"class="form-control input-lg" placeholder="Nama Lengkap" required>
              <div class="help-block with-errors"></div>
            </div>
            </div>
            
            <div class="row">
            <div class="form-group">
            <div class="form-group col-sm-3">
            <input type="Password" name="password" data-minlength="6" class="form-control input-lg" id="inputPassword" placeholder="Password" data-minlength-error="Minimal 6 Karakter"required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-xs-3">
            <input type="Password" class="form-control input-lg" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Password Tidak Sama" placeholder="Ulangi Password" required>
            <div class="help-block with-errors"></div>
            </div>
            </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-3">
               <label for="tipe_user">Anda Mendaftar Sebagai ?</label>
              <select name="tipe_user" id="tipe_user" class="form-control input">
              <option>Pelajar/Mahasiswa</option>
              <option>Guru/Dosen</option>
            </select>
            </div> 
            </div>  

            <div class="row">
              <div class="col-xs-2">
                  {{HTML::image(Captcha::img(), '', array( )) }}
              </div>
            </div>

            <div class="row">
            <div class="col-xs-3">
              <input type="text" name="captcha" class="form-control input" placeholder="Verifikasi Gambar" required>
              <div class="help-block with-errors"></div>
              </div>
              </div>
              
            <input type="submit" class="btn btn-primary" value="Daftar">
            </div>
           
        </form>
  </div>
  </div>
  <div class="col-md-3 col-md-pull-9">
  </div>
</div>
    @endsection