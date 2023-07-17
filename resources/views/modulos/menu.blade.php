<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li>
          <a href="{{ url('Inicio') }}">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>

        <li>
          <a href="{{ url('Usuarios') }}">
            <i class="fa fa-users"></i>
            <span>Usuarios</span>
          </a>
        </li>

        <li>
          <a href="{{ url('Proveedores') }}">
            <i class="fa fa-users"></i>
            <span>Proveedores</span>
          </a>
        </li>

        <li>

            <a href="{{ url('Productos') }}">
              <i class="fa fa-list-ul"></i>
              <span>Inventario</span>
            </a>
<!-- 
            <ul class="treeview-menu">

              <li>
                <a href="{{ url('Proveedores') }}">
                  <i class="fa fa-users"></i>
                  <span>Productos</span>
                </a>
              </li>
              <li>
                <a href="{{ url('Proveedores') }}">
                  <i class="fa fa-users"></i>
                  <span>Proveedores</span>
                </a>
              </li>
              
            </ul> -->
          
        </li>

        <li>
          <a href="{{ url('Pedidos') }}">
            <i class="fa fa-users"></i>
            <span>Orden de compra</span>
          </a>
        </li>

        <li>
          <a href="{{ url('Reembolsos') }}">
            <i class="fa fa-users"></i>
            <span>Reembolsos</span>
          </a>
        </li>

        <li>
          <a href="{{ url('Reportes') }}">
            <i class="fa fa-book"></i>
            <span>Reportes</span>
          </a>
        </li>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>