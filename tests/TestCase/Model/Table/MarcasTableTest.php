<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarcasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarcasTable Test Case
 */
class MarcasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MarcasTable
     */
    public $Marcas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.marcas',
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
        $config = TableRegistry::exists('Marcas') ? [] : ['className' => 'App\Model\Table\MarcasTable'];
        $this->Marcas = TableRegistry::get('Marcas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Marcas);

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
