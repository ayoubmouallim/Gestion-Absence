<nav class="main-header navbar navbar-expand navbar-white navbar-right navbar-light">
  <!-- Left navbar links -->
 
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Accueill</a>
    </li>
    

    <li class="nav-item d-none d-sm-inline-block">
      <a class="nav-link" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                           Déconnexion
                                      </a>
  
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
          </li>
</ul>

</nav>











