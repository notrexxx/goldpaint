<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subcategoria'), ['action' => 'edit', $subcategoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subcategoria'), ['action' => 'delete', $subcategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subcategorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipopros'), ['controller' => 'Tipopros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipopro'), ['controller' => 'Tipopros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subcategorias view large-9 medium-8 columns content">
    <h3><?= h($subcategoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($subcategoria->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= $subcategoria->has('categoria') ? $this->Html->link($subcategoria->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $subcategoria->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($subcategoria->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($subcategoria->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($subcategoria->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tipopros') ?></h4>
        <?php if (!empty($subcategoria->tipopros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tipo') ?></th>
                <th><?= __('Subcategoria Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subcategoria->tipopros as $tipopros): ?>
            <tr>
                <td><?= h($tipopros->id) ?></td>
                <td><?= h($tipopros->tipo) ?></td>
                <td><?= h($tipopros->subcategoria_id) ?></td>
                <td><?= h($tipopros->created) ?></td>
                <td><?= h($tipopros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tipopros', 'action' => 'view', $tipopros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tipopros', 'action' => 'edit', $tipopros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tipopros', 'action' => 'delete', $tipopros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
