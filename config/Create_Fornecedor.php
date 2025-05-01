<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sistema_StTeresinha";
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE table fornecedor(codigo int PRIMARY KEY AUTO_INCREMENT,
                                razaosocial varchar(100) not null,
                                nome varchar(100) not null,
                                cnpj varchar(20) not null,
                                cep varchar(20) not null,
                                numero varchar(10) not null,
                                celular varchar(20) not null,
                                atividade varchar(20) not null,
                               email varchar(40) not null)";
                                

    $conn->exec($sql);

    echo"Criado com sucesso";
}
catch(PDOException $e)
{
    echo"Falha na conexão. Erro : " . $e->getMessage();
}
$conn = null;
?>