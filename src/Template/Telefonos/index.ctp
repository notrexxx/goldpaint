
    <h3><?= __('Telefonos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('otronumero') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($telefonos as $telefono): ?>
            <tr>
                <td><?= $this->Number->format($telefono->id) ?></td>
                <td><?= h($telefono->numero) ?></td>
                <td><?= h($telefono->otronumero) ?></td>
                <td><?= $telefono->has('cliente') ? $this->Html->link($telefono->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $telefono->cliente->id]) : '' ?></td>
                <td><?= h($telefono->created) ?></td>
                <td><?= h($telefono->modified) ?></td>
                <td class="actions">
                   <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $telefono->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i>'), array('action' => 'edit', $telefono->id), array('class' => 'btn btn-sm btn-primary', 'escape' => false, 'button title' => 'EDITAR')); ?>
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $telefono->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $telefono->id))); ?>
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

