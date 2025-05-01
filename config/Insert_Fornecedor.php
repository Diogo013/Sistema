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
    $razaoSocial = isset($_POST['razaoSocial']) ? $_POST['razaoSocial'] : "";
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : "";
    $cep = isset($_POST['cep']) ? $_POST['cep'] : "";
    $numero = isset($_POST['unidade']) ? $_POST['unidade'] : "";
    $telefone = isset($_POST['tel']) ? $_POST['tel'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : ""; 
    $atividade = isset($_POST['atividade']) ? $_POST['atividade'] : ""; 

	  $stmt = $conn->prepare("INSERT INTO fornecedor (razaoSocial, nome, cnpj, cep, numero, celular, email, atividade)  
	  	                                   VALUES (:razaoSocial, :nome, :cnpj, :cep, :numero, :tel, :email, :atividade)"); //INSTRUÇÃO SQL

	  $stmt->bindParam(':razaoSocial', $razaoSocial);
	  $stmt->bindParam(':nome', $nome);
	  $stmt->bindParam(':cnpj', $cnpj);
	  $stmt->bindParam(':cep', $cep);                                    // REFERENCIAS PARA ENVIAR O CONTEÚDO DAS VARIÁVEIS PARA O INSERT
	  $stmt->bindParam(':numero', $numero);
	  $stmt->bindParam(':tel', $telefone);
	  $stmt->bindParam(':email', $email);
	  $stmt->bindParam(':atividade', $atividade);
	  
	  $stmt->execute();         


    echo "dados cadastrados";
    
} catch (PDOException $e) {

    echo "erro ao cadastrar" . $e->getMessage();

}

header("location: http://localhost:80/Sistema/Cadastro_Fornecedor.php");

// Fechar a conexão
$conn = null;
?>
