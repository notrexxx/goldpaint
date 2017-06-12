<?php
namespace App\Model\Table;

use App\Model\Entity\Material;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materials Model
 *
 */
class MaterialsTable extends Table
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

        $this->table('materials');
        $this->displayField('full');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');

           $this->hasMany('Productos', [
            'foreignKey' => 'material_id'
        ]);

            $this->belongsTo('Marcapros', [
            'foreignKey' => 'marcapro_id',
            'joinType' => 'INNER'
        ]);

          $this->hasMany('Fotos', [
            'foreignKey' => 'material_id'
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
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo');

        $validator
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo');

        $validator
            ->requirePresence('full', 'create')
            ->notEmpty('full');

        return $validator;
    }

     public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['marcapro_id'], 'Marcapros'));
        return $rules;
    }
}
