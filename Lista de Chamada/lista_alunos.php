<?php 
    include("connection.php");
    $sql = "SELECT * FROM alunos"; 
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Lista de chamada</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Lista de Chamada</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Chamada</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista_alunos.php">Lista de alunos<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div style='margin:1rem;'>
<a href="adicionar.php"><button type="button" class="btn btn-primary">Novo Aluno</button></a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ativo</th>
      <th scope="col">Ações</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
  <?php
    
    while($row = $result->fetch_assoc()) {

  ?>
    <tr>
      <th scope="row"> <?php echo $row["id"]?></th>
      <td><?php echo $row["nome"]?></td>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["ativo"]=="S"? "Ativo":"Inativo"?></td>
      <td>
        <a href="alterar.php?id=<?php echo $row["id"]?>"><button id="alterar" name='alterar'>Alterar</button></a>
        <a href="actionExcluir.php?id=<?php echo $row["id"]?>"><button id="excluir" name='excluir'>Excluir</button></a>
        <td><?php echo $row["telefone"]?></td>
      </td>
    </tr>
    <?php
    
        }
    
    ?>
  </tbody>
</table>

<div style='margin:1rem;'>
<a href="adicionar.php"><button type="button" class="btn btn-primary">Novo Aluno</button></a>
</div>

</body>
</html>