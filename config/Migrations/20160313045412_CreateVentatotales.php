<?php
use Migrations\AbstractMigration;

class CreateVentatotales extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('ventatotales');
        $table->addColumn('cliente_id','integer')
              ->addColumn('tipopago','string',array('limit'=>50))
              ->addColumn('total','integer')
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              -create();
          }
}
