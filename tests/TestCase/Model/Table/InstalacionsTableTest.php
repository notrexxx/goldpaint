<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstalacionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstalacionsTable Test Case
 */
class InstalacionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstalacionsTable
     */
    public $Instalacions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Instalacions') ? [] : ['className' => 'App\Model\Table\InstalacionsTable'];
        $this->Instalacions = TableRegistry::get('Instalacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Instalacions);

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
