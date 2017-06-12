
<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
       
       
    <?= $this->Form->create($cliente) ?>
    <fieldset>
    <h3><?= __('Agregar Nuevo Cliente') ?></h3>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('cedula');
            echo $this->Form->input('edad',['options'=>
                ['18 a 21'=>'18 a 21',
                '22 a 25'=>'22 a 25',
                '26 a 30'=>'26 a 35',
                '36 a 40'=>'41 a 45',
                '46 a 50'=>'46 a 50',
                '51 en adelante'=>'51 en adelante'
                ]
                ]);
            echo $this->Form->input('sexo',['options'=>['M','F']]);
            echo $this->Form->input('direccion');
            echo $this->Form->input('email',['label'=>'Correo electronico']);
            echo $this->Form->input('numero',['label'=>'Numero de telefono']);
            echo $this->Form->input('otronumero',['label'=>'Numero de telefono opcional']);
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>


    </div>
</div>
</div>

