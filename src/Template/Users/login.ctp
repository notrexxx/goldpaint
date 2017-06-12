 <?= $this->Html->css('login.css') ?>


 <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                    <fieldset>
                                        
                                    <?= $this->Form->create() ?>
			<?= $this->Form->input('username') ?>
			<?= $this->Form->input('password') ?>
			<?= $this->Form->button('Login') ?>
			<?= $this->Form->end() ?>
                                    </fieldset>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
            </div>


