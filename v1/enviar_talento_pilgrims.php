<?php
  ini_set("SMTP","remo.mx");
  ini_set("smtp_port","localhost");
  ini_set('sendmail_from', 'remo@remo.com');

  //variables para los datos del archivo
  $nameFile = $_FILES['archivo']['name'];
  $sizeFile = $_FILES['archivo']['size'];
  $typeFile = $_FILES['archivo']['type'];
  $tempFile = $_FILES["archivo"]["tmp_name"];
  
  //variables para los inputs
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];
  $estado = $_POST['estados'];

  $asunto = "Pilgrim's | Talento Pilgrim's";
  $num = count($_GET);
  $para = 'mlgarciao@msn.com, bolsadetrabajo@pilgrims.com';
  
  if (!empty($asunto) && !empty($para)) {
    $to = $para;
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: multipart/mixed;";
    $headers .= "boundary=\"=P=I=L=\"\r\n";
    $headers .= "FROM: Pilgrim's | Talento Pilgrim's <pilgrims@pilgrims.com>";
    //Primera parte del cuerpo del mensaje
    $body = "--=P=I=L=\r\n";
    $body .= "Content-type: text/html;";
    $body .= "charset=utf-8\r\n";
    //$body .= "Content-Transfer-Encoding: 8bit\r\n";
    $body .= "\r\n"; // línea vacía
    $body .= '
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
                              Alguien ha enviado un mensaje para <b><i>Talento Pilgrim\'s</i></b> desde el sitio web.</font>
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
    $body .= "\r\n";// línea vacía

    //Segunda parte del mensaje (archivo adjunto)
    //Encabezado de la parte
    $body .= "--=P=I=L=\r\n";
    $body .= "Content-Type: application/octet-stream; ";
    $body .= "name=" . $nameFile . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; ";
    $body .= "filename=" . $nameFile . "\r\n";
    $body .= "\r\n"; // línea vacía

    $fp = fopen($tempFile, "rb");
    $file = fread($fp, $sizeFile);
    $file = chunk_split(base64_encode($file));

    $body .= "$file\r\n";
    $body .= "\r\n"; // línea vacía
    // Delimitador de final del mensaje.
    $body .= "--=P=I=L=--\r\n";

    mail($to, $asunto, $body, $headers); 
    header("Location: talento_pilgrims.php?restalento=1");
    die();
  }
  else {
    header("Location: talento_pilgrims.php?restalento=2");
    die();
  }
?>
