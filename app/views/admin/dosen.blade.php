@extends('layouts.layout_dosen')

@section('title')
    @parent

    - Menu Utama Dosen.
@stop
@section('content')

  <!-- Register Sukses -->
  <div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
      <h1>ini menu Dosen</h1>

     {{Auth::check()?"Welcome, " . Auth::user()->username : "Kenapa Tidak Login?..."}}




  </div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4"></div>
</div>



  


    @endsection



 