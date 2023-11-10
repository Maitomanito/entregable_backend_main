<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../Punto_TRES/method_get.css">
    <title>Metodo Get</title>
</head>
<body>
    
<center><h1>  Ejercicio No. 3 <br>Metodo GET</h1> Digite los Valores </center>
<a href="http://localhost/proyectos/ejercicio_10_proyectobackend_main/proyecto_unidad10_main/pagina_web_main/landingpage_proyecto_unidad_10/index.html"><button type="button" class="btn btn-primary"> Ir al menú</button></a>
    
    <div class="main-frame-cal">
    <form action="" method="get">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Apellido">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cédula</label>
            <input type="text" name="cc" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Cédula">
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
    </form>

    <?php   

    $edad = 0;
    
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
    
        echo "Su Nombre es: ".$nombre."<br>";
        echo "Su Apellido es: ".$apellido."<br>";
        echo " Su Cédula es: ".$cedula."<br>";

    }

    ?>

    </div>
   
</body>
</html>
