

    <h3><?= __('Cajas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('queda en caja') ?></th>
                <th><?= $this->Paginator->sort('total gastos') ?></th>
                <th><?= $this->Paginator->sort('total efectivo') ?></th>
                <th><?= $this->Paginator->sort('total debito') ?></th>
                <th><?= $this->Paginator->sort('total credito') ?></th>
                <th><?= $this->Paginator->sort('cantidad de ventas') ?></th>
                <th><?= $this->Paginator->sort('total') ?></th>
                <th><?= $this->Paginator->sort('total real') ?></th>

                <th><?= $this->Paginator->sort('creacion') ?></th>
                
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cajas as $caja): ?>
            <tr>
                <td><?= $this->Number->format($caja->id) ?></td>
                <td><?= $this->Number->format($caja->numero) ?></td>
                <td><?= $this->Number->format($caja->tgasto) ?></td>
                <td><?= $this->Number->format($caja->tefectivo) ?></td>
                <td><?= $this->Number->format($caja->tdebito) ?></td>
                <td><?= $this->Number->format($caja->tcredito) ?></td>
                <td><?= $this->Number->format($caja->cantventa) ?></td>
                <td><?= $this->Number->format($caja->ttotal) ?></td>
                <td><?= $this->Number->format($caja->treal) ?></td>
                <td><?= h($caja->created) ?></td>
                
                <td class="actions">
                    <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $caja->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                  
                    
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
