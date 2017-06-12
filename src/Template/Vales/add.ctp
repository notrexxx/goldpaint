
<div class="vales form large-9 medium-8 columns content">
    <?= $this->Form->create($vale) ?>
    <fieldset>
        <legend><?= __('Agregar Vale') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users,'label'=>'Nombre del tecnico']);
            ?><br><?php
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('agregar')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
       $('#user-id').select2();
    });
</script>