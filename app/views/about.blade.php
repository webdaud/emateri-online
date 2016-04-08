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
 

<div class="col-md-8 col-md-offset-2">
<p></p>
  <a  class="list-group-item"> 
 <p></p>
<div>

<h5>E-Materi merupakan website yang membantu dosen dan para praktisi lainnya membuat dan menyebarkan seluruh materi/ilmu pengetahuan yang dimiliki</h6>
<p>
<h5>Dibuat dengan tujuan untuk membuat orang yang membutuhkan ilmu pengetahuan mendapat sumber baru yang lebih lebih baik.</h6>
<h5>Seorang yang memiliki ilmu pengetahuan yang sangat berguna dapat menshare ilmu kebanyak orang dan menghasilkan uang darinya</h5>
<h5>Dibuat dengan tujuan mulia - Daud Hamonangan</h5>

</p>
     
  
    </div>
    </a>
  </div>




@stop