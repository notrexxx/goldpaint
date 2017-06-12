<div class="form-horizontal">
     <fieldset>
    <legend>Consulta de categoria por nombre</legend>
   
    <div class="form-group">
      <label for="Categoria" class="col-lg-2 control-label">Ingrese el nombre de la categoria</label>
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
      </div>
    </div>
     </fieldset>
</div>