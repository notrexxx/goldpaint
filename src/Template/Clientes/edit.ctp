<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 

    <?= $this->Form->create($cliente) ?>
    <fieldset>
     <h3>Editar Cliente</h3>

        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('cedula');
            echo $this->Form->input('edad');
            echo $this->Form->input('sexo');
            echo $this->Form->input('direccion');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
</div>