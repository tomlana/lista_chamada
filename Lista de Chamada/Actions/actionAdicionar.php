<?php 
    include("connection.php");
    $ativo = $_POST["ativo"]=="on"?"S":"N";
    $sql = "INSERT INTO alunos (nome, email, ativo, telefone) VALUES ('$_POST[nome]', '$_POST[email]', '$ativo', '$_POST[telefone]')";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Novo registro criado com sucesso"; 
        header("Location: lista_alunos.php");
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        header("Location: adicionar.php");
    }
    mysqli_close($conn);
    

?>

