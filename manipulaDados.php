<?php

//Conexão com o banco usando PDO
$pdo = new PDO('mysql:host=localhost;dbname=contato', 'root', '');

//Condicional para verificar se a requisição recebida é para ser feita o insert da mensagem
if ($_POST['tipoRequisicao'] == "insereMensagem") {

    //Validando se os campos estão preenchidos
    $nome = validaCampoVazio($_POST['nome']);
    $email = validaCampoVazio($_POST['email']);
    $telefone = validaCampoVazio($_POST['telefone']);
    $mensagem = validaCampoVazio($_POST['mensagem']);

    //Caso esteja tudo certo é feita inserção
    if ($nome && $email && $telefone && $mensagem) {

        $sql = "INSERT INTO contato (nome, telefone, email, mensagem) VALUES (:nome, :telefone, :email, :mensagem)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':mensagem', $mensagem);
        $stmt->execute();

        echo "<script>sucessoInsert();</script>";
    }
}

//Condicional para verificar se a requisição recebida é para exibir as mensagens
if ($_POST['tipoRequisicao'] == "recuperaMensagens") {
    $sql = "SELECT * FROM contato";
    foreach ($pdo->query($sql) as $dados) {
        echo "<tr>";
        echo "<td>" . $dados['id'] . "</td>";
        echo "<td>" . $dados['nome'] . "</td>";
        echo "<td>" . $dados['email'] . "</td>";
        echo "<td>" . $dados['telefone'] . "</td>";
        echo "<td>" . $dados['mensagem'] . "</td>";
        echo "</tr>";
    }
}

//Função para validar campos vazios
function validaCampoVazio($campo)
{
    if (empty($campo) || $campo == "" || $campo == null) {
        echo "<script>mensagemErro();</script>";

    } else {
        return $campo;
    }

}