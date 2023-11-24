<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountLoan Model
 *
 * @method \App\Model\Entity\AccountLoan newEmptyEntity()
 * @method \App\Model\Entity\AccountLoan newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountLoan> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountLoan get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AccountLoan findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AccountLoan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountLoan> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountLoan|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AccountLoan saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AccountLoan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountLoan>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountLoan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountLoan> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountLoan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountLoan>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountLoan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountLoan> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AccountLoanTable extends Table
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

        $this->setTable('account_loan');
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
            ->integer('ID_ACCOUNT')
            ->allowEmptyString('ID_ACCOUNT');

        $validator
            ->integer('ID_LOAN')
            ->allowEmptyString('ID_LOAN');

        return $validator;
    }
}
