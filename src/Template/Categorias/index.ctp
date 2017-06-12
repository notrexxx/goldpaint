

    <h3><?= __('Categorias') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th><?= $this->Paginator->sort('acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?= $this->Number->format($categoria->id) ?></td>
                <td><?= h($categoria->nombre) ?></td>
                <td><?= h($categoria->created) ?></td>
                <td><?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoria->id]) ?></td>
                <td><?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $categoria->id], ['confirm' => __('Seguro que deseas Eliminar {0}?', $categoria->nombre)]) ?></td>
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
