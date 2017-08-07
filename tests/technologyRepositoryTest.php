<?php

use App\Models\technology;
use App\Repositories\technologyRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class technologyRepositoryTest extends TestCase
{
    use MaketechnologyTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var technologyRepository
     */
    protected $technologyRepo;

    public function setUp()
    {
        parent::setUp();
        $this->technologyRepo = App::make(technologyRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatetechnology()
    {
        $technology = $this->faketechnologyData();
        $createdtechnology = $this->technologyRepo->create($technology);
        $createdtechnology = $createdtechnology->toArray();
        $this->assertArrayHasKey('id', $createdtechnology);
        $this->assertNotNull($createdtechnology['id'], 'Created technology must have id specified');
        $this->assertNotNull(technology::find($createdtechnology['id']), 'technology with given id must be in DB');
        $this->assertModelData($technology, $createdtechnology);
    }

    /**
     * @test read
     */
    public function testReadtechnology()
    {
        $technology = $this->maketechnology();
        $dbtechnology = $this->technologyRepo->find($technology->id);
        $dbtechnology = $dbtechnology->toArray();
        $this->assertModelData($technology->toArray(), $dbtechnology);
    }

    /**
     * @test update
     */
    public function testUpdatetechnology()
    {
        $technology = $this->maketechnology();
        $faketechnology = $this->faketechnologyData();
        $updatedtechnology = $this->technologyRepo->update($faketechnology, $technology->id);
        $this->assertModelData($faketechnology, $updatedtechnology->toArray());
        $dbtechnology = $this->technologyRepo->find($technology->id);
        $this->assertModelData($faketechnology, $dbtechnology->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletetechnology()
    {
        $technology = $this->maketechnology();
        $resp = $this->technologyRepo->delete($technology->id);
        $this->assertTrue($resp);
        $this->assertNull(technology::find($technology->id), 'technology should not exist in DB');
    }
}
