
<div class="categorias form large-9 medium-8 columns content">
    <?= $this->Form->create($categoria) ?>
    <fieldset>
        <legend><?= __('Agregar Categoria') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->button('agregar sub categoria', ['id'=>'sub','type'=>'button']);
            echo $this->Form->input('numerador', ['id'=>'numerador','type'=>'hidden']);
        ?>
            <br>
            <br>
            <br>
            <br>
            <div id="cantidad"></div>
             <div id="boton"></div>
            <div id="subcategorias"></div>  
    </fieldset>
    <?= $this->Form->button(__('Guardar',['id'=>'enviar'])) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
        var c=0
        var n=0
        
        $('#sub').on('click',function(){
              $('#cantidad').append( "Cuantas subcategorias quiere generar?:<br><input type='text' name='cant' id='cant'><br>" );
              $('#cantidad').append("<br>");
            $('#boton').append("<input type='button' value='generar subcategorias' name='generar' id='genera'>");
             $('#boton').append("<br>");$('#boton').append("<br>");
              $('#genera').on('click',function(){
                   var cant=$('#cant').val();
                    for (var j =1; j<=cant; j++) {
                         c=c+1
                         $('#subcategorias').append( "subcategoria:<br><input type='text' name='subc"+c+"' id='subc"+c+"'><br>" )
                         
                        
                        console.log(c) 
                    }
                       n=c
                       console.log(n)
                      $('#numerador').val(n);
                 });
        });
       
       
       
    });
</script>