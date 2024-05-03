<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tienda.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
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
						<a href="formul.php"><i class="fa-solid fa-user"></i></a>
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
<?php
    include_once ('cone.php');
    $objeto = new Conexion(); //Se crea el Objeto
    $conexion = $objeto -> Conectar();//Se crea una variable conexion que hace referencia al metodo de conectar


    $consulta = "SELECT * FROM usuarios";//Sentencia SQL
    $resultado = $conexion -> prepare($consulta); //La conexion se envia a preparase a traves de la sentencia SQL
    $resultado -> execute();
    $datos = $resultado -> fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>
<body><center>
    <hr>
    <div class="usua">
        <h1  >Regitrase</h1>
        <form method="POST" action="insertar.php">
            <table>
                    <tr>
                        <td><h1>Usuario: </td>
                        <td><input type="text" name="txtUsuario" required></td>
                    </tr>
                    <tr>
                        <td><h1>Email: </td>
                        <td><input type="text" name="txtEmail" required></td>
                    </tr>
                    <tr>
                        <td><h1>Direccion: </td>
                        <td><input type="text" name="txtDir" required></td>
                    </tr>
                    <tr>
                        <td><h1>Telefono: </td>
                        <td><input type="text" name="txtPhone" required></td>
                    </tr>
                    <input type="hidden" name="oculto" value="1"><br>
                        <tr><br>
                            <th><buttom><input type="submit" value="Enviar"></th><br>
                        </tr>
                </h1>
            </table>
        </form>
        </div></center>
        <h1>REGISTROS</h1><br><br>
        <table border="1">
            <tr>
                <td><h1>ID</td>
                <td><h1>Usuario</td>
                <td><h1>Correo</td>
                <td><h1>Direccion</td>
                <td><h1>Telefono</td>
                <td><h1>Eliminar</td>
            </tr>
            <?php
                $informacion='';
                foreach ($datos as $fila){
                    $informacion.='
                    <tr>
                        <td><h1>'.$fila['id'].'</td>
                        <td><h1>'.$fila['user'].'</td>
                        <td><h1>'.$fila['email'].'</td>
                        <td><h1>'.$fila['dir'].'</td>
                        <td><h1>'.$fila['phone'].'</td>
                        <td><h1><a href="eliminar.php?id='.$fila['id'].'">Eliminar</a></td>
                    </tr>';
                }
                echo $informacion;
            ?>
        </table>
        <!-- //Se crea el Insert     -->
    </center>
    <hr>
    <section id="newsletter" class="section-p1 section-m1">
        </section>
</body>
</html>