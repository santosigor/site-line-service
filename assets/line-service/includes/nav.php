<span id="home"></span>

<nav class="navbar fixed-top navbar-toggleable-md bg-faded">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">Menu</span>
    </button>
    <a class="navbar-brand" href="index.php"><img src="./images/logo.png" alt=""></a>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link transition acr" href="#ls-sobre">SOBRE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link transition acr" href="#ls-terceirizacoes">TERCEIRIZAÇÃO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link transition acr" href="#ls-recrutamento-selecao">RECRUTAMENTO E SELEÇÃO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link transition acr" href="#ls-temporarios">TEMPORÁRIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link transition acr" href="#ls-contato">CONTATO</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link transition nav-link-login" href="#" data-toggle="modal" data-target="#login">LOGIN</a>
        </li>-->
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center">Fazer login</h5>
        <p style="text-align: center">Não possui uma conta? <a href="#">Cadastre-se</a></p>
        <form name="form" id="form" enctype="multipart/form-data" action="index.php" method="post">

          <div class="campo">
            <input type="text" name="emailcpf" id="emailcpf" placeholder="CPF ou E-mail" onblur="VerificaEmail(this);" maxlength="35">
          </div>
          <div class="campo">              
            <input type="password" name="senha" id="senha" placeholder="Digite sua Senha" maxlength="100">
          </div>
      
        </form>
        <a href="#" class="btn-login">ENTRAR</a>
      </div>
      <div class="modal-footer">
        <a href="#">Esqueci a senha</a>
      </div>
    </div>
  </div>
</div>