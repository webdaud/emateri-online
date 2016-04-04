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
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }} 
        <style>
        @section('styles')
            body {
                padding-top: 60px;
                
                background-image: url({{ 'img/bg.jpg' }}); 
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

           <a class="navbar-brand"  href="{{'../public'}}" >
      {{ HTML::image('/icon/e-materi.png'); }}

 
    </a>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">


 <!-- Menu sebelah kanan -->
 <!-- Bila Tamu   -->
             @if (Auth::guest())
                    <li><a href="/login"><b class="glyphicon glyphicon-user"></b> Login</a></li>
                    <li><a href=""><b class="glyphicon glyphicon-globe"></b> Tentang</a></li>
 

  <!-- Bila Pelajar/Mahasiswa/Dosen  -->
@elseif (Auth::user()->tipe_user=="Learner")
<li><a href="/list_matakuliah"><b class="glyphicon glyphicon-list"></b> List Educator</a></li>
<li class="dropdown">
<a href="" class="dropdown-toggle " data-toggle="dropdown"><b class="glyphicon glyphicon-user"></b> {{Auth::user()->nama_lengkap}} </a>
<ul class="dropdown-menu">
    <li><a href="/pengguna/profil/{{Auth::user()->id}}"><b class="glyphicon glyphicon-user"></b> Profi</a></li>
    <li><a href="/pengguna/password"><b class="glyphicon glyphicon-lock"></b> Ganti Password</a></li>
    <li><a href="/logout"><b class="glyphicon glyphicon-log-out"></b> Logout</a></li>
    </ul>


    


 <!-- Bila Dosen  -->
                @elseif (Auth::user()->tipe_user=="Educator")
                 <li><a href="/upload_materi"><b class="glyphicon glyphicon-upload"></b> Upload Materi</a></li>  
                 <li class="dropdown">
                 <a href="" class="dropdown-toggle " data-toggle="dropdown"><b class="glyphicon glyphicon-user"></b> {{Auth::user()->nama_lengkap}} </a>
<!-- Bila Administrator  -->
                @elseif (Auth::user()->tipe_user=="Administrator")
                    <li><a href="/admin"><b class="glyphicon glyphicon-user"></b> {{Auth::user()->nama_lengkap}}</a></li>
                    <li><a href="/logout"><b class="glyphicon glyphicon-log-out"></b> Logout</a></li>
                       <ul class="dropdown-menu">
                       <li><a href="/dosen"><b class="glyphicon glyphicon-pencil"></b> Ganti Password</a></li>
                       <li><a href="/setting"><b class="glyphicon glyphicon-globe"></b> Edit Profil Dosen</a></li>
                       <li><a href="/logout"><b class="glyphicon glyphicon-log-out"></b> Logout</a></li>
            </ul>
            </li>
                @endif
            
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