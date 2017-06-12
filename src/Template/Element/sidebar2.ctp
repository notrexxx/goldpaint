 <?= $this->Html->script('personal.js'); ?>
<?= $this->Html->css('sidebar2.css'); ?>
 <?php 

$session = $this->request->session();

if ($session->check('Auth.User.id')) {
    ?>


   
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">GoldPaint</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a> </li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ventas <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-credit-card-alt"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						
                        <li>  <?php echo $this->Html->link("Panel de ventas", array('controller'=>'ventas', 'action'=>'index'), array('class'=>''));?>
                                   </li>
						   <br>
                                  <li>  <?php echo $this->Html->link("Ventas Diarias", array('controller'=>'ventatotales', 'action'=>'index'), array('class'=>''));?> </li>
                                  
                     
						<li><span class="glyphicon glyphicon-time"></span>
                                            <?php echo $this->Html->link("Ventas en espera", array('controller'=>'ventatotales', 'action'=>'indexenespera'));?></li>
						
						<li><span class="glyphicon glyphicon-th"></span>
                                            <?php echo $this->Html->link("Panel de Caja", array('controller'=>'cajas', 'action'=>'index'));?>
                                           </li>
						
						<li>  <span class="glyphicon glyphicon-usd"></span>
                                            <?php echo $this->Html->link("Bancos", array('controller'=>'bancos', 'action'=>'add'));?>
               
                                            </li>
                        
                <li> <span class="glyphicon glyphicon-piggy-bank"></span>
                                            <?php echo $this->Html->link("Consumibles", array('controller'=>'consumibles', 'action'=>'add'));?>
               
                                            </li>
                        <li> <span class="glyphicon glyphicon-thumbs-down"></span>
                                            <?php echo $this->Html->link("Gastos", array('controller'=>'perdidas', 'action'=>'add'));?>
               
                                            </li>   <br>
                        <li>   
                                            <?php echo $this->Html->link("Lista de Gastos", array('controller'=>'perdidas', 'action'=>'index'));?>
               </li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventario <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li>
                                            <?php echo $this->Html->link("Nuevo producto", array('controller'=>'productos', 'action'=>'add'));?></li>
						<li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de productos", array('controller'=>'productos', 'action'=>'index'));?>
          </li>
						<li>
                                           <br>
                                            <?php echo $this->Html->link("Añadir al inventario", array('controller'=>'entradas', 'action'=>'add'));?></li>
						<li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Bitacora de inventario", array('controller'=>'entradas', 'action'=>'index'));?>
          </li>
						
					</ul>
				</li>
                
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li>
                                            <?php echo $this->Html->link("Nuevo Cliente", array('controller'=>'clientes', 'action'=>'add'));?>
</li><br>
						<li> 
                                            <?php echo $this->Html->link("Lista de Clientes", array('controller'=>'clientes', 'action'=>'index'));?></li><br>
						<li>
                                           
						
					</ul>
				</li>
                
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li>
                                            <?php echo $this->Html->link("Nuevo Empleado", array('controller'=>'users', 'action'=>'add'));?></li>
						<li> <span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de Empleados", array('controller'=>'users', 'action'=>'index'));?></li>
                        <li> <span class="glyphicon glyphicon-list"></span>
                                            
                        <li>
                                            <?php echo $this->Html->link("Agregar Vales", array('controller'=>'vales', 'action'=>'add'));?></li>
						
					</ul>
				</li>
                
                
                
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresas <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li>
                                            
                                            <?php echo $this->Html->link("Nueva Empresa", array('controller'=>'empresas', 'action'=>'add'));?></li>
                        <br>
						<li> 
                                            <?php echo $this->Html->link("Agregar Una Nueva Marca", array('controller'=>'marcas', 'action'=>'add'));?></li>
						<li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de Empresas", array('controller'=>'empresas', 'action'=>'index'));?></li>
						<li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Listado De Marcas", array('controller'=>'marcas', 'action'=>'index'));?></li>
					</ul>
				</li>
                
                
                
                
                 <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrador<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li>
                                            
                                            <?php echo $this->Html->link("Agregar Categoria", array('controller'=>'categorias', 'action'=>'add'));?></li>
                        <br>
                        <li>
                                            
                                            <?php echo $this->Html->link("Agregar Sub-categoria", array('controller'=>'subcategorias', 'action'=>'add'));?></li>
                        <br>
						<li> 
                                            <?php echo $this->Html->link("Agregar Tipo producto", array('controller'=>'tipopros', 'action'=>'add'));?></li>
                                            <br>
						<li>
                                            <?php echo $this->Html->link("Agregar marca", array('controller'=>'marcapros', 'action'=>'add'));?></li><br>
						<li>
                                            <?php echo $this->Html->link("Agregar Producto", array('controller'=>'materials', 'action'=>'add'));?></li>
                        <li><span class="glyphicon glyphicon-list"></span>
                        <li>
                                            <?php echo $this->Html->link("Agregar Imagen", array('controller'=>'fotos', 'action'=>'add'));?></li><br>
                        <li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de categorias", array('controller'=>'categorias', 'action'=>'index'));?></li>
						<li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista de Subcategorias", array('controller'=>'subcategorias', 'action'=>'consultanombre'));?></li>
                        <li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista Tipo de Producto", array('controller'=>'tipopros', 'action'=>'consultanombre'));?></li>
						<li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista Marcas", array('controller'=>'marcapros', 'action'=>'consultanombre'));?></li>
                        <li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista Productos", array('controller'=>'materials', 'action'=>'consultanombre'));?></li>
                        <li><span class="glyphicon glyphicon-list"></span>
                                            <?php echo $this->Html->link("Lista Imagen", array('controller'=>'fotos', 'action'=>'consultanombre'));?></li>
					</ul>
				</li>
               
                
                
                
                
                
                
			</ul>
		</div>
	</div>
</nav>
<?php }?>