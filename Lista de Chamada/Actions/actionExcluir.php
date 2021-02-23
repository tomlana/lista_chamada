<?php

include("connection.php");
// DELETE FROM `alunos` WHERE `alunos`.`id` = 8
$sql = "DELETE from alunos where id=$_GET[id]";
if (mysqli_query($conn, $sql)) {
    header("Location: lista_alunos.php");
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    echo '<prev>'; var_dump("Erro: " . $sql . "<br>" . mysqli_error($conn) . "<br>").exit;
        header("Location: lista_alunos.php");

}
mysqli_close($conn);
?>