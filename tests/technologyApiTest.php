<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class technologyApiTest extends TestCase
{
    use MaketechnologyTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatetechnology()
    {
        $technology = $this->faketechnologyData();
        $this->json('POST', '/api/v1/technologies', $technology);

        $this->assertApiResponse($technology);
    }

    /**
     * @test
     */
    public function testReadtechnology()
    {
        $technology = $this->maketechnology();
        $this->json('GET', '/api/v1/technologies/'.$technology->id);

        $this->assertApiResponse($technology->toArray());
    }

    /**
     * @test
     */
    public function testUpdatetechnology()
    {
        $technology = $this->maketechnology();
        $editedtechnology = $this->faketechnologyData();

        $this->json('PUT', '/api/v1/technologies/'.$technology->id, $editedtechnology);

        $this->assertApiResponse($editedtechnology);
    }

    /**
     * @test
     */
    public function testDeletetechnology()
    {
        $technology = $this->maketechnology();
        $this->json('DELETE', '/api/v1/technologies/'.$technology->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/technologies/'.$technology->id);

        $this->assertResponseStatus(404);
    }
}
