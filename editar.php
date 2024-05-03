<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="TIENDA.css">
</head>
<body>
<?php
	$id =  $_GET['Id']; 
    $nom = $_GET['Nombre'];
    $dire = $_GET['Direccion'];
    $mail = $_GET['Correo'];
    $telf = $_GET['Tel']; 
?>
    <form  action="sp_editar.php" method="post">
<header>
			<div class="contYainer-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">0998645268</span>
						</div>
					</div>

					<div class="container-logo">
						<h1 class="logo"><a href="#">DAXX</a></h1>
					</div>

					<div class="container-user">
						<a href="index.php"><i class="fa-solid fa-user"></i></a>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Pedidos</span>
							<span class="number">(20)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="TIENDA.html">Inicio</a></li>
						<li><a href="JOGERS.php">Joggers</a></li>
						<li><a href="OVER.php">Camisetas Oversize</a></li>
						<li><a href="hoodies.php">Hoodies</a></li>
						<li><a href="ZAPAS.php">Zapatillas</a></li>
						<li><a href="Nosotros.php">Blog</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<table border=1>
                <tr>
                    <td>Ingresar Datos: </td>
                </tr>
				<tr>
                    <td>Id:         <br><label><input type="text" name="Id" value ="<?=$id?>"></label></td>
                </tr>
                <tr>
                    <td>NOMBRE:         <br><label><input type="text" name="Nombre" value ="<?=$nom?>" required/></label></td>
                </tr>
                <tr>
                    <td>DIRECCION:      <br><label><input type="text" name= "Direccion" value ="<?=$dire?>" required/> </label></td>
                </tr>
                <tr>
                    <td>CORREO:         <br><label><input type="text" name="Email" value ="<?=$mail?>" required/></label></td>
                </tr>
                <tr>
                    <td>TELEFONO:       <br><label><input type="text" name="Telefono" value ="<?=$telf?>" required/></label></td>
                </tr>
            </table>
		<tr>
        <td><input type="submit" value="ACTUALIZAR"></td>
        <td><a href="index.php">CANCELAR</a></td>
		</tr>
		</form>
</body>
</html>