<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entrada Entity.
 *
 * @property int $id
 * @property int $producto_id
 * @property \App\Model\Entity\Producto $producto
 * @property int $vieja_cant
 * @property int $nueva_cant
 * @property int $en_inventario
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Entrada extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
