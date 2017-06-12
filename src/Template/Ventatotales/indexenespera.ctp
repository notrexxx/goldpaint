
    <h3>Ventas en espera</h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('total') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('tipopago') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventatotales as $ventatotale): ?>
            <tr>
                <td><?= $this->Number->format($ventatotale->id) ?></td>
                <td><?= $this->Number->format($ventatotale->total) ?></td>
                <td><?= $ventatotale->has('cliente') ? $this->Html->link($ventatotale->cliente->cedula, ['controller' => 'Clientes', 'action' => 'view', $ventatotale->cliente->id]) : '' ?></td>
                <td><?= h($ventatotale->tipopago) ?></td>
                <td><?= h($ventatotale->created) ?></td>
                <td><?= h($ventatotale->modified) ?></td>
                <td class="actions">
                    
                        
                           <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'viewenespera', $ventatotale->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i>'), array('action' => 'edit', $ventatotale->id), array('class' => 'btn btn-sm btn-primary', 'escape' => false, 'button title' => 'EDITAR')); ?>
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $ventatotale->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $ventatotale->id))); ?>
                                        
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