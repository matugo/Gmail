<?php
$destinatario= $_GET['email'];
$asunto= $_GET['asunto'];
$mensaje= $_GET['mensaje'];
//$correo= $_GET['correo'];
$edad= $_GET['edad'];

$html="";
$html.="<body>";
$html.="$mensaje";
$html.="<img src='http://marckalix.000webhostapp.com/Gmail/img/soccer.jpg'>";
$html.="</body>";
$html.="<a href=http://marckalix.000webhostapp.com/Gmail/recepcion.php?correo=$destinatario&edad=$edad";


$headers= "MIME-Version: 1.0"."\r\n";
$headers.= "content-type: text/html; charset=iso-8859-1"."\r\n";
$headers.= "from: <matugoag98@gmail.com>" . "\r\n";

 echo 'Enviando correo a '.$destinatario;
 // $html;
 mail($destinatario,  $asunto , $html , $headers);
?>
