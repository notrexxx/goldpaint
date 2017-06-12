
    <?= $this->Form->create($empresa) ?>
    <fieldset>
    <h3>Editar Empresa</h3>
        <?php
            echo $this->Form->input('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

