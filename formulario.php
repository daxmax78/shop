<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro</title> 
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Registro</span></div>
        <form action="datos.php" method="get" name="form">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Usuario" size="45" name="user" required>
              </div>
          <div class="row">
            <i class="fas fa-link"></i>
            <input type="text" placeholder="Correo" name="mail" size="30" required>
          </div>
          <div class="row">
            <i class="fas fa-map"></i>
            <input type="text" placeholder="Direccion" name="map" size="60" required>
          </div>
          <div class="row">
            <i class="fas fa-phone"></i>
            <input type="text" placeholder="Celular" name="phone" size="14" required>
          </div>
          
          <div class="row button">
            <input type="submit" value="Registrarse">
          </div>
          <div class="signup-link">Quieres regresar? <a href="page.php">Inicio</a></div>
        </form>
      </div>
    </div>

  </body>
</html>