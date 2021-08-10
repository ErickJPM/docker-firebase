<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
    <div class="fondo">
        <h1>Insertar</h1>
    </div>
    <hr>
    <hr>
    <div class="formulario">
        <form action="actionsinsertar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            
            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div>
    
</body>
</html>
