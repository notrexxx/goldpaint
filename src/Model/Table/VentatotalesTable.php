<?php
namespace App\Model\Table;

use App\Model\Entity\Ventatotale;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ventatotales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 */
class VentatotalesTable extends Table
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

        $this->table('ventatotales');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Bancos', [
            'foreignKey' => 'banco_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Carros', [
            'foreignKey' => 'carro_id',
            'joinType' => 'INNER'
        ]);
         $this->hasmany('Items', [
            'foreignKey' => 'ventatotale_id',
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
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        $validator
            ->requirePresence('tipopago', 'create')
            ->notEmpty('tipopago');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        return $rules;
    }
}
