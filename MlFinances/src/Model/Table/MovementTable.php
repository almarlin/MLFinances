<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movement Model
 *
 * @property \App\Model\Table\AccountTable&\Cake\ORM\Association\BelongsToMany $Account
 *
 * @method \App\Model\Entity\Movement newEmptyEntity()
 * @method \App\Model\Entity\Movement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Movement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Movement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Movement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Movement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Movement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MovementTable extends Table
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

        $this->setTable('movement');
        $this->setDisplayField('ID_MOVEMENT');
        $this->setPrimaryKey('ID_MOVEMENT');

        $this->belongsToMany('Account', [
            'foreignKey' => 'movement_id',
            'targetForeignKey' => 'account_id',
            'joinTable' => 'account_movement',
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
            ->integer('ID_FROMACCOUNT')
            ->allowEmptyString('ID_FROMACCOUNT');

        $validator
            ->integer('ID_TOACCOUNT')
            ->allowEmptyString('ID_TOACCOUNT');

        $validator
            ->scalar('CONCEPT')
            ->maxLength('CONCEPT', 60)
            ->allowEmptyString('CONCEPT');

        return $validator;
    }
}
