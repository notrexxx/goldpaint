

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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->script('jquery.min.js'); ?>
    <?= $this->Html->script('bootstrap.min.js'); ?>
  
    <?= $this->Html->script('select2.min.js'); ?>
    <?= $this->Html->css('bootstrap.min.css'); ?>

 
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('select2.min.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('imagen.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
 
</head>
   
<body> 
     
    <?php echo $this->element('sidebar2'); ?>
    <div class="container-fluid">
  
    <div class="main">
      <!--Sidebar content-->
  


   <?= $this->Html->css('sidebar2.css') ?>
    <?php echo $this->element('menu'); ?>
    
    <?= $this->Flash->render() ?>
    <section class="container clearfix text-center">
       
  
                <?= $this->fetch('content') ?>
            
    </section>
    <footer>
  
    </footer>  </div>
</div>
</body>
        
</html>
