<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Punto_UNO/calculadora.css">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--CND BOOTSTARP-->
 

    <title>Calculadora</title>
</head>
<body>
    
<center><h1>  Ejercicio No. 1 <br>Calculadora Basica</h1>Digite los Valores <br>
         Selecciona una Operación</p> </center>
<a href="http://localhost/proyectos/ejercicio_10_proyectobackend_main/proyecto_unidad10_main/pagina_web_main/landingpage_proyecto_unidad_10/index.html"><button type="button" class="btn btn-primary"> Ir al menú</button></a>


    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            
            <label for="exampleFormControlInput1">Ingrese valor # 1:</label>
            <input type="number" name="n1" class="form-control" id="exampleFormControlInput1" placeholder="Digite Número 1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Ingrese valor # 2:</label>
            <input type="number" name="n2" class="form-control" id="exampleFormControlInput2" placeholder="Digite número 2">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccione la operación:</label>
            <select class="form-control" name="tipo" id="exampleFormControlSelect1">
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
            </select>
        </div>
        <button type="submit" name="operar" class="btn btn-outline-info">Resultado</button>
        
    </form>

    <?php

    $n1 =  $n2 = $tipo = $result = 0;
    
    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $tipo = $_POST['tipo'];

        switch ($tipo) {
            case '1':
                $result = $n1 + $n2;
                break;
            case '2':
                $result = $n1 - $n2;
                break;
            case '3':
                $result = $n1 * $n2;
                break;
            case '4':
                $result = $n1 / $n2;
                break;
        }

        echo "<h1>".$result."</h1>";
        #echo "<script>alert(".$result.");</script>";

    }

    ?>

</body>
</html>

