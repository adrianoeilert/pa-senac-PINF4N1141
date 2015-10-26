

<?php
$atts = array('class' => 'btn btn-danger');
?>
<div class="row">
    <div class="col-lg-12">
         <?php echo anchor('Medicamentos/index', 'Medicamentos', $atts); ?>
        <?php echo anchor('Genericos/index', 'Genéricos', $atts); ?>       
        <?php echo anchor('Nutricao/index', 'Nutrição', $atts); ?>
        <?php echo anchor('Cosmeticos/index', 'Cosméticos', $atts); ?>
    </div>
</div>