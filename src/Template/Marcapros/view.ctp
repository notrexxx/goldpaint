<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Marcapro'), ['action' => 'edit', $marcapro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Marcapro'), ['action' => 'delete', $marcapro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marcapro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Marcapros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marcapro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipopros'), ['controller' => 'Tipopros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipopro'), ['controller' => 'Tipopros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="marcapros view large-9 medium-8 columns content">
    <h3><?= h($marcapro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= h($marcapro->marca) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipopro') ?></th>
            <td><?= $marcapro->has('tipopro') ? $this->Html->link($marcapro->tipopro->id, ['controller' => 'Tipopros', 'action' => 'view', $marcapro->tipopro->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($marcapro->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= $this->Number->format($marcapro->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= $this->Number->format($marcapro->modified) ?></td>
        </tr>
    </table>
</div>
