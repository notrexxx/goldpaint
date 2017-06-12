<?php 

$session = $this->request->session();

if ($session->check('Auth.User.id')) {
    ?>




    
      <div class="navbar-brand pull-right ">
        <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout'),array('class' => 'btn btn-danger btn-lg')) ?>

      </div>
  

<?php }?>