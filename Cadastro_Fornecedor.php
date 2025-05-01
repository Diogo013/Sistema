<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css" >
  <link rel="website icon" type="png" href="img/logo-rosa-removebg.png">
  <script src="js/pesquisarCep.js"></script>
  <script src="js/validarCnpj.js"></script>
  <title>Cadastro Fornecedor</title>
</head>
<body>
    <section class="container-fluid mt-5">
        <form class="container m-auto row g-3" method="POST" action="config/Insert_Fornecedor.php" enctype="multipart/form-data">
          <h1 class="text-center">Cadastro de Fornecedores</h1>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="razaoSocial" placeholder="" name="razaoSocial" required>
              <label for="floatingInput">Razão Social</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nome" placeholder="" name="nome" required>
              <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="cnpj" placeholder="" name="cnpj" required onblur="validarCNPJ(this.value);">
              <label for="floatingInput">CNPJ</label>
            </div>
            <div class="form-floating mb-3 col-md-10">
              <input type="text" class="form-control" id="cep" placeholder="" name="cep" value="" onblur="pesquisacep(this.value);" required>
              <label for="floatingInput">CEP</label>
            </div>
            <div class="col-auto">
              <input type="button" id="btValidarCpf" class="btn btn-secondary " value="Validar CEP">
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="rua" placeholder="" name="rua" required>
              <label for="floatingInput">Rua</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="unidade" placeholder="" name="unidade" required>
              <label for="floatingInput">Unidade</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="bairro" placeholder="" name="bairro" required>
              <label for="floatingInput">Bairro</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="uf" placeholder="" name="uf" required>
              <label for="floatingInput">Estado</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="cidade" placeholder="" name="cidade" required>
              <label for="floatingInput">Cidade</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="complemento" placeholder="" name="complemento" required>
              <label for="floatingInput">Complemento</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="site" placeholder="" name="site" required>
              <label for="floatingInput">Site</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control" id="atividade" placeholder="" name="atividade" required>
              <label for="floatingInput">Atividade</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="tel" class="form-control" id="tel" placeholder="" name="tel" required>
              <label for="floatingInput">Tel/Cel</label>
            </div>
            <div class="form-floating mb-3 col-md-6">
              <input type="email" class="form-control" id="email" placeholder="" name="email" required>
              <label for="floatingInput">Email</label>
            </div>
            <div class="input-group mb-3 col-md-6">
              <input type="file" class="form-control" id="upload" name="upload" onchange="FileName()" accept="image/*">
              <label class="input-group-text" id="label" for="inputGroupFile02">Upload</label>
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

<script>

</script>

<?php
if(!empty($_POST))
{
  

  date_default_timezone_set('America/Sao_Paulo');

  if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
    $ext = '.' . strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION)); // Extensão do arquivo

    // Gerando um nome único para o arquivo com base na data e hora
    $novo_nome = date("Y.m.d-H.i.s") . $ext;

    // Diretório onde o arquivo será salvo
    $dir = 'Imagens-Sistemas/';

    // Move o arquivo para o diretório especificado
    move_uploaded_file($_FILES['upload']['tmp_name'], $dir . $novo_nome);

} else {
    echo "<script>alert('Erro ao enviar a imagem!'); window.history.back();</script>";
}
  
  
  $fornecedor = array($_POST['razaoSocial'], $_POST['nome'], $_POST['cnpj'], $_POST['cep'], $_POST['rua'], $_POST['unidade'], $_POST['bairro'], $_POST['cidade'], $_POST['uf'], $_POST['complemento'] , $_POST['tel'], $_POST['site'], $_POST['atividade'], $_POST['email'] );


  

  $texto = implode(',', $fornecedor) . PHP_EOL;


  $caminho = "cadastros/fornecedor.txt"; //caminho onde sera criado o arquivo
  
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