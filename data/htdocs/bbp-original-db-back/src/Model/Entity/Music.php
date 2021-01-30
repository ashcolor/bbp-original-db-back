<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Music Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $artist
 * @property string $contributor
 * @property \Cake\I18n\FrozenDate|null $published
 * @property \Cake\I18n\FrozenDate|null $updated
 * @property string|null $genre
 * @property string|null $remarks
 * @property string|null $url
 */
class Music extends Entity
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
        'title' => true,
        'artist' => true,
        'contributor' => true,
        'published' => true,
        'updated' => true,
        'genre' => true,
        'remarks' => true,
        'url' => true,
    ];
}
