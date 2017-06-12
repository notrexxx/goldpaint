
<div class="materials form large-9 medium-8 columns content">
    <?= $this->Form->create($material,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Agregar Productos') ?></legend>
        <?php
            echo $this->Form->input('marcapro_id', ['options' => $marcas]);?>
            <br>
        <?php    echo $this->Form->input('codigo');
            echo $this->Form->input('modelo');
            echo $this->Form->button('agregar imagenes de los productos', ['id'=>'sub','type'=>'button']);
            echo $this->Form->input('numerador', ['id'=>'numerador','type'=>'hidden']);
        ?> <br>
            <br>
            <br>
            <br>
            <div id="cantidad"></div>
             <div id="boton"></div>
            <div id="fotos"></div>  
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
      
        $('#marcapro-id').select2();
        
        var c=0
        var n=0
        $('#sub').on('click',function(){
              $('#cantidad').append( "Cuantas imagenes quiere ingresar?:<br><input type='text' name='cant' id='cant'><br>" );
              $('#cantidad').append("<br>");
            $('#boton').append("<input type='button' value='generar imagenes' name='generar' id='genera'>");
             $('#boton').append("<br>");$('#boton').append("<br>");
              $('#genera').on('click',function(){
                   var cant=$('#cant').val();
                    for (var j =1; j<=cant; j++) {
                         c=c+1
                         $('#fotos').append( "fotos de referencia:<br><input type='file' name='photo"+c+"' id='photo"+c+"'><br>" )
                        console.log(c) 
                    }
                       n=c
                       console.log(n)
                      $('#numerador').val(n);
                 });
        });
    });
</script>