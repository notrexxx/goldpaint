

    <h3><?= h($material->full) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($material->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Modelo') ?></th>
            <td><?= h($material->modelo) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($material->created) ?></td>
        </tr>
        
    </table>
    <h3>Imagenes del producto</h3>

      <table cellpadding="0" cellspacing="0">
        <?php if (!empty($fotografia)): ?>
        
            <tr>
            <?php foreach ($fotografia as $foto): ?>
              <?php if (!empty($foto->photo)): ?>  
                <td><div class="contenedor-imagen"><img src="http://localhost/soundcars/files/Fotos/photo/<?php echo $foto->photo; ?>" id="imagencita"></td><div>
              <?php endif; ?>
            <?php endforeach; ?>
             </tr>
        </table>
        <?php endif; ?>



     


    
    