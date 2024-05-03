<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="TIENDA.CSS">
    <link rel="stylesheet" href="style.CSS">
    <link rel="stylesheet" href="styles.CSS">
    <link rel="stylesheet" href="nuevo.CSS">
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
		</header>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" values="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>   
    </div>

    <div>
        <table border="1">
            <tr> 
                <td>ID</td>
                <td>NOMBRE</td>
                <td>DIRECCION</td>
                <td>CORREO</td>
                <td>TELEFONO</td>
                <td>OPCIONES</td>
            </tr>
            <?php
                $cnx = mysqli_connect("localhost", "root", "", "registros");
                $sql = "SELECT Id, Nombre, Direccion, Correo, Telefono FROM clientes";
                $rta = mysqli_query($cnx, $sql);
                    while ($mostrar = mysqli_fetch_row( $rta )) {
                ?>
                <tr>
                    <td><?php  echo $mostrar[0] ?></td>
                    <td><?php  echo $mostrar[1] ?></td>
                    <td><?php  echo $mostrar[2] ?></td>
                    <td><?php  echo $mostrar[3] ?></td>
                    <td><?php  echo $mostrar[4] ?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar[0] ?>& 
                        Nombre=<?php echo $mostrar[1] ?> &
                        Direccion=<?php echo $mostrar[2] ?>&
                        Correo=<?php echo $mostrar[3] ?>&
                        Tel=<?php echo $mostrar[4] ?>
                        ">Editar</a>
                        <a href="sp_eliminar.php id=<?php echo $mostrar[1] ?>">eliminar</a>
                    </td>
                </tr>
                <?php
                }?>
        </table>
    </div>
</body>
</html