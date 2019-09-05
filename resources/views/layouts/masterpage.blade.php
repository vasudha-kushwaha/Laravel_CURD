<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>   
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
        .square {
        width: 400px;
        height: 400px;
        margin: 25px;
        -ms-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        overflow: hidden;
        background:url(img/i1.jpg);
        background-repeat:no-repeat; background-size:cover;
        }
        </style>
    <title>@yield('title')</title>
</head>
<body style="background-image: url(img/img.jpg); background-repeat:no-repeat; background-size:cover;">
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper  green">
        <a href="#!" class="brand-logo">SunPrime</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{ route('curd.myhome') }}">Home</a></li>
          <li><a href="{{ route('curd.about') }}">About</a></li>
          <li><a href="{{ route('curd.blogs') }}">Blogs</a></li>
          <li><a href="{{ route('curd.authors') }}">Authors</a></li>
          <li><a href="{{ route('curd.adminlogin') }}">Admin Login</a></li>
          <li><a href="{{ route('curd.curd') }}">Insert Operation</a></li>
          <li><a href="{{ route('curd.display') }}">View Data</a></li>
        </ul>
      </div>
    </nav>
  </div>
    <div class="container">
    @yield('content')
    </div>
    <footer class="page-footer green">
<div class="row">
<center>Follow us on facebook</center>
</div>
</footer>
</body>
</html>