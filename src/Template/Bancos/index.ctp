

    <h3><?= __('Bancos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('banc') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bancos as $banco): ?>
            <tr>
                <td><?= $this->Number->format($banco->id) ?></td>
                <td><?= h($banco->banc) ?></td>
                <td><?= h($banco->created) ?></td>
                <td><?= h($banco->modified) ?></td>
                <td class="actions">
                    
                     <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $banco->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i>'), array('action' => 'edit', $banco->id), array('class' => 'btn btn-sm btn-primary', 'escape' => false, 'button title' => 'EDITAR')); ?>
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $banco->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $banco->id))); ?>
                  
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
</div>
