<?php
$nombre = $_POST['Nombreusu'];
$fechadenac = $_POST['fechadenaci'];
$tele = $_POST['telefono'];
$ema = $_POST['email'];
$nacio = $_POST['nacionalidad'];

// Convertir arrays en cadenas de texto separadas por comas
$exp = is_array($_POST['experiencia']) ? implode(',', $_POST['experiencia']) : '';
$idiom = '';
if(isset($_POST['idiomas'])) {
    if(is_array($_POST['idiomas'])) {
        $idiom = implode(', ', $_POST['idiomas']);
    } else {
        $idiom = $_POST['idiomas'];
    }
}
$prog = isset($_POST['programación']) ? (is_array($_POST['programación']) ? implode(', ', $_POST['programación']) : $_POST['programación']) : '';
$apt = isset($_POST['aptitudes']) ? (is_array($_POST['aptitudes']) ? implode(', ', $_POST['aptitudes']) : $_POST['aptitudes']) : '';$hab = is_array($_POST['habilities']) ? implode(', ', $_POST['habilities']) : '';
$perf = isset($_POST['perfil']) ? $_POST['perfil'] : '';

//cadena de conexion
$hostname="localhost";
$username="root";
$password="";
$basededatosname="datos_link";
$tablaname="link";

$conexion=mysqli_connect ($hostname, $username, $password, $basededatosname);
if(!$conexion){
    die("Error al conectar".mysqli_connect_error());
}
echo "Conectado correctamente a la base de datos";

//insertar datos
$consulta="INSERT INTO link (Nombreusu, fechadenaci, experiencia, telefono, email, nacionalidad, idiomas, programación, aptitudes, habilities, perfil) VALUES ('$nombre','$fechadenac','$exp','$tele','$ema','$nacio','$idiom','$prog','$apt','$hab','$perf')";
if (mysqli_query($conexion,$consulta))
{
    echo "Datos Ingresados correctamente";
}
else
{
    echo "Error:" .$consulta . "<br>".mysqli_error($conexion);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos del usuario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
    }
    .container {
      text-align: center;
      margin: 0 auto;
      width: 50%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
      margin-top: 0;
    }
    p {
      margin-bottom: 10px;
    }
    .skills {
      list-style: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 10px 0;
    }
    .skill {
      margin: 5px;
      padding: 5px;
      border-radius: 4px;
      background-color: #eee;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Datos del usuario</h1>
    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST['Nombreusu']); ?></p>
    <p><strong>Fecha de nacimiento:</strong> <?php echo htmlspecialchars($_POST['fechadenaci']); ?></p>
    <p><strong>Experiencia:</strong> <?php echo htmlspecialchars(implode(', ', $_POST['experiencia'])); ?></p>
    <p><strong>Telefono:</strong> <?php echo htmlspecialchars($_POST['telefono']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Nacionalidad:</strong> <?php echo htmlspecialchars($_POST['nacionalidad']); ?></p>
    <p><strong>idiomas:<?php echo htmlspecialchars($idiom); ?></p>
    <p><strong>Lenguajes de programación:</strong> <?php echo htmlspecialchars($prog); ?></p>
    <p><strong>Aptitudes:</strong> <?php echo htmlspecialchars($apt); ?></p>
    <p><strong>Habilidades:</strong></p>
    <ul class="skills">
      <?php 
      if(is_array($_POST['habilities'])) {
        foreach ($_POST['habilities'] as $habilidad) {
          echo '<li class="skill">' . htmlspecialchars($habilidad) . '</li>';
        }
      } else {
        echo '<li class="skill">' . htmlspecialchars($hab) . '</li>';
      }
      ?>
    </ul>
    <p><strong>Perfil:</strong> <?php echo htmlspecialchars($perf); ?></p>
  </div>
</body>
</html>
