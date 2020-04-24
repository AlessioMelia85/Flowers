<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OccasioniTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OccasioniTable Test Case
 */
class OccasioniTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OccasioniTable
     */
    protected $Occasioni;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Occasioni',
        'app.Flowers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Occasioni') ? [] : ['className' => OccasioniTable::class];
        $this->Occasioni = TableRegistry::getTableLocator()->get('Occasioni', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Occasioni);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
