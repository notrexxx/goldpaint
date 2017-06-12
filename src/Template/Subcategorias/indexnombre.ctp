

    <h3><?= __('Subcategorias') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('categoria') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th><?= $this->Paginator->sort('acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subcategorias as $subcategoria): ?>
            <tr>
                <td><?= $this->Number->format($subcategoria->id) ?></td>
                <td><?= h($subcategoria->nombre) ?></td>
                <td><?= $subcategoria->has('categoria') ? $this->Html->link($subcategoria->categoria->nombre, ['controller' => 'categorias', 'action' => 'view', $subcategoria->categoria->id]) : '' ?></td>
                <td><?= h($subcategoria->created) ?></td>
                <td><?= $this->Html->link(__('Editar'), ['action' => 'edit', $subcategoria->id]) ?></td>
                <td><?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $subcategoria->id], ['confirm' => __('Seguro que deseas Eliminar {0}?', $subcategoria->nombre)]) ?></td>
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
