<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Loan Model
 *
 * @property \App\Model\Table\AccountTable&\Cake\ORM\Association\BelongsToMany $Account
 *
 * @method \App\Model\Entity\Loan newEmptyEntity()
 * @method \App\Model\Entity\Loan newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Loan> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Loan get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Loan findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Loan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Loan> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Loan|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Loan saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Loan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loan>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Loan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loan> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Loan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loan>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Loan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loan> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LoanTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('loan');
        $this->setDisplayField('ID_LOAN');
        $this->setPrimaryKey('ID_LOAN');

        $this->belongsToMany('Account', [
            'foreignKey' => 'loan_id',
            'targetForeignKey' => 'account_id',
            'joinTable' => 'account_loan',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->date('EXPEDITIONDATE')
            ->allowEmptyDate('EXPEDITIONDATE');

        $validator
            ->numeric('MONTHLYPAYMENT')
            ->allowEmptyString('MONTHLYPAYMENT');

        $validator
            ->integer('TERMS')
            ->allowEmptyString('TERMS');

        $validator
            ->numeric('TOTAL')
            ->allowEmptyString('TOTAL');

        $validator
            ->numeric('INTEREST')
            ->allowEmptyString('INTEREST');

        $validator
            ->date('DUEDATE')
            ->allowEmptyDate('DUEDATE');

        return $validator;
    }
}
