<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NigoriceTest extends TestCase
{	
	private $password = "123456";
	/**
     * Run the Unit Testing.
     *
     * @return void
     * @author thomas
     */
    public function setUp() {
	    parent::setUp();
	    $this->artisan('migrate:refresh');   
        $this->seed(); 
	}
	
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
