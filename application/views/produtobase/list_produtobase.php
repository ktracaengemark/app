<br>

<table class="table table-hover">
    <thead>
        <tr>
            
			<th>Tipo de Produto</th>
			<!--<th>id do ProdutoBase</th>-->
			<th>Nome do Produto</th>
            <th>Unidade de Medida</th>
            <th>Valor de Compra</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        if ($q) {

            foreach ($q as $row)
            {

                $url = base_url() . 'produtobase/alterar/' . $row['idTab_ProdutoBase'];
                #$url = '';

                echo '<tr class="clickable-row" data-href="' . $url . '">';                   
					echo '<td>' . str_replace('.',',',$row['TipoProdutoBase']) . '</td>';
					#echo '<td>' . str_replace('.',',',$row['idTab_ProdutoBase']) . '</td>';
                    echo '<td>' . str_replace('.',',',$row['ProdutoBase']) . '</td>';
					echo '<td>' . str_replace('.',',',$row['UnidadeProdutoBase']) . '</td>';                    
					echo '<td>' . str_replace('.',',',$row['ValorCompraProdutoBase']) . '</td>';
                    echo '<td></td>';
                echo '</tr>';            

                $i++;
            }
            
        }
        ?>

    </tbody>
    <tfoot>
        <tr>
            <th colspan="6">Total encontrado: <?php echo $i; ?> resultado(s)</th>
        </tr>
    </tfoot>
</table>



