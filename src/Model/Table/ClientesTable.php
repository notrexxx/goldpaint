<?php
namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \Cake\ORM\Association\HasMany $Ventas
 */
class ClientesTable extends Table
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

        $this->table('clientes');
        $this->displayField('full');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

         $this->hasMany('Ventatotales', [
            'foreignKey' => 'cliente_id'
        ]);

         $this->hasMany('Instalacions', [
            'foreignKey' => 'cliente_id'
        ]); 
         $this->belongsToMany('Carros', [
            'through' => 'Unions',
        ]);
         $this->hasMany('Telefonos', [
            'foreignKey' => 'cliente_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmpty('cedula');

        $validator
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('edad', 'create')
            ->notEmpty('edad');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['cedula']));
        return $rules;
    }
}
