@extends('layouts.layout_admin')

@section('title')
    @parent

    - Menu Utama Administrator.
@stop
@section('content')
<div class="row">
<?php if(Session::has('register_success')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
      <div class="alert alert-info alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('register_success') ?>
         <?php endif; ?>  
  </div>
</div>
<div class="row">
  </div>
  
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
</div>

<!-- Batas Message -->

<div class="container">
  <div class="page-header">
    <h3>List Seluruh Semester</h3>
  </div>

<p class="center"></p>
<p>&nbsp;</p>
  <div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
  

    <table width="775" align="center" class="table table-bordered">
     <thead>
      <tr style="background-color: #D9EDF7;">
        <td align="center" style="font-weight:bold">ID</th>
        <td align="center" style="font-weight:bold">Tahun / Semester</th>
        <td align="center" style="font-weight:bold">Operasi</th>
      </tr>
    </thead>
<tr>
   @foreach ($tahun as $tahun2)
      <td align="center">{{$tahun2->id}}</td>
      <td>{{$tahun2->tahun_semester}}</td>
      <td align="center">
        <a href="{{URL::route('admin_hapus', $tahun2->id) }}" class="btn btn-small btn-danger">Hapus</a>
      </td>
    </tr>

@endforeach
 </table>
  <form method="post" action="" class="tahun_semester_update" role="form" data-toggle="validator">
            <p>&nbsp;</p>
            <h3>Tambah Semester</h3>
            
                <input type="text" name="tahun_semester" placeholder="Tahun / Semester" value="" class="form-control input-lg" required/>
              
                {{HTML::image(Captcha::img(), '', array('placeholder' => 'Masukkan Username', 'class' => 'form-control input-lg')) }}
                <input type="text" name="captcha" class="form-control input-lg" placeholder="Verifikasi Gambar" required>
              <p>&nbsp;</p> 
            <input type="submit" class="btn btn-primary" value="Tambah">
        </form>
</div>
