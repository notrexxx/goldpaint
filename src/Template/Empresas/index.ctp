
    <h3><?= __('Empresas') ?></h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('creada') ?></th>
                <th><?= $this->Paginator->sort('modificada') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresas as $empresa): ?>
            <tr>
                <td><?= $this->Number->format($empresa->id) ?></td>
                <td><?= h($empresa->nombre) ?></td>
                <td><?= h($empresa->created) ?></td>
                <td><?= h($empresa->modified) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $empresa->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                   
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $empresa->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $empresa->id))); ?>                  
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
