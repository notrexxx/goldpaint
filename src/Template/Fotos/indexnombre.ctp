
    <h3><?= __('Fotos') ?></h3>
    <table class="table table-responsive" cellpadding="10" cellspacing="10">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Imagen') ?></th>
                <th><?= $this->Paginator->sort('Producto asignado') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Eliminar') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fotos as $foto): ?>
            <tr>
                <td><img src=""><?= $this->Number->format($foto->id) ?></td>
                <td><img src="http://localhost/soundcars/files/Fotos/photo/<?php echo $foto->photo; ?>" id="imagenlista" ></td>
                <td><?= $foto->has('material') ? $this->Html->link($foto->material->full, ['controller' => 'Materials', 'action' => 'view', $foto->material->id]) : '' ?></td>
                <td><?= h($foto->created) ?></td>
                <td class="actions">
                    
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $foto->id], ['confirm' => __('Are you sure you want to delete  {0}?', $foto->photo)]) ?>
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
