<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css" >
  <title>Consulta Produto</title>
</head>
<body>
    <section class="container-fluid mt-5">
        <div class="container m-auto row g-3">
          <h1 class="text-center">Cadastro de Produtos</h1>
          <div class="text-center">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Sistema_StTeresinha";
            try 
            {    
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $select= $conn->prepare("SELECT * FROM produtos");
              $select->execute();
              
             while($row = $select->fetch()) 
             {
                echo"<div class='card d-flex px-4 mx-auto mb-4'>
                <div class='card-header d-flex '>";
                  echo"<h3 class='titulo text-center'>".$row['nomeProduto'];
                  echo"</h3>";
                echo"</div>
                <div class='card-body d-flex flex-column align-items-center'>
                  <div class='container-img'>
                    <!-- será necessario adicionar as imagens --> 
                    <img class='img-consulta col-12' src='' alt=''>
                  </div>";
                  echo"<div class='container-texto'>
                    <h5>NCM: ".$row['ncm'];
                    echo"</h5>
                    <h5>Fornecedor: ".$row['fornecedor'];
                    echo"</h5>
                    <h5>Marca: ".$row['marca'];
                    echo"</h5>
                    <h5>Modelo: ".$row['modelo'];
                    echo"</h5>
                    <h5>Categoria: ".$row['categoria'];
                    echo"</h5>
                    <h5>Peso: ".$row['peso'];
                    echo"</h5>
                    <h5>Preço de venda: ".$row['precoVenda'];
                    echo"</h5>
                    <h5>Centro Custo: ".$row['centroCusto'];
                    echo"</h5>
                    <h5>Descriçao: ".$row['descricao'];
                    echo"</h5>
                  </div>
                </div>
                </div>";
            }
          }
          catch(PDOException $e) 
              {
                echo 'ERROR: ' . $e->getMessage();
              }
            ?>

            <div class="col-auto">
              <a href="Menu.php"><input type="button" class="btn btn-secondary" value="Voltar"></a>
            </div>
          </div>
        </div>  
    </section>
</body>
</html>