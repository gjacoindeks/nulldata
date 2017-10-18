<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    

    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('date/css/bootstrap-datetimepicker.min.css')}}">
  
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    
  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">NullData</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ url('usuarios') }}">Usuarios</a></li>
              <li><a href="{{ url('usuarios/create') }}">Crear Usuario</a></li>
              
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


          @yield('contenido')

      



      <script type="text/javascript" src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('bootstrap/js/domi.js')}}"></script>
      <script type="text/javascript" src="{{asset('date/js/bootstrap-datetimepicker.min.js')}}"></script>
