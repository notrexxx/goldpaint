
    <h3><?= __('Productos') ?></h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('numero_serie') ?></th>
                <th><?= $this->Paginator->sort('codigo y modelo') ?></th>
                <th><?= $this->Paginator->sort('existencia') ?></th>
                <th><?= $this->Paginator->sort('precio') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->numero_serie) ?></td>
                <td><?= $producto->has('material') ? $this->Html->link($producto->material->full , ['controller' => 'Materials', 'action' => 'view', $producto->material->id]) : '' 
                ?></td>
               <td><?php if ($producto->minimo>=$producto->existencia){
                $ex=strval($producto->existencia);
                echo  $this->Form->button($ex,array('class' => 'btn btn-danger')); }else{
                       echo  h($producto->existencia);
                    }?>
                </td>
                
               
                <td><?= $this->Number->format($producto->precio) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $producto->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                    <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i>'), array('action' => 'edit', $producto->id), array('class' => 'btn btn-sm btn-primary', 'escape' => false, 'button title' => 'EDITAR')); ?>
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $producto->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $producto->id))); ?>                  
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
