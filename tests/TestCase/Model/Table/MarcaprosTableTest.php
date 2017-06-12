<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarcaprosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarcaprosTable Test Case
 */
class MarcaprosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MarcaprosTable
     */
    public $Marcapros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.marcapros',
        'app.tipopros',
        'app.subcategorias',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Marcapros') ? [] : ['className' => 'App\Model\Table\MarcaprosTable'];
        $this->Marcapros = TableRegistry::get('Marcapros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Marcapros);

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
