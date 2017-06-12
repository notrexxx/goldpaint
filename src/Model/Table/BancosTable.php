<?php
namespace App\Model\Table;

use App\Model\Entity\Banco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bancos Model
 *
 * @property \Cake\ORM\Association\HasMany $Ventatotales
 */
class BancosTable extends Table
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

        $this->table('bancos');
        $this->displayField('banc');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Ventatotales', [
            'foreignKey' => 'banco_id'
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
            ->requirePresence('banc', 'create')
            ->notEmpty('banc');

        return $validator;
    }
}
