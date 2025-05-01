<?php
session_start();  // Inicia a sessão

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sistema_StTeresinha";

try {
    // Conectando ao banco de dados
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pegando os dados do formulário
    $nomeProduto = isset($_POST['nomeProduto']) ? $_POST['nomeProduto'] : "";
    $ncm = isset($_POST['ncm']) ? $_POST['ncm'] : "";
    $fornecedor = isset($_POST['fornecedor']) ? $_POST['fornecedor'] : "";
    $marca = isset($_POST['marca']) ? $_POST['marca'] : "";
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : "";
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : "";
    $peso = isset($_POST['peso']) ? $_POST['peso'] : "";
    $precoVenda = isset($_POST['precoVenda']) ? $_POST['precoVenda'] : "";
    $centroCusto = isset($_POST['centroCusto']) ? $_POST['centroCusto'] : "";
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : "";

	  $stmt = $conn->prepare("INSERT INTO produtos (nomeProduto, ncm, fornecedor, marca, modelo, categoria, peso, precoVenda, centroCusto, descricao)  
	  	                                   VALUES (:nomeProduto, :ncm, :fornecedor, :marca, :modelo, :categoria, :peso, :precoVenda, :centroCusto, :descricao)"); //INSTRUÇÃO SQL

	  $stmt->bindParam(':nomeProduto', $nomeProduto);
	  $stmt->bindParam(':ncm', $ncm);
	  $stmt->bindParam(':fornecedor', $fornecedor);
	  $stmt->bindParam(':marca', $marca);                                    
	  $stmt->bindParam(':modelo', $modelo);                                    
      // REFERENCIAS PARA ENVIAR O CONTEÚDO DAS VARIÁVEIS PARA O INSERT
	  $stmt->bindParam(':categoria', $categoria);
	  $stmt->bindParam(':peso', $peso);
	  $stmt->bindParam(':precoVenda', $precoVenda);
	  $stmt->bindParam(':centroCusto', $centroCusto);
	  $stmt->bindParam(':descricao', $descricao);
	  
	  $stmt->execute();         

    

    echo "dados cadastrados";
    
} catch (PDOException $e) {

    echo "erro ao cadastrar" . $e->getMessage();

    
}

header("location: http://localhost:80/Sistema/Cadastro_Produto.php");

// Fechar a conexão
$conn = null;
?>
 