<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movement Entity
 *
 * @property int $ID_MOVEMENT
 * @property int|null $ID_FROMACCOUNT
 * @property int|null $ID_TOACCOUNT
 * @property string|null $CONCEPT
 *
 * @property \App\Model\Entity\Account[] $account
 */
class Movement extends Entity
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
        'ID_FROMACCOUNT' => true,
        'ID_TOACCOUNT' => true,
        'CONCEPT' => true,
        'account' => true,
    ];
}
