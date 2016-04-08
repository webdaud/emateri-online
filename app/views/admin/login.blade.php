@extends('layouts.layout_login')

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

<!-- sign menggunakan akun google -->
 <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>

<h1></h1>

		<p>{{Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}</p>
	{{ Form::close() }}
<a href="daftar" class="btn btn-lg btn-default btn-block">Daftar</a>

  </div>
   <!-- Konten dikanan --> 

  <div class="col-md-4"></div>
</div>
@endsection