<?php
namespace App\Model\Table;

use App\Model\Entity\Producto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 * @property \Cake\ORM\Association\BelongsTo $Marcas
 * @property \Cake\ORM\Association\HasMany $Ventas
 */
class ProductosTable extends Table
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

        $this->table('productos');
        $this->displayField('material_id');
        $this->primaryKey('id');
        //--------codigo añadido del pligin
        
        //------------------------------------

        $this->addBehavior('Timestamp');
       
        
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
            'joinType' => 'INNER'
        ]);
          $this->belongsTo('Materials', [
            'foreignKey' => 'material_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Ventas', [
            'foreignKey' => 'producto_id'
        ]);
         $this->hasmany('Items', [
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
                ->allowEmpty('numero_serie', 'create');
                    

        $validator
            ->requirePresence('caracteristicas', 'create')
            ->notEmpty('caracteristicas');

        $validator
            ->integer('existencia')
            ->requirePresence('existencia', 'create')
            ->notEmpty('existencia');

        $validator
            ->integer('precio')
            ->requirePresence('precio', 'create')
            ->notEmpty('precio');


        $validator
                ->allowEmpty('minimo', 'create');

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
        $rules->add($rules->existsIn(['material_id'], 'Materials'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['marca_id'], 'Marcas'));
        $rules->add($rules->isUnique(['numero_serie']));
        

        return $rules;
    }
}
