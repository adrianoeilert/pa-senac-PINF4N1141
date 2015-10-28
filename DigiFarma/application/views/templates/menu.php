
<?php
$atts = array('class' => 'btn btn-primary');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('home/index', 'Home', $atts); ?>
        <?php echo anchor('Cadastro/index', 'Cadastro', $atts); ?>
        <?php echo anchor('loja/produtos', 'Loja', $atts); ?>
        <?php echo anchor('carrinho/mostra', 'Carrinho', $atts); ?>
        <?php echo anchor('Sobre/index', 'Sobre a Empresa', $atts); ?>
        
    </div>
</div>
<br>
<br>