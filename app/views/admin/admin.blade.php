@extends('layouts.layout_admin')

@section('title')
    @parent

    - Menu Utama Administrator.
@stop
 <style type="text/css">
 
.putih {
  color: #FFF;
}
</style>
@section('content')

{{-- Konfirmasi sukses --}}
<div class="row">
<?php if(Session::has('infobox')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
        <div class="alert alert-info alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('infobox') ?>
         <?php endif; ?>  
  </div>
</div>


  <div class="row"></div>
<div class="container">
  <div class=" ">
    <h3>Dosen/Administrator yang terdaftar dalam sistem.</h3>
  </div>


 
  <div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
  

   
  </div>
  <!-- Tabel User yang Terdaftar-->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4"></div>
</div>
  <table width="775" align="center" class="table table-bordered">
     <thead>
      <tr style="background-color: #06f;">
        <td align="center"  ><span class="putih">Username</span></th>
        <td align="center"  ><span class="putih">Nama Lengkap</span></th>
        <td align="center"  ><span class="putih">Status</span></th>
        <td align="center"  ><span class="putih">Operasi</span></th>
      </tr>
    </thead>
<tr>
  @foreach ($users as $user)
      <td align="center">{{$user->username}}</td>
      <td>{{$user->nama_lengkap}}</td>
      <td align="center">{{$user->tipe_user}}</td>
      <td align="center">
  

        <button type="button" class="btn btn-small btn-danger" data-toggle="modal" data-target="{{'#konfirmasi'.$user->id}}">
  Hapus
</button>
<div class="modal fade" id="{{'konfirmasi'.$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tidak</span></button>
        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
      </div>
      <div class="modal-body">
               Ini digunakan untuk menghapus Dosen/Mahasiswa yang benar-benar tidak digunakan dan tidak pernah memposting apapun. Apakah anda yakin menghapus user ini?...
      </div>
      <div class="modal-footer">
        <a data-dismiss="modal" class="btn btn-default">Tidak</a>

       <a class="btn btn btn-primary" href="{{URL::route('admin_hapus', $user->id)}}"  >Ya</a>
      </div>
    </div>
  </div>
</div>
      </td>
    </tr>

        {{-- Modal --}}
<!-- Modal -->

@endforeach






</table>
    @endsection