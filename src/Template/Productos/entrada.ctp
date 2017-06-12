 <script>
  $(document).ready(function () {
  	$('#b').select2();
     $('#sumar').on('click',function(){
            var p=$('#b').val();
            var n=$('#nueva').val();
            
            $.ajax({
                data: {"id" : p,"nueva":n},
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
 <table> 
	<th><?= __('Sumar producto a inventario') ?></th>
     <tr> 
     <td>
     <?php
 	 echo $this->Form->input('buscador',['label'=>'','id'=>'b','placeholder'=>'Buscar producto','options'=>$producto]);
     ?>
     </td> 
     </tr>      
    <tr>
    	<td><?= $this->Form->input('nueva',['label'=>'nueva cantidad','id'=>'nueva']); ?></td>
    		
    </tr>
    <tr>
    	<td><?= $this->Form->button('sumar a inventario',['id'=>'sumar','type'=>'button']);?></td>
    	 <?= $this->Form->end() ?>
    </tr>
 </table>

 