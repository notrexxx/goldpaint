<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <?= $this->Form->create($banco) ?>
    <fieldset>
        <legend><?= __('Edit Banco') ?></legend>
        <?php
            echo $this->Form->input('banc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
    </div>
