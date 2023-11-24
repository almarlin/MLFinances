<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountLoanFixture
 */
class AccountLoanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'account_loan';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_ACCOUNT' => 1,
                'ID_LOAN' => 1,
            ],
        ];
        parent::init();
    }
}
