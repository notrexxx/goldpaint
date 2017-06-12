
<div class="tipopros form large-9 medium-8 columns content">
    <?= $this->Form->create($tipopro) ?>
    <fieldset>
        <legend><?= __('Agregar Tipo de productos') ?></legend>
        <?php
            echo $this->Form->input('subcategoria_id', ['options' => $subcategorias]);?>
            <br>
        <?php    
            echo $this->Form->button('agregar tipos de productos', ['id'=>'sub','type'=>'button']);
            echo $this->Form->input('numerador', ['id'=>'numerador','type'=>'hidden']);
        ?>
            <br>
            <br>
            <br>
            <br>
            <div id="cantidad"></div>
             <div id="boton"></div>
            <div id="tipoproducto"></div>  
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
        var c=0
        var n=0
        $('#subcategoria-id').select2();
        $('#sub').on('click',function(){
              $('#cantidad').append( "Cuantas tipos de productos quiere generar?:<br><input type='text' name='cant' id='cant'><br>" );
              $('#cantidad').append("<br>");
            $('#boton').append("<input type='button' value='generar tipo de producto' name='generar' id='genera'>");
             $('#boton').append("<br>");$('#boton').append("<br>");
              $('#genera').on('click',function(){
                   var cant=$('#cant').val();
                    for (var j =1; j<=cant; j++) {
                         c=c+1
                         $('#tipoproducto').append( "tipo de producto:<br><input type='text' name='tipo"+c+"' id='tipo"+c+"'><br>" )
                        console.log(c) 
                    }
                       n=c
                       console.log(n)
                      $('#numerador').val(n);
                 });
        });
    });
</script>