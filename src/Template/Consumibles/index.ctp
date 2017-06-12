
    <h3><?= __('Consumibles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('consu') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consumibles as $consumible): ?>
            <tr>
                <td><?= $this->Number->format($consumible->id) ?></td>
                <td><?= h($consumible->consu) ?></td>
                <td><?= h($consumible->created) ?></td>
                <td><?= h($consumible->modified) ?></td>
                <td class="actions">
                     <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $consumible->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i>'), array('action' => 'edit', $consumible->id), array('class' => 'btn btn-sm btn-primary', 'escape' => false, 'button title' => 'EDITAR')); ?>
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $consumible->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $consumible->id))); ?>
                    
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

