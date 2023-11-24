<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountMovementTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountMovementTable Test Case
 */
class AccountMovementTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountMovementTable
     */
    protected $AccountMovement;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccountMovement',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountMovement') ? [] : ['className' => AccountMovementTable::class];
        $this->AccountMovement = $this->getTableLocator()->get('AccountMovement', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccountMovement);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountMovementTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
