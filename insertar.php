<?php
    if (!isset($_POST['oculto'])){
        exit();
    }
    include_once ('cone.php');
    $objeto = new Conexion(); //Se crea el Objeto
    $conexion = $objeto -> Conectar();//Se crea una variable conexion que hace referencia al metodo de conectar

    $usuario = $_POST['txtUsuario'];
    $correo = $_POST['txtEmail'];
    $direccion = $_POST['txtDir'];
    $telefono = $_POST['txtPhone']; 

    $consulta = "SELECT * FROM usuarios";

    $consulta = "INSERT INTO usuarios(user,email,dir,phone) VALUES ('$usuario','$correo','$direccion','$telefono')";
    $resultado = $conexion-> prepare($consulta);
    $resultado -> execute();
    header('location:formul.php');
?>








