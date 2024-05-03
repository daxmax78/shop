<?php
$id = $_POST[ 'Id' ];
$nom = $_POST['Nombre'];
$dire = $_POST['Direccion'];
$mail = $_POST['Email'];
$telf = $_POST['Telefono'];


 $cnx = mysqli_connect("localhost", "root", "", "registros");
 $sql = "INSERT INTO clientes (Nombre, Direccion, Correo, Telefono) VALUES('$nom', '$dire', '$mail','$telf')"; 
 $rta = mysqli_query($cnx, $sql);
 if (!$rta) {
    echo "Se Inserto ";
    } 
    else {
        header("Location: index.php");
    }
?>