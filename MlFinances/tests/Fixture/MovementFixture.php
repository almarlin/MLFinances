<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovementFixture
 */
class MovementFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'movement';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_MOVEMENT' => 1,
                'ID_FROMACCOUNT' => 1,
                'ID_TOACCOUNT' => 1,
                'CONCEPT' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
