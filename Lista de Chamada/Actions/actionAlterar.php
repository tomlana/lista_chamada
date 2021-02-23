<?php
    include("connection.php");
    $ativo = $_POST["ativo"]=="on"?"S":"N";
    $sql = "UPDATE alunos set nome='$_POST[nome]', email='$_POST[email]', ativo='$ativo', telefone='$_POST[telefone] where id='$_POST[id]'";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Alterado com sucesso!"; 
        header("Location: lista_alunos.php");
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        header("Location: alterar.php?id=$row[id]");
    }
    mysqli_close($conn);
?>
