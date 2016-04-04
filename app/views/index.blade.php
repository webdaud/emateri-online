@extends('layouts.layout_slide')

@section('title')
    @parent

    - Aplikasi Materi Pelajaran/Kuliah Online.
@stop

<style type="text/css">
/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
 
.fade-carousel {
    position: relative;
    height: 10vh;
}
.fade-carousel .carousel-inner .item {
    height: 10vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #fff;
    border-color: #fff;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 5px;
  height: 5px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;


    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h6 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding-top:17px;
}
 
.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*           Background Hitam          */
/********************************/
/* .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #000000;
    opacity: .4;
}*/

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slide Gambar atas */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 45px;
  background-size: inherit;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {

  background-image: url(img/teks-bar-atas/3.jpg); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(img/teks-bar-atas/2.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(img/teks-bar-atas/1.jpg);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 1265px; }    
}
@media screen and (max-width: 1265px){
    .hero h1 { font-size: 4em; }    
}
</style>



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