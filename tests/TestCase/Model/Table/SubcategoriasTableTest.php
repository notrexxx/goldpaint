<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubcategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubcategoriasTable Test Case
 */
class SubcategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubcategoriasTable
     */
    public $Subcategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subcategorias',
        'app.categorias',
        'app.tipopros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Subcategorias') ? [] : ['className' => 'App\Model\Table\SubcategoriasTable'];
        $this->Subcategorias = TableRegistry::get('Subcategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subcategorias);

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
