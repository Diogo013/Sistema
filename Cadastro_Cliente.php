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
  <title>Cadastro Cliente</title>
</head>
<body>
    <section class="container-fluid mt-5">
        <form class="container m-auto row g-3" method="POST" action="config/Insert_Cliente.php" enctype="multipart/form-data" >
          <h1 class="text-center">Cadastro de Clientes</h1>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nome" placeholder="" name="nome" required>
              <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="cpf" placeholder="" name="cpf" required  onblur="checkCPFValidity()">
              <label for="floatingInput">CPF</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="" name="rg" required>
              <label for="floatingInput">RG</label>
            </div>
            <div class="form-floating mb-3 col-md-10">
              <input type="text" class="form-control" id="cep" placeholder="" name="cep" value="" onblur="pesquisacep(this.value);" required>
              <label for="floatingInput">CEP</label>
            </div>
            <div class="col-auto">
              <input type="button" id="btValidarCep" class="btn btn-secondary " value="Validar CEP">
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
  document.getElementById('cpf').addEventListener('input', function(e) {
    
    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
    e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '/' : x[4]) + x[4] + (x[5] ? '-' + x[5] : '');
    
    if(e.target.value.length < 15) {
        x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
        e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '-' + x[4] : '');
    }

    console.log('Com formatação: ' + e.target.value);
    
    //Caso queira pegar apenas os números use essa função para remover todos os caracteres menos os números em Javascript
    let valor = e.target.value.replace(/[^0-9]/g, '');
    console.log('Sem formatação: ' + valor);


  function FileName() {
  const input = document.getElementById('upload');
  const label = document.getElementById('label');
  
  // Remove ícones antigos (se houver)
  label.textContent = '';

  if (input.files.length > 0) {

    label.textContent = input.files[0].name;

    // Cria o ícone e adiciona a classe
    const iconCam = document.createElement('i');
    iconCam.classList.add('fa-solid', 'fa-camera', 'ms-2');
    iconCam.style.color = "#8C1523";
    
    label.appendChild(iconCam);
  } else {
    label.textContent = 'Envie uma Foto sua para se Cadastrar';

    const iconCam = document.createElement('i');
    iconCam.classList.add('fa-solid', 'fa-camera', 'ms-2');
    iconCam.style.color = "#8C1523";
    
    label.appendChild(iconCam);
  }
}
});

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



  $cliente = array($_POST['nome'], $_POST['cpf'], $_POST['rg'], $_POST['cep'], $_POST['rua'], $_POST['unidade'], $_POST['bairro'], $_POST['cidade'], $_POST['uf'], $_POST['complemento'] , $_POST['tel'], $_POST['email'], $novo_nome);

  $texto = implode(',', $cliente) . PHP_EOL;

  $caminho = "cadastros/cliente.txt"; //caminho onde sera criado o arquivo
  
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

