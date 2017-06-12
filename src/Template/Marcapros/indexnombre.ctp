
    <h3><?= __('Marca del Producto') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Marca de Producto') ?></th>
                <th><?= $this->Paginator->sort('Tipo de producto') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th><?= $this->Paginator->sort('acciones') ?></th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marcapros as $marcapro): ?>
            <tr>
                <td><?= $this->Number->format($marcapro->id) ?></td>
                <td><?= h($marcapro->marc) ?></td>
                <td><?= $marcapro->has('tipopro') ? $this->Html->link($marcapro->tipopro->tipo, ['controller' => 'tipopros', 'action' => 'view', $marcapro->tipopro->id]) : '' ?></td>
                <td><?= h($marcapro->created) ?></td>
                <td><?= $this->Html->link(__('Editar'), ['action' => 'edit', $marcapro->id]) ?></td>
                <td><?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $marcapro->id], ['confirm' => __('Seguro que deseas Eliminar {0}?', $marcapro->marc)]) ?></td>
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
