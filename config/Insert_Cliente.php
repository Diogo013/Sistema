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
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
    $rg = isset($_POST['rg']) ? $_POST['rg'] : "";
    $cep = isset($_POST['cep']) ? $_POST['cep'] : "";
    $numero = isset($_POST['unidade']) ? $_POST['unidade'] : "";
    $telefone = isset($_POST['tel']) ? $_POST['tel'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";

	  $stmt = $conn->prepare("INSERT INTO clientes (nome, cpf, rg, cep, numero, celular, email)  
	  	                                   VALUES (:nome, :cpf, :rg, :cep, :numero, :telefone, :email)"); //INSTRUÇÃO SQL

	  $stmt->bindParam(':nome', $nome);
	  $stmt->bindParam(':cpf', $cpf);
	  $stmt->bindParam(':rg', $rg);
	  $stmt->bindParam(':cep', $cep);                                    // REFERENCIAS PARA ENVIAR O CONTEÚDO DAS VARIÁVEIS PARA O INSERT
	  $stmt->bindParam(':numero', $numero);
	  $stmt->bindParam(':telefone', $telefone);
	  $stmt->bindParam(':email', $email);
	  
	  $stmt->execute();         


    echo "<script> alert('Dados cadastrado com sucesso');</script>";
    
} catch (PDOException $e) {
    
    echo "erro ao cadastrar" . $e->getMessage();
    
}
header("location: http://localhost:80/Sistema/Cadastro_Cliente.php");
    

// Fechar a conexão
$conn = null;
?>
