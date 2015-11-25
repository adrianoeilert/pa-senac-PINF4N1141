<?php
$attsCriar = array('class' => 'btn btn-default');
$attsEditar = array('class' => 'btn btn-default btn-xs');
$attsExcluir = array('class' => 'btn btn-primary btn-xs');
?>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
        <h2>Registro de Pessoas</h2>
        <?php
        echo anchor('Clientes/novo', 'Criar', $attsCriar);
        ?>
        <ul class="lista">
            <?php
            foreach ($clientes as $cliente) {
                ?>
                <li>
                    <?php echo $cliente['nome']; ?> (<?php echo $cliente['email']; ?>)
                    <?php echo anchor('clientes/editar/' . $cliente['idPessoas'], 'Editar', $attsEditar); ?>
                    <?php echo anchor('clientes/deletar/' . $cliente['idPessoas'], 'Excluir', $attsExcluir); ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>