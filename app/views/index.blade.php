@extends('layouts.layout_slide')

@section('title')
    @parent

    - Aplikasi Materi Pelajaran/Kuliah Online.
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
 
<div class="container-fluid">

<div class="col-xs-6 col-xs-offset-3">

<div class="bs-example" data-example-id="hoverable-table">

    <table class="table table-hover">

      <thead>
 
      </thead>

      <tbody>
       
      
        <tr>
            @foreach ($list_study as $list_study2)

          <td>
            @foreach ($pengajar as $pengajar2)
           @if ( $list_study2->id_login  === $pengajar2->id )
          <h5>{{$list_study2->matakuliah .' -  By   '. $pengajar2->nama_lengkap}}  </h5>
            @endif
           @endforeach


        </td>
        <td>
        <h5></h5>
        {{Form::open(array('url'=>'lihat_materi/' . $list_study2->id,  'files'=>true))}} 
          <button type="submit" class="btn btn-xs btn-default">Lihat Materi
          <span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
          </button> 
          {{Form::close()}}
        </td>
        </tr>
         
 @endforeach 
      </tbody>
    </table>
  </div> 

</div>
</div>








@stop