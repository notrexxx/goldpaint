
    <?= $this->Form->create($user) ?>
    <fieldset>
      <h3>Editar Usuario</h3>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

