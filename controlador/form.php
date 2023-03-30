<?php
    require '../modelo/clases.php';

    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $opcion = $_POST['opcion'];

    // Instanciar un objeto no estático
    /*$operacion = new Calculadora();
    echo $operacion->calcularDatos($val1, $val2, $opcion);*/


    // Llamar a método estático
    echo Calculadora::calcularDatos($val1, $val2, $opcion);
   

?>