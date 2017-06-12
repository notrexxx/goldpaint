<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subcategoria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoria->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subcategorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipopros'), ['controller' => 'Tipopros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipopro'), ['controller' => 'Tipopros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($subcategoria) ?>
    <fieldset>
        <legend><?= __('Edit Subcategoria') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('categoria_id', ['options' => $categorias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
