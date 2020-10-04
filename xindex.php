<?php
require_once('config.php');
include(HEADER_TEMPLATE); ?>
<div class="container" align="center" style="border-radius: 20px;background-color:#A9D0F5; max-width: 500px; box-shadow: 10px 10px 5px #aaaaaa;">
<!-- Formulário de Login -->
  <form action="validacao.php" method="post">
  <fieldset>
  <legend>Login</legend>
  <hr>
  	  <div class="row" align="center" >
  	  	<div class="form-group col-md-7" align="right">
      	<label for="txUsuario">Usuário</label>
      	<input type="text" name="usuario" id="txUsuario" value="" maxlength="25" />
      	</div>
      </div>
      <div class="row" align="center">
      	<div class="form-group col-md-7" align="right">
      	<label for="txSenha">Senha  </label>
      	<input type="password" name="senha" id="txSenha" value=""/>
      	</div>
      	</div>
      	<div class="row" align="center">
      	<div class="form-group col-md-7">
      	<input type="submit" class="btn btn-primary"  value="Entrar" />
      	</div>
       </div>
  
  </fieldset>
  </form>
  </div>