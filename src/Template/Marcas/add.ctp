<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
  
       
        <br style="clear:both">

    <?= $this->Form->create($marca) ?>
    <fieldset>
        <h3><?= __('Nueva Marca') ?></h3>
        <?php
            echo $this->Form->input('nombre',['label'=>'']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</form>
    
</div>
</div>