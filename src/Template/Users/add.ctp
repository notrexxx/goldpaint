<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
      
        <br style="clear:both">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <h3><?= __('Agregar Usuario') ?></h3>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('role',['options'=>['user','admin']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    </div>
</div>
