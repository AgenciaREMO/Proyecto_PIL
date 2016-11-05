<?php
function meta(){
?>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link rel="shortcut icon" href="rec/img/favicon.ico" type="image/x-icon" /> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/pilgrims.css" rel="stylesheet">
    <link href="css/pilgrimsML.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--Animciones-->
    <link rel="stylesheet" type="text/css" href="css/4_5_4styles.min.css">
    <!--Animate.css-->
    <link rel="stylesheet" href="css/animate.css">
	<!-- GOOGLE ANALYTICS -->
	<!-- / GOOGLE ANALYTICS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	

<?php
}

function meta_alt(){
?>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!--Animaciones-->
    <!--<link rel="stylesheet" type="text/css" href="css/4_5_4styles.min.css">-->
    <!-- Custom CSS -->
     <link href="css/pilgrims.css" rel="stylesheet">
     <link href="css/pilgrimsML.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--Animate.css-->
    <link rel="stylesheet" href="css/animate.css">
  <!-- GOOGLE ANALYTICS -->
  <!-- / GOOGLE ANALYTICS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  

<?php
}

function menu($elemento = ""){
  $uno = "";
  $dos = "";
  $tres = "";
  $cuatro = "";
  $cinco = "";
  $seis = "";
  $siete = "";
  $ocho = "" ;
  $nueve = ""; 
    
    if($elemento == "1"){
        $uno = "active";
    }
    if($elemento == "2"){
        $dos = "active";
    }
    if($elemento == "3"){
        $tres = "active";
    } 
    if($elemento == "4"){
        $cuatro = "active";
    }
    if($elemento == "5"){
        $cinco = "active";
    }
  if($elemento == "6"){
        $seis = "active";
    }
  if($elemento == "7"){
        $siete = "active";
    }
    if($elemento == "8"){
        $ocho = "active";
    }
    if($elemento == "9"){
      $nueve = "active";
    }
?>
<!-- MENÚ -->
<div class="header-menu">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <a href="inicio.php" class="btn-img-home">
        <img class="img-responsive logo-menu" src="rec/img/logo-pilgrims.png"/>
      </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menu1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>         
    </div>
    <div class="navbar-collapse collapse menu1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $uno; ?>">
          <a href="inicio.php">
            <span class="icon-nav"><img src="rec/img/home.png" alt="Icono Pilgrim's"></span>
            <div>INICIO</div>
          </a>
        </li>
        <li class="dropdown <?php echo $dos; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/marcas.png" alt="Icono Pilgrim's"></span>
            <div>NUESTRAS<br>MARCAS <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="pilgrims_fresco.php"><div>Pilgrim's Fresco</div></a></li>
            <li><a href="valor_agregado.php"><div>Pilgrim's Valor Agregado</div></a></li>
            <li><a href="http://www.deldia.com.mx/index.jsp" target="_blank"><div>Del Día</div></a></li>                        
          </ul>
        </li>
        <li class="<?= $tres;?>">
          <a href="recetario.php">
            <span class="icon-nav"><img src="rec/img/recetario.png" alt="Icono Pilgrim's"></span>
            <div>RECETARIO</div>
          </a>
        </li>
        <li class="<?= $cuatro;?>">
          <a href="#">
            <span class="icon-nav"><img src="rec/img/tips.png" alt="Icono Pilgrim's"></span>
            <div>POLLO TIPS</div>
          </a>
        </li>
        <li class="<?= $cinco;?>">
          <a href="hagamos_negocio.php">
            <span class="icon-nav"><img src="rec/img/negocio.png" alt="Icono Pilgrim's"></span>
            <div>HAGAMOS<br>NEGOCIO</div>
          </a>
        </li>
        <li class="<?= $seis;?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/procesos.png" alt="Icono Pilgrim's"></span>
            <div>PROCESOS <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="estandares.php"><div>Estándares de Calidad</div></a></li>
            <li><a href="#"><div>Ciclo de Proceso</div></a></li>                      
          </ul>
        </li>
        <li class="dropdown <?= $siete;?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/empresa.png" alt="Icono Pilgrim's"></span>
            <div>NUESTRA<br>EMPRESA <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="historia_pilgrims.php"><div>Historia Pilgrim's</div></a></li>
            <li><a href="mexico.php"><div>Pilgrim's México</div></a></li>
            <li><a href="nuestras_plantas.php"><div>Nuestras Plantas</div></a></li>  
            <li><a href="filosofia.php"><div>Filosofía</div></a></li>  
            <li><a href="distintivos.php"><div>Distintivos</div></a></li>  
            <li><a href="corporativo.php"><div>Video Corporativo</div></a></li>                     
          </ul>
        </li>
        <li class="dropdown <?= $ocho;?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/contacto.png" alt="Icono Pilgrim's"></span>
            <div>CONTACTO <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="servicio_cliente.php"><div>Servicio al Cliente</div></a></li>
            <li><a href="mapa.php"><div>Oficinas</div></a></li>
          </ul>
        </li>
        <li class="dropdown <?= $nueve;?>">
          <a href="talento_pilgrims.php">
            <span class="icon-nav"><img src="rec/img/talento.png" alt="Icono Pilgrim's"></span>
            <div>TALENTO<br>PILGRIM'S</div>
          </a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!-- /Static navbar -->
  <div class="clearfix hidden-md hidden-lg">
  </div>
</div><!--/.header-menu -->

<div>
  <div class="social">
    <ul>
      <li>
        <a href="https://www.facebook.com/PilgrimsMx/" target="_blank">
          <img src="rec/img/fb.png" alt="Icono facebook">
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCst1XqFNFdUGVBYBlmRY5oQ" target="_blank">
          <img src="rec/img/yt.png" alt="Icono youtube">
        </a>
    </li>
    </ul>
  </div>
</div>
<?php
}




