<?php
namespace App\Model\Table;

use App\Model\Entity\Consumible;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consumibles Model
 *
 * @property \Cake\ORM\Association\HasMany $Perdida
 */
class ConsumiblesTable extends Table
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

        $this->table('consumibles');
        $this->displayField('consu');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Perdida', [
            'foreignKey' => 'consumible_id'
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
            ->requirePresence('consu', 'create')
            ->notEmpty('consu');

        return $validator;
    }
}
