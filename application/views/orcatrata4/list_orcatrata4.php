<?php if (isset($msg)) echo $msg; ?>
<?php if ( !isset($evento) && isset($_SESSION['Cliente'])) { ?>

<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-2"></div>
		<div class="col-md-8 ">
		
			<div class="panel panel-primary">
				
				<div class="panel-heading"><strong><?php echo '<strong>' . $_SESSION['Cliente']['Nome'] . '</strong> - <small>Id.: ' . $_SESSION['Cliente']['idSis_Usuario'] . '</small>' ?></strong></div>
				<div class="panel-body">
			
					<div class="form-group">
						<div class="row">
							<div class="col-md-1 "></div>
							<div class="col-md-8 col-lg-10">
								<div class="col-md-3 text-left">
									<label for="">Cliente & Conts:</label>
									<div class="form-group">
										<div class="row">
											<a <?php if (preg_match("/prontuario\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; //(.)+\/prontuario/   ?>>
												<a class="btn btn-md btn-success" href="<?php echo base_url() . 'clienteusuario/prontuario/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-file"> </span> Ver <span class="sr-only">(current)</span>
												</a>
											</a>
											<a <?php if (preg_match("/clienteusuario\/alterar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ///(.)+\/alterar/    ?>>
												<a class="btn btn-md btn-warning" href="<?php echo base_url() . 'clienteusuario/alterar/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-edit"></span> Edit.
												</a>
											</a>
										</div>
									</div>									
								</div>
								<div class="col-md-3 text-left">
									<label for="">Agendamentos:</label>
									<div class="form-group">
										<div class="row">
											<a <?php if (preg_match("/consulta\/listar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
												<a class="btn btn-md btn-success" href="<?php echo base_url() . 'consulta/listar/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-calendar"></span> List.
												</a>
											</a>
											<a <?php if (preg_match("/consulta\/(cadastrar2|alterar)\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
												<a class="btn btn-md btn-warning" href="<?php echo base_url() . 'consulta/cadastrar2/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-plus"></span> Cad.
												</a>
											</a>
										</div>	
									</div>	
								</div>
								<div class="col-md-3 text-left">
									<label for="">Or�amentos:</label>
									<div class="form-group ">
										<div class="row">
											<a <?php if (preg_match("/orcatrata\/listar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
												<a class="btn btn-md btn-success" href="<?php echo base_url() . 'orcatrata/listar/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-usd"></span> List.
												</a>
											</a>
											<a <?php if (preg_match("/orcatrata\/cadastrar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
												<a class="btn btn-md btn-warning" href="<?php echo base_url() . 'orcatrata/cadastrar/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-plus"></span> Cad.
												</a>
											</a>
										</div>		
									</div>	
								</div>
								<div class="col-md-3 text-left">
									<label for="">Troca/Devol:</label>
									<div class="form-group ">
										<div class="row">
											<a <?php if (preg_match("/orcatrata4\/listar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
												<a class="btn btn-md btn-success" href="<?php echo base_url() . 'orcatrata4/listar/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-usd"></span> List.
												</a>
											</a>
											<a <?php if (preg_match("/orcatrata4\/cadastrar\b/", $_SERVER['REQUEST_URI'])) echo 'class=active'; ?>>
												<a class="btn btn-md btn-warning" href="<?php echo base_url() . 'orcatrata4/cadastrar/' . $_SESSION['Cliente']['idSis_Usuario']; ?>">
													<span class="glyphicon glyphicon-plus"></span> Cad.
												</a>
											</a>
										</div>		
									</div>	
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>
										
					<!--
					<div class="form-group">		
						<div class="row">
							<div class="text-center t">
								<h3><?php echo '<strong>' . $_SESSION['Cliente']['Nome'] . '</strong> - <small>Id.: ' . $_SESSION['Cliente']['idSis_Usuario'] . '</small>' ?></h3>
							</div>
						</div>
					</div>
					-->
					<?php } ?>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="panel panel-primary">
								<div class="panel-heading"><strong>Troca/Devol</strong></div>
								<div class="panel-body">

									<div>

										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation"><a href="#proxima" aria-controls="proxima" role="tab" data-toggle="tab">Aprovados</a></li>
											<li role="presentation" class="active"><a href="#anterior" aria-controls="anterior" role="tab" data-toggle="tab">N�o Aprovados</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">

											<!-- Pr�ximas Consultas -->
											<div role="tabpanel" class="tab-pane" id="proxima">

												<?php
												if ($aprovado) {

													foreach ($aprovado->result_array() as $row) {
												?>

												<div class="bs-callout bs-callout-success" id=callout-overview-not-both>

													<a class="btn btn-success" href="<?php echo base_url() . 'orcatrata4/alterar/' . $row['idApp_OrcaTrata'] ?>" role="button">
														<span class="glyphicon glyphicon-edit"></span> Editar Dados
													</a>
													
														
													<a class="btn btn-md btn-info" target="_blank" href="<?php echo base_url() . 'OrcatrataPrintDev/imprimir/' . $row['idApp_OrcaTrata']; ?>" role="button">
														<span class="glyphicon glyphicon-print"></span> Vers�o para Impress�o
													</a>
													

													<br><br>

													<h4>
														<span class="glyphicon glyphicon-tags"></span> <b>N� Or�.:</b> <?php echo $row['idApp_OrcaTrata']; ?>
													</h4>
													<h5>
														<span class="glyphicon glyphicon-calendar"></span> <b>Data do Or�amento:</b> <?php echo $row['DataOrca']; ?>
													</h5>

													<p>
														<?php if ($row['ProfissionalOrca']) { ?>
														<span class="glyphicon glyphicon-user"></span> <b>Profissional:</b> <?php echo $row['ProfissionalOrca']; ?> -
														<?php } if ($row['AprovadoOrca']) { ?>
														<span class="glyphicon glyphicon-thumbs-up"></span> <b>Or�. Aprovado?</b> <?php echo $row['AprovadoOrca']; ?>
														<?php } ?>

													</p>
													<p>
														<?php if ($row['ServicoConcluido']) { ?>
														<span class="glyphicon glyphicon-ok"></span> <b>Or�. Conclu�do?</b> <?php echo $row['ServicoConcluido']; ?>
														<?php } ?>
													</p>
													<p>
														<?php if ($row['QuitadoOrca']) { ?>
														<span class="glyphicon glyphicon-usd"></span> <b>Or�. Quitado?</b> <?php echo $row['QuitadoOrca']; ?>
														<?php } ?>
													</p>
													<p>
														<span class="glyphicon glyphicon-pencil"></span> <b>Obs:</b> <?php echo nl2br($row['ObsOrca']); ?>
													</p>

												</div>

												<?php
													}
												} else {
													echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
												}
												?>

											</div>

											<!-- Hist�rico de Consultas -->
											<div role="tabpanel" class="tab-pane active" id="anterior">

												<?php
												if ($naoaprovado) {

													foreach ($naoaprovado->result_array() as $row) {
												?>

												<div class="bs-callout bs-callout-danger" id=callout-overview-not-both>

													<a class="btn btn-danger" href="<?php echo base_url() . 'orcatrata4/alterar/' . $row['idApp_OrcaTrata'] ?>" role="button">
														<span class="glyphicon glyphicon-edit"></span> Editar Dados
													</a>
													
													<a class="btn btn-md btn-info" target="_blank" href="<?php echo base_url() . 'OrcatrataPrintDev/imprimir/' . $row['idApp_OrcaTrata']; ?>" role="button">
														<span class="glyphicon glyphicon-print"></span> Vers�o para Impress�o
													</a>

													<br><br>

													<h4>
														<span class="glyphicon glyphicon-tags"></span> <b>N� Or�.:</b> <?php echo $row['idApp_OrcaTrata']; ?>
													</h4>
													<h5>
														<span class="glyphicon glyphicon-calendar"></span> <b>Data do Or�amento:</b> <?php echo $row['DataOrca']; ?>
													</h5>

													<p>
														<?php if ($row['ProfissionalOrca']) { ?>
														<span class="glyphicon glyphicon-user"></span> <b>Profissional:</b> <?php echo $row['ProfissionalOrca']; ?> -
														<?php } if ($row['AprovadoOrca']) { ?>
														<span class="glyphicon glyphicon-thumbs-up"></span> <b>Or�. Aprovado?</b> <?php echo $row['AprovadoOrca']; ?>
														<?php } ?>
													</p>
													<p>
														<?php if ($row['ServicoConcluido']) { ?>
														<span class="glyphicon glyphicon-ok"></span> <b>Or�. Conclu�do?</b> <?php echo $row['ServicoConcluido']; ?>
														<?php } ?>
													</p>
													<p>
														<?php if ($row['QuitadoOrca']) { ?>
														<span class="glyphicon glyphicon-usd"></span> <b>Or�. Quitado?</b> <?php echo $row['QuitadoOrca']; ?>
														<?php } ?>
													</p>
													<p>
														<span class="glyphicon glyphicon-pencil"></span> <b>Obs:</b> <?php echo nl2br($row['ObsOrca']); ?>
													</p>

												</div>

												<?php
													}
												} else {
													echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
												}
												?>

											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
		<div class="col-md-2"></div>
	</div>	
</div>
