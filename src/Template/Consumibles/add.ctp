<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <?= $this->Form->create($consumible) ?>
    <fieldset>
        <h3><?= __('Nuevo consumible') ?></h3>
        <?php
            echo $this->Form->input('consu',['label'=>'']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>
