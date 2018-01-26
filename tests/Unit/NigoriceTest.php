<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Generator as Faker;

class NigoriceTest extends TestCase
{	
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
    public function testMain() {
        $this->test_laravel();
        //$this->Register();
    }

    public function test_laravel() {
        $this->visit('/')->seePageIs('/das');
    }
    private function Register() {

    }



}
