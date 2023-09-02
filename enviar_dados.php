<?php
$conexao = new MySQLi ('Localhost');

$nome= isset($_POST['nome']) ? $_POST['nome'] : "";
$data_nascimento= isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : "";
$nome_empresa= isset($_POST['nome_empresa']) ? $_POST['nome_empresa'] : "";
$email= isset($_POST['email']) ? $_POST['email'] : "";
$telefone= isset($_POST['telefone']) ? $_POST['telefone'] : "";
$porte= isset($_POST['porte']) ? $_POST['porte'] : "";
$cidade= isset($_POST['cidade']) ? $_POST['cidade'] : "";
$estado= isset($_POST['estado']) ? $_POST['estado'] : "";
$endereco= isset($_POST['endereco']) ? $_POST['endereco'] : "";

$sql = "Insert into empreas (nome, data_nascimento, nome_empresa, email, telefone, porte, cidade, estado, endereco) values('$nome','$data_nascimento', '$nome_empresa','$email','$telefone','$porte','$cidade','$estado', '$endereco')";

$resultado =$conexao->query($sql) or trigger_error($conexao->error);

If($resultado==true){
    echo "dados inseridos com sucesso";
}else{
    echo"erro";
}
$conexao ->Close();

?>