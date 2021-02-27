<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

     <!-- Favicons -->
  <link href="img/favicon-32x32.png" rel="icon">
  <link href="img/apple-icon-72x72.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
    #tamanho{
        width: 600px;
    },
    
    </style>

</head>
<body>
     
    
<!--menu nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="collapse navbar-collapse" >
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link" href="experiencia.php">Experiência</a>
                <a class="nav-item nav-link" href="primeiro.php">Primeiro Emprego</a>
                <a class="nav-item nav-link" href="menor.php">Menor aprendiz</a>
                <a class="nav-item nav-link" href="pcd.php">PCD</a>
                <a class="nav-item nav-link" href="vaga.php">Vagas</a>                
                <a class="nav-item nav-link" href="cadastro.php">Cadastro</a> 
            </div>            
        </div>
        <a class="btn btn-primary" href="./index.html" role="button" >Sair</a>
    </nav>


    <div class="container" id="tamanho">
    <h4 style="text-align: center">Cadastro Profissionais</h4>
        <form action="insere.php" method="post" style="margin-top: 20px;">        
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" placeholder="sobrenome">
                <label>endereco</label>
                <input type="text" name="endereco" class="form-control" placeholder="endereco">
                <label>Bairro</label>
                <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                <label>Cidade</label>
                <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                <label>Fone</label>
                <input type="text" name="fone" class="form-control" placeholder="Fone">
                <label>Data Nascimento</label>
                <input type="text" name="dt_nasc" class="form-control" placeholder="Data Nascimento">
                <label>Profissão</label>
                <input type="text" name="profissao"  class="form-control" placeholder="Profissão">
                <label>Função</label>
                <input type="text" name="funcao" class="form-control" placeholder="Função">
                <label>Tempo Experiência</label>
                <input type="text" name="tempo_experiencia" class="form-control" placeholder="Tempo Experiência">
                <label>Comprovada</label>
                <input type="text" name="comprovada" class="form-control" placeholder="Comprovada">
                <label>Filho</label>
                <input type="text" name="filho" class="form-control" placeholder="Filho">
                <label>Estudo</label>
                <input type="text" name="estudo" class="form-control" placeholder="Estudo">
                <label>Sabado</label>
                <input type="text" name="sabado" class="form-control" placeholder="Sabado">
                <label>Fumante</label>
                <input type="text" name="fumante" class="form-control" placeholder="Fumante">
            </div> 
            <div style="text-align: right;" >
                <button type="submit" class="btn btn-success btn-sm" >Cadastrar</button>
            </div>
        </form>
    </div>


<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>