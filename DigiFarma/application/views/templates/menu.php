

<?php
$atts = array('class' => 'btn btn-danger');
?>
<div class="row">
    <div class="col-lg-12">
         <?php echo anchor('Medicamentos/index', 'Medicamentos', $atts); ?>
        <?php echo anchor('Genéricos/index', 'Genéricos', $atts); ?>       
        <?php echo anchor('Nutrição/mostra', 'Nutrição', $atts); ?>
        <?php echo anchor('Cosmeticos/index', 'Cosmeticos', $atts); ?>
    </div>
</div>