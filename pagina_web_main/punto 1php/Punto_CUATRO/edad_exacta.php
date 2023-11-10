<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../Punto_CUATRO/edad_exacta.css">
    <title>Calcular Edad Exacta</title>
</head>
<body>
    
<center><h1>  Ejercicio No. 4<br>Metodo POST</h1> Digite la fecha de nacimiento </center>
<a href="http://localhost/proyectos/ejercicio_10_proyectobackend_main/proyecto_unidad10_main/pagina_web_main/landingpage_proyecto_unidad_10/index.html"><button type="button" class="btn btn-primary"> Ir al menú</button></a>
    
    <div class="main-frame-cal">
    <form action method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
            <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
    </form>

    <?php

    
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;

    }

    ?>

    </div>
</body>
</html>