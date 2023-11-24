<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountLoanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountLoanTable Test Case
 */
class AccountLoanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountLoanTable
     */
    protected $AccountLoan;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccountLoan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountLoan') ? [] : ['className' => AccountLoanTable::class];
        $this->AccountLoan = $this->getTableLocator()->get('AccountLoan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccountLoan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountLoanTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