function footer(){
?>
<div class="notificacion noti-footer" style="margin-bottom:0px;">
  <?php

    if (isset($_GET['res'])) {
      $res = $_GET['res'];
      if ($res=="1") {
        echo "<div class='alert alert-success alert-dismissable' style='margin-bottom:0px;'>
                <button type='button' class='close' data-dismiss='alert' style='color:#000'>&times;</button>
                <div class='container'>
                  <p style='color:#000'><i class='fa fa-check' aria-hidden='true'style='color:#000'></i> ¡Envio exitoso!</p>
                </div>
              </div>";
      }
      else if ($res=="2") {
        echo "<div class='alert alert-danger alert-dismissable' style='margin-bottom:0px;'>
                <button type='button' class='close' data-dismiss='alert' style='color:#000'>&times;</button>
                <div class='container'>
                  <p style='color:#000'><i class='fa fa-ban' aria-hidden='true'style='color:#000'></i> El envio no ha podido realizarse. Intentalo en unos minutos.</p>
                </div>
              </div>";
      }
    }
  ?>
</div>
<footer class="bg-footer" >
  <section id="esc-991" class="container">
    <table width="100%;" class="text-left" >
      <tr >
        <td class="logo-footer" rowspan="2" colspan="3" style="border-bottom:solid; border-width:2px; border-color:#d9232e;">
          <img class="img-responsive" src="rec/img/logo-footer.png">
        </td>
        <td style="padding-top:2%; padding-bottom:1%;border-right:solid; border-width:2px; border-color:#d9232e;" colspan="3">
          <span id="ofi"><b>OFICINAS CORPORATIVAS</b></span><br>
        </td>
        <td style="padding-top:2%; padding-bottom:1%; padding-left:2%; " colspan="3">
          <span id="ofi"><b>SERVICIO AL CLIENTE</b></span><br>
        </td>
      </tr>
      <tr>     
        <td width="25%;" style="margin:0px; vertical-align: top; border-bottom:solid; border-right:solid; border-width:2px; border-color:#d9232e; font-size:16px; padding-right:1%" colspan="3" >
          <i class="fa fa-map-marker " aria-hidden="true"></i>  Privada de los Industriales No. 115 <br/>Col. Jurica, C.P 76100 <br/>Santiago de Querétaro, Qro. México <br/><br/>
          <i class="fa fa-mobile " aria-hidden="true"> </i>  Tel. 01 442 103 2200
        </td>
        <td  width="25%;" style="padding-left:2%;" colspan="3">
          <form action="enviar_servicio_cliente.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" aria-describedby="Nombre completo" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" aria-describedby="Correo electrónico" required>
          </div>
          <div class="form-group">
            <input type="phone" name="telefono" class="form-control" placeholder="Teléfono" aria-describedby="Teléfono" required>
          </div>
          <div class="est-sel">
            <select class="form-control" name="estados" id="estados">
              <option value="" selected="selected">Seleccione un estado</option>
              <option value="Aguascalientes">Aguascalientes</option>
              <option value="Baja California">Baja California</option>
              <option value="Baja California Sur">Baja California Sur</option>
              <option value="Campeche">Campeche</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="Ciudad de Mexico">Ciudad de México</option>
              <option value="Durango">Durango</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Estado de México">Estado de México</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Michoacán">Michoacán</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo León">Nuevo León</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Querétaro">Querétaro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potosí">San Luis Potosí</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Yucatán">Yucatán</option>
              <option value="Zacatecas">Zacatecas</option>
            </select>
          </div>
        </td>
        <td style="padding-left:2%; vertical-align: top;" colspan="3">
          <div class="form-group">
            <textarea type="text" class="form-control custom-control" name= "mensaje"  placeholder="Mensaje" aria-describedby="Escribe un mensaje ..." rows="3" style="resize:none" required></textarea>
          </div>
          <div class="radio">
            <label>
              <input type="checkbox" name="privacidad" id="privacidad" required>
              <b>He leído el aviso de privacidad y lo acepto.</b>
            </label>
          </div>
        </td>
      </tr>
      <tr  width="25%;">
        <td class="text-center" style="padding-top:1.5%;padding-bottom:2%; " colspan="2">
          <i class="fa fa-lock text-center"  aria-hidden="true"></i><br>
          <a href="" id="mob1">  <b>AVISO DE PRIVACIDAD</b></a>
        </td>
        <td class="text-center" style="padding-top:1.5%;padding-bottom:2%; " colspan="2">
          <div class="text-center">
            <i class="fa fa-lock privacidad text-center"  aria-hidden="true"></i><br>
          </div>
          <a href="" id="mob2">  <b>AVISO DE CONFIDENCIALIDAD</a>
        </td>
        <td class="text-left" style="padding-top:1.5%; padding-bottom:2%; border-right:solid; border-width:2px; border-color:#d9232e;" colspan="2">
          <div style="padding-left:30%;">
            <i class="fa fa-mobile"  aria-hidden="true"></i>
          </div> 
          <span id="mob3">Tel. 01 800 876 3456</span>
        </td>
        <td  colspan="6" style="">
            <div class="form-group" style="margin-left:53.5%;">
              <button class="btn btn-md btn-default" type="submit" id="enviar"><i class="fa fa-envelope-o" aria-hidden="true"></i>
              <b>ENVIAR</b></button>
            </div>
        </td>
      </form>
      </tr>
    </table>
  </section>

  <section id="esc-990" class="container">
    <table width="100%;" class="text-left" >
      <tr >
        <td style="padding-top:3%; padding-bottom:1%;" colspan="6">
          <span id="ofi"><b>OFICINAS CORPORATIVAS</b></span><br>
        </td>
        <td style="padding-top:3%; padding-bottom:1%;  margin-right:10%;" colspan="6">
          <span id="ofi"><b>SERVICIO AL CLIENTE</b></span><br>
        </td>
      </tr>
      <tr style="padding-left:4%;">
        <td width="40%;" style="padding-left: 2%; vertical-align: top; font-size:16px; " colspan="6" >
          <i class="fa fa-map-marker " aria-hidden="true"></i>  Privada de los Industriales No. 115 Col. Jurica, C.P 76100 Santiago de Querétaro, Qro. México <br/><br/>
          <i class="fa fa-mobile " aria-hidden="true"> </i>  Tel. 01 442 103 2200
        </td>
        <form action="enviar_servicio_cliente.php" method="POST">
        <td  width="25%;" style="padding-left:2%;" colspan="3">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" aria-describedby="Nombre completo" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" aria-describedby="Correo electrónico" required>
          </div>
          <div class="form-group">
            <input type="phone" name="telefono" class="form-control" placeholder="Teléfono" aria-describedby="Teléfono" required>
          </div>
          <div class="est-sel">
              <select class="form-control" name="estados" id="estados" required>
                <option value="" selected="selected">Seleccione un estado</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="Ciudad de Mexico">Ciudad de México</option>
                <option value="Durango">Durango</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>
              </select>
          </div>
        </td>
        <td style="padding-left:2%; padding-right:2%; vertical-align: top;" colspan="3">
          <div class="form-group">
            <textarea type="text" class="form-control custom-control" name= "mensaje"  placeholder="Mensaje" aria-describedby="Escribe un mensaje ..." rows="3" style="resize:none" required></textarea>
          </div>
          <div class="radio">
            <label>
              <input type="checkbox" name="privacidad" id="privacidad" required>
              <b>He leído el aviso de privacidad y lo acepto.</b>
            </label>
          </div>

        </td>
      </tr>
      <tr>
        <td class="text-center" style="padding-top:2%;padding-bottom:1%; " colspan="2">
          <i class="fa fa-lock text-center"  aria-hidden="true"></i><br>
          <a href="" id="mob1">  <b>AVISO DE PRIVACIDAD</b></a>
        </td>
        <td class="text-center" style="padding-top:2%;padding-bottom:1%; " colspan="2">
          <div class="text-center">
            <i class="fa fa-lock privacidad text-center"  aria-hidden="true"></i><br>
          </div>
          <a href="" id="mob2">  <b>AVISO DE CONFIDENCIALIDAD</a>
        </td>
        <td class="text-left" style="padding-top:2%; padding-bottom:1%; " colspan="2">
          <div style="padding-left:30% !important;">
            <i class="fa fa-mobile"  aria-hidden="true"></i>
          </div> 
          <span id="mob3">Tel. 01 800 876 3456</span>
        </td>
        <td colspan="6">
          <div class="col-lg-offset-6 col-lg-6">
            <button class="btn btn-md btn-default" type="submit" id="enviar"><i class="fa fa-envelope-o" aria-hidden="true"></i>
            <b>ENVIAR</b></button>
        </form>
          </div>
        </td>
      </tr>
    </table>
  </section>
  <section id="mob" class="container">
    <table width="100%" class="text-center">
      <tr>
        <td>
          <p id=""><b>OFICINAS CORPORATIVAS</b></p><br>
          <i class="fa fa-map-marker" aria-hidden="true"></i>  Privada de los Industriales No. 115 Col. Jurica, C.P 76100 Santiago de Querétaro, Qro. México <br/><br/>
          <i class="fa fa-mobile" aria-hidden="true"> </i>  Tel. 01 442 103 2200
        </td>
      </tr>
      <tr>
        <td>
          <hr class="hr-mob">
          <a id="afb" href=""><span class="fa fa-facebook fa-2x" aria-hidden="true"></span></a>
          <a id="ayt" href=""><span class="fa fa-youtube fa-2x" aria-hidden="true"></span></a>
        </td>
      </tr>
      <tr>
        <td>
          <hr class="hr-mob">
          <a id="ser-cli" href="">SERVICIO AL CLIENTE</a>
          <hr class="hr-mob">
        </td>
      </tr>
      <tr>
        <td>
           <div class="priva-mob">
          <div class="col-sm-12">
            <i class="fa fa-lock"  aria-hidden="true"></i>
            <a href="" >  AVISO DE PRIVACIDAD</a>
          </div>
          <div class="col-sm-12">
            <a href="" ><i class="fa fa-lock"  aria-hidden="true"></i> 
              AVISO DE CONFIDENCIALIDAD</a>
          </div>
          <div class="col-sm-12">
            <i class="fa fa-mobile"  aria-hidden="true"></i> 
            <span>Tel. 01 800 876 3456</span>
          </div>
        </div>
        </td>
      </tr>
    </table>
  </section>
  <div id="footer" style="height:1px;"></div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<?php 
}
?>

