<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->script('jquery.min.js'); ?>
    <?= $this->Html->script('bootstrap.min.js'); ?>
    <?= $this->Html->script('main.js'); ?>
    <?= $this->Html->script('plugins.js'); ?>
    <?= $this->Html->script('personal.js'); ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('personal.css') ?>
    <?= $this->Html->css('estilos.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    
    <style>
body {
    background-image: url("../img/fondo.png");
}
</style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div id="principal">
                <div class="cabecera">
                    <h2>cabecera y logo de la compañia</h2>
                </div>
                <div class="mbtg-m">
                <?php 
                    echo $this->Html->image("btn-cliente.png", [
                        "url" => ['controller' => 'clientes', 'action' => 'index'],
                    ]);
                ?>
                </div>
                <div class="mbtg-p">
                <?php 
                    echo $this->Html->image("btn-empresa.png", [
                        "url" => ['controller' => 'empresas', 'action' => 'index'],
                    ]);
                ?>         
                </div>
                <div class="mbtg-p">
                <?php 
                    echo $this->Html->image("btn-item.png", [
                        "url" => ['controller' => 'items', 'action' => 'index'],
                    ]);
                ?>
                </div>


                <div class="mbtg-p">
                <?php 
                    echo $this->Html->image("btn-marca.png", [
                        "url" => ['controller' => 'marcas', 'action' => 'index'],
                    ]);
                ?>
                </div>
                <div class="mbtg-p">
                <?php 
                    echo $this->Html->image("btn-producto.png", [
                        "url" => ['controller' => 'productos', 'action' => 'index'],
                    ]);
                ?>
                </div>
                <div class="mbtg-m">
                <?php 
                    echo $this->Html->image("btn-usuario.png", [
                        "url" => ['controller' => 'users', 'action' => 'index'],
                    ]);
                ?>
                </div>
                
                <div class="mbtg-g">
                <?php 
                    echo $this->Html->image("btn-ventas.png", [
                        "url" => ['controller' => 'ventas', 'action' => 'index'],
                    ]);
                ?>
                </div>
             </div>
        </div>
    </div>   
</div>
</body>
</html>
