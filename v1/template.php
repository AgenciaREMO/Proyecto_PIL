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
    <!--Animate.css-->
    <link rel="stylesheet" href="css/animate.css">
	  <!-- GOOGLE ANALYTICS -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N34BJ5');</script>
    <!-- End Google Tag Manager -->
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
    <div class="navbar-header" style="text-align:center;">
      <a href="inicio.php" class="btn-img-home a-svg">
        <embed class="logo-menu" src="rec/img/svg/logo-pilgrims.svg" style="width:109px;height:66px;">
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
          <a href="inicio.php" class="a-svg">
            <embed src="rec/img/svg/home.svg" style="width:29px;height:29px;">
            <div>INICIO</div>
          </a>
        </li>
        <li class="dropdown <?php echo $dos; ?>">
          <a href="#" class="dropdown-toggle a-svg" data-toggle="dropdown">
            <embed src="rec/img/svg/marcas.svg" style="width:29px;height:29px;">
            <div>NUESTRAS<br>MARCAS <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="pilgrims_fresco.php"><div>PILGRIM'S FRESCO</div></a></li>
            <li><a href="valor_agregado.php"><div>PILGRIM'S VALOR AGREGADO</div></a></li>
            <li><a href="http://www.deldia.com.mx/index.jsp" target="_blank"><div>DEL DÍA</div></a></li>                        
          </ul>
        </li>
        <li class="<?= $tres;?>">
          <a href="recetario.php" class="a-svg">
            <embed src="rec/img/svg/recetario.svg" style="width:29px;height:29px;">
            <div>RECETARIO</div>
          </a>
        </li>
        <li class="<?= $cinco;?>">
          <a href="hagamos_negocio.php" class="a-svg">
            <embed src="rec/img/svg/negocio.svg" style="width:29px;height:29px;">
            <div>HAGAMOS<br>NEGOCIO</div>
          </a>
        </li>
        <li class="<?= $seis;?>">
          <a href="#" class="dropdown-toggle a-svg" data-toggle="dropdown">
            <embed src="rec/img/svg/procesos.svg" style="width:29px;height:29px;">
            <div>PROCESOS <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="estandares.php"><div>ESTÁNDARES DE CALIDAD</div></a></li>
            <li><a href="ciclo_de_proceso.php"><div>CICLO DE PROCESO</div></a></li>                      
          </ul>
        </li>
        <li class="dropdown <?= $siete;?>">
          <a href="#" class="dropdown-toggle a-svg" data-toggle="dropdown">
            <embed src="rec/img/svg/empresa.svg" style="width:29px;height:29px;">
            <div>NUESTRA<br>EMPRESA <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="historia_pilgrims.php"><div>HISTORIA PILGRIM'S</div></a></li>
            <li><a href="mexico.php"><div>PILGRIM'S MÉXICO</div></a></li>
            <li><a href="nuestras_plantas.php"><div>NUESTRAS PLANTAS</div></a></li>  
            <li><a href="filosofia.php"><div>FILOSOFÍA</div></a></li>  
            <li><a href="distintivos.php"><div>DISTINTIVOS</div></a></li>  
            <li><a href="corporativo.php"><div>VIDEO CORPORATIVO</div></a></li>                     
          </ul>
        </li>
        <li class="dropdown <?= $ocho;?>">
          <a href="#" class="dropdown-toggle a-svg" data-toggle="dropdown">
            <embed src="rec/img/svg/contacto.svg" style="width:29px;height:29px;">
            <div>CONTACTO <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><a href="servicio_cliente.php"><div>SERVICIO AL CLIENTE</div></a></li>
            <li><a href="mapa.php"><div>OFICINAS</div></a></li>
          </ul>
        </li>
        <li class="dropdown <?= $nueve;?>">
          <a href="talento_pilgrims.php"  class="a-svg">
            <embed src="rec/img/svg/talento.svg" style="width:29px;height:29px;">
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
          <a href="" id="mob1" data-toggle="modal" data-target="#a-privacidad">  <b>AVISO DE PRIVACIDAD</b></a>
        </td>
        <td class="text-center" style="padding-top:1.5%;padding-bottom:2%; " colspan="2">
          <div class="text-center">
            <i class="fa fa-lock privacidad text-center"  aria-hidden="true"></i><br>
          </div>
          <a href="" id="mob2" data-toggle="modal" data-target="#a-confidencialidad">  <b>AVISO DE CONFIDENCIALIDAD</a>
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
          <a href="" id="mob1" data-toggle="modal" data-target="#a-privacidad">  <b>AVISO DE PRIVACIDAD</b></a>
        </td>
        <td class="text-center" style="padding-top:2%;padding-bottom:1%; " colspan="2">
          <div class="text-center">
            <i class="fa fa-lock privacidad text-center"  aria-hidden="true"></i><br>
          </div>
          <a href="" id="mob2" data-toggle="modal" data-target="#a-confidencialidad">  <b>AVISO DE CONFIDENCIALIDAD</a>
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
          <a id="afb" href="https://www.facebook.com/PilgrimsMx/" ><span class="fa fa-facebook fa-2x" aria-hidden="true"></span></a>
          <a id="ayt" href="https://www.youtube.com/channel/UCst1XqFNFdUGVBYBlmRY5oQ"><span class="fa fa-youtube fa-2x" aria-hidden="true"></span></a>
        </td>
      </tr>
      <tr>
        <td>
          <hr class="hr-mob">
          <a id="ser-cli" href="servicio_cliente.php">SERVICIO AL CLIENTE</a>
          <hr class="hr-mob">
        </td>
      </tr>
      <tr>
        <td>
           <div class="priva-mob">
          <div class="col-sm-12">
            <i class="fa fa-lock"  aria-hidden="true" data-toggle="modal" data-target="#a-privacidad"></i>
            <a href="" id="mob1" data-toggle="modal" data-target="#a-privacidad" >  AVISO DE PRIVACIDAD</a>
          </div>
          <div class="col-sm-12">
            <a href="" id="mob2" data-toggle="modal" data-target="#a-confidencialidad" ><i class="fa fa-lock"  aria-hidden="true" data-toggle="modal" data-target="#a-confidencialidad"></i> 
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

