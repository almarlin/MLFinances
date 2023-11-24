<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountFixture
 */
class AccountFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'account';
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
                'BALANCE' => 1,
            ],
        ];
        parent::init();
    }
}
