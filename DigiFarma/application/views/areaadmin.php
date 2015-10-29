<?php
$atts = array('class' => 'btn btn-default');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('Admin/produtos', 'Cadastro de Produtos', $atts); ?>
        <br>
        <br>
        <?php echo anchor('Admin/clientes', 'Cadastro de Clientes', $atts); ?>
    </div>
</div>
