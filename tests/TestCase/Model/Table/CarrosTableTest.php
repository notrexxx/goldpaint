<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrosTable Test Case
 */
class CarrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrosTable
     */
    public $Carros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carros',
        'app.clientes',
        'app.ventatotales',
        'app.items',
        'app.productos',
        'app.empresas',
        'app.marcas',
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
        $config = TableRegistry::exists('Carros') ? [] : ['className' => 'App\Model\Table\CarrosTable'];
        $this->Carros = TableRegistry::get('Carros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carros);

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
