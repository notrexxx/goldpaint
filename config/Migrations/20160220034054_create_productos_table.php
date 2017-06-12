<?php

use Phinx\Migration\AbstractMigration;

class CreateProductosTable extends AbstractMigration
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
        $table= $this->table('productos');
        $table->addColumn('numero_serie','string',array('limit'=>100))
              ->addColumn('codigo','integer')
              ->addColumn('modelo','string',array('limit'=>150))
              ->addColumn('caracteristicas','string',array('limit'=>300))
              ->addColumn('existencia','integer')
              ->addColumn('precio','integer')
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();

              

    }
}
