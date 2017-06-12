<?php

use Phinx\Migration\AbstractMigration;

class CreateClienteTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table= $this->table('clientes');
        $table->addColumn('nombre','string',array('limit'=>100))
              ->addColumn('cedula','integer',array('limit'=>12))
              ->addColumn('direccion','string',array('limit'=>500))
              ->addColumn('sexo','enum',array('values'=>'M , F'))
              ->addColumn('email','string',array('limit'=>100))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();
    }
}
