@extends('layouts.layout_index')

@section('title')
    @parent
    - Login
@stop

@section('content')

<div class="row">
<?php if(Session::has('register_error')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
        <div class="alert alert-warning alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('register_error') ?>
         <?php endif; ?> 
      
  </div>
</div>
<div class="row">
</div>
 <!-- Konten kiri --> 
<div class="row">
  <div class="col-md-4"></div>


 <!-- Konten ditengah --> 
  <div class="col-md-4">

{{Form::open(array('action' => 'HomeController@Login')) }} 

		<h2>Login</h2>
		<!-- Bila  ada error, maka muncul ini -->
		<p>
		</p>
<h1></h1>
		<p>
			{{Form::text('username', '', array('placeholder' => 'Masukkan Username', 'class' => 'form-control')) }}
		</p>
		<p>
			{{Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
		</p>
<h1></h1>
		<p>{{Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}</p>
	{{ Form::close() }}
<a href="daftar" class="btn btn-lg btn-default btn-block">Daftar</a>
  </div>
   <!-- Konten dikanan --> 
  <div class="col-md-4"></div>
</div>
@endsection