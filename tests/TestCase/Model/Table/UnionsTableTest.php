<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnionsTable Test Case
 */
class UnionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UnionsTable
     */
    public $Unions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.unions',
        'app.carros',
        'app.ventatotales',
        'app.clientes',
        'app.telefonos',
        'app.bancos',
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
        $config = TableRegistry::exists('Unions') ? [] : ['className' => 'App\Model\Table\UnionsTable'];
        $this->Unions = TableRegistry::get('Unions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Unions);

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
