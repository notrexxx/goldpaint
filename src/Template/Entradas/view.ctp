<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <h3><?=  $entrada->has('producto') ? $this->Html->link($entrada->producto->full, ['controller' => 'Productos', 'action' => 'view', $entrada->producto->id]) : '' ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Producto') ?></th>
            <td><?= $entrada->has('producto') ? $this->Html->link($entrada->producto->full, ['controller' => 'Productos', 'action' => 'view', $entrada->producto->id]) : '' ?></td>
        </tr>
        
        <tr>
            <th><?= __('Vieja Cantidad') ?></th>
            <td><?= $this->Number->format($entrada->vieja_cant) ?></td>
        </tr>
        <tr>
            <th><?= __('Nueva Cantidad') ?></th>
            <td><?= $this->Number->format($entrada->nueva_cant) ?></td>
        </tr>
        <tr>
            <th><?= __('En Inventario') ?></th>
            <td><?= $this->Number->format($entrada->en_inventario) ?></td>
        </tr>
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($entrada->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($entrada->modified) ?></td>
        </tr>
    </table>
</div>
    </div>
</div>
