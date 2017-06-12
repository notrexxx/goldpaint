<div class="form-horizontal">
     <fieldset>
    <legend>Consulta de subcategorias por nombre</legend>
   
    <div class="form-group">
      <label for="Categoria" class="col-lg-2 control-label">Ingrese el nombre de la sub-categoria</label>
      <div class="col-lg-10">
<?php

echo "<form action=indexnombre method='Post'>"
                                              
                                          ?>
  <?php                             
            echo $this->Form->input('nombre', ['options'=>$nombre]);
                                  
                                    ?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">   
<?php
  echo $this->Form->submit('consultar', array(
      'div' => 'form-group',
      'class' => 'btn btn-primary'
  ));
  echo "</form>"
  ?>  
  <br>
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">CREAR Nueva Categoria
  </button>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Sub-Categoria</h4>
      </div>
      <div class="modal-body">
          
    <?= $this->Form->create($subcategorias) ?>
    <fieldset>
    
        <?php
              echo $this->Form->input('categoria_id', ['options' => $nombre]);
              echo $this->Form->input('nombre2');
              
        ?>
    </fieldset>
    <td><?= $this->Form->button('Agregar sub-categoria',['id'=>'sub','type'=>'button']) ?></td>
    
      </div> 
        </div> 
      </div> 
  
    </div>
      </div>
    </div>
     </fieldset>
</div>
<script type="text/javascript">
    $(document).on('ready',function(){
      
        $('#nombre').select2();
        $('#categoria-id').select2({width: '530px'});
        $('#sub').on('click',function(){
            var n=$('#nombre2').val();
            var c=$('#categoria-id').val();
            
            $.ajax({
                data: {"nombre" : n,"categoria_id": c},
                url:   '../subcategorias/add',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                        
                },
                success:  function (response){
                    console.log(response);
                    alert("La subcategoria ah sido agregada");
                    var vacio="";                   
                    $('#categoria-id').val(vacio);
                                 }
                 });
         });
    });
</script>