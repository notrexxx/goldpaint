<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <?= $this->Form->create($perdida) ?>
    <fieldset>
        <legend><?= __('Edit Perdida') ?></legend>
        <?php
            echo $this->Form->input('gasto');
            echo $this->Form->input('consumible_id', ['options' => $consumibles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>