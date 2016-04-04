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

<div class="row">
<div class="row">
<?php if(Session::has('info_box2')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
        <div class="alert alert-danger alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('info_box2') ?>
         <?php endif; ?> 

  </div>
</div>
</div>
 
 


<div class="container">
    <h3 >Menu Ganti Password</h3>
   <p>&nbsp;</p>
</div>

<!-- Form Daftar -->
<div class="row">
  <div class="col-md-9 col-md-push-3">
<div class="form-group">


        <form method="post" action="" class="forms" role="form" data-toggle="validator">

          

             
       
            
            <div class="row">
            
            <div class="form-group col-xs-4">
            <input type="Password" name="password_baru" data-minlength="6" class="form-control input-lg" id="inputPassword" placeholder="Password" data-minlength-error="Password Baru Minimal 6 Karakter"required>
                <div class="help-block with-errors"></div>
            </div>
            </div>
           

            <div class="row">
            <div class="form-group col-xs-4">
              <input type="Password" class="form-control input-lg" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Password Tidak Sama" placeholder="Ulangi Password" required>
            <div class="help-block with-errors"></div>
            </div></div>





            <div class="row">
              <div class="col-xs-2">
                  {{HTML::image(Captcha::img(), '', array('placeholder' => 'Masukkan Username', 'class' => 'form-control input-lg')) }}
              </div>
              <div class="form-group">
              <div class="col-xs-3">
              <input type="text" name="captcha" class="form-control input-lg" placeholder="Verifikasi Gambar" required>
              <div class="help-block with-errors"></div>
              </div>
            </div>
            </div>
            <p>&nbsp;</p>
            <input type="submit" class="btn btn-primary" value="Ganti Password">
        </form>
  </div>
  </div>











 
  <div class="col-md-3 col-md-pull-9">

  </div>
</div>
    @endsection




  


 