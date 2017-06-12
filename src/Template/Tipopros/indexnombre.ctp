

    <h3><?= __('Tipo de Producto') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Tipo de Producto') ?></th>
                <th><?= $this->Paginator->sort('Sub-categoria') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th><?= $this->Paginator->sort('acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipopros as $tipopro): ?>
            <tr>
                <td><?= $this->Number->format($tipopro->id) ?></td>
                <td><?= h($tipopro->tipo) ?></td>
                <td><?= $tipopro->has('subcategoria') ? $this->Html->link($tipopro->subcategoria->nombre, ['controller' => 'subcategorias', 'action' => 'view', $tipopro->subcategoria->id]) : '' ?></td>
                <td><?= h($tipopro->created) ?></td>
                <td><?= $this->Html->link(__('Editar'), ['action' => 'edit', $tipopro->id]) ?></td>
                <td><?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $tipopro->id], ['confirm' => __('Seguro que deseas Eliminar {0}?', $tipopro->tipo)]) ?></td>
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
