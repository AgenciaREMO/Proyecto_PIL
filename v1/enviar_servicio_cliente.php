<?php
	$asunto = "Pilgrim's | Servicio al cliente";
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
        $headers .= "FROM: Pilgrim's | Servicio al cliente <pilgrims@pilgrims.com>"."\r\n".'X-Mailer: PHP/' . phpversion();
        $body = '
        	 <html>
        <head>
          <meta charset="utf-8">
          <title>Correo Enviado</title>
        </head>
        <body>
        <div>
        <div>
          <div class="">
          <br class="ecxApple-interchange-newline">
          
            <div dir="ltr" class="">
              <table width="650px" style="margin:auto;">
                <tbody class="">
                  <tr class="">
                    <td class="">
                      <div style="text-align:center;background-color:#071689;padding:10px;font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class="">
                        <img alt="Imagen de logo de Seeds" src="http://remo.mx/Proyecto_PIL/v1/rec/img/logo-pilgrims.png" class="">
                      </div>
                      <div style=";background-size:cover;padding:10px;">
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class=""><b class="">
                            <br class=""></b></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><br class="">
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class=""><b class="">
                            Saludos.</b></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class=""><br class=""></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;text-align:left;" class=""><font color="#666666" class="">
                            Alguien ha enviado un mensaje para <b><i>Servicio al cliente</i></b> desde el sitio web.</font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;text-align:left;" class=""><font color="#666666" class=""><br class=""></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;text-align:left;" class=""><font color="#666666" class="">
                            <table style="width:90%;margin:auto;">
                                <tr>
                                    <td style="width:20%; text-align:left;"><b>Nombre:</b></td>
                                    <td>'.$nombre.'</td>
                                </tr>
                                <tr>
                                    <td style="width:20%; text-align:left;"><b>E-mail:</b></td>
                                    <td>'.$email.'</td>
                                </tr>
                                <tr>
                                    <td style="width:20%; text-align:left;"><b>Estado:</b></td>
                                    <td>'.$estado.'</td>
                                </tr>
                                <tr>
                                    <td style="width:20%; text-align:left;"><b>Teléfono:</b></td>
                                    <td>'.$telefono.'</td>
                                </tr>
                                <tr>
                                    <td style="width:20%; text-align:left;"><b>Mensaje:</b></td>
                                    <td>"'.$mensaje.'"</td>
                                </tr>
                            </table></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;text-align:left;" class=""><font color="#666666" class=""><br class=""></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;text-align:left;" class=""><font color="#666666" class="">
                            Favor de ponerse en contacto a la brevedad.</font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class=""><br class=""></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class="">
                            Gracias de antemano por su apoyo.</font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class=""><br class=""></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class=""><br class=""></font>
                          </div>
                          <div style="font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;" class=""><font color="#666666" class=""><i class="">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="border:none;border-top:2px solid #071689;border-bottom:2px solid #071689;padding:3px 10px;font-family:Calibri;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:start;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;">
                          <hr style="color:red;background-color:red;height:2px;border:none;margin-top:0px; margin-bottom:15px;">
                          <div style="text-align:center;" class="">
                            Privada de los Industriales No. 115 Col. Jurica, C.P 76100 Santiago de Querétaro, Qro. México <br/><br/>
                          </div>
                          <div style="text-align:center;" class="">
                            Tel. 01 442 103 2200 /&nbsp;<a href="http://pilgrims.com.mx/" target="_blank" style="font-size:12pt;" class="">www.pilgrims.com.mx</a></div></i></font>
                          <hr style="color:red;background-color:red;height:2px;border:none;margin-bottom:0px; margin-top:15px;">
                          </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
        <br class="">
      </div>
      </body>
      </html>
            ';
        mail($to, $asunto, $body, $headers); 
        
        header("Location: servicio_cliente.php?res=1");
        die();
    }
    else {
        header("Location: servicio_cliente.php?res=2");
        die();
    }
?>
