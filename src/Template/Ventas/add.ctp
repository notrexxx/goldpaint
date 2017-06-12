<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">

    <fieldset>
       <h3><?= __('Agregar Venta') ?></h3>
        <?php
            echo $this->Form->input('producto_id', ['options' => $producto]);
            echo $this->Form->input('precio_u');
            echo $this->Form->input('cantidad');
            echo $this->Form->input('subtotal');
            
          
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</form>
    </div>
</div>
</div>





<script>
  $(document).ready(function () {
          $('#producto-id').blur(sale)
         function sale()
         {
          var producto= $("#producto-id").val();
          var consulta=$.ajax({
                data: {"producto" : producto},
                url:   '',
                type:  'post',
                dataType:'json',
                beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                },
                success:  function (response){
                    console.log(response);        
                                 }
         }); 
       consulta.done(function (data) {
             console.log(data);

             $("#precio-u").val(data.preciou);
          });    
         }
         $('#cantidad').blur(mult)
         function mult(){
          var pre= $("#precio-u").val();
          var cantidad= $("#cantidad").val();
          var valor=pre*cantidad;
          $("#subtotal").val(valor);
         }
      });
</script>