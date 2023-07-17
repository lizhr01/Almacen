<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Almacén</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->

  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini login-page">
    @if(Auth::user())
        <div class="wrapper">
             @include('modulos.cabecera')
             @if(auth()->user()->rol == "Administrador")
             @include('modulos.menu')
             @else
             @include('modulos.menu')
             @endif
            @yield('contenido')


        </div>
    @else
        @yield('content')
    @endif

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/raphael/raphael.min.js"></script>
<script src="http://localhost/Almac%c3%a9n/public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!-- jQuery Knob Chart -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/moment/min/moment.min.js"></script>
<script src="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- Slimscroll -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/Almac%c3%a9n/public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/Almac%c3%a9n/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/Almac%c3%a9n/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/Almac%c3%a9n/public/dist/js/demo.js"></script>


<script src="http://localhost/Almac%c3%a9n/public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/Almac%c3%a9n/public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/Almac%c3%a9n/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="http://localhost/Almac%c3%a9n/public/bower_components/input-mask/jquery.inputmask.js"></script>
<script src="http://localhost/Almac%c3%a9n/public/bower_components/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="http://localhost/Almac%c3%a9n/public/bower_components/input-mask/jquery.inputmask.extensions.js"></script>
<script src="http://localhost/Almac%c3%a9n/public/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  $('.sidebar-menu').tree();

  $('.date1').datepicker({
    autoclose: true
  });

  $(".DT1").DataTable({
  
  "language":{

      "sSearch":"Buscar:",
      "sEmptyTable":"No hay datos en la Tabla",
      "sZeroRecords":"No se encontraron resultados",
      "sInfo":"Mostrando registros del _START_al_END_ de un total _TOTAL_",
      "SInfoEmpty":"Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered":"(filtrando de un total de _MAX_ registros)",
      "oPaginate":{

          "sFirst":"Primero",
          "sLast":"Último",
          "sNext":"Siguiente",
          "sPrevious":"Anterior"
      },

      "sLoadingRecords":"Cargando...",
      "sLengthMenu":"Mostrar _MENU_ registros"
      }
  });

  $('.table').on('click','.EliminarUsuario',function(){
      
      var Uid = $(this).attr('Uid');
      var Usuario = $(this).attr('Usuario');

      Swal.fire({

          title: '¿Seguro que Desea Eliminar el Usuario: '+Usuario+'?',
          icon: 'warning',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Eliminar',
          confirmButtonColor: '#3085d6'

      }).then((result) => {

          if(result.isConfirmed){
              window.location = "Eliminar-Usuario/"+Uid;
          }
      })
  });

  $('.table').on('click','.EliminarProveedor',function(){
      
      var Cid = $(this).attr('Cid');
      var Cliente = $(this).attr('Cliente');

      Swal.fire({

          title: '¿Seguro que Desea Eliminar el Proveedor: '+Cliente+'?',
          icon: 'warning',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Eliminar',
          confirmButtonColor: '#3085d6'

      }).then((result) => {

          if(result.isConfirmed){
              window.location = "Eliminar-Proveedor/"+Cid;
          }
      })
  });
  $('.table').on('click','.QuitarProducto',function(){
      
      var Lid = $(this).attr('Lid');

      Swal.fire({

          title: '¿Seguro que Desea Eliminar el Producto?',
          icon: 'warning',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Eliminar',
          confirmButtonColor: '#3085d6'

      }).then((result) => {

          if(result.isConfirmed){
              window.location = "Producto-Q/"+Lid;
          }
      })
  });

  $('[data-mask]').inputmask();
</script>

@if(session('UsuarioCreado') == 'OK')
    <script type="text/javascript">
        Swal.fire(
            'El Usuario ha Sido Creado',
            '',
            'success'
        )
    </script>
@elseif(session('ClienteCreado') == 'OK')
    <script type="text/javascript">
        Swal.fire(
            'El Proveedor ha Sido Creado',
            '',
            'success'
        )
    </script>
@elseif(session('ClienteActualizado') == 'OK')
    <script type="text/javascript">
        Swal.fire(
            'El Proveedor ha Sido Actualizado',
            '',
            'success'
        )
    </script>
@elseif(session('ProductoCreado') == 'OK')
    <script type="text/javascript">
        Swal.fire(
            'El Producto ha Sido Agregado Correctamente',
            '',
            'success'
        )
    </script>
@endif

<?php
$exp = explode('/', $_SERVER["REQUEST_URI"]);
?>

@if($exp[3] == 'Editar-Usuario')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarUsuario').modal('toggle');
        })
    </script>

@elseif($exp[3] == 'Editar-Proveedor')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarProveedor').modal('toggle');
        })
    </script>
@elseif($exp[3] == 'Producto-E')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarProducto').modal('toggle');
        })
    </script>
@endif

</body>
</html>
