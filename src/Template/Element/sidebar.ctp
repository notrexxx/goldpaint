     <?= $this->Html->css('sidebar.css') ?>



<?php 

$session = $this->request->session();

if ($session->check('Auth.User.id')) {
    ?>

<div class="nav-side-menu">
    <div class="row-fluid">
        
            <div class="panel-group" id="accordion">
                <div role="tabpanel">
                    <div class="panel ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="fa fa-credit-card-alt">
                                </span>  Ventas                     </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-plus text-success"></span>
                                            <?php echo $this->Html->link("  Panel de ventas", array('controller'=>'ventas', 'action'=>'index'));?>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                            <span class="glyphicon glyphicon-barcode"></span>
                                            <?php echo $this->Html->link("Ventas totales", array('controller'=>'ventatotales', 'action'=>'index'));?>
               
                                            
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                            <span class="glyphicon glyphicon-time"></span>
                                            <?php echo $this->Html->link("Ventas en espera", array('controller'=>'ventatotales', 'action'=>'indexenespera'));?>
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-th"></span>
                                            <?php echo $this->Html->link("Panel de Caja", array('controller'=>'cajas', 'action'=>'index'));?>
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            
                                            <span class="glyphicon glyphicon-usd"></span>
                                            <?php echo $this->Html->link("Bancos", array('controller'=>'bancos', 'action'=>'add'));?>
               
                                            
                                            
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            
                                            <span class="glyphicon glyphicon-piggy-bank"></span>
                                            <?php echo $this->Html->link("Consumibles", array('controller'=>'consumibles', 'action'=>'add'));?>
               
                                            
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            
                                            <span class="glyphicon glyphicon-thumbs-down"></span>
                                            <?php echo $this->Html->link("Gastos", array('controller'=>'perdidas', 'action'=>'add'));?>
               
                                            
                                            
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            
                                            <span class="glyphicon glyphicon-list text-danger"></span>
                                            <?php echo $this->Html->link("Lista de Gastos", array('controller'=>'perdidas', 'action'=>'index'));?>
               
                                            
                                            
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    
                      <div class="panel ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-th">
                                </span>Inventario</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                   
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-plus text-success"></span>
                                            <?php echo $this->Html->link("Nuevo aproducto", array('controller'=>'productos', 'action'=>'add'));?>
                                        </td>
                                    </tr>
                                    
                                    
                                     <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de productos", array('controller'=>'productos', 'action'=>'index'));?>
          
                                            
                                        </td>
                                    </tr>
                                    
                                     <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-plus text-success"></span>
                                            <?php echo $this->Html->link("Añadir al inventario", array('controller'=>'entradas', 'action'=>'add'));?>
                                        </td>
                                    </tr>
                                    
                                    
                                     <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Bitacora de inventario", array('controller'=>'entradas', 'action'=>'index'));?>
          
                                            
                                        </td>
                                    </tr>
                                   
                                    
                                   
                            
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                                </span>Clientes</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                         <span class="glyphicon glyphicon-plus text-success "></span>
                                            <?php echo $this->Html->link("Nuevo Cliente", array('controller'=>'clientes', 'action'=>'add'));?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <span class="glyphicon glyphicon-list text-success"></span>
                                            <?php echo $this->Html->link("Lista de Clientes", array('controller'=>'clientes', 'action'=>'index'));?>     
                                        </td>
                                    </tr>
                                
                                     <tr>
                                        <td>  
                                            <span class="glyphicon glyphicon-list text-danger"></span>
                                            <?php echo $this->Html->link("Lista de Carros", array('controller'=>'carros', 'action'=>'index'));?>     
                                        </td>
                                    </tr>
                                
                                    
                                
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-book">
                                </span>Empleados</a>
                            </h4>
                        </div>
                     <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                         <span class="glyphicon glyphicon-plus text-success"></span>
                                            <?php echo $this->Html->link("Nuevo Empleado", array('controller'=>'users', 'action'=>'add'));?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de Empleados", array('controller'=>'users', 'action'=>'index'));?>     
                                        </td>
                                    </tr>
                                
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
        
                    
                     <div class="panel ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-th">
                                </span>Empresas</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-plus text-success"></span>
                                            <?php echo $this->Html->link("Nueva Empresa", array('controller'=>'empresas', 'action'=>'add'));?>
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-plus text-success "></span>
                                            <?php echo $this->Html->link("Agregar Una Nueva Marca", array('controller'=>'marcas', 'action'=>'add'));?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de Empresas", array('controller'=>'empresas', 'action'=>'index'));?>
                                        </td>
                                    </tr>
                             
 <tr>
                                        <td>
          
                                            <span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Listado De Marcas", array('controller'=>'marcas', 'action'=>'index'));?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
        
                </div>
            </div>
  <?php }?>