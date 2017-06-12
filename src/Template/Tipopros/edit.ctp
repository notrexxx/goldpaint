<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipopro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipopro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipopros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subcategorias'), ['controller' => 'Subcategorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subcategoria'), ['controller' => 'Subcategorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marcapros'), ['controller' => 'Marcapros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marcapro'), ['controller' => 'Marcapros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipopros form large-9 medium-8 columns content">
    <?= $this->Form->create($tipopro) ?>
    <fieldset>
        <legend><?= __('Edit Tipopro') ?></legend>
        <?php
            echo $this->Form->input('tipo');
            echo $this->Form->input('subcategoria_id', ['options' => $subcategorias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
