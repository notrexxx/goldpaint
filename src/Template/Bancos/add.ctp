<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
    <?= $this->Form->create($banco) ?>
    <fieldset>
        
        
        <h3><?= __('Nuevo banco') ?></h3>
        <?php
            echo $this->Form->input('banc',['label'=>'']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
    </div>
