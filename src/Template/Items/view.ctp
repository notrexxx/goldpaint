
    <h3><?= h($item->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ventatotale') ?></th>
            <td><?= $item->has('ventatotale') ? $this->Html->link($item->ventatotale->id, ['controller' => 'Ventatotales', 'action' => 'view', $item->ventatotale->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Producto') ?></th>
            <td><?= $item->has('producto') ? $this->Html->link($item->producto->numero_serie, ['controller' => 'Productos', 'action' => 'view', $item->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Precio U') ?></th>
            <td><?= $this->Number->format($item->precio_u) ?></td>
        </tr>
        <tr>
            <th><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($item->cantidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Subtotal') ?></th>
            <td><?= $this->Number->format($item->subtotal) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </table>
