<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marcapro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $marcapro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Marcapros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tipopros'), ['controller' => 'Tipopros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipopro'), ['controller' => 'Tipopros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marcapros form large-9 medium-8 columns content">
    <?= $this->Form->create($marcapro) ?>
    <fieldset>
        <legend><?= __('Edit Marcapro') ?></legend>
        <?php
            echo $this->Form->input('marca');
            echo $this->Form->input('tipopro_id', ['options' => $tipopros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
