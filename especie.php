
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registros asunto procurador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/img/sloganZooleon.jpg" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers"style="background-color:rgb(21, 61, 32);">
            <div class="logo full-reset all-tittles" style="background-color:rgb(21, 61, 32);">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
                ZOOLOGICO
            </div>
            <div class="full-reset" style="background-color:rgb(255, 249, 113); padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/sloganZooleon.jpg" alt="" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px; color:rgb(10, 10, 10);">Sistema de abogados</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="inicio.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                    </li>
                    <li>
                  </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset" style="background-color:rgb(21, 61, 32);">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Christian Lugo</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header" style="background-color:rgb(250, 251, 173);">
              <h1 class="all-tittles">Sistema de Zoologico <small>Administración</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation" ><a href="registro_zoologico.php" style="color:rgb(18, 133, 4)">Zoologico</a></li>
              <li role="presentation"><a href="especie.php" style="color:rgb(18, 133, 4)">Especie</a></li>
              <li role="presentation"><a href="animal.php" style="color:rgb(18, 133, 4)">Animal</a></li>

            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/leon.jpg" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Guarda los datos de la especie animal puedes actualizar la información actual, o eliminar el registro completamente y añadir uno nuevo.

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-green">Guardar datos de la  especie animal</div>
                <form name="forml"  method="post" action="insertar_especie.php">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombrecientifico"placeholder="Nombre cientifico" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Nombre cientifico">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre cientifico</label>
                            </div>

                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nomvulgar"placeholder="Nombre vulgar" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Nombre vulgar">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre vulgar</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="familia"placeholder="Familia" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Familia ala que pertenece el animal">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Familia</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="peligro"placeholder="Peligro" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Si esta en peligro el animal">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Peligro</label>
                            </div>

                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;background-color:rgb(11, 242, 34)"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                  <button type="submit" name="boton" value="eliminar"class="btn btn-info" style="margin-right: 20px;background-color:rgb(11, 242, 34)"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Eliminar</button>
                                    <button type="submit" name="boton" value="modificar"class="btn btn-info" style="margin-right: 20px; background-color:rgb(97, 176, 27)"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Modificar</button>
                                <button type="submit" name="boton" value="guardar"class="btn btn-primary" style="margin-right: 20px; background-color:rgb(97, 176, 27)"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p>
                          <!--Creacion de la tabla -->
                   <?php
                        require("tablaaduntoproc.php")
                   ?>

                   <table class="table table-striped table-inverse">
                      <thead>
                         <tr>
                         <th>Nombre cientifico</th>
                        <th>Nombre vulgar</th>
                        <th>Familia</th>
                        <th>Peligro</th>

                       </tr>
                   </thead>
                   <tbody>
                    <?php  while($fila=mysqli_fetch_array($resultados,MYSQL_ASSOC)){ ?>
                   <tr>

                   <th scope="row"><?php echo $fila["nombrecientifico"]?></th>
                   <td><?php echo $fila["nomvulgar"]?></td>
                  <td><?php echo $fila["familia"]?></td>
                   <td><?php echo $fila["peligro"]?></td>

                   <?php
                   }
                   //para serrar la conexion
                   mysqli_close($conexion);
                   ?>
                 </tbody>
                        </table>


                       </div>
                   </div>
               </form>
            </div>
          
        </div>


        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                  Dirigete a este correo christian86360@gmail.com
                  gracias por sus molestias
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>

            </div>
          </div>
        </div>

        <footer class="footer full-reset" style="background-color:rgb(21, 61, 32);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Sistema de zoologico
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; christian Lugo Marroquin <a  href="https://www.facebook.com/christian.l.marroquin" class="zmdi zmdi-facebook zmdi-hc-fw footer-social" ></a><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles" style="background-color:rgb(21, 61, 32);">© 2017 Christian Lugo Marroquin</div>
        </footer>
    </div>
</body>
</html>
