<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sistema_StTeresinha";
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE table produtos(codigo int PRIMARY KEY AUTO_INCREMENT,
                                nomeProduto varchar(100) not null,
                                ncm varchar(100) not null,
                                fornecedor varchar(100) not null,
                                marca varchar(100) not null,
                                modelo varchar(100) not null,
                                categoria varchar(20) not null,
                                peso varchar(20) not null,
                                precoVenda varchar(100) not null,
                                centroCusto varchar(20) not null,
                                descricao varchar(100) not null)";
                                

    $conn->exec($sql);

    echo"Criado com sucesso";
}
catch(PDOException $e)
{
    echo"Falha na conexão. Erro : " . $e->getMessage();
}
$conn = null;
?>