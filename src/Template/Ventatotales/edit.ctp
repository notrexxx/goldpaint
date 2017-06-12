<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ventatotale->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ventatotale->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ventatotales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ventatotales form large-9 medium-8 columns content">
    <?= $this->Form->create($ventatotale) ?>
    <fieldset>
        <legend><?= __('Edit Ventatotale') ?></legend>
        <?php
            echo $this->Form->input('total');
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('tipopago');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
