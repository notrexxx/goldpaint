

<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
       
        <br style="clear:both">

    <?= $this->Form->create($producto , ['type' => 'file']) ?>
    <fieldset>
        <h3>Agregar un Nuevo Producto</h3>
        <?php
            
            echo $this->Form->input('material_id',['label'=>'escoja un producto']);
            echo $this->Form->input('caracteristicas');
            echo $this->Form->input('existencia');
            echo $this->Form->input('pre_compra',['label'=>'Precio de compra']);
            echo $this->Form->input('iva');
            echo $this->Form->input('por_venta',['label'=>'% de venta']);
            echo $this->form->button('calcular',['id'=>'calcular']);
            echo $this->Form->input('valor_sugerido',['readonly']);
            echo $this->Form->input('precio');
            echo $this->Form->input('minimo', ['label'=>'Minima cantidad posible en el inventario']);
            echo $this->Form->input('empresa_id', ['label'=>'Proveedor']);
            echo $this->Form->input('marca_id');
            echo $this->Form->input('numero_serie',['placeholder'=>'Agregar solo en caso de productos electronicos']);
           
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    </div>
</div>
</div>

<script>
      $(document).ready(function () {
           $("#iva").val(12);
           $("#por-venta").val(30);
         
         $('#calcular').on('click',function(){
          var value=$("#pre-compra").val()
          var iva=$("#iva").val()
          var por_venta=$("#por-venta").val()

          var v=value*(iva/100)
          var v1=value*(por_venta/100);
          var r=parseInt(value)+parseInt(v1);
          var resultado=parseInt(v)+parseInt(r);
          $("#valor-sugerido").val(resultado);
         });

         $('#material-id').select2();
          /*$("#pre-compra").keyup(function () {
              var value = $(this).val()
             $("#iva").keyup(function () {
                 var iva = $(this).val()
                 var v=value*(iva/100)
                $("#por-venta").keyup(function () {
                var por_venta=$(this).val();
                var v1=value*(por_venta/100);
                var r=parseInt(value)+parseInt(v1);
                var resultado=parseInt(v)+parseInt(r);
                $("#valor-sugerido").val(resultado);
                });
            });
          });*/
      });
</script>