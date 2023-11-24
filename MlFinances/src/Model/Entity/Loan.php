<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Loan Entity
 *
 * @property int $ID_LOAN
 * @property \Cake\I18n\Date|null $EXPEDITIONDATE
 * @property float|null $MONTHLYPAYMENT
 * @property int|null $TERMS
 * @property float|null $TOTAL
 * @property float|null $INTEREST
 * @property \Cake\I18n\Date|null $DUEDATE
 *
 * @property \App\Model\Entity\Account[] $account
 */
class Loan extends Entity
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
        'EXPEDITIONDATE' => true,
        'MONTHLYPAYMENT' => true,
        'TERMS' => true,
        'TOTAL' => true,
        'INTEREST' => true,
        'DUEDATE' => true,
        'account' => true,
    ];
}
