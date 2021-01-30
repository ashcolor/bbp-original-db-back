<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MusicsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MusicsTable Test Case
 */
class MusicsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MusicsTable
     */
    protected $Musics;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Musics',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Musics') ? [] : ['className' => MusicsTable::class];
        $this->Musics = $this->getTableLocator()->get('Musics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Musics);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
