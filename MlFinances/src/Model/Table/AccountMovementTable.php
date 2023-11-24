<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountMovement Model
 *
 * @method \App\Model\Entity\AccountMovement newEmptyEntity()
 * @method \App\Model\Entity\AccountMovement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountMovement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountMovement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AccountMovement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AccountMovement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AccountMovement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountMovement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AccountMovement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AccountMovement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountMovement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountMovement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountMovement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountMovement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountMovement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AccountMovement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AccountMovement> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AccountMovementTable extends Table
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

        $this->setTable('account_movement');
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
            ->integer('ID_MOVEMENT')
            ->allowEmptyString('ID_MOVEMENT');

        return $validator;
    }
}
