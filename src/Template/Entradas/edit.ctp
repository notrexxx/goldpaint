<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
<div class="entradas form large-9 medium-8 columns content">
    <?= $this->Form->create($entrada) ?>
    <fieldset>
        <legend><?= __('Edit Entrada') ?></legend>
        <?php
            echo $this->Form->input('producto_id', ['options' => $productos]);
            echo $this->Form->input('vieja_cant');
            echo $this->Form->input('nueva_cant');
            echo $this->Form->input('en_inventario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
    </div>
