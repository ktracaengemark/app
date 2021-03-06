<div style="overflow: auto; height: auto; ">
	<div class="container-fluid">
		<div class="row">
			<div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th colspan="5" class="active">Total encontrado: <?php echo $report_entrega->num_rows(); ?> resultado(s)</th>
						</tr>
					</thead>
					<thead>
						<tr>
							<th class="active">Pedido</th>
							<th class="active">idCli</th>
							<th class="active">Cliente</th>
							<th class="active">Compra</th>
							<th class="active">Produto</th>
							<th class="active">Entrega</th>
							<th class="active">Hora</th>
							<th class="active">Forma</th>
							<th class="active">Entregue</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($report_entrega->result_array() as $row) {
							#echo '<tr>';
							echo '<tr class="clickable-row bg-warning" data-href="' . base_url() . $status . $row['idApp_OrcaTrata'] . '">';
								echo '<td>' . $row['idApp_OrcaTrata'] . '</td>';	
								echo '<td>' . $row['idApp_Cliente'] . '</td>';	
								echo '<td>' . $row['NomeCliente'] . '</td>';
								echo '<td>' . $row['Tipo_Orca'] . '</td>';
								echo '<td>' . $row['NomeProduto'] . '</td>';
								echo '<td>' . $row['DataEntregaOrca'] . '</td>';
								echo '<td>' . $row['HoraEntregaOrca'] . '</td>';
								echo '<td>' . $row['TipoFrete'] . '</td>';
								echo '<td>' . $row['ConcluidoProduto'] . '</td>';
							echo '</tr>';
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>