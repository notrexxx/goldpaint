
    <h3><?= __('Marca de productos') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('marca') ?></th>
                <th><?= $this->Paginator->sort('tipo de producto') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marcapros as $marcapro): ?>
            <tr>
                <td><?= $this->Number->format($marcapro->id) ?></td>
                <td><?= h($marcapro->marc) ?></td>
                <td><?= $marcapro->has('tipopro') ? $this->Html->link($marcapro->tipopro->tipo, ['controller' => 'Tipopros', 'action' => 'view', $marcapro->tipopro->id]) : '' ?></td>
                <td><?= h($marcapro->created) ?></td>
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
