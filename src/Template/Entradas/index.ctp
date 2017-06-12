
    <h3><?= __('Entradas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('producto') ?></th>
                <th><?= $this->Paginator->sort('cantidad anterior') ?></th>
                <th><?= $this->Paginator->sort('nueva cantidad') ?></th>
                <th><?= $this->Paginator->sort('en inventario') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th><?= $this->Paginator->sort('modificado') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entradas as $entrada): ?>
            <tr>
                <td><?= $this->Number->format($entrada->id) ?></td>
                <td><?= $entrada->has('producto') ? $this->Html->link($entrada->producto->full, ['controller' => 'Productos', 'action' => 'view', $entrada->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($entrada->vieja_cant) ?></td>
                <td><?= $this->Number->format($entrada->nueva_cant) ?></td>
                <td><?= $this->Number->format($entrada->en_inventario) ?></td>
                <td><?= h($entrada->created) ?></td>
                <td><?= h($entrada->modified) ?></td>
                <td class="actions">
                  <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $entrada->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                   
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $entrada->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $entrada->id))); ?>
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

