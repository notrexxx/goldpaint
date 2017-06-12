<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ventas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ventas form large-9 medium-8 columns content">
    <?= $this->Form->create($venta) ?>
    <fieldset>
        <legend><?= __('Edit Venta') ?></legend>
        <?php
            echo $this->Form->input('producto_id', ['options' => $productos]);
            echo $this->Form->input('precio_u');
            echo $this->Form->input('cantidad');
            echo $this->Form->input('subtotal');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
