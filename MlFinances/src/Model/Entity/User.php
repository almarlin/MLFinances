<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $ID_USER
 * @property int|null $NIF
 * @property string|null $NAME
 * @property string|null $SURNAME
 * @property int|null $AGE
 * @property string|null $HASH
 * @property bool|null $BAN
 * @property bool|null $ADMIN
 * @property string|null $PROFILEPHOTO
 *
 * @property \App\Model\Entity\Account[] $account
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'NIF' => true,
        'NAME' => true,
        'SURNAME' => true,
        'AGE' => true,
        'HASH' => true,
        'BAN' => true,
        'ADMIN' => true,
        'PROFILEPHOTO' => true,
        'account' => true,
    ];
}
