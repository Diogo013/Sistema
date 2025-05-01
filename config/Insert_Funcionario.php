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
    $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : "";
    $escolaridade = isset($_POST['escolaridade']) ? $_POST['escolaridade'] : "";
    $naturalidade = isset($_POST['naturalidade']) ? $_POST['naturalidade'] : "";

	  $stmt = $conn->prepare("INSERT INTO funcionarios (nome, cpf, rg, cep, numero, celular, email, nascimento, escolaridade, naturalidade)  
	  	                                   VALUES (:nome, :cpf, :rg, :cep, :numero, :tel, :email, :nascimento, :escolaridade, :naturalidade)"); //INSTRUÇÃO SQL

	  $stmt->bindParam(':nome', $nome);
	  $stmt->bindParam(':cpf', $cpf);
	  $stmt->bindParam(':rg', $rg);
	  $stmt->bindParam(':cep', $cep);                                    
      // REFERENCIAS PARA ENVIAR O CONTEÚDO DAS VARIÁVEIS PARA O INSERT
	  $stmt->bindParam(':numero', $numero);
	  $stmt->bindParam(':tel', $telefone);
	  $stmt->bindParam(':email', $email);
	  $stmt->bindParam(':nascimento', $nascimento);
	  $stmt->bindParam(':escolaridade', $escolaridade);
	  $stmt->bindParam(':naturalidade', $naturalidade);
	  
	  $stmt->execute();         

   

    echo "dados cadastrados";
    
} catch (PDOException $e) {

    echo "erro ao cadastrar" . $e->getMessage();
}

header("location: http://localhost:80/Sistema/Cadastro_Funcionario.php");

// Fechar a conexão
$conn = null;
?>
