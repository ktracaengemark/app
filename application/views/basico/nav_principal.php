<nav class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
	<div class="container"> 
		<div class="navbar-header"> 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
			</button> 
			<!--
			<a class="navbar-brand">
				<img class="img-responsive" src="arquivos/imagens/ktraca.png" alt="logo">
			</a>
			-->			
		</div> 
		<div class="collapse navbar-collapse"> 											
			<ul class="nav navbar-nav navbar-left"> 						
				<li>																	
					<li><a class="navbar-brand" href="<?php echo base_url(); ?>agenda">AGENDA</a></li>
					<?php echo form_open(base_url() . 'cliente/pesquisar', 'class="navbar-form navbar-left"'); ?>
					<form>
					<div class="input-group">
						<input type="text" placeholder="Pesquisar Cliente" class="form-control" name="Pesquisa" value="">
						<span class="input-group-btn">
							<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>					
					</form>											
				</li>				
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Clientes & Contatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Consultas & Sess�es</a></li>					
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar"> Pedidos & Or�amentos</a></li>						
						<!--<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>despesas/cadastrar">Despesas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>consumo/cadastrar">Produtos Consumidos Inter.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/tarefa">Tarefas dos Funcion�rios</a></li>-->
					</ul>
				</li>								
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mov. Di�ria<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<!--<li><a href="<?php echo base_url() ?>cliente/pesquisar">Clientes & Contatos</a></li>
						<li role="separator" class="divider"></li>-->
						<li><a href="<?php echo base_url() ?>despesas/cadastrar">Despesas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>consumo/cadastrar">Produtos Consumidos Inter.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>tarefa/cadastrar">Tarefas dos Funcion�rios</a></li>						
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administra��o<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>relatorio/clientes">Clientes & Contatos</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/profissionais">Funcion�rios & Contatos.</a></li>
						<li role="separator" class="divider"></li>-->
						<li><a href="<?php echo base_url() ?>relatorio/funcionario">Funcion�rio & Contatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/fornecedor">Fornecedores & Contatos.</a></li>
						<li role="separator" class="divider"></li>
						<!--<li><a href="<?php echo base_url() ?>cliente/pesquisar">Pedidos & Or�amentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>cliente/pesquisar">Consultas & Sess�es</a></li>
						<li role="separator" class="divider"></li>-->												
						<li><a href="<?php echo base_url() ?>funcao/cadastrar/funcao">Fun��o dos Funcion�rios</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>atividade/cadastrar/atividade">Atividade dos Fornecedores</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>convenio/cadastrar">Planos & Conv�nios</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>produto/cadastrar">Produtos (Consumo & Venda)</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>produtocompra/cadastrar">Tabela de Pre�os de Produtos p/ Compra</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>produto/cadastrar">Tabela de Pre�os de Produtos p/ Venda</a></li>-->
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>servico/cadastrar">Servi�os (Venda)</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>servicocompra/cadastrar">Tabela de Pre�os de Servi�os p/ Compra</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>servico/cadastrar">Tabela de Pre�os de Servi�os p/ Venda</a></li>-->
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>tipodespesa/cadastrar">Tipo de Despesa</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>tipoconsumo/cadastrar">Tipo de Consumo</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>loginassociado/registrar">Cadastrar Associado ou Nova Empresa/ Usu�rio</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>formapag/cadastrar/formapag">Forma de Pagamento</a></li>
						<li role="separator" class="divider"></li>						
						<li><a href="<?php echo base_url() ?>relapes/cadastrar">Rela��o Pessoal</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relacom/cadastrar">Rela��o Comercial</a></li>
						<li role="separator" class="divider"></li>-->

					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relat�rios<span class="caret"></span></a>
					<ul class="dropdown-menu">						
						<li><a href="<?php echo base_url() ?>relatorio/clientes">Clientes & Contatos</a></li>
						<li role="separator" class="divider"></li>
						<!--<li><a href="<?php echo base_url() ?>relatorio/profissionais">Funcion�rios & Contatos.</a></li>
						<li role="separator" class="divider"></li>-->
						<li><a href="<?php echo base_url() ?>relatorio/funcionario">Funcion�rios & Contatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/fornecedor">Fornecedores & Contatos.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/orcamentopc">Clientes & Procedimentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/orcamento">Clientes & Or�amentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/receitas">Clientes & Pagamentos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/tarefa">Tarefas dos Funcion�rios</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/despesas">Despesas</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/produtoscomp">Produtos Comprados</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/produtosvend">Produtos Vendidos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/consumo">Produtos Consumidos Inter.</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/servicosprest">Servi�os Prestados</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/associado">Associados ou Empresas Associadas</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>">Estoque = Pcp - (Pvd + Pcs)</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/orcamentosv">Clientes & Servi�os</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/clienteprod">Clientes & Produtos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/financeiro">Or�amentos & Pagamentos</a></li>
						<li role="separator" class="divider"></li>
						<!--<li><a href="<?php echo base_url() ?>relatorio/balanco">Balan�o</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url() ?>relatorio/estoque">Estoque</a></li>
						<li role="separator" class="divider"></li>-->
					</ul>
				</li>				
				<div class="btn-toolbar navbar-form navbar-right" role="toolbar" aria-label="...">					
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn active" id="countdowndiv">
							<span class="glyphicon glyphicon-hourglass" id="clock"></span>
						</button>
					</div>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-info active">
							<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['log']['Usuario']; ?>
						</button>
					</div>
					<div class="btn-group" role="group" aria-label="...">
						<a href="<?php echo base_url(); ?>login/sair">
							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-log-out"></span> Sair
							</button>
						</a>
					</div>										
					<div class="btn-group" role="group" aria-label="..."> </div>
				</div>					
			</ul>						
		</div> 
	</div> 
</nav>

<br>
