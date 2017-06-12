
    <h3><?= h($ventatotale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $ventatotale->has('cliente') ? $this->Html->link($ventatotale->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $ventatotale->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipopago') ?></th>
            <td><?= h($ventatotale->tipopago) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ventatotale->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Total') ?></th>
            <td><?= $this->Number->format($ventatotale->total) ?></td>
        </tr>
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($ventatotale->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($ventatotale->modified) ?></td>
        </tr>
    </table>
<div class="related">
        <h4><?= __('Cotizaciones') ?></h4>
        
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('producto') ?></th>
                <th><?= __('precio_u') ?></th>
                <th><?= __('cantidad') ?></th>
                <th><?= __('subtotal') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ventatotale->items as $item): ?>
            <tr>
                <td><?= h($item->id) ?></td>
                <td><?= $item->has('producto') ? $this->Html->link($item->producto->full, ['controller' => 'Productos', 'action' => 'view', $item->producto->id]) : '' ?></td>
                <td><?= h($item->precio_u) ?></td>
                <td><?= h($item->cantidad) ?></td>
                <td><?= h($item->subtotal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $item->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    </div>    
</div>