<!--Modal aviso de privacidad-->
<div class="modal fade" id="a-privacidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">AVISO DE PRIVACIDAD</h4>
      </div>
      <div class="modal-body">
        <div class="encabezado-modal">
          <img src="rec/img/logo-pilgrims.png" alt="Logo Pilgrim's">
        </div>
        <h4 class="h4-bmodal">AVISO DE PRIVACIDAD</h4>
        <p>De conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, en lo sucesivo “la Ley”, Pilgrim´s Pride, S. de R.L. de C.V. y controladoras, subsidiarias o filiales, en adelante “Pilgrim´s”, con domicilio en calle Privada de los Industriales, número 115, colonia Jurica, ciudad Santiago de Querétaro, Querétaro, C.P. 76100, México, responsable de recabar, del tratamiento (uso) y protección de sus datos personales que le sean proporcionados por las personas físicas (en lo sucesivo “El Títular”) para sí o para cualquiera de las sociedades mercantiles que sean sus controladoras, subsidiarias o filiales y portal de internet <a href="#">http://pilgrims.com.mx/pilgrimsweb/</a>, al respecto le informamos lo siguiente:</p>
        <h4>¿Para qué fines utilizamos sus datos personales?</h4>
        <p>Utilizaremos su información personal para las siguientes finalidades: i)identificarle; ii)ubicarle; iii)comunicarle, iv) contactarle; v) enviarle información; vi) revisar y atender sus comentarios, vii) reclutamiento y selección de personal; viii) invitarle a participar en las redes sociales de “Pilgrim´s”; ix) fines publicitarios; x) celebración de relaciones comerciales; xi) analizar y dar contestación a solicitudes de empleo; xii) envío de notificaciones con respecto a cambios en este Aviso de Privacidad.</p>
        <h4>¿Qué datos personales utilizaremos para estos fines?</h4>
        <p>Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, podemos recabar sus datos personales de distintas formas: cuando usted nos los proporciona directamente; cuando visita nuestro sitio de internet o utiliza nuestros servicios en línea, y cuando obtenemos información a través de otras fuentes que están permitidas por la ley.</p>
        <p>
          Recabamos en forma directa sus datos cuando participa en nuestras promociones o nos da información con objeto de que le prestemos un servicio. Los datos que obtenemos por este medio pueden ser, entre otros:
          <ul>
            <li>Nombre</li>
            <li>Correo electrónico</li>
            <li>Información general y generada durante los procesos de reclutamiento, selección y contratación.</li>
          </ul>
        </p>
        <p>El tratamiento de los datos personales del Titular será efectuado de conformidad con los presentes términos y condiciones, por lo que, desde este momento se entiende que el titular otorga su consentimiento para dicho tratamiento.</p>
        <h4>Datos personales sensibles</h4>
        <p>Le informamos que para cumplir con las finalidades de este aviso de privacidad, podrán ser recabados y tratados datos personales sensibles, como aquellos que refieren a (origen racial o étnico, estado de salud presente y futuro, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas o preferencia sexual.</p>
        <p>Nos comprometemos a que los mismos serán tratados bajo las más estrictas medidas de seguridad que garanticen su confidencialidad.</p>
        <h4>¿Cómo puede acceder, rectificar o cancelar sus datos personales, u oponerse a su uso?</h4>
        <p>Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.</p>
        <p>Para el ejercicio de cualquiera de los derechos ARCO, usted deberá presentar la solicitud respectiva a través del siguiente medio:</p>
        <p>A través del envío de solicitud en los términos que marca la Legislación en su Art. 29 al Departamento de Protección de Datos Personales, responsable de nuestro Departamento de Protección de Datos Personales ubicado en Privada de los Industriales No. 115 Col. Jurica, Santiago de Querétaro, Qro. C.P. 76100, o bien, se comunique al teléfono (442) 103-22-00 o al 018007198477 en horario de Lunes a Viernes de 8:00 a 18:00 horas, o vía correo electrónico a privacidad@pilgrims.com, el cual solicitamos confirme vía telefónica para garantizar su correcta recepción, sin perjuicio de su derecho de acudir ante el Instituto Federal de Acceso a la Información y Protección de Datos Personales (IFAI). Para mayor información visite <a href="http://inicio.ifai.org.mx/SitePages/ifai.aspx" target="_blank">www.ifai.org.mx.</a></p>
        <p>Con relación al procedimiento y requisitos para el ejercicio de sus derechos ARCO, le informamos lo siguiente:</p>
        <h4>¿A través de qué medios puede acreditar su identidad el titular y, en su caso, su representante, así como la personalidad este último?</h4>
        <p>Por medio del envío del Formulario de Ejercicio de Derechos ARCO al correo electrónico: privacidad@pilgrims.com el cual deberá enviarnos debidamente llenado y acompañado por los documentos que acrediten su identidad y en su caso, la personalidad de su representante legal.</p>
        <h4>¿Qué información y/o documentación deberá contener la solicitud?</h4>
        <p>Nombre, domicilio, teléfono, correo electrónico, IFE y comprobante de domicilio.</p>
        <h4>¿En cuántos días le daremos respuesta a su solicitud?</h4>
        <p>Si la solicitud resultara procedente, nuestro plazo de respuesta será de veinte días hábiles contados a partir de la recepción de su solicitud, si es correcta la información que nos proporciona.</p>
        <p>En los casos en que la solicitud no sea correcta o este incompleta, se le solicitará la rectificación de información y contará creo que 5 días para dar contestación, de lo contrario, se tendrá por no interpuesta la solicitud.</p>
        <h4>¿Por qué medio le comunicaremos la respuesta a su solicitud?</h4>
        <p>Se entregará la información de manera electrónica al correo que nos proporciona en su solicitud, de manera gratuita, únicamente podremos cobrar los gastos justificados de envío o derivados de la emisión de copias y/u otros formatos, los cuales les serán informados con debida antelación.</p>
        <h4>¿En qué medios se pueden reproducir los datos personales que, en su caso, solicite?</h4>
        <p>Vía correo electrónico a privacidad@pilgrims.com</p>
        <p>
          Los datos de contacto de la persona o departamento de datos personales, que está a cargo de dar trámite a las solicitudes de derechos ARCO, son los siguientes:
          <ol type="a">
            <li>Departamento de Datos Personales</li>
            <li>Domicilio: calle Privada de los Industriales, número 115, Colonia Jurica, Santiago de Querétaro, Querétaro, C.P. 76100.</li>
            <li>Correo electrónico: privacidad@pilgrims.com</li>
            <li>Número telefónico: (442) 103-22-00 o al 018007198477</li>
          </ol>
        </p>
        <h4>Usted puede revocar su consentimiento para el uso de sus datos personales</h4>
        <p>Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá considerar que para ciertos fines, la revocación de su consentimiento implicará que no le podamos contactar a la conclusión de su relación con nosotros.</p>
        <p>Para revocar su consentimiento deberá presentar su solicitud a través del siguiente medio:</p>
        <p>Deberá solicitar el Formulario de Ejercicio de Derechos ARCO al correo electrónico privacidad@pilgrims.com el cual deberá enviarnos debidamente llenado y acompañado por los documentos que acrediten su identidad y en su caso, la personalidad de su representante legal.</p>
        <h4>¿Qué información y/o documentación deberá contener la solicitud?</h4>
        <p>Nombre, domicilio, teléfono, comprobante de domicilio y credencial de elector.</p>
        <h4>¿En cuántos días le daremos respuesta a su solicitud?</h4>
        <p>En veinte días hábiles si la información es completa.</p>
        <h4>¿Por qué medio le comunicaremos la respuesta a su solicitud?</h4>
        <p>A la dirección de correo electrónico proporcionada por usted.</p>
        <p>Para mayor información sobre el procedimiento, ponemos a disposición los siguientes medios: <a href="#">http://pilgrims.com.mx/pilgrimsweb/</a></p>
        <h4>¿Cómo puede limitar el uso o divulgación de su información personal?</h4>
        <p>Con objeto de que usted pueda limitar el uso y divulgación de su información personal y/o no desee recibir mensajes promocionales de nuestra parte, puede enviarnos su solicitud por medio de la dirección electrónica: privacidad@pilgrims.com</p>
        <h4>El uso de tecnologías de rastreo en nuestro portal de internet</h4>
        <p>
          Le informamos que en nuestra página de internet utilizamos cookies, web beacons u otras tecnologías, a través de las cuales es posible monitorear su comportamiento como usuario de internet, así como brindarle un mejor servicio y experiencia al navegar en nuestra página. Los datos personales que recabamos a través de estas tecnologías, los utilizaremos para los siguientes fines:
          <ol type="a">
            <li>Mejorar el desarrollo de la página web, listas y hábitos de consumo, publicidad revisada por el usuario.</li>
            <li>Los datos personales que obtenemos de estas tecnologías de rastreo son los siguientes: Identificadores, nombre de usuario y contraseñas de una sesión, Idioma preferido por el usuario, región en la que se encuentra el usuario, tipo de navegador del usuario, tipo de sistema operativo del usuario, fecha y hora del inicio y final de una sesión de un usuario, páginas web visitadas por un usuario, búsquedas realizadas por un usuario, si contacta por dispositivo móvil o un ordenador.</li>
          </ol>
        </p>
        <h4>Estas tecnologías podrán deshabilitarse siguiendo los siguientes pasos:</h4>
        <p>El responsable puede deshabilitarlo eliminando el código de seguimiento y usted podrá solicitar que Ejerciendo los derechos ARCO.</p>
        <p>Sus datos personales pueden ser transferidos y tratados dentro del país, por personas distintas al responsable. En este sentido, su información puede ser compartida con sociedades controladoras, subsidiarias o filiales y/o socios comerciales, con los que Pilgrim’s sostenga una relación contractual para i) identificarle; ii) ubicarle; iii) comunicarle, iv) contactarle; v) enviarle información; vi) revisar y atender sus comentarios, vii) Reclutamiento y selección de personal; viii) invitarle a participar en las redes sociales de “Pilgrim´s” ; ix) fines publicitarios; x) celebración de relaciones comerciales.</p>
        <p>En virtud de lo anterior, dichas personas no podrán utilizar la información proporcionada por Pilgrim’s de manera diversa a la establecida en el presente Aviso de Privacidad. Estas transferencias de Datos Personales serán realizadas con todas las medidas de seguridad apropiadas, de conformidad con los principios contenidos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento.</p>
        <p>Nos comprometemos a no transferir su información personal a terceros sin su consentimiento, salvo las excepciones previstas en el artículo 37 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, así como realizar esta transferencia en los términos que fija esa ley.</p>
        <p>Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello.</p>
        <p>Podrá oponerse a que sus datos personales sean transferidos mediante solicitud a través de la dirección electrónica: privacidad@pilgrims.com</p>
        <h4>¿Cómo puede conocer los cambios en este aviso de privacidad?</h4>
        <p>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas.</p>
        <p>Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a través de la página de internet <a href="#">http://pilgrims.com.mx/pilgrimsweb/</a>.</p>
        <p>Última actualización: 20/10/2015</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!--Modal aviso de confidencialidad-->
