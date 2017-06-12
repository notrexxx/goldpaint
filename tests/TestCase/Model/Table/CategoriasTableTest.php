<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasTable Test Case
 */
class CategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasTable
     */
    public $Categorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorias',
        'app.subcategorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categorias') ? [] : ['className' => 'App\Model\Table\CategoriasTable'];
        $this->Categorias = TableRegistry::get('Categorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categorias);

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
