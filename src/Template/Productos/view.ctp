
    <h3><?= h($producto->full) ?></h3>
    <table >
        <tr>
            <th><?= __('Numero Serie') ?></th>
            <td><?= h($producto->numero_serie) ?></td>
        </tr>
         <tr>
            <th><?= __('Producto') ?></th>
            <td><?= h($producto->full) ?></td>
        </tr>
        <tr>
            <th><?= __('Caracteristicas') ?></th>
            <td><?= h($producto->caracteristicas) ?></td>
        </tr>
        <tr>
            <th><?= __('Existencia') ?></th>
            <td><?= $this->Number->format($producto->existencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Precio') ?></th>
            <td><?= $this->Number->format($producto->precio) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $producto->has('empresa') ? $this->Html->link($producto->empresa->nombre, ['controller' => 'Empresas', 'action' => 'view', $producto->empresa->id]) : '' ?></td>
        </tr>
        
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= $producto->has('marca') ? $this->Html->link($producto->marca->nombre, ['controller' => 'Marcas', 'action' => 'view', $producto->marca->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($producto->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($producto->modified) ?></td>
        </tr>  
    </table>
    <h3>Imagenes del producto</h3>

      <table>
        <?php if (!empty($fotos)): ?>
        
            <tr>
            <?php foreach ($fotos as $foto): ?>
              <?php if (!empty($foto->photo)): ?>  
                <td><div class="contenedor-imagen"><img src="http://localhost/soundcars/files/Fotos/photo/<?php echo $foto->photo; ?>" id="imagencita"></td><div>
              <?php endif; ?>
            <?php endforeach; ?>
             </tr>
        </table>
        <?php endif; ?>

