<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MusicsFixture
 */
class MusicsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'ID', 'autoIncrement' => true, 'precision' => null],
        'title' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '曲名', 'precision' => null],
        'artist' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'アーティスト', 'precision' => null],
        'contributor' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '投稿者', 'precision' => null],
        'published' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '作成日', 'precision' => null],
        'updated' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '最終更新日', 'precision' => null],
        'genre' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ジャンル', 'precision' => null],
        'remarks' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'precision' => null],
        'url' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'url', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'artist' => 'Lorem ipsum dolor sit amet',
                'contributor' => 'Lorem ipsum dolor ',
                'published' => '2021-01-30',
                'updated' => '2021-01-30',
                'genre' => 'Lorem ip',
                'remarks' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
