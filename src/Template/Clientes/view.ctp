<script>
  $(document).ready(function () {
        $('#carro').select2({ width: '400px' });
         $('#agregarauto').on('click',function(){
            var ca=$('#carro').val();
            
            var v=2;
            $.ajax({
                data: {"carro":ca},
                url:   '',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        
                },
                success:  function (response){
                    console.log(response);
                    location.reload();
                                 }
                 });
         });

         $('#agregartlf').on('click',function(){
            var nu=$('#numero').val();
            var nuo=$('#otronumero').val();
            var v=1;
            $.ajax({
                data: {"numero":nu,"numeroo":nuo,"validador":v},
                url:   '',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        
                },
                success:  function (response){
                    console.log(response);
                    location.reload();
                                 }
                 });
         });
         });
     
</script>

<!-- tiene relacion con nueva venta, lista de venta -->
    <h3><?= h($cliente->full)  ?></h3>
    <table class="table table-hover">
        <tr>
            
            <td><?= __('Nombre:') ?></td>
            <td><?= h($cliente->nombre) ?></td>
        </tr>
        <tr>
            
            <td><?= __('C.I:') ?></td>
            <td><?= h($cliente->cedula) ?></td>
        </tr>
        <tr>
            
            <td><?= __('Direccion') ?></td>
            <td><?= h($cliente->direccion) ?></td>
        </tr>
        <tr>
            
            <td><?= __('Email') ?></td>
            <td><?= h($cliente->email) ?></td>
        </tr>

        <tr>
            
            <td><?= __('Creado') ?></td>
            <td><?= h($cliente->created) ?></td>
        </tr>
        <tr>
            
            <td><?= __('Modificado') ?></td>
            <td><?= h($cliente->modified) ?></td>
        </tr>
        <tr>
        <td><?= __('Sexo') ?></td>
       <td> <?= $this->Text->autoParagraph(h($cliente->sexo)); ?></td>
        </tr>
    </table>

  <br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg pull-left" data-toggle="modal" data-target="#myModal">Agregar nuevo telefono
</button>

<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#myModal2">Agregar nuevo carro
</button>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

<div class="container">

  <ul class="nav nav-pills">
   
    <li class="active"><a data-toggle="pill" href="#menu1">Numeros Telefonicos</a></li>
    <li><a data-toggle="pill" href="#menu2">Registro De Autos</a></li>
    <li><a data-toggle="pill" href="#menu3">Registro De Compras</a></li>
  </ul>
  
  <div class="tab-content">
   
    <div id="menu1" class="tab-pane fade in active">
      <h3>Numeros Telefonicos</h3>
        

        
       
        <?php if (!empty($cliente->telefonos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('numero de telefono') ?></th>
                <th><?= __('numero opcional') ?></th>
                <th><?= __('creado') ?></th>
               
            </tr>
            <?php foreach ($cliente->telefonos as $tlf): ?>
            <tr>
                <td><?= h($tlf->id) ?></td>
                <td><?= h($tlf->numero) ?></td>
                 <td><?= h($tlf->otronumero) ?></td>
                <td><?= h($tlf->created) ?></td>
               
              
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        
        
     
        
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Registro De Autos</h3>
        
         
        <?php if (!empty($cliente->carros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Auto') ?></th>
                <th><?= __('Creado') ?></th>
                
               
            </tr>
            <?php foreach ($cliente->carros as $car): ?>
            <tr>
                <td><?= h($car->id) ?></td>
                <td><?= $this->Html->link(__($car->descripcion), ['controller' => 'Carros', 'action' => 'view', $car->id]) ?></td>
                <td><?= h($car->created) ?></td>
              
              
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        
        
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Registro De Compras</h3>
   
        <?php if (!empty($cliente->ventatotales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('total') ?></th>
                <th><?= __('Creado') ?></th>
                <th><?= __('Modificado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->ventatotales as $ventat): ?>
            <tr>
                <td><?= h($ventat->id) ?></td>
                <td><?= h($ventat->total) ?></td>
                <td><?= h($ventat->created) ?></td>
                <td><?= h($ventat->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Ventatotales', 'action' => 'view', $ventat->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Ventatotales', 'action' => 'edit', $ventat->id]) ?>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        
        
    </div>
  </div>
</div>







   



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro De Telefono</h4>
      </div>
      <div class="modal-body">
        	
 
    <fieldset>
    
     
            <tr>
                <td><?= $this->Form->input('numero',['id'=>'numero','label'=>'nuevo numero telefonico']) ?></td>
                <td><?= $this->Form->input('otronumero',['id'=>'otronumero','label'=>'nuevo numero telefonico opcional']) ?></td>
            </tr>
       
    </fieldset>
    <td><?= $this->Form->button('Agregar telefono',['id'=>'agregartlf','type'=>'button']) ?></td>
    
      </div> 
        </div> 
      </div> 
          
          
      
    </div>
        
        
        
        
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro De Carro</h4>
      </div>
      <div class="modal-body">
        	
 
    <fieldset>
    
     <tr>
                <td><?= $this->Form->input('carro',['id'=>'carro','label'=>'nuevo auto','options'=>$carro]) ?></td>
    
                
            </tr>
        
            
       
    </fieldset>
    <td><?= $this->Form->button('Agregar Nuevo Carro',['id'=>'agregarauto','type'=>'button']) ?></td>
    
      </div> 
        </div> 
      </div> 
          
          
      
    </div>
        
        
        <table>
            
        </table>
        
    </div>

 
         
  
