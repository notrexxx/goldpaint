

   <h3><?= __('Buscar producto') ?></h3>
            
             <?php
  
  echo $this->Form->input('buscador',['label'=>'','id'=>'b','placeholder'=>'Buscar producto','options'=>$producto]);
  ?> 
<br>
<?php
   echo $this->Form->button('Enviar al formulario',['id'=>'enviar', 'class' => 'pull-right']); ?>
   


<div class="row grid-divider">
    <div class="col-sm-6">
      <div class="col-padding">
         
            <div class="form-area">     
                <?= $this->Form->create($venta) ?>
                <fieldset>
                    <h3>Agregar Venta</h3>
                    <?php
                        
                        echo $this->Form->input('produc',['disabled','label'=>'Producto elegido','options'=>$producto]);
                        echo $this->Form->input('producto_id',['type'=>'hidden','options'=>$producto]);
                        echo $this->Form->input('precio_u',['label'=>'Precio unitario','readonly']);
                        echo $this->Form->input('cantidad');
                        echo $this->Form->input('subtotal',['readonly']);
                        echo $this->Form->input('descuento',['label'=>'¿Desea realizar un descuento?','options'=>[
                          'no'=>'no','si'=>'si']]);
                        echo $this->Form->input('valor',['label'=>'Nuevo precio del producto','readonly']);
                        echo $this->Form->input('rest',['label'=>'Diferencia','readonly']);
                    ?>
                    
  <br>

                </fieldset>
                <?= $this->Form->button(__('Enviar a ventas')) ?>
     
            
            <?= $this->Form->end() ?>       
            
</div>
    </div>
            </div>
