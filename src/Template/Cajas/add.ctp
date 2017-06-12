<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
       
    <?= $this->Form->create($caja) ?>
    <fieldset>
        <h3><?= __('Nueva caja') ?></h3>
        <?php
            echo $this->Form->input('numero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    </div>
    </div>
</div>