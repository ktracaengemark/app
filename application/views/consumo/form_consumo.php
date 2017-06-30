<?php if (isset($msg)) echo $msg; ?>

<div class="row">
   

    <div class="col-sm-7 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <?php echo validation_errors(); ?>

        <div class="panel panel-<?php echo $panel; ?>">

            <div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
            <div class="panel-body">

                <?php echo form_open_multipart($form_open_path); ?>

                <!--App_Consumo-->

					<div class="form-group">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">														
									<!--
									<div class="col-md-3">
										<label for="Consumo">Consumo: *</label><br>
										<input type="text" class="form-control" maxlength="200"
											   autofocus name="Consumo" value="<?php echo $consumo['Consumo'] ?>">
									</div>
									
									<div class="col-md-3">
										<label for="TipoConsumo">Tipo de Consumo</label>
										<!--<a class="btn btn-xs btn-info" href="<?php echo base_url() ?>tipoconsumo/cadastrar/tipoconsumo" role="button">
											<span class="glyphicon glyphicon-plus"></span> <b>Forma Pag</b>
										</a>
										<select data-placeholder="Selecione uma op��o..." class="form-control" <?php echo $readonly; ?>
												id="TipoConsumo" name="TipoConsumo">
											<option value="">-- Sel. Tipo Consumo --</option>
											<?php
											foreach ($select['TipoConsumo'] as $key => $row) {
												if ($consumo['TipoConsumo'] == $key) {
													echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
												} else {
													echo '<option value="' . $key . '">' . $row . '</option>';
												}
											}
											?>
										</select>
									</div>
									
									-->
									<div class="col-md-2">
										<label for="DataConsumo">Data da Consumo:</label>
										<div class="input-group <?php echo $datepicker; ?>">
											<input type="text" class="form-control Date" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
												   name="DataConsumo" value="<?php echo $consumo['DataConsumo']; ?>">
											<span class="input-group-addon" disabled>
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
									
									<div class="col-md-3">
										<label for="ProfissionalConsumo">Profissional:</label>
										<a class="btn btn-xs btn-info" href="<?php echo base_url() ?>profissional/cadastrar/profissional" role="button">
											<span class="glyphicon glyphicon-plus"></span> <b>Novo Profissional</b>
										</a>
										<select data-placeholder="Selecione uma op��o..." class="form-control" <?php echo $readonly; ?>
												id="ProfissionalConsumo" name="ProfissionalConsumo">
											<option value="">-- Selecione uma op��o --</option>
											<?php
											foreach ($select['Profissional'] as $key => $row) {
												if ($consumo['ProfissionalConsumo'] == $key) {
													echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
												} else {
													echo '<option value="' . $key . '">' . $row . '</option>';
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<hr>
										
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
                            <div class="panel-heading collapsed" role="tab" id="heading1" data-toggle="collapse" data-parent="#accordion1" data-target="#collapse1" aria-expanded="false">								<h4 class="panel-title">
									<a class="accordion-toggle">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
										Produtos
									</a>
								</h4>
							</div>

							<div id="collapse1" class="panel-collapse collapsed collapse" role="tabpanel" aria-labelledby="heading1" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">

									<!--#######################################-->
								<!--
									<input type="hidden" name="SCount" id="SCount" value="<?php echo $count['SCount']; ?>"/>

									<div class="input_fields_wrap5">

									<?php
									for ($i=1; $i <= $count['SCount']; $i++) {
									?>

									<?php if ($metodo > 1) { ?>
									<input type="hidden" name="idApp_ServicoConsumo<?php echo $i ?>" value="<?php echo $servico[$i]['idApp_ServicoConsumo']; ?>"/>
									<?php } ?>

									<div class="form-group" id="5div<?php echo $i ?>">
										<div class="panel panel-info">
											<div class="panel-heading">
												<div class="row">
													<div class="col-md-1">
														<label for="QtdConsumoServico">Qtd:</label>
														<input type="text" class="form-control Numero" maxlength="3" id="QtdConsumoServico<?php echo $i ?>" placeholder="0"
																onkeyup="calculaSubtotalConsumo(this.value,this.name,'<?php echo $i ?>','QTD','Servico')"
																autofocus name="QtdConsumoServico<?php echo $i ?>" value="<?php echo $servico[$i]['QtdConsumoServico'] ?>">
													</div>
													<div class="col-md-4">
														<label for="idTab_Servico">Servi�o:</label>
														<?php if ($i == 1) { ?>
														<a class="btn btn-xs btn-info" href="<?php echo base_url() ?>servico/cadastrar/servico" role="button">
															<span class="glyphicon glyphicon-plus"></span> <b>Novo Servi�o</b>
														</a>
														<?php } ?>
														<select data-placeholder="Selecione uma op��o..." class="form-control" onchange="buscaValorConsumo(this.value,this.name,'Servico',<?php echo $i ?>)" <?php echo $readonly; ?>
																id="lista" name="idTab_Servico<?php echo $i ?>">
															<option value="">-- Selecione uma op��o --</option>
															<?php
															foreach ($select['Servico'] as $key => $row) {
																if ($servico[$i]['idTab_Servico'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
													<div class="col-md-3">
														<label for="ValorConsumoServico">Valor do Servi�o:</label>
														<div class="input-group" id="txtHint">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" id="idTab_Servico<?php echo $i ?>" maxlength="10" placeholder="0,00"
																onkeyup="calculaSubtotalConsumo(this.value,this.name,'<?php echo $i ?>','VP','Servico')"
																name="ValorConsumoServico<?php echo $i ?>" value="<?php echo $servico[$i]['ValorConsumoServico'] ?>">
														</div>

													</div>												
													<div class="col-md-3">
														<label for="SubtotalServico">Subtotal:</label>
														<div class="input-group">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00" readonly="" id="SubtotalServico<?php echo $i ?>"
																   name="SubtotalServico<?php echo $i ?>" value="<?php echo $servico[$i]['SubtotalServico'] ?>">
														</div>
													</div>
													<div class="col-md-1">
														<label><br></label><br>
														<button type="button" id="<?php echo $i ?>" class="remove_field5 btn btn-danger">
															<span class="glyphicon glyphicon-trash"></span>
														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-md-10">
														<label for="ObsServico<?php echo $i ?>">Obs:</label><br>
														<input type="text" class="form-control" id="ObsServico<?php echo $i ?>" maxlength="250"
															   name="ObsServico<?php echo $i ?>" value="<?php echo $servico[$i]['ObsServico'] ?>">
													</div>
													<div class="col-md-2">
														<label for="ConcluidoServico">Conclu�do? </label><br>
														<div class="form-group">
															<div class="btn-group" data-toggle="buttons">
																<?php
																foreach ($select['ConcluidoServico'] as $key => $row) {
																	(!$servico[$i]['ConcluidoServico']) ? $servico[$i]['ConcluidoServico'] = 'N' : FALSE;

																	if ($servico[$i]['ConcluidoServico'] == $key) {
																		echo ''
																		. '<label class="btn btn-warning active" name="radiobutton_ConcluidoServico' . $i . '" id="radiobutton_ConcluidoServico' . $i .  $key . '">'
																		. '<input type="radio" name="ConcluidoServico' . $i . '" id="radiobuttondinamico" '
																		. 'autocomplete="off" value="' . $key . '" checked>' . $row
																		. '</label>'
																		;
																	} else {
																		echo ''
																		. '<label class="btn btn-default" name="radiobutton_ConcluidoServico' . $i . '" id="radiobutton_ConcluidoServico' . $i .  $key . '">'
																		. '<input type="radio" name="ConcluidoServico' . $i . '" id="radiobuttondinamico" '
																		. 'autocomplete="off" value="' . $key . '" >' . $row
																		. '</label>'
																		;
																	}
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<?php
									}
									?>

									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<a class="btn btn-xs btn-warning" onclick="adicionaServicoConsumo()">
													<span class="glyphicon glyphicon-plus"></span> Adicionar Servi�o
												</a>
											</div>
										</div>
									</div>
								
									<hr>
								-->
									<input type="hidden" name="PCount" id="PCount" value="<?php echo $count['PCount']; ?>"/>

									<div class="input_fields_wrap7">

									<?php
									for ($i=1; $i <= $count['PCount']; $i++) {
									?>

									<?php if ($metodo > 1) { ?>
									<input type="hidden" name="idApp_ProdutoConsumo<?php echo $i ?>" value="<?php echo $produto[$i]['idApp_ProdutoConsumo']; ?>"/>
									<?php } ?>

									<div class="form-group" id="7divdiv<?php echo $i ?>">
										<div class="panel panel-info">
											<div class="panel-heading">
												<div class="row">
													<div class="col-md-1">
														<label for="QtdConsumoProduto">Qtd:</label>
														<input type="text" class="form-control Numero" maxlength="3" id="QtdConsumoProduto<?php echo $i ?>" placeholder="0"
																onkeyup="calculaSubtotalConsumo(this.value,this.name,'<?php echo $i ?>','QTD','Produto')"
																autofocus name="QtdConsumoProduto<?php echo $i ?>" value="<?php echo $produto[$i]['QtdConsumoProduto'] ?>">
													</div>
													<div class="col-md-4">
														<label for="idTab_Produto">Produto:</label>
														<?php if ($i == 1) { ?>
														<a class="btn btn-xs btn-info" href="<?php echo base_url() ?>produto/cadastrar/produto" role="button">
															<span class="glyphicon glyphicon-plus"></span> <b>Novo Produto</b>
														</a>
														<?php } ?>
														<select data-placeholder="Selecione uma op��o..." class="form-control" onchange="buscaValorConsumo(this.value,this.name,'Produto',<?php echo $i ?>)" <?php echo $readonly; ?>
																 id="listadinamicab<?php echo $i ?>" name="idTab_Produto<?php echo $i ?>">
															<option value="">-- Selecione uma op��o --</option>
															<?php
															foreach ($select['Produto'] as $key => $row) {
																if ($produto[$i]['idTab_Produto'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
													<!--
													<div class="col-md-3">
														<label for="ValorConsumoProduto">Valor do Produto:</label>
														<div class="input-group">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" id="idTab_Produto<?php echo $i ?>" maxlength="10" placeholder="0,00"
																onkeyup="calculaSubtotalConsumo(this.value,this.name,'<?php echo $i ?>','VP','Produto')"
																name="ValorConsumoProduto<?php echo $i ?>" value="<?php echo $produto[$i]['ValorConsumoProduto'] ?>">
														</div>
													</div>													
													<div class="col-md-3">
														<label for="SubtotalProduto">Subtotal:</label>
														<div class="input-group">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00" readonly="" id="SubtotalProduto<?php echo $i ?>"
																   name="SubtotalProduto<?php echo $i ?>" value="<?php echo $produto[$i]['SubtotalProduto'] ?>">
														</div>
													</div>
													-->
													<div class="col-md-1">
														<label><br></label><br>
														<button type="button" id="<?php echo $i ?>" class="remove_field7 btn btn-danger">
															<span class="glyphicon glyphicon-trash"></span>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<?php
									}
									?>

									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<a class="add_field_button7 btn btn-xs btn-warning">
													<span class="glyphicon glyphicon-plus"></span> Adicionar Produto
												</a>
											</div>
										</div>
									</div>
								</div>
								<!--
								<div class="panel-body">
									<div class="form-group">
										<div class="panel panel-info">
											<div class="panel-heading">
												<div class="row">
													<div class="col-md-3">
														<label for="ValorConsumo">Valor Consumo:</label><br>
														<div class="input-group" id="txtHint">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" id="ValorConsumo" maxlength="10" placeholder="0,00" 
																   name="ValorConsumo" value="<?php echo $consumo['ValorConsumo'] ?>">
														</div>
													</div>
													
													<div class="col-md-3">
														<label for="ValorEntradaConsumo">Desconto</label><br>
														<div class="input-group" id="txtHint">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" id="ValorEntradaConsumo" maxlength="10" placeholder="0,00"
																onkeyup="calculaRestaConsumo(this.value)"
																name="ValorEntradaConsumo" value="<?php echo $consumo['ValorEntradaConsumo'] ?>">
														</div>
													</div>
													
													<div class="col-md-3">
														<label for="ValorRestanteConsumo">Valor A Pagar:</label><br>
														<div class="input-group" id="txtHint">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" id="ValorRestanteConsumo" maxlength="10" placeholder="0,00" readonly=""
																   name="ValorRestanteConsumo" value="<?php echo $consumo['ValorRestanteConsumo'] ?>">
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>		
								</div>
								-->
							</div>
						</div>
					</div>
		<!--#######################################-->					
					<!--
					<div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
						<div class="panel panel-info">
                            <div class="panel-heading collapsed" role="tab" id="heading4" data-toggle="collapse" data-parent="#accordion4" data-target="#collapse4" aria-expanded="false">								<h4 class="panel-title">
									<a class="accordion-toggle">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
										Or�amento & Forma de Pagam.
									</a>
								</h4>
							</div>

							<div id="collapse4" class="panel-collapse collapsed collapse" role="tabpanel" aria-labelledby="heading4" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
																	
									
									<hr>
									
									
								</div>
							</div>
						</div>
					</div>
					
					
					<hr>
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="heading2" data-toggle="collapse" data-parent="#accordion2" data-target="#collapse2">
								<h4 class="panel-title">
									<a class="accordion-toggle">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
										Forma de Pagamento / Parcelas
									</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false" style="height: 0px;">									
								<div class="panel-body">	
									<div class="form-group">
										<div class="panel panel-info">
											<div class="panel-heading">
												<div class="row">
													<div class="col-md-3">
														<label for="FormaPagamentoConsumo">Forma de Pagamento:</label>
														<select data-placeholder="Selecione uma op��o..." class="form-control" <?php echo $readonly; ?>
																id="FormaPagamentoConsumo" name="FormaPagamentoConsumo">
															<option value="">-- Selecione uma op��o --</option>
															<?php
															foreach ($select['FormaPagamentoConsumo'] as $key => $row) {
																if ($consumo['FormaPagamentoConsumo'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>

													<div class="col-md-2">
														<label for="QtdParcelasConsumo">Qtd de Parcelas:</label><br>
														<input type="text" class="form-control Numero" id="QtdParcelasConsumo" maxlength="3" placeholder="0"
															   name="QtdParcelasConsumo" value="<?php echo $consumo['QtdParcelasConsumo'] ?>">
													</div>
													<div class="col-md-2">
														<label for="DataVencimentoConsumo">Data do 1� Venc.</label>
														<div class="input-group <?php echo $datepicker; ?>">
															<input type="text" class="form-control Date" id="DataVencimentoConsumo" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
																   name="DataVencimentoConsumo" value="<?php echo $consumo['DataVencimentoConsumo']; ?>">
															<span class="input-group-addon" disabled>
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
													</div>
													<br>
													<div class="form-group">
														<div class="col-md-4 text-center">
															<button class="btn btn-danger" type="button" data-toggle="collapse" onclick="calculaParcelasPagaveis()"
																	data-target="#Parcelas" aria-expanded="false" aria-controls="Parcelas">
																<span class="glyphicon glyphicon-menu-down"></span> Gerar Parcelas
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								-->
								<!--App_parcelasRec-->
								<!--
								<div class="panel-body">
									<div class="input_fields_parcelas">

									<?php
									for ($i=1; $i <= $consumo['QtdParcelasConsumo']; $i++) {
									?>

										<?php if ($metodo > 1) { ?>
										<input type="hidden" name="idApp_ParcelasPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['idApp_ParcelasPagaveis']; ?>"/>
										<?php } ?>
										<div class="form-group">
											<div class="panel panel-info">
												<div class="panel-heading">
													<div class="row">
														<div class="col-md-1">
															<label for="ParcelaPagaveis">Parcela:</label><br>
															<input type="text" class="form-control" maxlength="6" readonly=""
																   name="ParcelaPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['ParcelaPagaveis'] ?>">
														</div>
														<div class="col-md-2">
															<label for="ValorParcelaPagaveis">Valor Parcela:</label><br>
															<div class="input-group" id="txtHint">
																<span class="input-group-addon" id="basic-addon1">R$</span>
																<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00"
																	   name="ValorParcelaPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['ValorParcelaPagaveis'] ?>">
															</div>
														</div>
														<div class="col-md-2">
															<label for="DataVencimentoPagaveis">Data Venc. Parc.</label>
															<div class="input-group DatePicker">
																<input type="text" class="form-control Date" id="DataVencimentoPagaveis<?php echo $i ?>" maxlength="10" placeholder="DD/MM/AAAA"
																	   name="DataVencimentoPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['DataVencimentoPagaveis'] ?>">
																<span class="input-group-addon" disabled>
																	<span class="glyphicon glyphicon-calendar"></span>
																</span>
															</div>
														</div>
														<div class="col-md-2">
															<label for="ValorPagoPagaveis">Valor Pago:</label><br>
															<div class="input-group" id="txtHint">
																<span class="input-group-addon" id="basic-addon1">R$</span>
																<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00"
																	   name="ValorPagoPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['ValorPagoPagaveis'] ?>">
															</div>
														</div>
														<div class="col-md-2">
															<label for="DataPagoPagaveis">Data Pag.</label>
															<div class="input-group DatePicker">
																<input type="text" class="form-control Date" id="DataPagoPagaveis<?php echo $i ?>" maxlength="10" placeholder="DD/MM/AAAA"
																	   name="DataPagoPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['DataPagoPagaveis'] ?>">
																<span class="input-group-addon" disabled>
																	<span class="glyphicon glyphicon-calendar"></span>
																</span>
															</div>
														</div>
														<div class="col-md-3">
															<label for="QuitadoPagaveis">Quitado?</label><br>
															<div class="form-group">
																<div class="btn-group" data-toggle="buttons">
																	<?php
																	foreach ($select['QuitadoPagaveis'] as $key => $row) {
																		(!$parcelaspag[$i]['QuitadoPagaveis']) ? $parcelaspag[$i]['QuitadoPagaveis'] = 'N' : FALSE;

																		if ($parcelaspag[$i]['QuitadoPagaveis'] == $key) {
																			echo ''
																			. '<label class="btn btn-warning active" name="radiobutton_QuitadoPagaveis' . $i . '" id="radiobutton_QuitadoPagaveis' . $i .  $key . '">'
																			. '<input type="radio" name="QuitadoPagaveis' . $i . '" id="radiobuttondinamico" '
																			. 'autocomplete="off" value="' . $key . '" checked>' . $row
																			. '</label>'
																			;
																		} else {
																			echo ''
																			. '<label class="btn btn-default" name="radiobutton_QuitadoPagaveis' . $i . '" id="radiobutton_QuitadoPagaveis' . $i .  $key . '">'
																			. '<input type="radio" name="QuitadoPagaveis' . $i . '" id="radiobuttondinamico" '
																			. 'autocomplete="off" value="' . $key . '" >' . $row
																			. '</label>'
																			;
																		}
																	}
																	?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>
									<?php
									}
									?>
									</div>

								</div>
							</div>
						</div>
					</div>
					-->
					<hr>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label for="ObsConsumo">Obs:</label>
								<textarea class="form-control" id="ObsConsumo" <?php echo $readonly; ?>
										  name="ObsConsumo"><?php echo $consumo['ObsConsumo']; ?></textarea>
							</div>
						<!--
							<div class="col-md-2 form-inline">
								<label for="AprovadoConsumo">Consumo Aprovada?</label><br>
								<div class="form-group">
									<div class="btn-group" data-toggle="buttons">
										<?php
										foreach ($select['AprovadoConsumo'] as $key => $row) {
											if (!$consumo['AprovadoConsumo'])
												$consumo['AprovadoConsumo'] = 'N';

											($key == 'S') ? $hideshow = 'showradio' : $hideshow = 'hideradio';

											if ($consumo['AprovadoConsumo'] == $key) {
												echo ''
												. '<label class="btn btn-warning active" name="AprovadoConsumo_' . $hideshow . '">'
												. '<input type="radio" name="AprovadoConsumo" id="' . $hideshow . '" '
												. 'autocomplete="off" value="' . $key . '" checked>' . $row
												. '</label>'
												;
											} else {
												echo ''
												. '<label class="btn btn-default" name="AprovadoConsumo_' . $hideshow . '">'
												. '<input type="radio" name="AprovadoConsumo" id="' . $hideshow . '" '
												. 'autocomplete="off" value="' . $key . '" >' . $row
												. '</label>'
												;
											}
										}
										?>

									</div>
								</div>
							</div>
							
							<div class="form-group">

								<div id="AprovadoConsumo" <?php echo $div['AprovadoConsumo']; ?>>									
									<div class="col-md-2 form-inline">
										<label for="ServicoConcluidoConsumo">Consumo Conclu�da?</label><br>
										<div class="form-group">
											<div class="btn-group" data-toggle="buttons">
												<?php
												foreach ($select['ServicoConcluidoConsumo'] as $key => $row) {
													(!$consumo['ServicoConcluidoConsumo']) ? $consumo['ServicoConcluidoConsumo'] = 'N' : FALSE;

													if ($consumo['ServicoConcluidoConsumo'] == $key) {
														echo ''
														. '<label class="btn btn-warning active" name="radiobutton_ServicoConcluidoConsumo" id="radiobutton_ServicoConcluidoConsumo' . $key . '">'
														. '<input type="radio" name="ServicoConcluidoConsumo" id="radiobutton" '
														. 'autocomplete="off" value="' . $key . '" checked>' . $row
														. '</label>'
														;
													} else {
														echo ''
														. '<label class="btn btn-default" name="radiobutton_ServicoConcluidoConsumo" id="radiobutton_ServicoConcluidoConsumo' . $key . '">'
														. '<input type="radio" name="ServicoConcluidoConsumo" id="radiobutton" '
														. 'autocomplete="off" value="' . $key . '" >' . $row
														. '</label>'
														;
													}
												}
												?>
											</div>
										</div>
									</div>
									<div class="col-md-2 form-inline">
										<label for="QuitadoConsumo">Consumo Quitada?</label><br>
										<div class="form-group">
											<div class="btn-group" data-toggle="buttons">
												<?php
												foreach ($select['QuitadoConsumo'] as $key => $row) {
													(!$consumo['QuitadoConsumo']) ? $consumo['QuitadoConsumo'] = 'N' : FALSE;
													

													($key == 'S') ? $hideshow = 'showradio' : $hideshow = 'hideradio';
																								
													if ($consumo['QuitadoConsumo'] == $key) {
														echo ''
														. '<label class="btn btn-warning active" name="QuitadoConsumo_' . $hideshow . '">'
														. '<input type="radio" name="QuitadoConsumo" id="' . $hideshow . '" '
														. 'autocomplete="off" value="' . $key . '" checked>' . $row
														. '</label>'
														;
													} else {
														echo ''
														. '<label class="btn btn-default" name="QuitadoConsumo_' . $hideshow . '">'
														. '<input type="radio" name="QuitadoConsumo" id="' . $hideshow . '" '
														. 'autocomplete="off" value="' . $key . '" >' . $row
														. '</label>'
														;
													}
													
												}
												?>
											</div>
										</div>
									</div>	
									<div id="QuitadoConsumo" <?php echo $div['QuitadoConsumo']; ?>>	
										<div class="col-md-2">
											<label for="DataConclusaoConsumo">Data da Quita��o:</label>
											<div class="input-group <?php echo $datepicker; ?>">
												<input type="text" class="form-control Date" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
													   name="DataConclusaoConsumo" value="<?php echo $consumo['DataConclusaoConsumo']; ?>">
												<span class="input-group-addon" disabled>
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
										</div>
									</div>
									<!--
									<div class="col-md-2">
										<label for="DataRetornoConsumo">Data do Retorno:</label>
										<div class="input-group <?php echo $datepicker; ?>">
											<input type="text" class="form-control Date" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
												   name="DataRetornoConsumo" value="<?php echo $consumo['DataRetornoConsumo']; ?>">
											<span class="input-group-addon" disabled>
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
									
									
									<br>
									<br>								
								</div>
							</div>
						-->	
						</div>
					</div>

					<hr>

					<div class="form-group">
						<div class="row">
							<!--<input type="hidden" name="idApp_Cliente" value="<?php echo $_SESSION['Cliente']['idApp_Cliente']; ?>">-->
							<input type="hidden" name="idApp_Consumo" value="<?php echo $consumo['idApp_Consumo']; ?>">
							<?php if ($metodo > 1) { ?>
							<!--<input type="hidden" name="idApp_Procedimento" value="<?php echo $procedimento['idApp_Procedimento']; ?>">
							<input type="hidden" name="idApp_ParcelasRec" value="<?php echo $parcelaspag['idApp_ParcelasRec']; ?>">-->
							<?php } ?>
							<?php if ($metodo == 2) { ?>
								<!--
								<div class="col-md-12 text-center">
									<button class="btn btn-lg btn-danger" id="inputDb" data-loading-text="Aguarde..." name="submit" value="1" type="submit">
										<span class="glyphicon glyphicon-trash"></span> Excluir
									</button>
									<button class="btn btn-lg btn-warning" id="inputDb" onClick="history.go(-1);
												return true;">
										<span class="glyphicon glyphicon-ban-circle"></span> Cancelar
									</button>
								</div>
								<button type="button" class="btn btn-danger">
									<span class="glyphicon glyphicon-trash"></span> Confirmar Exclus�o
								</button>                        -->

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
													<a class="btn btn-danger" href="<?php echo base_url() . 'consumo/excluir/' . $consumo['idApp_Consumo'] ?>" role="button">
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