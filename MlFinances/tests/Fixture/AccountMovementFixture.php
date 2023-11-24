<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountMovementFixture
 */
class AccountMovementFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'account_movement';
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
                'ID_MOVEMENT' => 1,
            ],
        ];
        parent::init();
    }
}
