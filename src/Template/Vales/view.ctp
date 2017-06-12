<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vale'), ['action' => 'edit', $vale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vale'), ['action' => 'delete', $vale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vales view large-9 medium-8 columns content">
    <h3><?= h($vale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $vale->has('user') ? $this->Html->link($vale->user->nombre, ['controller' => 'Users', 'action' => 'view', $vale->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vale->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($vale->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vale->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vale->modified) ?></td>
        </tr>
    </table>
</div>
