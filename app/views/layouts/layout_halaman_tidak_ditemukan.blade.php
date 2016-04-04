<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Halaman Tidak Ditemukan
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
            }
a:link {
    color: #00F;
    text-decoration: none;
}
a:visited {
    text-decoration: none;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
}
        @show
        </style>
    </head>

<body>
  
<table width="775" align="center">
  <tr>
    <td align="center"><p><img src="/img/error_tidak_ditemukan.png" width="447" height="346" /></p>
    <p>&nbsp;</p>
    <p>Kembali Ke <a href="/">Home</a></p>
    </td>
  </tr>
</table>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery1.11.0.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

        
@yield('content')


    </body>
</html>