<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $caja->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caja->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cajas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cajas form large-9 medium-8 columns content">
    <?= $this->Form->create($caja) ?>
    <fieldset>
        <legend><?= __('Edit Caja') ?></legend>
        <?php
            echo $this->Form->input('numero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