<div class="modal fade" id="a-confidencialidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">AVISO DE PRIVACIDAD</h4>
      </div>
      <div class="modal-body">
        <div class="encabezado-modal">
          <img src="rec/img/logo-pilgrims.png" alt="Logo Pilgrim's">
        </div>
        <h4 class="h4-bmodal">AVISO DE CONFIDENCIALIDAD</h4>
        <p>Este correo electrónico, incluyendo en su caso, los archivos adjuntos al mismo, pueden contener información de carácter confidencial y/o privilegiada, y se envían a la atención única y exclusivamente de la persona y/o entidad a quien va dirigido. La copia, revisión, uso, revelación y/o distribución de dicha información confidencial sin la autorización por escrito del Grupo Pilgrims México está prohibida. Si usted no es el destinatario a quien se dirige el presente correo, favor de contactar al remitente respondiendo al presente correo y eliminar el correo original incluyendo sus archivos, así como cualesquiera copia del mismo. Mediante la recepción del presente correo usted reconoce y acepta que en caso de incumplimiento de su parte y/o de sus representantes a los términos antes mencionados, el Grupo Pilgrims México tendrá derecho a los daños y perjuicios que esto le cause.</p>
        <hr>
        <h4 class="h4-bmodal">CONFIDENTIALITY NOTICE</h4>
        <p>This e-mail message including attachments, if any, is intended only for the person or entity to which it is addressed and may contain confidential and /or privileged material. Any review, use, disclosure or distribution of such confidential information without the written authorization of Pilgrims Mexico Corporation is prohibited. If you are not the intended recipient, please contact the sender by reply e-mail and destroy all copies of the original message. By receiving this e-mail you acknowledge that any breach by you and/or your representatives of the above provisions may entitle Pilgrims Mexico Corporation to seek for damages.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
<?php 
}
?>

