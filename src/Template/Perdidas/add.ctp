<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <?= $this->Form->create($perdida) ?>
    <fieldset>
         <h3><?= __('Generar un nuevo gasto') ?></h3>
        <?php
       echo $this->Form->input('consumible_id', ['options' => $consumibles]);
            echo $this->Form->input('gasto', ['label' => 'Precio']);
         
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>
