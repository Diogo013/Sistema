<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css" >
    <link rel="website icon" type="png" href="img/logo-rosa-removebg.png">
    <title>Login</title>
</head>
<body>
    <section class="container-fluid mt-5">
        <form class="container m-auto" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
            <div class="mb-3">
                <label for="nomeLogin" class="form-label">Login</label>
                <input type="text" class="form-control" id="nomeLogin" name="emailLogin" required>
            </div>
            <div class="mb-3">
                <label for="senhaLogin" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senhaLogin" name="senhaLogin" required>
            </div>
            <div class="mb-3">
                <select name="cargo" id="cargo" class="form-select">
                    <option value="gerente">gerente</option>
                    <option value="administrador">administrador</option>
                    <option value="funcionario">funcionario</option>
                </select>
            </div>
              <button type="submit" class="btn btn-secondary">Logar</button>
        </form>
    </section>
</body>
</html>

<?php
    if (!empty ($_POST))
    {
        session_start();
        $valido = false; // Flag para verificar se o login foi bem-sucedido
        $emaillogin = $_POST["emailLogin"];
        $senhalogin = $_POST["senhaLogin"];
        $senhaMD5 = md5($senhalogin);
        $cargo = $_POST["cargo"];

        $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Sistema_StTeresinha";
            try 
            {    
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $select= $conn->prepare("SELECT * FROM usuarios");
              $select->execute();

              while($row = $select->fetch())  {
            if(($row['email'] === $emaillogin) && ($cargo === $row['nivelAcesso'])){
                $valido = true; // Define como válido quando encontrar uma correspondência
                if($cargo == "gerente"){
                    $_SESSION["login"] = "gerente";     
                    header('Location: /Sistema/Menu.php');
                    exit();
                }
                if($cargo == "administrador"){
                    $_SESSION["login"] = "administrador";     
                    header('Location: /Sistema/Menu.php');
                    exit();
                }
                if($cargo == "funcionario"){
                    $_SESSION["login"] = "funcionario";
                    header('Location: /Sistema/Menu.php');     
                    exit();
                } 
            }
            
        } 

        if (!$valido) {
            echo "<script> alert('Insira o email ou a senha correta!');</script>";
        }
    }
    catch(PDOException $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    ?>