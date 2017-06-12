
<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <h3><?=  $this->Number->format($caja->numero) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($caja->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Cierre') ?></th>
            <td><?= $this->Number->format($caja->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($caja->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($caja->modified) ?></td>
        </tr>
    </table>
    </div>
    </div>
</div>
