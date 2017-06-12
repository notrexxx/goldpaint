<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoprosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoprosTable Test Case
 */
class TipoprosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoprosTable
     */
    public $Tipopros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipopros',
        'app.subcategorias',
        'app.categorias',
        'app.marcapros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipopros') ? [] : ['className' => 'App\Model\Table\TipoprosTable'];
        $this->Tipopros = TableRegistry::get('Tipopros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipopros);

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
