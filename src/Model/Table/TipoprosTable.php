<?php
namespace App\Model\Table;

use App\Model\Entity\Tipopro;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipopros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Subcategorias
 * @property \Cake\ORM\Association\HasMany $Marcapros
 */
class TipoprosTable extends Table
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

        $this->table('tipopros');
        $this->displayField('tipo');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Subcategorias', [
            'foreignKey' => 'subcategoria_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Marcapros', [
            'foreignKey' => 'tipopro_id'
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
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

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
        $rules->add($rules->existsIn(['subcategoria_id'], 'Subcategorias'));
        return $rules;
    }
}
