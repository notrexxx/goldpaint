
    <h3><?= __('Tipo de productos') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tipo producto') ?></th>
                <th><?= $this->Paginator->sort('subcategoria') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipopros as $tipopro): ?>
            <tr>
                <td><?= $this->Number->format($tipopro->id) ?></td>
                <td><?= h($tipopro->tipo) ?></td>
                <td><?= $tipopro->has('subcategoria') ? $this->Html->link($tipopro->subcategoria->nombre, ['controller' => 'Subcategorias', 'action' => 'view', $tipopro->subcategoria->id]) : '' ?></td>
                <td><?= h($tipopro->created) ?></td>
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

