
<?php
$atts = array('class' => 'btn btn-primary');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('Home/index', 'Home', $atts); ?>
        <?php echo anchor('Pessoas/novo', 'Cadastre-se', $atts); ?>
        <?php echo anchor('Produtos/loja', 'Loja', $atts); ?>
        <?php echo anchor('Produtos/carrinho', 'Carrinho', $atts); ?>
        <?php echo anchor('Sobre/index', 'Sobre a Empresa', $atts); ?>
        
    </div>
</div>
<br>
<br>