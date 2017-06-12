<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductosTable Test Case
 */
class ProductosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductosTable
     */
    public $Productos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.productos',
        'app.ventas',
        'app.clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Productos') ? [] : ['className' => 'App\Model\Table\ProductosTable'];
        $this->Productos = TableRegistry::get('Productos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Productos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
