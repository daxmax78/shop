<?php
    if (!isset($_GET['id'])) {
        exit();
    }
    $codigo = $_GET['id'];
    include_once ('cone.php');
    $objeto = new Conexion(); //Se crea el Objeto
    $conexion = $objeto -> Conectar();//Se crea una variable conexion que hace referencia al metodo de conectar

    $consulta = "DELETE FROM usuarios WHERE id='$codigo'";
    $resultado = $conexion-> prepare($consulta);
    $resultado -> execute();

?>