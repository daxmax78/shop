<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="TIENDA.CSS">
	<link rel="stylesheet" href="nuevo.css">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
			<div class="container-hero">
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
						<a href="nuevo.php"><i class="fa-solid fa-user"></i></a>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Pedidos</span>
							<span class="number">(20)</span>
						</div>
					</div>
				</div>
			</div>

			<input type="checkbox" id="btn-menu">
				<label for="btn-menu"><img src="barra-de-menus.png"></label>
					<nav class="menu">
					<ul>
						<li><a href="TIENDA.html">Inicio</a></li>
						<li><a href="JOGERS.html">Jogers</a></li>>
						<li><a href="OVER.html">Camisetas Oversize</a></li>
						<li><a href="hoodies.html">Hoodies</a></li>
						<li><a href="ZAPAS.html">Zapatillas</a></li>
						<li><a href="Nosotros.php">Blog</a></li>
					</ul>
				</nav>
			</input>
		</header><br><br>
		<div class="regis">
		<buttom><a href="index.php"><h1>Registros</a><buttom><br><br>
		</div>
        <center><form  action="sp_insertar.php" method="post">
            <table border=1>
                <tr>
                    <td>Ingresar Datos: </td>
                </tr>
                <tr>
                    <td>NOMBRE:         <br><label><input type="text" name="Nombre"></label></td>
                </tr>
                <tr>
                    <td>DIRECCION:      <br><label><input type="text" name= "Direccion"></label></td>
                </tr>
                <tr>
                    <td>CORREO:         <br><label><input type="text" name="Email"></label></td>
                </tr>
                <tr>
                    <td>TELEFONO:       <br><label><input type="text" name="Telefono"></label></td>
                </tr>
            </table>
			<div class="enviar">
            <input type="submit" value="enviar">
			</div>
        </form>    
</body>
</html>