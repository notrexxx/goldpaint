
    <h3><?= __('Producto') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Producto') ?></th>
                <th><?= $this->Paginator->sort('Marcas') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th><?= $this->Paginator->sort('acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materials as $material): ?>
            <tr>
                <td><?= $this->Number->format($material->id) ?></td>
                <td><?= h($material->full) ?></td>
                <td><?= $material->has('marcapro') ? $this->Html->link($material->marcapro->marc, ['controller' => 'tipopros', 'action' => 'view', $material->marcapro->id]) : '' ?></td>
                <td><?= h($material->created) ?></td>
                <td><?= $this->Html->link(__('VER'), ['action' => 'view', $material->id]) ?></td>
                <td><?= $this->Html->link(__('Editar'), ['action' => 'edit', $material->id]) ?></td>
                <td><?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $material->id], ['confirm' => __('Seguro que deseas Eliminar {0}?', $material->full)]) ?></td>
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
