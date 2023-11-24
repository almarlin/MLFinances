<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoanTable Test Case
 */
class LoanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LoanTable
     */
    protected $Loan;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Loan',
        'app.Account',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Loan') ? [] : ['className' => LoanTable::class];
        $this->Loan = $this->getTableLocator()->get('Loan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Loan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LoanTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
