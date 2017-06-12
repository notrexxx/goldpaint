
<div class="marcapros form large-9 medium-8 columns content">
    <?= $this->Form->create($marcapro) ?>
    <fieldset>
        <legend><?= __('Agregar Marcas de productos') ?></legend>
        <?php
            
            echo $this->Form->input('tipopro_id', ['options' => $tipopros]);?>
        <br>
      <?php    
            echo $this->Form->button('agregar marcas de los productos', ['id'=>'sub','type'=>'button']);
            echo $this->Form->input('numerador', ['id'=>'numerador','type'=>'hidden']);
        ?>
            <br>
            <br>
            <br>
            <br>
            <div id="cantidad"></div>
             <div id="boton"></div>
            <div id="marcaproducto"></div>  
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
        var c=0
        var n=0
        $('#tipopro-id').select2();
        $('#sub').on('click',function(){
              $('#cantidad').append( "Cuantas marcas quiere generar?:<br><input type='text' name='cant' id='cant'><br>" );
              $('#cantidad').append("<br>");
            $('#boton').append("<input type='button' value='generar marcas de productos' name='generar' id='genera'>");
             $('#boton').append("<br>");$('#boton').append("<br>");
              $('#genera').on('click',function(){
                   var cant=$('#cant').val();
                    for (var j =1; j<=cant; j++) {
                         c=c+1
                         $('#marcaproducto').append( "marcas de producto:<br><input type='text' name='marc"+c+"' id='marc"+c+"'><br>" )
                        console.log(c) 
                    }
                       n=c
                       console.log(n)
                      $('#numerador').val(n);
                 });
        });
    });
</script>