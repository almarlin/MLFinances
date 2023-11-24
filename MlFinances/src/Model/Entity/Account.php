<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $ID_ACCOUNT
 * @property float|null $BALANCE
 *
 * @property \App\Model\Entity\Loan[] $loan
 * @property \App\Model\Entity\Movement[] $movement
 * @property \App\Model\Entity\User[] $user
 */
class Account extends Entity
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
        'BALANCE' => true,
        'loan' => true,
        'movement' => true,
        'user' => true,
    ];
}
