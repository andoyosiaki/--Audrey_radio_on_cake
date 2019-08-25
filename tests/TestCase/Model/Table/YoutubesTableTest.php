<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\YoutubesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\YoutubesTable Test Case
 */
class YoutubesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\YoutubesTable
     */
    public $Youtubes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Youtubes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Youtubes') ? [] : ['className' => YoutubesTable::class];
        $this->Youtubes = TableRegistry::getTableLocator()->get('Youtubes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Youtubes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
