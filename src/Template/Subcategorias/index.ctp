
    <h3><?= __('Subcategorias') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('categoria') ?></th>
                <th><?= $this->Paginator->sort('Creado') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subcategorias as $subcategoria): ?>
            <tr>
                <td><?= $this->Number->format($subcategoria->id) ?></td>
                <td><?= h($subcategoria->nombre) ?></td>
                <td><?= $subcategoria->has('categoria') ? $this->Html->link($subcategoria->categoria->nombre, ['controller' => 'Categorias', 'action' => 'view', $subcategoria->categoria->id]) : '' ?></td>
                <td><?= h($subcategoria->created) ?></td>
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

