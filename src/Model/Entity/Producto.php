<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity.
 *
 * @property int $id
 * @property string $numero_serie
 * @property int $codigo
 * @property string $modelo
 * @property string $caracteristicas
 * @property int $existencia
 * @property int $precio
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $empresa_id
 * @property int $marca_id
 * @property \App\Model\Entity\Venta[] $ventas
 */
class Producto extends Entity
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
