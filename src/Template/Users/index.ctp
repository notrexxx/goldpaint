<div class=" col-lg-12 text-center">
    <h3><?= __('Usuarios Del Establecimiento') ?></h3>
    <div class="table-responsive">
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->nombre) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                
                    <td class="actions">
                    
                        
                           <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $user->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i>'), array('action' => 'edit', $user->id), array('class' => 'btn btn-sm btn-primary', 'escape' => false, 'button title' => 'EDITAR')); ?>
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $user->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $user->id))); ?>
                                        
                </td>
                      
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>

</div>