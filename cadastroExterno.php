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
     


        <!--aqui começa a div do cadastro usuario -->
    <div class="container" style="width: 400px; margin-top: 20px; ">
        
        <h4>Cadastro de Usuário</h4>

        <form action="insertUsuario.php" method="post">
            <div class="form-group">
                <label>Nome Usuário</label>
                <input type="text" name="nome_usuario" class="form-control" required="true" autocomplete="off" placeholder="Nome Completo">
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email_usuario" class="form-control" required="true" autocomplete="off" placeholder="Email">
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input id="txtSenha" type="password" name="senha_usuario" class="form-control" required="true" autocomplete="off" placeholder="Senha">
            </div>

             <div class="form-group">
                <label>Repetir senha</label>
                <input type="password" name="senha2" class="form-control" required="true" autocomplete="off" placeholder="Repita sua Senha" oninput="validaSenha(this)">
                <small>Precisa ser igual a senha digitada acima.</small>
            </div>
            <div class="form-group">
                <label>Nível de acesso</label>
                <select class="form-control" name="nivel_usuario">
                    <optgroup>
                        <option value="1">Administrador</option>
                        <!--<option value="2">Cliente</option>-->
                    </optgroup>
                </select>
            </div>

            <div style="text-align: right;">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>



<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<!-- script para comparar senha-->
    <script>
    function validaSenha (input){ 
        if (input.value != document.getElementById('txtSenha').value) {
        input.setCustomValidity('Repita a senha corretamente');
      } else {
        input.setCustomValidity('');
      }
    } 
    </script>
</body>
</html>