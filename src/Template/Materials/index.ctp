

    <h3><?= __('Productos') ?></h3>
    <table  class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('modelo') ?></th>
                <th><?= $this->Paginator->sort('creado') ?></th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materials as $material): ?>
            <tr>
                <td><?= $this->Number->format($material->id) ?></td>
                <td><?= h($material->codigo) ?></td>
                <td><?= h($material->modelo) ?></td>
                <td><?= h($material->created) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $material->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>            
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

