<?php if ($msg) echo $msg; ?>
<?php if ( !isset($evento) && isset($_SESSION['Cliente'])) { ?>

<div class="container-fluid">
	<div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="form-group">
			<div class="row">		
				<div class="col-md-3 text-left">
					<label for="">Cliente & Contatos:</label>
					<div class="form-group">
						<div class="row">	
							<a <?php if (preg_match("/prontuario\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; //(.)+\/prontuario/   ?>>
								<a class="btn btn-lg btn-success" href="<?php echo base_url() . 'cliente/prontuario/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
									<span class="glyphicon glyphicon-file"> </span> Ver <span class="sr-only">(current)</span>
								</a>
							</a>				
							<a <?php if (preg_match("/cliente\/alterar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ///(.)+\/alterar/    ?>>
								<a class="btn btn-lg btn-warning" href="<?php echo base_url() . 'cliente/alterar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
									<span class="glyphicon glyphicon-edit"></span> Edit.
								</a>
							</a>
						</div>
					</div>	
				</div>

				<div class="col-md-3 text-center">
					<label for="">Consultas:</label>
					<div class="form-group">
						<div class="row">
							<a <?php if (preg_match("/consulta\/listar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
								<a class="btn btn-lg btn-success" href="<?php echo base_url() . 'consulta/listar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
									<span class="glyphicon glyphicon-list-alt"></span> List.
								</a>
							</a>
							<a <?php if (preg_match("/consulta\/(cadastrar|alterar)\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
								<a class="btn btn-lg btn-warning" href="<?php echo base_url() . 'consulta/cadastrar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
									<span class="glyphicon glyphicon-plus"></span> Cad.
								</a>
							</a>
						</div>	
					</div>	
				</div>

				<div class="col-md-3 text-right">
					<label for="">Orçamentos:</label>
					<div class="form-group">
						<div class="row">
							<a <?php if (preg_match("/orcatrata\/listar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
								<a class="btn btn-lg btn-success" href="<?php echo base_url() . 'orcatrata/listar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
									<span class="glyphicon glyphicon-list-alt"></span> List.
								</a>
							</a>
							<a <?php if (preg_match("/orcatrata\/cadastrar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
								<a class="btn btn-lg btn-warning" href="<?php echo base_url() . 'orcatrata/cadastrar/' . $_SESSION['Cliente']['idApp_Cliente']; ?>">
									<span class="glyphicon glyphicon-plus"></span> Cad.
								</a>
							</a>
						</div>		
					</div>	
				</div>
			</div>	
		</div>		
		<div class="form-group">		
			<div class="row">
				<div class="text-center t">
					<h3><?php echo '<strong>' . $_SESSION['Cliente']['NomeCliente'] . '</strong> - <small>Id.: ' . $_SESSION['Cliente']['idApp_Cliente'] . '</small>' ?></h3>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php } ?>

<div class="container-fluid">
	<div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	
		<?php
		if (!$list) {
		?>
			<a class="btn btn-lg btn-warning" href="<?php echo base_url() ?>orcatrata/cadastrar" role="button">
				<span class="glyphicon glyphicon-plus"></span> Cadastrar Novo Orçamento
			</a>
			<br><br>
			<div class="alert alert-info" role="alert"><b>Nenhum orçamento cadastrado</b></div>
		<?php
		} else {
			echo $list;
		}
		?>

	</div>
</div>