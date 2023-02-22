<html>
<html>
<title>Ejemplo</title>
</head>
<?php
$NOMBRE= $_POST['nombre'];
echo "Nombre del usuario: ".$NOMBRE;
 echo "<br>"; 
 $AP= $_POST['ap'];
 echo "Apellido paterno:".$AP;
  echo "<br";
  $AM= $_POST['am'];
  echo "Apellido materno: ".$AM;
  echo "<br";

  $FN= $_POST['fn'];
  echo "Fecha de nacimmiento: ".$FN;
  echo "<br>";

  echo "<br>RFC: ".substr($AP,0,1).substr(strtoupper($AP),1,1)
  .substr($AM,0,1).substr($NOMBRE,0,1).substr($FN,2,2).substr($FN,5,2).substr($FN,8,2);
  ?>
</body>
</html>