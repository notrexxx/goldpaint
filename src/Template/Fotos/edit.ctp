<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $foto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $foto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fotos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fotos form large-9 medium-8 columns content">
    <?= $this->Form->create($foto) ?>
    <fieldset>
        <legend><?= __('Edit Foto') ?></legend>
        <?php
            echo $this->Form->input('photo');
            echo $this->Form->input('dir');
            echo $this->Form->input('modife');
            echo $this->Form->input('material_id', ['options' => $materials]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
