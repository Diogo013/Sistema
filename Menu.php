<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css" >
    <link rel="website icon" type="png" href="img/logo-rosa-removebg.png">
    <title>Menu</title>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="img/logo-rosa.png" alt="logo rosa" width="50" height="50" style="border-radius: 50%;">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">Cadastro</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Cadastro_Cliente.php">Cliente</a></li>
                <li><a class="dropdown-item" href="Cadastro_Funcionario.php">Funcionario</a></li>
                <li><a class="dropdown-item" href="Cadastro_Fornecedor.php">Fornecedor</a></li>
                <li><a class="dropdown-item" href="Cadastro_Produto.php">Produto</a></li>
                <li><a class="dropdown-item" href="Cadastro_Usuario.php">Usuario</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">Consulta</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Consulta_Cliente.php">Cliente</a></li>
                <li><a class="dropdown-item" href="Consulta_Funcionario.php">Funcionario</a></li>
                <li><a class="dropdown-item" href="Consulta_Fornecedor.php">Fornecedor</a></li>
                <li><a class="dropdown-item" href="Consulta_Produto.php">Produto</a></li>
                <li><a class="dropdown-item" href="Consulta_Usuario.php">Usuario</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sair.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



<?php 

  session_start();
  echo "<h3 class='text-center'>Seu cargo é " . $_SESSION["login"] . "</h3>.<br>";

?>
