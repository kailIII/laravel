<html>
    <head>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="{{ asset('public/css/materialize.min.css') }}" rel="stylesheet">



        <title>Prueba</title>

       
    </head>
    <body>


    <ul id="dropdown1" class="dropdown-content">
      <li><a href="{!! route('roles.index') !!}"> <i class="material-icons left">view_week</i>Roles </a></li>
      <li><a href="{!! route('permisos.index') !!}"> <i class="material-icons left">lock_outline</i>Permisos </a></li>
      <li class="divider"></li>
      <li><a href="{!! route('usuarios.index') !!}"> <i class="material-icons left">perm_identity</i>Usuarios </a></li>
  </ul>
    <nav>
    <div class="nav-wrapper blue darken-1">
      <a href="#!" class="brand-logo center"><img src="{{ asset('public/img/logo_fwd.png') }}" class="responsive-img" width="200"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">settings</i>Configuracion<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="{!! route('cursos.index') !!}"><i class="material-icons left">visibility</i>Cursos</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="{{ URL::to('auth/logout') }}"><i class="material-icons left">power_settings_new</i> Salir </a></li>
      </ul>


      <ul class="side-nav" id="mobile-demo">
        <li><a href="{!! route('roles.index') !!}"> Roles </a></li>
        <li><a href="{!! route('permisos.index') !!}"> Permisos </a></li>
        <li><a href="{!! route('usuarios.index') !!}"> Usuarios </a></li>
        <li><a href="{!! route('cursos.index') !!}"> Cursos </a></li>
        <li><a href="{{ URL::to('auth/logout') }}"> Salir </a></li>
      </ul>



    </div>
  </nav>

  
       
    <!-- Dropdown Structure 
   
      
      <li><a href="{!! route('roles.index') !!}"> Roles </a></li>
      <li><a href="{!! route('permisos.index') !!}"> Permisos </a></li>
     <li><a href="{{ URL::to('auth/logout') }}">Salir</a></li>

     -->
        
  <div class="section no-pad-bot" id="index-banner">
      <div class="container">
    

             
            @yield('content')


            
      </div>       
  </div>


    </body>
</html>


<script src="{{ asset('public/js/materialize.min.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>