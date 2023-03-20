<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Service Model
 *
 * @property \App\Model\Table\ProgramTable&\Cake\ORM\Association\BelongsTo $Program
 * @property \App\Model\Table\ServiceTypeTable&\Cake\ORM\Association\BelongsTo $ServiceType
 *
 * @method \App\Model\Entity\Service newEmptyEntity()
 * @method \App\Model\Entity\Service newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Service[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Service get($primaryKey, $options = [])
 * @method \App\Model\Entity\Service findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Service patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Service[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Service|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Service saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ServiceTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('service');
        $this->setDisplayField('service_id');
        $this->setPrimaryKey('service_id');

        $this->belongsTo('Program', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ServiceType', [
            'foreignKey' => 'service_type_id',
            'joinType' => 'INNER',
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
            ->scalar('service_description')
            ->maxLength('service_description', 1000)
            ->requirePresence('service_description', 'create')
            ->notEmptyString('service_description');

        $validator
            ->integer('service_active_client')
            ->requirePresence('service_active_client', 'create')
            ->notEmptyString('service_active_client');

        $validator
            ->numeric('service_staff_number')
            ->requirePresence('service_staff_number', 'create')
            ->notEmptyString('service_staff_number');

        $validator
            ->numeric('service_fte')
            ->requirePresence('service_fte', 'create')
            ->notEmptyString('service_fte');

        $validator
            ->integer('service_riskman_id')
            ->requirePresence('service_riskman_id', 'create')
            ->notEmptyString('service_riskman_id');

        $validator
            ->integer('program_id')
            ->notEmptyString('program_id');

        $validator
            ->integer('service_type_id')
            ->notEmptyString('service_type_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('program_id', 'Program'), ['errorField' => 'program_id']);
        $rules->add($rules->existsIn('service_type_id', 'ServiceType'), ['errorField' => 'service_type_id']);

        return $rules;
    }
}
