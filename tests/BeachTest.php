<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class BeachTest extends TestCase
{    
    public function testGetAllBeaches()
    {
        $this->get('/api/beaches');
        $this->assertContains(
            'natal', $this->response->getContent()
        );
    }

    public function testGetAllRegions()
    {
        $this->get('/api/regions');
        $this->assertContains(
            'SP', $this->response->getContent()
        );
    }

    public function testGetBeachesByRegion()
    {
        $this->get('/api/beaches/SP');
        $this->assertContains(
            'ilha_bela', $this->response->getContent()
        );
        $this->assertContains(
            'SP', $this->response->getContent()
        );
        $this->assertNotContains(
            'RJ', $this->response->getContent()
        );
    }

    public function testGetBeach()
    {
        $this->get('/api/beaches/CE/fortaleza');
        $this->assertContains(
            'fortaleza', $this->response->getContent()
        );
        $this->assertContains(
            'CE', $this->response->getContent()
        );
        $this->assertNotContains(
            'ilha bela', $this->response->getContent()
        );
        $this->assertNotContains(
            'RJ', $this->response->getContent()
        );
    }



    /*$this->json('GET', '/api/beaches', ['name' => 'Sally'])
            ->seeJson([
            'created' => true,
            ]);*/        


}