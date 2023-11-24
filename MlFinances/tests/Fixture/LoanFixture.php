<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoanFixture
 */
class LoanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'loan';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_LOAN' => 1,
                'EXPEDITIONDATE' => '2023-11-24',
                'MONTHLYPAYMENT' => 1,
                'TERMS' => 1,
                'TOTAL' => 1,
                'INTEREST' => 1,
                'DUEDATE' => '2023-11-24',
            ],
        ];
        parent::init();
    }
}
