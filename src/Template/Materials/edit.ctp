
<div class="materials form large-9 medium-8 columns content">
    <?= $this->Form->create($material) ?>
    <fieldset>
        <legend><?= __('Editar Material') ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('modelo');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
