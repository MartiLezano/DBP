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
    <p><strong>Ocupación:</strong> <?php echo htmlspecialchars($_POST['ocupacion']); ?></p>
    <p><strong>Contacto:</strong> <?php echo htmlspecialchars($_POST['contacto']); ?></p>
    <p><strong>Nacionalidad:</strong> <?php echo htmlspecialchars($_POST['nationalidad']); ?></p>
    <p><strong>Inglés:</strong> <?php echo htmlspecialchars($_POST['english']); ?></p>
    <p><strong>Lenguajes de programación:</strong> <?php echo htmlspecialchars($_POST['programación']); ?></p>
    <p><strong>Aptitudes:</strong> <?php echo htmlspecialchars($_POST['aptitudes']); ?></p>
    <p><strong>Habilidades:</strong></p>
    <ul class="skills">
      <?php foreach ($_POST['habilities'] as $habilidad): ?>
        <li class="skill"><?php echo htmlspecialchars($habilidad); ?></li>
      <?php endforeach; ?>
    </ul>
    <p><strong>Perfil:</strong> <?php echo htmlspecialchars($_POST['perfil']); ?></p>
  </div>
</body>
</html>