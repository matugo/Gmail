<?php
echo "<center>";
 $correo=$_GET['correo'];
 $edad=$_GET['edad'];
 
 echo "se ha registrado el se&ntilde;or ".$correo. "";
 echo "<br>";
 echo "<br>";
if($edad>40)
{
echo " eres cucho";
}else{
 echo "eres joven";
}
echo "</center>";
?>
