<?php
use Migrations\AbstractMigration;

class AddPorventaToProductos extends AbstractMigration
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
        $table = $this->table('productos');
        $table->addColumn('por_venta', 'decimal', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
