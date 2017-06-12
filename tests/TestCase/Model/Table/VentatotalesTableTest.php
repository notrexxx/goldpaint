<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VentatotalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VentatotalesTable Test Case
 */
class VentatotalesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VentatotalesTable
     */
    public $Ventatotales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ventatotales',
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
        $config = TableRegistry::exists('Ventatotales') ? [] : ['className' => 'App\Model\Table\VentatotalesTable'];
        $this->Ventatotales = TableRegistry::get('Ventatotales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ventatotales);

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
