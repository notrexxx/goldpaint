<?php
namespace App\Model\Table;

use App\Model\Entity\Marcapro;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Marcapros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tipopros
 */
class MarcaprosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('marcapros');
        $this->displayField('marc');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');



        $this->belongsTo('Tipopros', [
            'foreignKey' => 'tipopro_id',
            'joinType' => 'INNER'
        ]);

         $this->hasMany('Materials', [
            'foreignKey' => 'marcapro_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
       $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('marc', 'create')
            ->notEmpty('marca');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tipopro_id'], 'Tipopros'));
        return $rules;
    }
}
