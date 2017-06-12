<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area"> 

    <h3><?= h($perdida->gasto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Consumible') ?></th>
            <td><?= $perdida->has('consumible') ? $this->Html->link($perdida->consumible->consu, ['controller' => 'Consumibles', 'action' => 'view', $perdida->consumible->id]) : '' ?></td>
        </tr>
        
        <tr>
            <th><?= __('Gasto') ?></th>
            <td><?= $this->Number->format($perdida->gasto) ?></td>
        </tr>
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($perdida->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($perdida->modified) ?></td>
        </tr>
    </table>
    </div>
    </div>
</div>
