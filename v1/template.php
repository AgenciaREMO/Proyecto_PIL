<?php
function meta(){
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
    <!-- Custom CSS -->
     <link href="css/pilgrims.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
      <a href="index.php" class="btn-img-home">
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
          <a href="#">
            <span class="icon-nav"><img src="rec/img/home.png" alt=""></span>
            <div>INICIO</div>
          </a>
        </li>
        <li class="dropdown <?php echo $dos; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/marcas.png" alt=""></span>
            <div>NUESTRAS<br>MARCAS <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><div><a href="#">Pilgrim's Fresco</a></div></li>
            <li><div><a href="#">Pilgrim's Valor Agregado</a></div></li>
            <li><div><a href="#">Del Día</a></div></li>                        
          </ul>
        </li>
        <li class="<?= $tres;?>">
          <a href="#">
            <span class="icon-nav"><img src="rec/img/recetario.png" alt=""></span>
            <div>RECETARIO</div>
          </a>
        </li>
        <li class="<?= $cuatro;?>">
          <a href="#">
            <span class="icon-nav"><img src="rec/img/tips.png" alt=""></span>
            <div>POLLO TIPS</div>
          </a>
        </li>
        <li class="<?= $cinco;?>">
          <a href="#">
            <span class="icon-nav"><img src="rec/img/negocio.png" alt=""></span>
            <div>HAGAMOS<br>NEGOCIO</div>
          </a>
        </li>
        <li class="<?= $seis;?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/procesos.png" alt=""></span>
            <div>PROCESOS <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><div><a href="#">Estándares de Calidad</a></div></li>
            <li><div><a href="#">Ciclo de Proceso</a></div></li>                      
          </ul>
        </li>
        <li class="dropdown <?= $siete;?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/empresa.png" alt=""></span>
            <div>NUESTRA<br>EMPRESA <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><div><a href="#">Historia Pilgrim's</a></div></li>
            <li><div><a href="#">Pilgrim's México</a></div></li>
            <li><div><a href="#">Nuestras Plantas</a></div></li>  
            <li><div><a href="#">Filosofía</a></div></li>  
            <li><div><a href="#">Distintivos</a></div></li>  
            <li><div><a href="#">Video Corporativo</a></div></li>                     
          </ul>
        </li>
        <li class="dropdown <?= $ocho;?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="icon-nav"><img src="rec/img/contacto.png" alt=""></span>
            <div>CONTACTO <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
          </a>
          <ul class="dropdown-menu">
            <li><div><a href="#">Servicio a Cliente</a></div></li>
            <li><div><a href="#">Oficionas</a></div></li>
          </ul>
        </li>
        <li class="dropdown <?= $nueve;?>">
          <a href="#">
            <span class="icon-nav"><img src="rec/img/talento.png" alt=""></span>
            <div>TALENTO<br>PILGRIM'S</div>
          </a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!-- /Static navbar -->
  <div class="clearfix hidden-md hidden-lg">
  </div>
</div><!--/.header-menu -->

<?php
}




function footer(){
?>
<footer class="bg-footer">
    <section class="container">
        <div class="row">
            <div class="col-lg-2 logo-footer">
                <img class="img-responsive" src="rec/img/logo-footer.png">
            </div>
            <div class="col-lg-4">
                <p id="ofi"><b>OFICINAS CORPORATIVAS</b></p><br>
                <i class="fa fa-map-marker" aria-hidden="true">  Privada de los Industriales No. 115 Col. Jurica, C.P 76100 Santiago de Querétaro, Qro. México</i><br/><br/>
                <i class="fa fa-mobile" aria-hidden="true">  Tel. 01 442 103 2200</i>
            </div>
                <div class="foo-rs">
                    <hr class="hr-mob">
                            <!--<a id="afb" href=""><img class="img-responsive" src="rec/img/fb.png" alt="Siguenos en Facebook" title="Siguenos en Facebook"/></a>
                            <a id="ayt" href=""><img class="img-responsive" src="rec/img/yt.png" alt="Siguenos en Youtube" title="Siguenos en Youtube"/></a>-->
                            <a id="afb" href=""><span class="fa fa-facebook fa-3x" aria-hidden="true"></span></a>
                            <a id="ayt" href=""><span class="fa fa-youtube fa-3x" aria-hidden="true"></span></a>
                    </div>
                <div class="foo-mob" >
                    <hr class="hr-mob">
                    <a id="ser-cli" href="">SERVICIO AL CLIENTE</a>
                    <hr class="hr-mob">
                </div>
            <form class="form-contact">
                <p><b>SERVICIO AL CLIENTE</b></p><br>
                <div class="col-lg-3">
                    <div class="form-group">
                      <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" aria-describedby="Nombre completo">
                    </div>
                    <div class="form-group">
                      <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" aria-describedby="Correo electrónico">
                    </div>
                    <div class="form-group">
                      <input type="phone" name="telefono" class="form-control" placeholder="Teléfono" aria-describedby="Teléfono">
                    </div>
                    <div class="est-sel">
                        <select class="form-control">
                          <option value="" selected="selected">Seleccione una ciudad</option>
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
                    <br/>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <textarea type="text" class="form-control custom-control" name= "mensaje"  placeholder="Mensaje" aria-describedby="Escribe un mensaje ..." rows="3" style="resize:none"></textarea>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="privacidad" id="privacidad" value="privacidad">
                        <b>He leído el aviso de privacidad y lo acepto.</b>
                      </label>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-default" type="submit"><i class="fa fa-envelope-o" aria-hidden="true"></i>
    <b>ENVIAR</b></button>
                </div>
            </form>
        </div>
        <div class="row">
            <div >
                <i class="fa fa-lock" id="mob1" aria-hidden="true">  <a href="">AVISO DE PRIVACIDAD</a></i>
                <i class="fa fa-lock privacidad" id="mob2" aria-hidden="true">  <a href="">AVISO DE CONFIDENCIALIDAD</a></i>
                <i class="fa fa-mobile" id="mob3" aria-hidden="true">  Tel. 01 800 876 3456</i>
            </div>
        </div>
    </section>
</footer>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<?php 
}
?>

