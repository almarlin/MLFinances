<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserAccount Model
 *
 * @method \App\Model\Entity\UserAccount newEmptyEntity()
 * @method \App\Model\Entity\UserAccount newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\UserAccount> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserAccount get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\UserAccount findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\UserAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\UserAccount> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserAccount|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\UserAccount saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\UserAccount>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserAccount>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserAccount>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserAccount> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserAccount>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserAccount>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserAccount>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserAccount> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UserAccountTable extends Table
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

        $this->setTable('user_account');
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
            ->integer('ID_USER')
            ->allowEmptyString('ID_USER');

        $validator
            ->integer('ID_ACCOUNT')
            ->allowEmptyString('ID_ACCOUNT');

        return $validator;
    }
}
