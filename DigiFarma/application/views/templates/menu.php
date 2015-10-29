
<?php
$atts = array('class' => 'btn btn-primary');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('Home/index', 'Home', $atts); ?>
        <?php echo anchor('Cadastro/index', 'Cadastro', $atts); ?>
        <?php echo anchor('Loja/produtos', 'Loja', $atts); ?>
        <?php echo anchor('Carrinho/mostra', 'Carrinho', $atts); ?>
        <?php echo anchor('Sobre/index', 'Sobre a Empresa', $atts); ?>
        
    </div>
</div>
<br>
<br>