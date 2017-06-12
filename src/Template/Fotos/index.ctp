<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Foto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fotos index large-9 medium-8 columns content">
    <h3><?= __('Fotos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('photo') ?></th>
                <th><?= $this->Paginator->sort('dir') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modife') ?></th>
                <th><?= $this->Paginator->sort('material_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fotos as $foto): ?>
            <tr>
                <td><?= $this->Number->format($foto->id) ?></td>
                <td><?= h($foto->photo) ?></td>
                <td><?= h($foto->dir) ?></td>
                <td><?= h($foto->created) ?></td>
                <td><?= h($foto->modife) ?></td>
                <td><?= $foto->has('material') ? $this->Html->link($foto->material->full, ['controller' => 'Materials', 'action' => 'view', $foto->material->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $foto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $foto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $foto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foto->id)]) ?>
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
