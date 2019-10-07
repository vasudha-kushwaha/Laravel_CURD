<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" media="screen,projection"/>
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
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
          <li><a href="{{ route('curd.inline') }}">Inline Edit</a></li>
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
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/materialize.js"></script> 

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script>
  // Or with jQuery
  $(document).ready(function(){
    $('.onEdit-btn').click(function(){
      var todoId = $(this).attr('todo-id');
      var todoH = $(this).attr('todo-h');
      var todoT = $(this).attr('todo-h');
      var todoC = $(this).attr('todo-c');
      var todoW = $(this).attr('todo-w');

      $('#onEditModel').find('#todo-data-id').val(todoId);
      $('#onEditModel').find('#heading').val(todoH);
      $('#onEditModel').find('#tags').val(todoT);
      $('#onEditModel').find('#content').val(todoC);
      $('#onEditModel').find('#writer').val(todoW);
       
      //  $('#todo-data-id').text(todoId);
      //  //way 1 =  
      //  $('#onEditModel').find('#todo-data-id').val(todoId);
      //  //way 2 =  
      //  $('#onEditModel').find('input[type=hidden]').val(todoId);
      //  //way 3 
      //  $('#onEditModel').find('input[name=hide]').val(todoId);
        $('#onEditModel').modal();
    });

  });
  //baki khud karo na jquery use ki ho na kuch sidha material implemnt kar li. material use karna h jquery padho phele.
  //ok sir thanku

</script>
@if (Session::has('success'))
<script>
toastr.success('Success!',"{{Session::get('success')}}")
</script>
@endif

@if (Session::has('error'))
<script>
toastr.error('error!',"{{Session::get('error')}}")
</script>
@endif

@if (Session::has('info'))
<script>
toastr.info('info!',"{{Session::get('info')}}")
</script>
@endif

@if (Session::has('warning'))
<script>
toastr.warning('warning!',"{{Session::get('warning')}}")
</script>
@endif

</body>
</html>