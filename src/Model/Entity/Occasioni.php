<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Occasioni Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descrizione
 * @property int $flower_id
 *
 * @property \App\Model\Entity\Flower $flower
 */
class Occasioni extends Entity
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
        'nome' => true,
        'descrizione' => true,
        'flower_id' => true,
        'flower' => true,
    ];
}
