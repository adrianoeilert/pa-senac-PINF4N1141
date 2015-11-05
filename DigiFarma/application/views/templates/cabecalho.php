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
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        
                        <?php $atts = array('class' => 'h3'); ?>
                        <?php echo anchor('home/index', 'DigiFarma', $atts); ?>
                        <br>
                        <b> Sua farmácia na web! </b>
                    </div>
               
<div class="col-lg-4 col-md-4 col-sm-4">
        <div class="form-group">
            <label for="inputEmail">Email:</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Senha:</label>
            <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha">
        </div>
        <?php
        $atts = array('class' => 'btn btn-default');
        ?>
        <?php echo anchor('Admin/index', 'Login', $atts); ?>
        <button class="btn btn-danger disabled">Sair</button>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="lembrar"> Lembre-se de mim
                </label>
            </div>
        </div>

    </div>

                    </div>
    
                   <br>
                   <br>
