
<!-- tenia relacion con nueva venta -->

    <h3><?= __('Clientes') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('cedula') ?></th>
               
                <th><?= $this->Paginator->sort('dirección') ?></th>
                <th><?= $this->Paginator->sort('correo') ?></th>
               
              
                <th><?= $this->Paginator->sort('creado') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nombre) ?></td>
                <td><?= $this->Number->format($cliente->cedula) ?></td>
                <td><?= h($cliente->direccion) ?></td>
                <td><?= h($cliente->email) ?></td>
              
                <td><?= h($cliente->created) ?></td>
                 <td class="actions">
                    <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $cliente->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    
                                   
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
