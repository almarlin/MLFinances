<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserFixture
 */
class UserFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'user';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID_USER' => 1,
                'NIF' => 1,
                'NAME' => 'Lorem ip',
                'SURNAME' => 'Lorem ipsum dolor sit a',
                'AGE' => 1,
                'HASH' => 'Lorem ipsum dolor sit amet',
                'BAN' => 1,
                'ADMIN' => 1,
                'PROFILEPHOTO' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
