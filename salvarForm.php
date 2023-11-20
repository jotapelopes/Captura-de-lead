<?php
    require("conectar.php");

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO lead (nome, telefone, mensagem)
    VALUES ('$nome', '$telefone','$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Sua mensagem foi enviada com sucesso!</h1>";
        echo "<center><p>Estamos cuidando para que seu atendimentoseja o mais rápido possível :)</p>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
      } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
      }

?>