<div class="row grid-divider">
    <div class="col-sm-6">
      <div class="col-padding">
          <div class="form-area">  
       
          
          
          
          
          
         
    <?= $this->Form->create($ventatotale) ?>
    <fieldset>
        <h3><?= __('Datos de la Venta') ?></h3>
        <?php

            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('tipopago',['id'=>'tipopago','label'=>'Tipo de pago','options'=>['efectivo'=>'Efectivo','debito'=>'debito','credito'=>'credito']]);
            echo $this->Form->input('banco_id',['options'=>$bancos,'disabled','id'=>'banco']);
           
            
        ?>
        
        
       
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">CREAR CLIENTE NUEVO
</button>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro De Cliente</h4>
      </div>
      <div class="modal-body">
        	
    <?= $this->Form->create($cliente) ?>
    <fieldset>
    
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('cedula');
            echo $this->Form->input('edad',['options'=>
                ['18 a 21'=>'18 a 21',
                '22 a 25'=>'22 a 25',
                '26 a 30'=>'26 a 35',
                '36 a 40'=>'41 a 45',
                '46 a 50'=>'46 a 50',
                '51 en adelante'=>'51 en adelante'
                ]
                ]);
            echo $this->Form->input('sexo',['options'=>['M','F']]);
            echo $this->Form->input('direccion');
            echo $this->Form->input('email');
            echo $this->Form->input('numero',['label'=>'numero de telefono']);
            echo $this->Form->input('otronumero',['label'=>'numero de telefono opcional']);
           
        ?>
    </fieldset>
    <td><?= $this->Form->button('Crear cliente',['id'=>'ncliente','type'=>'button']) ?></td>
    
      </div> 
        </div> 
      </div> 
  
    </div>
       

  
     </div>
    </div> 
        </div>
    </div>
    </form>
           <h3><?= __('Ventas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('producto') ?></th>
                <th><?= $this->Paginator->sort('precio') ?></th>
                <th><?= $this->Paginator->sort('cantidad') ?></th>
                <th><?= $this->Paginator->sort('subtotal') ?></th>
                <th><?= $this->Paginator->sort('descuento') ?></th>
                <th><?= $this->Paginator->sort('diferencia') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            
        </thead>
        <tbody>
            <?php foreach ($ventas as $venta): ?>
            <tr>
                <td><?= $this->Number->format($venta->id) ?></td>
                <td><?= $venta->has('producto') ? $this->Html->link($venta->producto->full, ['controller' => 'Productos', 'action' => 'view', $venta->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($venta->precio_u) ?></td>
                <td><?= $this->Number->format($venta->cantidad) ?></td>
                <td><?= $this->Number->format($venta->subtotal) ?></td>
                 <td><?= h($venta->descuento) ?></td>
                <td><?= h($venta->rest) ?></td>
                <td><?= h($venta->created) ?></td>
                <td><?= h($venta->modified) ?></td>
               
                <td class="actions">
                  
                    
                    
                   <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $venta->id), array('class' => 'btn btn-sm btn-danger', 'escape' => false, 'button title' => 'ELIMINAR'), array('confirm' => __('Are you sure you want to delete # {0}?', $venta->id))); ?>
                                        
               
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
          
          
        
        
    </fieldset>
    <table>
      <!--  <tr>
            <th>Total Bs.</th>
        </tr>
        <tr>
        <?php 
       /* if($real>0){
            $descv=$real;
          }else{
             $descv=0;
          }*/
        foreach ($total as $t): 

          ?>
        
          <td>
            <?= $this->Number->format($t->total) ?>
          </td>
        </tr>
        <tr>
          <th>
          Descuento por producto Bs:
          </th>
        </tr>
        <tr>
           <td>
          <?= $this->Number->format($t->resta) ?>
          </td>
        </tr>
         <tr>
          <th>
          Descuento por venta Bs:
          </th>
        </tr>
        <tr>
           <td>
          <?=  $this->Number->format($descv) ?>
          </td>
        </tr> -->
        <tr>
          <th>
          Total real Bs:
          </th>
        </tr>
        <tr>
           <td>
          <?= $this->Number->format($t->total) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
    <table>
      <tr>
        <td>
          <?php 
          echo $this->Form->input('descuentot',['label'=>'¿Desea realizar un descuento en la venta total?','options'=>['no'=>'no','si'=>'si']]);
            ?>
        </td>
        <td>
          <?php echo $this->Form->input('valort',['label'=>'¿Nuevo precio de la venta total?','readonly']); ?>
        </td>
      </tr>
    </table>
    <?php echo $this->Form->input('total', ['type' => 'hidden','value'=>$t->total]);?>
   
<?= $this->Form->button('Enviar a espera',['id'=>'espera','type'=>'button', 'class' => 'text-center']) ?>
       <?= $this->Form->button('Vender',['id'=>'venta','type'=>'button', 'class' => 'pull-right']) ?>

<?php 
    if($tengo>=1){
         echo '<a href="ventatotales/indexenespera" class="btn btn-primary btn-lg pull-left" role="button" id="ventaesp">Ventas en espera</a>';
    }
    ?>

<div id="div_carga">
         <img id="cargador" src="img/ajax-loader.gif"/>
       
</div>

         

 
    <?php echo $this->Form->input('tengo', ['type' => 'hidden','value'=>$tengo]);?>
</div>
</div>
</div>

  

<script>
  $(document).ready(function () {
      
      
       $('#cargador').hide();
        $('#valort').val(0)
        $('#venta').on('click',function(){
            var c=$('#cliente-id').val();
            var t=$('#tipopago').val();
            var v=$('#total').val();
            var b=$('#banco').val();
           
            var d=$('#descuentot').val();
            var valort=$('#valort').val();
            

           $.ajax({
                data: {"cliente_id" : c,"tipopago": t, "total2":v,"banco":b,"descuentot":d,"valort":valort},
                url:   'ventatotales/add',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                     $('#div_carga[rel="stylesheet"]').attr('disabled', 'disabled');
                     $('#cargador').show()
                        
                },
                success:  function (response){
                    console.log(response);
                     $('#div_carga[rel="stylesheet"]').removeAttr('disabled');
                      $('#cargador').hide()  
                       location.reload();
                                 }
                 }); 
         });

        $('#espera').on('click',function(){
            var c=$('#cliente-id').val();
            var t=$('#tipopago').val();
            var v=$('#total').val();
            var b=$('#banco').val();
            var e=1;
            $.ajax({
                data: {"cliente_id" : c,"tipopago": t, "total":v,"banco_id":b,"espera":e},
                url:   'ventatotales/enespera',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                        location.reload();
                },
                success:  function (response){
                    console.log(response);        
                                 }
                 });
         });
        $('#enviar').on('click',function(){
            var producto=$('#b').val();
            var v=1;
            var consulta=$.ajax({
                data: {"validador":v,"producto" : producto},
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
             $("#producto-id").val(data.miproducto);
             $("#produc").val(data.miproducto);
             $("#precio-u").val(data.preciou);
             if(data.instal===1){
                $("#precio-u").prop("readonly", false);
             }else{
               $("#precio-u").prop("readonly", true);
             }

          }); 
        });

         

        
         $('#cantidad').blur(mult)
         function mult(){
          var pre= $("#precio-u").val();
          var cantidad= $("#cantidad").val();
          var valor=pre*cantidad;
          $("#subtotal").val(valor);
         }

          $('#valor').blur(resta)
         function resta(){
          var s= $("#total").val();
          var v= $("#valort").val();
          var t=s-v;
          $("#restt").val(t);
         }

          $('#valor').blur(resta)
         function resta(){
          var s= $("#subtotal").val();
          var v= $("#valor").val();
          var t=s-v;
          $("#rest").val(t);
         }

        
      
         $('#ncliente').on('click',function(){
            var n=$('#nombre').val();
            var c=$('#cedula').val();
            var e=$('#edad').val();
            var s=$('#sexo').val(); 
            var d=$('#direccion').val();
            var em=$('#email').val();
            var nu=$('#numero').val();
            var on=$('#otronumero').val();
            var car=$('#carron').val();
            $.ajax({
                data: {"nombre" : n,"cedula": c, "edad":e,"sexo":s,"direccion":d,"email":em,"numero":nu,"otronumero":on,"carro":car},
                url:   'clientes/add2',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                        location.reload();
                },
                success:  function (response){
                    console.log(response);
                   
                                 }
                 });
         });

         
         

         $('#b').select2();
        
        
         $('#cliente-id').select2();
        $("#tipopago").change(function(){
        if($('#tipopago').val()=='debito' || $('#tipopago').val()=='credito'){
            $('#banco').prop("disabled", false);
        }else{
            $('#banco').prop("disabled", true);
        }
        });
        
       
    
     
        
        $("#descuento").change(function(){
        if($('#descuento').val()=='si'){
            $('#valor').prop("readonly", false);
        }else{
            $('#valor').prop("readonly", true);
        }
        });
        $("#descuentot").change(function(){
        if($('#descuentot').val()=='si'){
            $('#valort').prop("readonly", false);
        }else{
            $('#valort').prop("readonly", true);
        }
        }); 
      });
</script>


