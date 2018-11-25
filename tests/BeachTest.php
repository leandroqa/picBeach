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

        $response = $this->call('GET', '/api/beaches');
        $this->assertEquals(200, $response->status());  

    }

    public function testGetAllRegions()
    {
        $this->get('/api/regions');
        $this->assertContains(
            'SP', $this->response->getContent()
        );
        
        $response = $this->call('GET', '/api/regions');
        $this->assertEquals(200, $response->status());  

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

    public function testPostReview()
    {
        $response = $this->call('POST', '/api/beaches/RJ/rio_de_janeiro/review', ['review' => 'Wonderful city.','name' => 'rio_de_janeiro', 'region' => 'RJ']);      
        $this->assertEquals(201, $response->status());        

        $response = $this->call('POST', '/api/beaches/SP/rio_de_janeiro/review', ['review' => 'Wonderful city.','name' => 'rio_de_janeiro', 'region' => 'SP']);
        $this->assertEquals(400, $response->status());  
        
    }   

    public function testPutReview()
    {
        //assert review exists
        //$response = $this->call('GET', '/api/beaches/RN/natal/review/1');      
        //$this->assertEquals(200,$response->status());

        //assert can not update a review which beach and region do not belong to
        $response = $this->call('PUT', '/api/beaches/RJ/natal/review/1',
            ['review' => 'Natal is smaler than Rio de janeiro!','name' => 'natal', 'region' => 'RJ','id' => 1]);      
        $this->assertEquals(400,$response->status());
        $response = $this->call('PUT', '/api/beaches/RN/ilha_bela/review/1',
            ['review' => 'Natal is smaler than Rio de janeiro!','name' => 'ilha_bela', 'region' => 'RN','id' => 1]);      
        $this->assertEquals(400,$response->status());
        $response = $this->call('PUT', '/api/beaches/SP/ilha_bela/review/1',
            ['review' => 'Natal is smaler than Rio de janeiro!','name' => 'ilha_bela', 'region' => 'SP','id' => 1]);            
        $this->assertEquals(400,$response->status());

        //update
        $response = $this->call('PUT', '/api/beaches/RN/natal/review/1', ['review' => 'Natal is smaler than Rio de janeiro!','name' => 'natal', 'region' => 'RN','id' => 1]);      
        $this->assertEquals(200,$response->status());

    }   

    public function testGetReview()
    {
        $response = $this->call('GET', '/api/beaches/RN/natal/review/1');      
        $this->assertEquals(501, $response->status());  
    } 

}