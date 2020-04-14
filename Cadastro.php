<?php
require_once('cabecalho.php');
?>
<link rel="stylesheet" href="css/css.css">
<div class = "card" id="telalogin">
<div class = "card-body">

  <h1 class="font-italic">Siscul</h1>
<h3 class="font-italic">A nossa platafora de gerenciamento!</h3>
<br>
                        <p class="font-italic"> Cadastrar novo usuario</p>

<form  action = "Cadastrar.php" method = "post" enctype                  = "multipart/form-data">
        <div   class  = "form-group">
        <label for    = "nome"> </label>
        <input type   = "text" class           = " rounded-pill form-control" id = "nome"name = "nome" placeholder = "nome de usuario">

            </div>
            <div   class = "form-group">
            <label for   = "preco"></label>
            <input type  = "text" class = " rounded-pill form-control" id = "email" name = "email" placeholder = "email valido">

            </div>
            <div   class = "form-group">
            <label for   = "exampleFormControlFile1"></label>
            <input type  = "password" class = " rounded-pill form-control" id = "senha" name = "senha" placeholder = "Senha">
            </div>
           


            <button type = "submit" class = "btn btn-outline-primary btn-lg btn-block">cadastrar</button>
        </form>

  </div>
</div>
<div id="aleatorio"></div>
<?php
require_once('footer.php');
?>