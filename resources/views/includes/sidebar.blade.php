<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    <img src="{{ asset('vendors/img/AdminLTELogo.png') }}" alt=""
    class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">TES</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column"
    data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
    <a href="{{route('welcome')}}" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
    Dashboard
    </p>
    </a>
    </li> 
    <li class="nav-item">
        <a href="{{route('data-tables')}}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
        Data-tables
        </p>
        </a>
        </li>
    
    
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>