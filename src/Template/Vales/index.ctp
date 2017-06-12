<div class="vales index large-9 medium-8 columns content">
    <h3><?= __('Vales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vales as $vale): ?>
            <tr>
                <td><?= $this->Number->format($vale->id) ?></td>
                <td><?= $vale->has('user') ? $this->Html->link($vale->user->nombre, ['controller' => 'Users', 'action' => 'view', $vale->user->id]) : '' ?></td>
                <td><?= $this->Number->format($vale->valor) ?></td>
                <td><?= h($vale->created) ?></td>
                <td><?= h($vale->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vale->id)]) ?>
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
