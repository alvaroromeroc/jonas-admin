<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $document
 * @property string $nombre
 * @property string $correo
 * @property string $telefono
 * @property string $region
 * @property string $mensaje
 * @property string $cotizacion
 * @property \Cake\I18n\FrozenTime $fecha
 * @property string $vivienda
 * @property string $pda
 * @property string $enferma
 * @property string $recuperacion
 * @property int $personas
 * @property int $banos
 * @property int $dormitorios
 * @property int $superficie
 * @property string $ingreso_aire
 * @property int $ingreso_aire_cant
 * @property string $traspaso_aire
 * @property int $traspaso_aire_cant
 * @property string $extraccion_cocina
 * @property int $extraccion_cocina_cant
 * @property string $extraccion_bano
 * @property int $extraccion_bano_cant
 */
class Contact extends Entity
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
        'document' => true,
        'nombre' => true,
        'correo' => true,
        'telefono' => true,
        'region' => true,
        'mensaje' => true,
        'cotizacion' => true,
        'fecha' => true,
        'vivienda' => true,
        'pda' => true,
        'enferma' => true,
        'recuperacion' => true,
        'personas' => true,
        'banos' => true,
        'dormitorios' => true,
        'superficie' => true,
        'ingreso_aire' => true,
        'ingreso_aire_cant' => true,
        'traspaso_aire' => true,
        'traspaso_aire_cant' => true,
        'extraccion_cocina' => true,
        'extraccion_cocina_cant' => true,
        'extraccion_bano' => true,
        'extraccion_bano_cant' => true,
    ];
}
