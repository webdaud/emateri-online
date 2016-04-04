<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            E-Materi App
            @show
        </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap3.min.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}

 

        <style>
        @section('styles')
            body {
                padding-top: 60px;
                background-image: url({{ URL::asset('img/bg.jpg'); }});
                background-size: cover;
            }
        @show
        </style>
    </head>

<body>
            

         <!-- Menu Utama -->  
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
 <!-- Menu sebelah kanan -->

           <a class="navbar-brand"  href="/" >
          {{ HTML::image('/icon/e-materi.png'); }}
          </a>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">          
          <li><a href="/upload_materi"><b class="glyphicon glyphicon-upload"></b> Upload Materi</a></li>  

            <li class="dropdown">
              <a href="" class="dropdown-toggle " data-toggle="dropdown"><b class="glyphicon glyphicon-user"></b> {{Auth::user()->nama_lengkap}} </a>
                       <ul class="dropdown-menu">
                       <li><a href="/dosen/password"><b class="glyphicon glyphicon-user"></b> Ganti Pasword</a></li>
                       <li><a href="/dosen/setting"><b class="glyphicon glyphicon-globe"></b> Edit Profil</a></li>
                       <li><a href="/logout"><b class="glyphicon glyphicon-log-out"></b> Logout</a></li>
            </ul>

          </ul>

        </div><!--/.nav-collapse -->
      </div>


    </div>


        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery1.11.0.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

        
@yield('content')


    </body>
</html>