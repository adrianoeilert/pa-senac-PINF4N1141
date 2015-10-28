<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<html lang="en">

<head>
        <meta charset="utf-8">
        <?php echo link_tag('/assets/css/bootstrap.css'); ?>
        <?php echo link_tag('/assets/css/style.css'); ?>
        
    </head>
<body>
        <div class="container">
            <div class="body">
                <?php
                        $image_properties = array(
                            'src' => '/assets/imagens/cabecalho.jpg',
                            'width' => '100%'
                        );
                        ?>
                        <?php echo img($image_properties); ?>
                
                <br>
                <br>
                
                
                <div class="row">
                    <div class="col-lg-6">
                        
                        <?php $atts = array('class' => 'h3'); ?>
                        <?php echo anchor('home/index', 'DigiFarma', $atts); ?>
                    </div>
               

                    <div class="col-lg-6">

                        <form method="POST" action="cadastrese.php">
                            <label>Login:</label><input type="text" name="login" id="login"><br>
                            <label>Senha:</label><input type="password" name="senha" id="senha"><br>
                            <button type="button" class="btn btn-default navbar-btn">Entrar</button>
                            
                        </form>
                    </div>
                    </div>
    
                   <br>
                   <br>
