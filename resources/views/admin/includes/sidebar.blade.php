
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin.dashbord')}}" class="brand-link">
    <img src="{{asset("addmin/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    

    <!-- SidebarSearch Form -->
    <br>
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
        <!--  gestion des etudiant -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Etudiants
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route("show.all.student") }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste des étudiants</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ route("add.student") }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un étudiant</p>
              </a>
            </li>
            
          </ul>
        </li>
        <!-- Gestion des Prof -->

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Enseignants
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route("show.all.prof") }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste des enseignants</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route("add.prof") }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un enseignant</p>
              </a>
            </li>
            
          </ul>
        </li>
        <!-- Gestion des matiere -->

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Matières
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route("show.all.matiere") }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste des matières</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route("add.matiere") }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter une matière</p>
              </a>
            </li>
            
          </ul>
        </li>

       
       
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>

  <!-- /.sidebar -->
</aside>