<?php

$user=$_POST['correo'];
$contra=$_POST['contrasena'];
$comandoCurl="curl 'https://identitytoolkit.googleapis.com/v1/accounts:signInWithPassword?key=AIzaSyB-m-6PGJdcutLXPrFs2-vsvR1ZabcVlJQ' 
\
-H 'Content-Type: application/json' \
--data-binary '{".'"email":"'.$user.'","password":"'.$contra.'","returnSecureToken":true}'."'";





$result=`$comandoCurl`;
$decodificacion=json_decode($result,true);


if($decodificacion['error']==""){
    echo "no hay error";
    header("location:agenda.php");
}
else{
    echo "si hay error";
    header("location:index.php");
}



?>