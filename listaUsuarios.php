<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Usuarios</title>
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

<h3 style="text-align: center; ">Usuarios</h3>

<!--começa dados dos users -->
<table class="table table-striped">
  <thead>    
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Fone</th>
      <th scope="col">Dt Nascimento</th>
      <th scope="col">Profissão</th>
      <th scope="col">Função</th>
      <th scope="col">Experiência</th>
      <th scope="col">Comprovada</th>
      <th scope="col">Filhos</th>
      <th scope="col">Estudos</th>
      <th scope="col">Sabados</th>
      <th scope="col">Fumante</th>
    </tr>
  </thead>    
    
     <?php 
     include 'conexao.php';     
     $sql= "SELECT * FROM cadastro ";
     $busca = mysqli_query($conexao, $sql);
    
     while ($array = mysqli_fetch_array($busca)) {
      
      $id_usuario = $array['id_usuarios'];
      $nome = $array['nome'];
      $sobrenome = $array['sobrenome'];
      $endereco = $array['endereco'];
      $bairro = $array['bairro'];
      $cidade = $array['cidade'];
      $fone = $array['fone'];
      $dt_nasc = $array['dt_nasc'];
      $profissao = $array['profissao'];
      $funcao = $array['funcao'];
      $tempo_experiencia = $array['tempo_experiencia'];
      $comprovada = $array['comprovada'];
      $filho = $array['filho'];
      $estudo = $array['estudo'];
      $sabado = $array['sabado'];
      $fumante = $array['fumante'];
    ?>
    
    <tr>
      <!--mostra valores dos itens salvos-->
      <td> <?php echo $nome ?> </td>
      <td> <?php echo $sobrenome ?> </td>
      <td> <?php echo $endereco ?> </td>
      <td> <?php echo $bairro ?> </td>
      <td> <?php echo $cidade ?> </td>
      <td> <?php echo $fone ?> </td>
      <td> <?php echo $dt_nasc ?> </td>
      <td> <?php echo $profissao ?> </td>
      <td> <?php echo $funcao ?> </td>
      <td> <?php echo $tempo_experiencia ?> </td>
      <td> <?php echo $comprovada ?> </td>
      <td> <?php echo $filho ?> </td>
      <td> <?php echo $estudo ?> </td>
      <td> <?php echo $sabado ?> </td>
      <td> <?php echo $fumante ?> </td>
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