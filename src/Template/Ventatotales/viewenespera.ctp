<script>
    $(document).ready(function(){
        $('#vender').on('click',function(){
            var enviado=2;
            $.ajax({
                data:{"enviado":enviado},
                url:   '',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                       alert('por favor redirijase al panel de ventas')
                },
                success:  function (response){
                    console.log(response);
                    console.log("si llego");  
                    
      
                                 }
                 });
         });
    });
</script>
<h3>Venta en Espera</h3>
    <h3><?= $ventatotale->has('cliente') ? $this->Html->link($ventatotale->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $ventatotale->cliente->id]) : '' ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('id') ?></th>
            <td><?= h($ventatotale->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipopago') ?></th>
            <td><?= h($ventatotale->tipopago) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Total') ?></th>
            <td><?= $this->Number->format($ventatotale->total) ?></td>
        </tr>
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($ventatotale->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($ventatotale->modified) ?></td>
        </tr>
    </table>
<div class="related">
        <h4><?= __('Cotizaciones') ?></h4>
        
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('producto') ?></th>
                <th><?= __('precio_u') ?></th>
                <th><?= __('cantidad') ?></th>
                <th><?= __('subtotal') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ventatotale->items as $item): ?>
            <tr>
                <td><?= h($item->id) ?></td>
                <td><?= $item->has('producto') ? $this->Html->link($item->producto->full, ['controller' => 'Productos', 'action' => 'view', $item->producto->id]) : '' ?></td>
                <td><?= h($item->precio_u) ?></td>
                <td><?= h($item->cantidad) ?></td>
                <td><?= h($item->subtotal) ?></td>
                <td class="actions">
                  
                    
                        
                           <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $item->id), array('class' => 'btn btn-sm btn-success', 'escape' => false, 'button title' => 'VER')); ?>
                   
                                        
               
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <table>
        <tr><td><?php echo $this->Form->button('vender',['id'=>'vender']); ?></td></tr>
        </table>
         <table>
        <tr><td><?php echo $this->Html->link('Ir a panel de ventas',['controller' => 'ventas', 'action' => 'index']); ?></td></tr>
        </table>
    </div>    
</div>
