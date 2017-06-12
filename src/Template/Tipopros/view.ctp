<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipopro'), ['action' => 'edit', $tipopro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipopro'), ['action' => 'delete', $tipopro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipopros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipopro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subcategorias'), ['controller' => 'Subcategorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategoria'), ['controller' => 'Subcategorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Marcapros'), ['controller' => 'Marcapros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marcapro'), ['controller' => 'Marcapros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipopros view large-9 medium-8 columns content">
    <h3><?= h($tipopro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($tipopro->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Subcategoria') ?></th>
            <td><?= $tipopro->has('subcategoria') ? $this->Html->link($tipopro->subcategoria->id, ['controller' => 'Subcategorias', 'action' => 'view', $tipopro->subcategoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipopro->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tipopro->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tipopro->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Marcapros') ?></h4>
        <?php if (!empty($tipopro->marcapros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Marca') ?></th>
                <th><?= __('Tipopro Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tipopro->marcapros as $marcapros): ?>
            <tr>
                <td><?= h($marcapros->id) ?></td>
                <td><?= h($marcapros->marca) ?></td>
                <td><?= h($marcapros->tipopro_id) ?></td>
                <td><?= h($marcapros->created) ?></td>
                <td><?= h($marcapros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Marcapros', 'action' => 'view', $marcapros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Marcapros', 'action' => 'edit', $marcapros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Marcapros', 'action' => 'delete', $marcapros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marcapros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
