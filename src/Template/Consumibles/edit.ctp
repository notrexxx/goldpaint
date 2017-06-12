<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <?= $this->Form->create($consumible) ?>
    <fieldset>
        <legend><?= __('Edit Consumible') ?></legend>
        <?php
            echo $this->Form->input('consu');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>