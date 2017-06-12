<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 
    <h3><?= h($telefono->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($telefono->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Otronumero') ?></th>
            <td><?= h($telefono->otronumero) ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $telefono->has('cliente') ? $this->Html->link($telefono->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $telefono->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($telefono->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($telefono->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($telefono->modified) ?></td>
        </tr>
    </table>
</div>
    </div>
</div>