
    <h3><?= h($consumible->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Consu') ?></th>
            <td><?= h($consumible->consu) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($consumible->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($consumible->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($consumible->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Perdida') ?></h4>
        <?php if (!empty($consumible->perdida)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Gasto') ?></th>
                <th><?= __('Consumible Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consumible->perdida as $perdida): ?>
            <tr>
                <td><?= h($perdida->id) ?></td>
                <td><?= h($perdida->gasto) ?></td>
                <td><?= h($perdida->consumible_id) ?></td>
                <td><?= h($perdida->created) ?></td>
                <td><?= h($perdida->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Perdida', 'action' => 'view', $perdida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Perdida', 'action' => 'edit', $perdida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Perdida', 'action' => 'delete', $perdida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perdida->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

