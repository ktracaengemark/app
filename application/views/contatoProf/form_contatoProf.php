<?php if (isset($msg)) echo $msg; ?>
<div class="container-fluid">
	<div class="row">

		<div class="col-sm-3 col-md-2 sidebar">
			<?php echo $nav_secundario; ?>
		</div>

		<div class="col-sm-7 col-sm-offset-3 col-md-8 col-md-offset-2 main">

			<?php echo validation_errors(); ?>

			<div class="panel panel-<?php echo $panel; ?>">

				<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
				<div class="panel-body">

					<?php echo form_open_multipart($form_open_path); ?>

					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="NomeContatoProf">Nome do ContatoProf: *</label>
								<input type="text" class="form-control" id="NomeContatoProf" maxlength="255" <?php echo $readonly; ?>
									   name="NomeContatoProf" autofocus value="<?php echo $query['NomeContatoProf']; ?>">
							</div>
							<div class="col-md-4">
								<label for="Sexo">Sexo:</label>
								<select data-placeholder="Selecione uma Op��o..." class="form-control" <?php echo $readonly; ?>
										id="Sexo" name="Sexo">
									<option value="">-- Selecione uma op��o --</option>
									<?php
									foreach ($select['Sexo'] as $key => $row) {
										if ($query['Sexo'] == $key) {
											echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
										} else {
											echo '<option value="' . $key . '">' . $row . '</option>';
										}
									}
									?>   
								</select>
							</div>
							<div class="col-md-4">
								<label for="TelefoneContatoProf">Telefone Principal: *</label>
								<input type="text" class="form-control Celular CelularVariavel" id="TelefoneContatoProf" maxlength="14" <?php echo $readonly; ?>
									   name="TelefoneContatoProf" placeholder="(99) 999999999" value="<?php echo $query['TelefoneContatoProf']; ?>">
							</div>
						
							 
							<!--
							<div class="col-md-2 form-inline">
								<label for="StatusVida">Status de Vida:</label><br>
								<div class="form-group">
									<div class="btn-group" data-toggle="buttons">
										<?php
										foreach ($select['StatusVida'] as $key => $row) {
											if (!$query['StatusVida'])
												$query['StatusVida'] = 'V';

											if ($query['StatusVida'] == $key) {
												echo ''
												. '<label class="btn btn-warning active" name="radio_StatusVida" id="radiogeral' . $key . '">'
												. '<input type="radio" name="StatusVida" id="radiogeral" '
													. 'autocomplete="off" value="' . $key . '" checked>' . $row
												. '</label>'
												;
											} else {
												echo ''
												. '<label class="btn btn-default" name="radio_StatusVida" id="radiogeral' . $key . '">'
												. '<input type="radio" name="StatusVida" id="radiogeral" '
													. 'autocomplete="off" value="' . $key . '" >' . $row
												. '</label>'
												;
											}
										}
										?>  
									</div>
								</div>
							</div>
							-->
						</div>
					</div> 

					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="DataNascimento">Data de Nascimento:</label>
								<input type="text" class="form-control Date" maxlength="10" <?php echo $readonly; ?>
									   name="DataNascimento" placeholder="DD/MM/AAAA" value="<?php echo $query['DataNascimento']; ?>">
							</div>                        
						
							<div class="col-md-4">
								<label for="RelaPes">Rela��o*</label>
								<!--<a class="btn btn-xs btn-info" href="<?php echo base_url() ?>relapes/cadastrar/relapes" role="button"> 
									<span class="glyphicon glyphicon-plus"></span> <b>Nova Rela��o</b>
								</a>-->
								<select data-placeholder="Selecione uma op��o..." class="form-control" <?php echo $readonly; ?>
										id="RelaPes" name="RelaPes">
									<option value="">-- Selecione uma Rela��o --</option>
									<?php
									foreach ($select['RelaPes'] as $key => $row) {
										if ($query['RelaPes'] == $key) {
											echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
										} else {
											echo '<option value="' . $key . '">' . $row . '</option>';
										}
									}
									?>   
								</select>          
							</div>
							<div class="col-md-4">
								<label for="Obs">OBS:</label>
								<textarea class="form-control" id="Obs" <?php echo $readonly; ?>
										  name="Obs"><?php echo $query['Obs']; ?></textarea>
							</div>							
						</div>
					</div>
					
					<div class="form-group">
                    <div class="row">
                        <input type="hidden" name="idApp_Profissional" value="<?php echo $_SESSION['Profissional']['idApp_Profissional']; ?>"> 
                        <?php if ($metodo == 2) { ?>

                            <div class="col-md-6">
                                <button class="btn btn-lg btn-primary" id="inputDb" data-loading-text="Aguarde..." type="submit">
                                    <span class="glyphicon glyphicon-save"></span> Salvar
                                </button>
                            </div>
                            <div class="col-md-6 text-right">
                                <button  type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-loading-text="Aguarde..." data-target=".bs-excluir-modal-sm">
                                    <span class="glyphicon glyphicon-trash"></span> Excluir
                                </button>
                            </div>

                            <div class="modal fade bs-excluir-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Tem certeza que deseja excluir?</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Ao confirmar esta opera��o todos os dados ser�o exclu�dos permanentemente do sistema.
                                                Esta opera��o � irrevers�vel.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-md-6 text-left">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                    <span class="glyphicon glyphicon-ban-circle"></span> Cancelar
                                                </button>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <a class="btn btn-danger" href="<?php echo base_url() . 'contatoprof/excluir/' . $query['idApp_ContatoProf'] ?>" role="button">
                                                    <span class="glyphicon glyphicon-trash"></span> Confirmar Exclus�o
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } else { ?>
                            <div class="col-md-6">
                                <button class="btn btn-lg btn-primary" id="inputDb" data-loading-text="Aguarde..." type="submit">
                                    <span class="glyphicon glyphicon-save"></span> Salvar
                                </button>
                            </div>
                        <?php } ?>
                    </div>
                </div>

					</form>

				</div>

			</div>

		</div>

	</div>
</div>