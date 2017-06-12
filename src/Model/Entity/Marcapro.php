<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Marcapro Entity.
 *
 * @property int $id
 * @property string $marca
 * @property int $tipopro_id
 * @property \App\Model\Entity\Tipopro $tipopro
 * @property int $created
 * @property int $modified
 */
class Marcapro extends Entity
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
