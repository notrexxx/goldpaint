<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductosVentasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductosVentasTable Test Case
 */
class ProductosVentasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductosVentasTable
     */
    public $ProductosVentas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.productos_ventas',
        'app.productos',
        'app.ventas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductosVentas') ? [] : ['className' => 'App\Model\Table\ProductosVentasTable'];
        $this->ProductosVentas = TableRegistry::get('ProductosVentas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductosVentas);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
