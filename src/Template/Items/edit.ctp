

    <?= $this->Form->create($item) ?>
    <fieldset>
        <h3>Editar Item</h3>
        <?php
            echo $this->Form->input('ventatotale_id', ['options' => $ventatotales]);
            echo $this->Form->input('producto_id', ['options' => $productos]);
            echo $this->Form->input('precio_u');
            echo $this->Form->input('cantidad');
            echo $this->Form->input('subtotal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
