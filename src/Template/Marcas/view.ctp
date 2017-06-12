<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <h3><?= h($marca->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($marca->nombre) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($marca->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($marca->modified) ?></td>
        </tr>
    </table>

    </div>
    </div>
</div>

    <div class="related">
        <h4><?= __('Productos Relacionados Con la Marca') ?></h4>
        <?php if (!empty($marca->productos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Numero Serie') ?></th>
                <th><?= __('Codigo') ?></th>
                <th><?= __('Modelo') ?></th>
                <th><?= __('Existencia') ?></th>
                <th><?= __('Precio') ?></th>
                
            </tr>
            <?php foreach ($marca->productos as $productos): ?>
            <tr>
                <td><?= h($productos->id) ?></td>
                <td><?= h($productos->numero_serie) ?></td>
                <td><?= h($productos->codigo) ?></td>
                <td><?= h($productos->modelo) ?></td>
                <td><?= h($productos->existencia) ?></td>
                <td><?= h($productos->precio) ?></td>
               
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


