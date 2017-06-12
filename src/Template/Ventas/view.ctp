
    <h3><?= h($venta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Producto') ?></th>
            <td><?= $venta->has('producto') ? $this->Html->link($venta->producto->id, ['controller' => 'Productos', 'action' => 'view', $venta->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($venta->id) ?></td>
        </tr>
        <tr>
            <th><?= __('precio unidad') ?></th>
            <td><?= $this->Number->format($venta->precio_u) ?></td>
        </tr>
         <tr>
            <th><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($venta->cantidad) ?></td>
        </tr>
        <tr>
            <th><?= __('sub total') ?></th>
            <td><?= $this->Number->format($venta->subtotal) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($venta->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($venta->modified) ?></td>
        </tr>
    </table>

