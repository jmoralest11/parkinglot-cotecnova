<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('img/Logo-Admin.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{url('/parking')}}" class="nav-link {{Request::is('parking') ? 'active' : ''}}">
                        <i class="fa fa fa-map-marker nav-icon" id="parqueadero" aria-hidden="true"></i>
                        <p>Parqueadero</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/inputs_outputs')}}" class="nav-link {{Request::is('inputs_outputs') ? 'active' : ''}}">
                        <i class="nav-icon fa fa-forward" id="entradas-salidas" aria-hidden="true"></i>
                        <p>Entradas y Salidas</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/persons')}}" class="nav-link {{Request::is('persons') ? 'active' : ''}}">
                        <i class="nav-icon fa fa-user" id="usuario" aria-hidden="true" style="color: slateblue;"></i>
                        <p>Usuarios</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/vehicles')}}" class="nav-link {{Request::is('vehicles') ? 'active' : ''}}">
                        <i class="nav-icon fa fa-car" id="vehiculo" aria-hidden="true"></i>
                        <p>Vehículos</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/infrastructure')}}" class="nav-link {{Request::is('infrastructure') ? 'active' : ''}}">
                        <i class="nav-icon fa fa-building" id="infraestructura" aria-hidden="true"></i>
                        <p>Infraestructura</p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>