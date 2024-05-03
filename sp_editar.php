<?php
    $id = $_POST[ 'Id' ];
    $nom = $_POST['Nombre'];
    $dire = $_POST['Direccion'];
    $mail = $_POST['Email'];
    $telf = $_POST['Telefono'];

    $cnx = mysqli_connect ("localhost", "root", "", "registros");
    $sql = "UPDATE clientes set Nombre='$nom', Direccion='$dire', Email='$mail', Telefono='$telf' where Id like $id ";
    $rta = mysqli_query ($cnx, $sql);
    if (!$rta) {
       echo "Se Actualizo ";
       } 
       else {
           header("Location: index.php");
       }
   ?>