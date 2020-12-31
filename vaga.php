<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
   <title>Vagas</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
</head>
<body>
    <?php

    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($_SESSION['usuario'])){
        header('Location: menu.php');
    }

    ?>

    
<!--menu nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="collapse navbar-collapse" >
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="menu.php">Home</a>
                <a class="nav-item nav-link" href="listaUsuarios.php">Candidatos</a>
                <a class="nav-item nav-link" href="vaga.php">Vagas</a>
                <a class="nav-item nav-link" href="cadastro.php">Cadastro</a>
            </div>            
        </div>
        <a class="btn btn-primary" href="../sistema/front/index.html" role="button" >Sair</a>
    </nav> 

<div class="container-fluid">

<h3 style="text-align: center; ">Lista de Vagas</h3>

<!--começa dados dos users -->
<table class="table table-striped">
  <thead>    
    <tr>
      <th scope="col">Nome Responsavel</th>
      <th scope="col">Nome Empresa</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Endereço</th>
      <th scope="col">Cargo</th>
      <th scope="col">Descrição Vaga</th>
      <th scope="col">Horário trabalho</th>
      <th scope="col">Conhecimentos exigidos </th>
      <th scope="col">Remunerção</th>  
    </tr>
  </thead>    
    
     <?php 
     include 'conexao.php';     
     $sql= "SELECT * FROM vaga ";
     $busca = mysqli_query($conexao, $sql);
    
     while ($array = mysqli_fetch_array($busca)) {
      
      $id_usuario = $array['id_vaga'];
      $Nome_Responsavel = $array['nome_responsavel'];
      $Nome_empresa = $array['nome_empresa'];
      $fone_empresa = $array['fone_empresa'];
      $email_empresa = $array['email_empresa'];
      $endereco_empresa = $array['endereco_empresa'];
      $cargo_ofertado = $array['cargo_ofertado'];
      $descricao_vaga = $array['descricao_vaga'];
      $horario_trabalho = $array['horario_trabalho'];
      $conhecimento_exigidos = $array['conhecimento_exigidos'];
      $salario = $array['salario'];
     
    ?>
    
    <tr>
      <!--mostra valores dos itens salvos-->
      <td> <?php echo $Nome_Responsavel ?> </td>
      <td> <?php echo $Nome_empresa ?> </td>
      <td> <?php echo $fone_empresa ?> </td>
      <td> <?php echo $email_empresa ?> </td>
      <td> <?php echo $endereco_empresa ?> </td>
      <td> <?php echo $cargo_ofertado ?> </td>
      <td> <?php echo $descricao_vaga ?> </td>
      <td> <?php echo $horario_trabalho ?> </td>
      <td> <?php echo $conhecimento_exigidos ?> </td>
      <td> <?php echo $salario ?> </td>
      
    </tr>


    <?php } ?> <!-- para mostrar o while-->
    
     
</table>


</div>



<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>