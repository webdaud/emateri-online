@extends('layouts.layout_admin')

@section('title')
    @parent

    - Tambah Dosen/Administrator.
@stop
@section('content')
{{ HTML::script ('js/validator.min.js') }}
  <!-- Register Sukses -->

  <div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
        <?php if(Session::has('register_success')): ?>
              <div class="alert alert-info alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <?php echo Session::get('register_success') ?>
    </div>
<?php endif; ?>
  </div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4"></div>
</div>


<div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">


 
 <div class="form-group">

        <form method="post" action="" class="forms" role="form" data-toggle="validator">
            <p>&nbsp;</p>
            <h3>Form Registrasi</h3>
            <label>
                Username <span class="error"><?php echo $errors->first('username') ?></span>
                <input type="text" name="username" value="<?php echo Form::old('username') ?>" class="form-control" required/>
            </label>
            <label>
                Password Sementara <span class="error"><?php echo $errors->first('password') ?></span>
                <input type="password" name="password" value="<?php echo Form::old('password') ?>" data-minlength="4" class="form-control" required/>
            </label>

            <label>

                Tipe User
            <select name="tipe_user" id="tipe_user" class="form-control">
                 <option>Dosen</option>
                 <option>Administrator</option>          
           </select>
           </label>

<p>&nbsp;</p>

            <input type="submit" class="btn btn-primary" value="Tambah">

        </form>

  </div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4"></div>
</div>



  


    @endsection



 