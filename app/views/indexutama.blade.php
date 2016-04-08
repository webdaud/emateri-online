
@extends('layouts.layout_index')

@section('title')
    @parent
    - Aplikasi Materi Pelajaran/Kuliah Online.
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
  
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p> 


{{Form::open(array('url'=>'/cari'))}}


    <div class="row">
    <div class="form-group col-xs-5 col-xs-offset-3"> 
    <div class=""> 
    <input type="text" placeholder="Cari Materi Pelajaran/Pengajar" name="cari" class="form-control input-lg" value=""  >
    

        
          
         
 


<table width="320">
  <tr>
    <td><div class="radio"><label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" checked>
       Materi Kuliah</label></td>
    </div>   
  
    <td><div class="radio"><label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
      Guru/Dosen/Staf Pengajar</label></td>
    </div>     
  </tr>
</table>














    </div>
    </div>
    <button type="submit" class="btn btn-lg btn-primary"> Cari
        </button>


  
 



</div>


     {{Form::close()}}



<!-- Tombol Lihat Materi -->
<div class="row">
<div class="col-md-4 col-sm-offset-5">
{{ Form::open(array('url' => 'listmateri', 'method' => 'GET')) }}
  <button type="submit" class="btn btn-danger" aria-label="Left Align">
       <span class=" glyphicon glyphicon-th" aria-hidden="true"></span> Lihat Materi
  </button> 
  {{ Form::close() }}
</div>
</div>





    @endsection

