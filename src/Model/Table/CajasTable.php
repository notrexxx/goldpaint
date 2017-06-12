<?php
namespace App\Model\Table;

use App\Model\Entity\Caja;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cajas Model
 *
 */
class CajasTable extends Table
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

        $this->table('cajas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

       /* $validator
            ->integer('tgasto')
            ->requirePresence('tgasto', 'create')
            ->notEmpty('tgasto');

        $validator
            ->integer('tefectivo')
            ->requirePresence('tefectivo', 'create')
            ->notEmpty('tefectivo');

        $validator
            ->integer('tdebito')
            ->requirePresence('tdebito', 'create')
            ->notEmpty('tdebito');

        $validator
            ->integer('tcredito')
            ->requirePresence('tcredito', 'create')
            ->notEmpty('tcredito');

        $validator
            ->integer('ttotal')
            ->requirePresence('ttotal', 'create')
            ->notEmpty('ttotal');

        $validator
            ->integer('cantventa')
            ->requirePresence('cantventa', 'create')
            ->notEmpty('cantventa');

        $validator
            ->integer('treal')
            ->requirePresence('treal', 'create')
            ->notEmpty('treal');
*/
        return $validator;
    }
}
