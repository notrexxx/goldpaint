 <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ventatotales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ventatotales form large-9 medium-8 columns content">
    <?= $this->Form->create($ventatotale) ?>
    <fieldset>
        <legend><?= __('Finalizar Venta') ?></legend>
        <?php
            echo $this->Form->create();

            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('tipopago');
        ?>
    </fieldset>
   
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('producto') ?></th>
                <th><?= $this->Paginator->sort('precio_u') ?></th>
                <th><?= $this->Paginator->sort('cantidad') ?></th>
                <th><?= $this->Paginator->sort('subtotal') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventaitem as $venta): ?>
            <tr>
                <td><?= $this->Number->format($venta->id) ?></td>
                <td><?= $this->Number->format($venta->producto_id) ?></td>
                <td><?= $this->Number->format($venta->precio_u) ?></td>
                <td><?= $this->Number->format($venta->cantidad) ?></td>
                <td><?= $this->Number->format($venta->subtotal) ?></td>
                <td><?= h($venta->created) ?></td>
                <td><?= h($venta->modified) ?></td>
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    <table>
        <tr>
            <th>Total Bs.</th>
        </tr>
        <tr>
        <?php foreach ($total as $t): ?>
        <td>
            <h3><?= $this->Number->format($t->total) ?><h3>
        </td>
         <?php endforeach; ?>
        
        </tr>
    </table>
     <?php echo $this->Form->input('total', ['type' => 'hidden','value'=>$t->total]); ?>
     <?= $this->Form->button(__('Venta')) ?>
     <?= $this->Form->end() ?>
</div>
 