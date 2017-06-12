<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <?= $this->Form->create($entrada) ?>
    <fieldset>
        <h3><?= __('Añadir productos al inventario') ?></h3>
        <?php
            echo $this->Form->input('producto_id', ['options' => $productos, 'label' => 'Producto']);
            
            echo $this->Form->input('nueva_cant', ['label' => 'Nueva cantidad']);
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Sumar a inventario')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>
