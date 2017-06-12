

    <h3><?= __('Items') ?></h3>
    <table  class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('ventatotale_id') ?></th>
                <th><?= $this->Paginator->sort('producto_id') ?></th>
                <th><?= $this->Paginator->sort('precio_u') ?></th>
                <th><?= $this->Paginator->sort('cantidad') ?></th>
                <th><?= $this->Paginator->sort('subtotal') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->id) ?></td>
                <td><?= $item->has('ventatotale') ? $this->Html->link($item->ventatotale->id, ['controller' => 'Ventatotales', 'action' => 'view', $item->ventatotale->id]) : '' ?></td>
                <td><?= $item->has('producto') ? $this->Html->link($item->producto->numero_serie, ['controller' => 'Productos', 'action' => 'view', $item->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($item->precio_u) ?></td>
                <td><?= $this->Number->format($item->cantidad) ?></td>
                <td><?= $this->Number->format($item->subtotal) ?></td>
                <td>
                <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?= $this->Html->link(__('Ver'), ['action' => 'view', $item->id]) ?></li>
                        <li> <?= $this->Html->link(__('Editar'), ['action' => 'edit', $item->id]) ?></li>
                        <li> <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $item->id], ['confirm' => __('¿Desea eliminar a este item?', $item->id)]) ?></li>
                      </ul>
                    </li>  
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
