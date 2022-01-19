<?php
session_start(); 
//Incluindo a conexão com banco de dados   
include_once("acess/Db.class.php");   

//O campo usuário e senha preenchido entra no if para validar
if( !empty($_POST['CodigoPatio']) && !empty($_POST['CidadePatio']) && !empty($_POST['EstadoPatio']) ){
$nome = $_POST['NomePatio'];
$cnpj = $_POST['CNPJPatio'];
$codigo = $_POST['CodigoPatio'];
$email = $_POST['EmailPatio'];
$telefone = $_POST['TelefonePatio'];
$lougradouro = $_POST['LougradouroPatio'];
$numero = $_POST['NumeroPatio'];
$bairro = $_POST['BairroPatio'];
$cidade = $_POST['CidadePatio'];
$estado = $_POST['EstadoPatio'];
    
//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
$inserir_patio = "INSERT INTO Patio (Nome, Codigo, CNPJ, Email, Telefone, Lougradouro, Numero, Bairro, Cidade, UF) VALUES 
('$nome', '$codigo', '$cnpj','$email', '$telefone','$lougradouro', '$numero','$bairro','$cidade','$estado')";
if(mysqli_query($conn, $inserir_patio)){
    echo "Deu certo";
}else{
    echo "Errado";
}
mysqli_close ($conn) ;

$_SESSION['MensagemMembroErro'] = "Pátio cadastrado com sucesso!";
header("Location: ../../cadastro-veiculo.php");

//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
}else{
    $_SESSION['MensagemMembroErro'] = "Preencha todos os campos do formulário.";
    header("Location: ../../cadastro-veiculo.php");
}
?>