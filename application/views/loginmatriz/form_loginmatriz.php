<div class="container text-center" id="login">

    <?php echo validation_errors(); ?>

    <?php if (isset($msg)) echo $msg; ?>

    <?php echo form_open('loginmatriz', 'role="form"'); ?>

    <p class="text-center">
        <a href="<?php echo base_url(); ?>loginmatriz">
            <img src="<?php echo base_url() . 'arquivos/imagens/' . $modulo . '.png'; ?>" />
        </a>
    </p>
    <!--<h2 class="form-signin-heading text-center">Agenda <?php echo ucfirst($nome_modulo) ?></h2><h4><b>***** vers�o alpha *****</b></h4>-->
    <h2 class="form-signin-heading text-center">Produtos & Servi�os</h2>	

	<label class="sr-only">Usu�rio</label>
    <input type="text" id="inputText" class="form-control" placeholder="Usu�rioMatriz ou E-mail" autofocus name="UsuarioMatriz" value="<?php echo set_value('UsuarioMatriz'); ?>">	   
	<label class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="Senha" value="">
    <input type="hidden" name="modulo" value="<?php echo $modulo; ?>">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Acesso dos Usu�rios da Ktraca</button>	
    <p><a href="<?php echo base_url(); ?>loginmatriz/recuperar/?usuario=<?php echo set_value('UsuarioMatriz'); ?>">Esqueci usu�rio/senha!</a></p>
    <br>

			<a class="btn btn btn-primary btn-warning btn-block" href="<?php echo base_url(); ?>loginempresa/index" role="button">Acesso dos Admin. das Empresas</a>			
			<a class="btn btn btn-primary btn-danger btn-block" href="<?php echo base_url(); ?>loginempresa/registrar" role="button">Cadastrar Nova Empresa</a>	
			<!--<a class="btn btn btn-primary btn-danger" href="<?php echo base_url(); ?>login/registrar" role="button">Cadastrar Empresa</a>-->
	
</form>

</div>