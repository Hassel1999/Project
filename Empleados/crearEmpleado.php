<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Planilla de Pagos</title>
  <!-- FUENTES-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- CSS-->
  <link href="../css/estilo.css" rel="stylesheet">
  <link rel="icon" href="../img/Moneda.png">
  <!--JAVASCRIPT-->
  <script src="https://code.jquery.com/jquery-1.12.1.js">
    type = "text/javascript"
  </script>
  <link rel="stylesheet" href="../css/estilosValidacion.css">
</head>

<script src="../SqlTools/confirmationInsert.js"></script>

<body id="page-top">
  <?php $Usuario = $_GET['idUsuario'];
  $Empresa = $_GET['Empresas_idEmpresas'];

  include '../SqlTools/database.php';
  $auxiliar = new database();
  $auxiliar->select('usuarios', 'Usuario', "idUsuario = '$Usuario'");
  $nombre = $auxiliar->sql;
  $name = mysqli_fetch_assoc($nombre); ?>

  <!-- Envoltura de pagina -->
  <div id="wrapper">

    <!-- barra lateral -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Barra lateral - Marca -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../menu.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">
        <i class="fas "><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-money" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
            <rect x="9" y="3" width="6" height="4" rx="2" />
            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
            <path d="M12 17v1m0 -8v1" />
          </svg></i>
        <div class="sidebar-brand-text mx-3">Planilla de Pago</div>
      </a>

      <!-- Divisor -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Menu-->
      <li class="nav-item active">
        <a class="nav-link" href="../menu.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">
          <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <polyline points="5 12 3 12 12 3 21 12 19 12" />
              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
            </svg> Menu</span></a>
      </li>

      <!-- Divisor -->
      <hr class="sidebar-divider">

      <!-- Nav Item -Empleados Cerrar menú -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmpleados" aria-expanded="true" aria-controls="collapseEmpleados">
          <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="9" cy="7" r="4" />
              <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg> Empleados</span>
        </a>
        <div id="collapseEmpleados" class="collapse" aria-labelledby="headingEmpleados" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="crearEmpleado.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <line x1="12" y1="11" x2="12" y2="17" />
                <line x1="9" y1="14" x2="15" y2="14" />
              </svg> Crear Empleado</a>
            <a class="collapse-item" href="tablas.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><i class="fas fa-fw fa-table"></i> Mostrar Empleados</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Planillas Plegar Menú -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlanillas" aria-expanded="true" aria-controls="collapsePlanillas">
          <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
              <rect x="9" y="3" width="6" height="4" rx="2" />
              <line x1="9" y1="12" x2="9.01" y2="12" />
              <line x1="13" y1="12" x2="15" y2="12" />
              <line x1="9" y1="16" x2="9.01" y2="16" />
              <line x1="13" y1="16" x2="15" y2="16" />
            </svg> Planillas</span>
        </a>
        <div id="collapsePlanillas" class="collapse" aria-labelledby="headingPlanillas" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../Planilla/historialPlanillas.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-report" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="17" cy="17" r="4" />
                <path d="M17 13v4h4" />
                <path d="M12 3v4a1 1 0 0 0 1 1h4" />
                <path d="M11.5 21h-6.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v2m0 3v4" />
              </svg> Registro</a>
            <a class="collapse-item" href="../Planilla/creacionPlanilla.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <line x1="12" y1="11" x2="12" y2="17" />
                <line x1="9" y1="14" x2="15" y2="14" />
              </svg> Crear Planilla</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Cargos Plegar Menú -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCargos" aria-expanded="true" aria-controls="collapseCargos">
          <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
              <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />
              <polyline points="12 8 7 3 3 7 8 12" />
              <line x1="7" y1="8" x2="5.5" y2="9.5" />
              <polyline points="16 12 21 17 17 21 12 16" />
              <line x1="16" y1="17" x2="14.5" y2="18.5" />
            </svg> Cargos</span>
        </a>
        <div id="collapseCargos" class="collapse" aria-labelledby="headingCargos" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../Cargos/TablaCargos.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><i class="fas fa-fw fa-table"></i> Mostrar Cargos</a>
            <a class="collapse-item" href="../Cargos/CreacionCargos.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <line x1="12" y1="11" x2="12" y2="17" />
                <line x1="9" y1="14" x2="15" y2="14" />
              </svg> Crear Cargo Nuevo</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Ciudades Plegar Menú -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCiudades" aria-expanded="true" aria-controls="collapseCiudades">
          <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-skyscraper" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="3" y1="21" x2="21" y2="21" />
              <path d="M5 21v-14l8 -4v18" />
              <path d="M19 21v-10l-6 -4" />
              <line x1="9" y1="9" x2="9" y2="9.01" />
              <line x1="9" y1="12" x2="9" y2="12.01" />
              <line x1="9" y1="15" x2="9" y2="15.01" />
              <line x1="9" y1="18" x2="9" y2="18.01" />
            </svg> Ciudades</span>
        </a>
        <di id="collapseCiudades" class="collapse" aria-labelledby="headingCiudades" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../Ciudades/TablaCiudades.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><i class="fas fa-fw fa-table"></i> Mostrar Ciudades</a>
            <a class="collapse-item" href="../Ciudades/CreacionCiudades.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <line x1="12" y1="11" x2="12" y2="17" />
                <line x1="9" y1="14" x2="15" y2="14" />
              </svg> Crear Ciudad Nueva</a>
          </div>
      </li>

      <!-- Nav Item - Departamentos Plegar Menú -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartamentos" aria-expanded="true" aria-controls="collapseDepartamentos">
          <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="3" y1="21" x2="21" y2="21" />
              <line x1="9" y1="8" x2="10" y2="8" />
              <line x1="9" y1="12" x2="10" y2="12" />
              <line x1="9" y1="16" x2="10" y2="16" />
              <line x1="14" y1="8" x2="15" y2="8" />
              <line x1="14" y1="12" x2="15" y2="12" />
              <line x1="14" y1="16" x2="15" y2="16" />
              <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
            </svg> Departamentos</span>
        </a>
        <di id="collapseDepartamentos" class="collapse" aria-labelledby="headingDepartamentos" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../Departamentos/TablaDepartamentos.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><i class="fas fa-fw fa-table"></i> Mostrar Departamentos</a>
            <a class="collapse-item" href="../Departamentos/CreacionDepartamentos.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <line x1="12" y1="11" x2="12" y2="17" />
                <line x1="9" y1="14" x2="15" y2="14" />
              </svg> Crear Departamento Nuevo</a>
          </div>
      </li>
      <!-- Barra lateral cerrar (Barra lateral) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- Fin de la barra lateral -->

    <!-- Envoltorio de contenido -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main contenido -->
      <div id="content">

        <!-- Barra superior -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Alternar barra lateral (barra superior) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Barra superior Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - Información del usuario -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name['Usuario'] ?></span>
                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
              </a>
              <!-- Desplegable - Información del usuario -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Opciones
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Actividad
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- Fin de la barra superior -->

        <!-- Contenido de la página de inicio -->
        <div class="container-fluid">
          <h1 class="h3 mb-1 text-gray-800">Creacion de Empleado</h1>
        </div>
        <div class="container">

          <!-- Fila exterior -->
          <div class="row justify-content-center">

            <div class="col-xl-20 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                  <!-- Fila anidada dentro del cuerpo de la tarjeta -->
                  <div class="">
                    <div class="p-5">
                      <!--Inicio de Form-->
                      <form class="formulario" action="Insert_Employee.php" id="formulario" method="post">

                        <input type="hidden" name="Usuario" value="<?php echo $Usuario; ?>">
                        <input type="hidden" name="Empresa" value="<?php echo $Empresa; ?>">
                        <!--Grupo: Identidad-->
                        <div class="formulario__grupo" id="grupo__identidad">
                          <label for="identidad" class="formulario__label">Identidad</label>
                          <div class="formulario__grupo-input">

                            <input type="text" class="formulario__input" name="Cedula" id="Cedula" pattern="[01]{1}[0-9]{1}[02]{1}[0-2]{1}[12]{1}[09]{1}[0-9]{7}" onkeypress="return soloNumeros(event)" placeholder="Identidad" value="<?php if (isset($row)) {echo $row['Cedula'];} ?>" required minlength="13" maxlength="13">


                          </div>
                          <p class="formulario__input-error">El numero de identidad solo puede contener numeros y el maximo son 13.</p>
                        </div>
                        <!--Grupo: Sexo-->
                        <div class="formulario__grupo" id="grupo__sexo">
                          <label for="sexo" class="formulario__label">Sexo</label>
                          <div class="formulario__grupo-input">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="radio" name="Sexos_idSexo" value="1" <?php if (isset($row)) if ($row['Sexos_idSexo'] == 1) : ?> checked="checked" <?php endif ?> required>
                              <label for="contactChoice1">Masculino</label>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="radio" name="Sexos_idSexo" value="2" <?php if (isset($row)) if ($row['Sexos_idSexo'] == 2) : ?> checked="checked" <?php endif ?> required>
                              <label for="contactChoice2">Femenino</label>
                            </div>
                          </div>
                        </div>
                        <!--Grupo: Primer Nombre-->
                        <div class="formulario__grupo" id="grupo__primerNombre">
                          <label for="primerNombre" class="formulario__label">Primer Nombre</label>
                          <div class="formulario__grupo-input">

                            <input type="text" class="formulario__input" name="PrimerNombre" id="PrimerNombre" onkeypress="return soloLetras(event)" placeholder="Primer Nombre" value="<?php if (isset($row)) {echo $row['PrimerNombre'];} ?>" required required minlength="3" maxlength="15">

                          </div>
                          <p class="formulario__input-error">EL primer nombre tiene que ser de 3 a 15 digitos y solo puede contener
                            letras.</p>
                        </div>

                        <!--Grupo: Segundo Nombre-->
                        <div class="formulario__grupo" id="grupo__segundoNombre">
                          <label for="segundoNombre" class="formulario__label">Segundo Nombre</label>
                          <div class="formulario__grupo-input">

                            <input type="text" class="formulario__input" name="SegundoNombre" id="SegundoNombre" onkeypress="return soloLetras(event)" placeholder="Segundo Nombre" value="<?php if (isset($row)) {echo $row['SegundoNombre'];} ?>" minlength="3" maxlength="15">


                          </div>
                          <p class="formulario__input-error">EL segundo nombre tiene que ser de 3 a 15 digitos y solo puede contener
                            letras.</p>
                        </div>

                        <!--Grupo: Primer Apellido-->
                        <div class="formulario__grupo" id="grupo__primerApellido">
                          <label for="primerApellido" class="formulario__label">Primer Apellido</label>
                          <div class="formulario__grupo-input">

                            <input type="text" class="formulario__input" name="PrimerApellido" id="PrimerApellido" onkeypress="return soloLetras(event)" placeholder="Primer Apellido" value="<?php if (isset($row)) {echo $row['PrimerApellido'];} ?>" required minlength="3" maxlength="15">

                          </div>
                          <p class="formulario__input-error">EL primer apellido tiene que ser de 3 a 15 digitos y solo puede contener
                            letras.</p>
                        </div>

                        <!--Grupo: Segundo Apellido-->
                        <div class="formulario__grupo" id="grupo__segundoApellido">
                          <label for="segundoApellido" class="formulario__label">Segundo Apellido</label>
                          <div class="formulario__grupo-input">

                            <input type="text" class="formulario__input" name="SegundoApellido" id="SegundoApellido" onkeypress="return soloLetras(event)" placeholder="Segundo Apellido" value="<?php if (isset($row)) {echo $row['SegundoApellido'];} ?>" minlength="3" maxlength="15">


                          </div>
                          <p class="formulario__input-error">EL segundo apellido tiene que ser de 3 a 15 digitos y solo puede contener
                            letras.</p>
                        </div>
                        <!--Grupo: Telefono-->
                        <div class="formulario__grupo" id="grupo__telefono">
                          <label for="telefono" class="formulario__label">Telefono</label>
                          <div class="formulario__grupo-input">

                            <input type="text" class="formulario__input" name="Telefono" id="Telefono" pattern="[2389]{1}[0-9]{7}" onkeypress="return soloNumeros(event)" placeholder="Telefono" value="<?php if (isset($row)) {echo $row['Telefono'];} ?>" minlength="8" required maxlength="8">
                          </div>
                          <p class="formulario__input-error">El telefono solo puede contener numeros,  debe iniciar con 2, 3, 8 o 9 y el maximo son 8.</p>

                        </div>


                        <!--Grupo: Direccion-->
                        <div class="formulario__grupo" id="grupo__Direccion">
                          <label for="direccion" class="formulario__label">Direccion</label>
                          <div class="formulario__grupo-input">

                            <input type="text" class=" formulario__input" name="Direccion" id="Direccion" onkeypress="return soloLetrasYespeciales(event)" placeholder="Direccion" value="<?php if (isset($row)) {echo $row['Direccion'];} ?>" required minlength="3" maxlength="50">

                          </div>
                          <p class="formulario__input-error">La direccion tiene que ser de 3 a 50 digitos y solo puede contener
                            letras.</p>
                        </div>
                        <!--Grupo: Departamento-->
                        <?php
                        $grid = new database();
                        $grid->select('departamentos', '*');
                        $table = $grid->sql;
                        ?>
                        <div class="formulario__grupo" id="grupo__Departamentos_idDepartamentos">
                          <label for="departamento" class="formulario__label">Departamento</label>
                          <select class="formulario__input" name="Departamentos_idDepartamentos" id="Departamentos_idDepartamentos" onchange="cambio()" required>
                            <option value="">Seleccione un departamento</option>
                            <?php while ($ex = mysqli_fetch_assoc($table)) { ?>
                              <option value="<?php echo $ex['idDepartamentos']; ?>"><?php echo $ex['DescripcionDepto']; ?></option>
                            <?php } ?>
                          </select>
                          <p class="formulario__input-error">Debe seleccionar un departamento.</p>
                        </div>

                        <!--Grupo: Cargo-->
                        <?php
                        $grid = new database();
                        $grid->select('cargos', '*');
                        $table = $grid->sql;
                        ?>
                        <div class="formulario__grupo" id="grupo__Cargos_idCargos">
                          <label for="direccion" class="formulario__label">Cargo</label>
                          <select class="formulario__input" name="Cargos_idCargos" id="Cargos_idCargos" required>
                            <option value="">Seleccione un cargo</option>
                          </select>
                          <p class="formulario__input-error">Debe seleccionar un cargo.</p>
                        </div>
                        <!--Grupo: Ciudad-->
                        <?php
                        $grid->select('ciudades', '*');
                        $table = $grid->sql;
                        ?>
                        <div class="formulario__grupo" id="grupo__Ciudades_idCiudades">
                          <label for="ciudad" class="formulario__label">Ciudades</label>
                          <select class="formulario__input" name="Ciudades_idCiudades" id="Ciudades_idCiudades" SelectedItem="null" value="<?php if (isset($row)) {
                                                                                                                                              echo $row['Ciudades_idCiudades'];
                                                                                                                                            } ?>" required>
                            <option value="" selected>Seleccione una ciudad</option>
                            <?php while ($ex = mysqli_fetch_assoc($table)) { ?>
                              <option value=<?php echo $ex['idCiudades']; ?>><?php echo $ex['DescripcionCiudad']; ?></option>
                            <?php } ?>
                          </select>
                          <p class="formulario__input-error">Debe seleccionar una ciudad.</p>
                        </div>

                        <!--Grupo: Estado-->
                        <div class="formulario__grupo" id="grupo__estado">
                          <label for="estado" class="formulario__label">Estado</label>
                          <div class="formulario__grupo">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="radio" name="Estados_idEstado" value="1" <?php if (isset($row)) if ($row['Estados_idEstado'] == 1) : ?> checked="checked" <?php endif ?> required>
                              <label for="contactChoice1">Activo</label>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="radio" name="Estados_idEstado" value="2" <?php if (isset($row)) if ($row['Estados_idEstado'] == 2) : ?> checked="checked" <?php endif; ?> required>
                              <label for="contactChoice2">Inactivo</label>
                            </div>
                          </div>
                        </div>
                        <!--Grupo: Fecha de Nacimiento-->
                        <div class="formulario__grupo" id="grupo__FechaNacimiento">
                          <label for="fechaNacimiento" class="formulario__label">Fecha de Nacimiento</label>
                          <div class="formulario__grupo-input">

                            <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="formulario__input" placeholder="" value="<?php if (isset($row)) {echo $row['FechaNacimiento'];} else {echo '';} ?>" required min="1980-01-01" max="2001-12-31">

                          </div>
                          <p class="formulario__input-error">Debe ingresar su fecha de nacimiento.</p>
                        </div>
                        <!--Grupo: Fecha de Ingreso-->
                        <div class="formulario__grupo" id="grupo__fechaIngreso">
                          <label for="fechaIngreso" class="formulario__label">Fecha de Ingreso</label>
                          <div class="formulario__grupo-input">

                            <input type="date" name="FechaIngreso" class="formulario__input" placeholder="" value="<?php if (isset($row)) {echo $row['FechaIngreso'];} else {echo date("Y-m-d");} ?>" required min="2001-12-31">

                          </div>
                        </div>
                        <!--Grupo: Correo Elecronico-->
                        <div class="formulario__grupo" id="grupo__correo">
                          <label for="correo" class="formulario__label">Correo Elecronico</label>
                          <div class="formulario__grupo-input">

                            <input type="email" class="formulario__input" name="Correo" id="Correo" placeholder="Correo Electronico" value="<?php if (isset($row)) {echo $row['Correo'];} ?>" pattern="[a-z0-9_]+([.][a-z0-9_]+)*@[a-z0-9_]+([.][a-z0-9_]+)*[.][a-z]{1,5}" required minlength="12" maxlength="50">

                          </div>
                          <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                          </p>
                        </div>
                        <!--Grupo: Cuenta Bancaria-->
                        <div class="formulario__grupo" id="grupo__cuentaBan">
                          <label for="cuentaBan" class="formulario__label">Cuenta Bancaria</label>
                          <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="CuentaBancaria" id="CuentaBancaria" onkeypress="return soloNumeros(event)" placeholder="Cuenta Bancaria" value="<?php if (isset($row)) {
                                                                                                                                                                                                  echo $row['CuentaBancaria'];
                                                                                                                                                                                                } ?>" required maxlength="15">
                          </div>
                          <p class="formulario__input-error">La cuenta bancaria solo puede contener numeros y el maximo son 15.</p>
                        </div>
                        <!--Grupo: Botones-->
                        <div class="formulario__grupo">
                          <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Guardar" onclick="">
                        </div>
                        <div class="formulario__grupo">
                          <input type="Reset" class="btn btn-primary btn-user btn-block" value="Limpiar">
                        </div>
                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                          <div class="col-sm-6 mb-3 mb-sm-0" style=" width: 50vw; margin-left : 0vw;">
                            <a href="tablas.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>" class="btn btn-primary btn-user btn-block">
                              Cancelar
                            </a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bandersnatch 2022 </span>
          </div>
        </div>
      </footer>
      <!-- Fin del Footer -->

    </div>
    <!-- Envoltorio de fin de contenido -->

  </div>
  <!-- Envoltorio de fin de página -->

  <!-- Desplácese al botón superiorn-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Cierre de sesión modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "Cerrar sesión" a continuación si está listo para finalizar su sesión
          actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../Login/loginForm.php">Cerrar Sesion</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript básico de Bootstrap-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Complemento principal de JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Scripts personalizados para todas las páginas-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Complementos de nivel de página -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Scripts personalizados a nivel de página -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>
  <!-- Scripts Validacion de Formulario -->
  <script src="../js/formulario.js"></script>

</body>

</html>
<script type="text/javascript">
  var valid;

  function recargarLista() {
    var x = document.getElementById("Departamentos_idDepartamentos").value;
    $.ajax({
      type: "POST",
      url: "datos.php",
      data: "dpto=" + x,
      success: function(r) {
        $('#Cargos_idCargos').html(r);
      }
    });
  }

  function cambio() {
    recargarLista();
  }

  function valid() {
    var x = document.getElementById("#Telefono").value();

    if (x.substring(0, 1) != '2' || x.substring(0, 1) != '9' || x.substring(0, 1) != '8') {

    }
  }

  $("#Telefono").on("change", function() {
    var x = document.getElementById("#Telefono");
    if (x.substring(0, 1) != '2' || x.substring(0, 1) != '9' || x.substring(0, 1) != '8') {
      valid = 0;
    }
  });
</script>