<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venta Entity.
 *
 * @property int $id
 * @property int $producto_id
 * @property \App\Model\Entity\Producto $producto
 * @property int $cantidad
 * @property int $valor_total
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $cliente_id
 */
class Venta extends Entity
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
