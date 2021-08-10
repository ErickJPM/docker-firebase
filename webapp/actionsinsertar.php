<?php
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $datos= '{"nombre":"'.$nombre.'","email":"'.$email.'"}';
    $url='https://fire-dock-default-rtdb.firebaseio.com/agenda.json';
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datos);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type:text/plain'));
    $response=curl_exec($ch);
    if(curl_errno($ch)){
        echo "Error:".curl_errno($ch);
        header("location:index.php");
    }
    else{
        echo '<script>alert("Insercion correcta")</script>';
        header("location:agenda.php");
        
    }
    
    
?>