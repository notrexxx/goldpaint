
<div class="subcategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($subcategoria) ?>
    <fieldset>
        <legend><?= __('Agregar Subcategoria') ?></legend>
        <?php
            echo $this->Form->input('categoria_id', ['options' => $categorias]);?>
            <br>
        <?php    
            echo $this->Form->input('nombre');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
        $('#categoria-id').select2();
    });
</script>