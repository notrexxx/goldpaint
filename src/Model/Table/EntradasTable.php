<?php
namespace App\Model\Table;

use App\Model\Entity\Entrada;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entradas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Productos
 */
class EntradasTable extends Table
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

        $this->table('entradas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER'
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
            ->integer('vieja_cant')
            ->requirePresence('vieja_cant', 'create')
            ->notEmpty('vieja_cant');

        $validator
            ->integer('nueva_cant')
            ->requirePresence('nueva_cant', 'create')
            ->notEmpty('nueva_cant');

        $validator
            ->integer('en_inventario')
            ->requirePresence('en_inventario', 'create')
            ->notEmpty('en_inventario');

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
        $rules->add($rules->existsIn(['producto_id'], 'Productos'));
        return $rules;
    }
}
