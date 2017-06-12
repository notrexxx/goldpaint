
<div class="fotos form large-9 medium-8 columns content">
    <?= $this->Form->create($foto,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Foto') ?></legend>
        <?php
            echo $this->Form->input('material_id', ['options' => $materials]);
            echo $this->Form->input('photo', ['type' => 'file']); 
            echo $this->Form->input('photo_dir', ['type' => 'hidden']); 
        ?>
        <br>
       

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
      
        $('#material-id').select2();
        
       
    });
</script>