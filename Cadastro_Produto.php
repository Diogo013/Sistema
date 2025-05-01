<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css" >
  <link rel="website icon" type="png" href="img/logo-rosa-removebg.png">
  <script src="js/pesquisarCep.js"></script>
  <script src="js/validarCpf.js"></script>
  <title>Cadastro Fornecedor</title>
</head>
<body>
    <section class="container-fluid mt-5">
        <form class="container m-auto row g-3" method="POST" action="config/Insert_Produto.php">
          <h1 class="text-center">Cadastro de Produtos</h1>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nomeProduto" placeholder="" name="nomeProduto" required>
              <label for="floatingInput">Nome do Produto</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="ncm" placeholder="" name="ncm" required>
              <label for="floatingInput">NCM</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="fornecedor" placeholder="" name="fornecedor" required>
              <label for="floatingInput">Fornecedor</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="marca" placeholder="" name="marca" required>
              <label for="floatingInput">Marca</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="modelo" placeholder="" name="modelo" value="" required>
              <label for="floatingInput">Modelo</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="categoria" placeholder="" name="categoria" required>
              <label for="floatingInput">Categoria</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="number" class="form-control" id="peso" placeholder="" name="peso" required>
              <label for="floatingInput">Peso</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="number" class="form-control" id="precoVenda" placeholder="" name="precoVenda" required>
              <label for="floatingInput">Preço de Venda</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="centroCusto" placeholder="" name="centroCusto" required>
              <label for="floatingInput">Centro de Custo</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="descricao" placeholder="" name="descricao" required>
              <label for="floatingInput">Descrição</label>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-secondary">Cadastrar</button>
            </div>
            <div class="col-auto">
              <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
            <div class="col-auto">
              <a href="Menu.php"><input type="button" class="btn btn-secondary" value="Voltar"></a>
            </div>
        </form>
    </section>
</body>
</html>
<?php
if(!empty($_POST))
{
  $produto = array($_POST['nomeProduto'], $_POST['ncm'], $_POST['fornecedor'], $_POST['marca'], $_POST['modelo'], $_POST['categoria'], $_POST['peso'], $_POST['precoVenda'], $_POST['centroCusto'], $_POST['descricao'] );

  $texto = implode(',', $produto) . PHP_EOL;


  $caminho = "cadastros/produto.txt"; //caminho onde sera criado o arquivo
  
        if(file_put_contents($caminho,$texto,FILE_APPEND))
        {
          echo"<script> alert('Dados cadastrado com sucesso');</script>";
        }
        else
        {
          echo"<script> alert('Erro ao cadastrar!');</script>";
        }
  }
?>