
    <h3><?= __('Lista de gastos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('gasto') ?></th>
                <th><?= $this->Paginator->sort('consumible') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th><?= $this->Paginator->sort('modificado') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perdidas as $perdida): ?>
            <tr>
                <td><?= $this->Number->format($perdida->id) ?></td>
                <td><?= $this->Number->format($perdida->gasto) ?></td>
                <td><?= $perdida->has('consumible') ? $this->Html->link($perdida->consumible->consu, ['controller' => 'Consumibles', 'action' => 'view', $perdida->consumible->id]) : '' ?></td>
                <td><?= h($perdida->created) ?></td>
                <td><?= h($perdida->modified) ?></td>
                <td class="actions">
                     <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $perdida->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $perdida->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $perdida->id))); ?>
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

