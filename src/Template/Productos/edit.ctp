<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 

    <?= $this->Form->create($producto) ?>
    <fieldset>
        <h3>Editar Producto</h3>
        <?php
            echo $this->Form->input('numero_serie');
            echo $this->Form->input('codigo');
            echo $this->Form->input('modelo');
            echo $this->Form->input('caracteristicas');
            echo $this->Form->input('existencia');
            echo $this->Form->input('precio');
            echo $this->Form->input('empresa_id');
            echo $this->Form->input('marca_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    </div>
    </div>
</div>