<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ValesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ValesTable Test Case
 */
class ValesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ValesTable
     */
    public $Vales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vales',
        'app.users',
        'app.instalacions',
        'app.clientes',
        'app.ventatotales',
        'app.bancos',
        'app.carros',
        'app.unions',
        'app.items',
        'app.productos',
        'app.empresas',
        'app.marcas',
        'app.materials',
        'app.marcapros',
        'app.tipopros',
        'app.subcategorias',
        'app.categorias',
        'app.fotos',
        'app.ventas',
        'app.telefonos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vales') ? [] : ['className' => 'App\Model\Table\ValesTable'];
        $this->Vales = TableRegistry::get('Vales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vales);

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
