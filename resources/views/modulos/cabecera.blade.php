<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('Inicio') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class=""></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Los patos</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{-- @if(auth()->user()->foto == "" )
              <img src="{{ url('storage/defecto.png') }}" class="user-image" alt="User Image">
                  
              @else
              <img src="{{ url('storage/'.auth()->user()->foto) }}" class="user-image" alt="User Image">
              @endif --}}
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height: 100px">
                

                <p>
                  {{ auth()->user()->name }} - {{ auth()->user()->rol }}
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('Mis-Datos') }}" class="btn btn-primary btn-flat">Mis datos</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-flat">Salir</a>
                </div>
                <form method="post" id="logout-form" action="{{ route('logout') }}">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>