<?php
	$asunto = 'REMO | Correo prueba';
    $num = count($_GET);
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $estado = $_POST['estados'];
    $para = 'mlgarciao@msn.com, martha.lucia.remo@gmail.com';
    ob_start();
    if (!empty($asunto) && !empty($para)) {
    $to = $para;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'FROM: <remo@remo.com>'."\r\n".'X-Mailer: PHP/' . phpversion();
    $body = '
    	<html>
        	<head>
          		<meta charset="utf-8">
          		<title>Correo Enviado</title>
        	</head>
        	<body>
        		<div>
        			<div>
        				<p>ESTE ES UN MENSAJE DE SIMULACRO</p>
        			</div>
        			<br class="">
      			</div>
      		</body>
      	</html>
        ';
    mail($to, $asunto, $body, $headers); 
    echo $body ." - ". $nombre ." Estado: ". $estado ;
    }
?>
