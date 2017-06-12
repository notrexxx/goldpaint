   <div class=" col-lg-12 text-center">
<?= $this->Html->css('tabla.css') ?>
    <h3>Total De Ventas</h3>
    <table class="table table-responsive" cellpadding="0" cellspacing="0" >
        <?php foreach ($ventatotales as $ventatotale): ?>
        <thead>
             <tr class = "success">
                <th><?= $this->Paginator->sort('cliente') ?></th>
                 <th><?= $this->Paginator->sort('automovil') ?></th>
                 <th><?= $this->Paginator->sort('total') ?></th>
                 <th><?= $this->Paginator->sort('descuento') ?></th>
                 <th><?= $this->Paginator->sort('diferencia') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
               
               
            </tr>
        </thead>
        <tbody>
           
            
             <tr>
                <td><?= $ventatotale->has('cliente') ? $this->Html->link($ventatotale->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $ventatotale->cliente->id]) : '' ?></td> 
                 
                 
                 <td><?= $ventatotale->has('carro') ? $this->Html->link($ventatotale->carro->descripcion, ['controller' => 'Carros', 'action' => 'view', $ventatotale->carro->id]) : '' ?></td> 
                 
                <td><?= h($ventatotale->total) ?></td>
                <td><?= h($ventatotale->descuentot) ?></td>
                <td><?= h($ventatotale->restt) ?></td>
                <td><?= h($ventatotale->created) ?></td>

  
                                                 
                
                
                </tr>   
            
            <!--  <th><?= __('Cotizaciones') ?></th>  -->
                    <tr>
                    <th><?= __('producto') ?></th>
                    <th><?= __('precio_u') ?></th>
                    <th><?= __('cantidad') ?></th>
                    <th><?= __('subtotal') ?></th>
                    <th><?= __('descuento') ?></th>
                    <th><?= __('diferencia') ?></th>
                    </tr>
                    <?php foreach ($ventatotale->items as $item): ?>
                     <tr>
                        <td><?= $item->has('producto') ? $this->Html->link($item->producto->full, ['controller' => 'Productos', 'action' => 'view', $item->producto->id]) : '' ?></td>
                          <td><?= h($item->precio_u) ?></td>
                           <td><?= h($item->cantidad) ?></td>
                           <td><?= h($item->subtotal) ?></td>
                          <td><?= h($item->descuento) ?></td>
                          <td><?= h($item->rest) ?></td>
                         </tr>
                        <?php endforeach; ?>
  
            
            <?php endforeach; ?>

        </tbody>
    </table>
  
    <tr>
            <th>Total Real Bs.</th>
        </tr>
        <tr>
        <tr>
        <?php 
        foreach ($totalT as $t) {
          $to=$t->totalT;
        }
        foreach ($gastototal as $g) {
          $gas=$g->gastototal;
        }
        foreach ($valetotal as $vtt) {
          $vtotal=$vtt->valetotal;
        }
        foreach ($caja as $ca) {
          $cajita=$ca->numero;
        }
        $cierre=$c+$to-$gas-$vtotal;
        ?>
           <td>
          <?= $this->Number->format($cierre) ?>
          </td>
        </tr>
    <table>
      <tr>
      <th>Caja del dia anterior</th>
      </tr>
      <tr>
      <?php foreach ($caja as $ca): ?>
        
        <td>
          <?= $this->Number->format($ca->numero) ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <table>
        <tr>
            <th>Gastos Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($perdida as $p): 

          ?>
        <td><?= h($p->nombre) ?></td>
        
          <td>
          <?= $this->Number->format($p->gasto) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
     
     <table>
        <tr>
            <th>Total de Gastos Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($gastototal as $g): 

          ?>
        <tr>
           <td>
          <?= $this->Number->format($g->gastototal) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
    <table>
        <tr>
            <th>Vales Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($vale as $v): 

          ?>
        <td><?= h($v->nombre) ?></td>
        
          <td>
          <?= $this->Number->format($v->valor) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
    <table>
        <tr>
            <th>Total de Vales Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($valetotal as $vt): 

          ?>
        <tr>
           <td>
          <?= $this->Number->format($vt->valetotal) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
     <table>
        <tr>
            <th>Total de Efectivo Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($efectivo as $e): 

          ?>
        <tr>
           <td>
          <?= $this->Number->format($e->efectivo) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
    <table>
        <tr>
            <th>Total por Debito Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($debito as $deb): 

          ?>
        <tr>
           <td>
          <?= $this->Number->format($deb->debito) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
    <table>
        <tr>
            <th>Total por Credito Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($credito as $cre): 

          ?>
        <tr>
           <td>
          <?= $this->Number->format($cre->credito) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        
    </table>
    <table>
        <tr>
            <th>Total Bs.</th>
        </tr>
        <tr>
        <?php 
        foreach ($totalT as $t): 

          ?>
        <tr>
           <td>
          <?= $this->Number->format($t->totalT) ?>
          </td>
        </tr>
         <?php endforeach; ?>
         <table>
        
       
    </table>
     <?php 
     
     echo $this->Form->input('caja',['type'=>'hidden','value'=>$e->efectivo-$g->gastototal]); 
     echo $this->Form->input('gaston',['type'=>'hidden','value'=>$g->gastototal]);
     echo  $this->Form->input('tefectivo',['type'=>'hidden','value'=>$e->efectivo]);
     echo  $this->Form->input('tdebito',['type'=>'hidden','value'=>$deb->debito]);
     echo  $this->Form->input('tcredito',['type'=>'hidden','value'=>$cre->credito]);
     echo  $this->Form->input('ttotal',['type'=>'hidden','value'=>$t->totalT]);
     echo  $this->Form->input('cantventa',['type'=>'hidden','value'=>$cantidad]);
     echo  $this->Form->input('treal',['type'=>'hidden','value'=>$cierre]);
     
     ?>
     <?= 
     $this->Form->button('Cerrar caja',['id'=>'cerrar','type'=>'button']); ?> 
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</div>

<script>
  $(document).ready(function(){
    $('#cerrar').on('click',function(){
      var numero=$('#caja').val();
      var tgasto=$('#gaston').val();
      var tefectivo=$('#tefectivo').val();
      var tdebito=$('#tdebito').val();
      var tcredito=$('#tcredito').val();
      var ttotal=$('#ttotal').val();
      var cantventa=$('#cantventa').val();
      var treal=$('#treal').val();
      $.ajax({
                data: {"numero" : numero, "tgasto" : tgasto , "tefectivo" : tefectivo , "tdebito" : tdebito, "tcredito": tcredito, "ttotal": ttotal,
              "cantventa":cantventa, "treal":treal },
                url:   'cajas/add',
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
    });
  });
</script>