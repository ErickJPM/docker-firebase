<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <div class="fondo">
        <h1>Agenda</h1>
    </div>
    <hr>
    <hr>
    <div class="fondoclaro">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $url='https://fire-dock-default-rtdb.firebaseio.com/agenda.json';
                $ch=curl_init();
                curl_setopt($ch,CURLOPT_URL,$url);
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($ch,CURLOPT_GET,1);
                $response=curl_exec($ch);
                curl_close();
                //echo $response;
                $decodificacion=json_decode($response,true);
                
                $contador=0;
                foreach($decodificacion as $key=>$value){
                    $contador++;
                    echo '
                        <tr>
                        <th scope="row">'.$contador.'</th>
                        <td>'.$decodificacion[$key]['nombre'].'</td>
                        <td>'.$decodificacion[$key]['email'].'</td>
                        </tr>
                    ';
                }

            ?>
            </tbody>
        </table>   
        <div style="text-align:right;">
            <button onclick="location.href='insertar.php'" type="button" class="btn btn-success" style="background-color:gray;">Insertar</button>
        </div>
    </div>
</body>
</html>

