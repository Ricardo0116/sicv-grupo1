
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url('dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">MODULOS</li><!-- /.menu-title -->
                    <li class="menu-item-has-children  dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-users-cog"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Trabajadores</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Clientes</a></li>
                        </ul>
                    </li>
                    <li class=" dropdown">
                        <a href="{{url('productos')}}">  <i  class="menu-icon fab fa-product-hunt"></i>Productos</a>
                        
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>