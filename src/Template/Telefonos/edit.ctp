<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <?= $this->Form->create($telefono) ?>
    <fieldset>
        <legend><?= __('Edit Telefono') ?></legend>
        <?php
            echo $this->Form->input('numero');
            echo $this->Form->input('otronumero');
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>