<?php

namespace Tests\Unit;

use Tests\TestCase;

// Import Models
use App\Http\Models\Users;
use App\Http\Models\Nigorice;
// Import Faker
use Faker\Factory as Faker;

/*
|--------------------------------------------------------------------------
| Run the Unit Testing for the Nigorice Test # 3.
|--------------------------------------------------------------------------
| @author Thomas
|
*/

class NigoriceTest extends TestCase {	
	
    /*
    |--------------------------------------------------------------------------
    | Set Up Depedency
    | run php artisan migrate:refresh --seed : https://laravel.com/docs/5.5/migrations     |--------------------------------------------------------------------------
    | @return void
    |
    */

    public function setUp() {
	    parent::setUp();
	    $this->artisan('migrate:refresh');   
        $this->seed(); 
	}
	
    /*
    |--------------------------------------------------------------------------
    | Unit Testing  
    |--------------------------------------------------------------------------
    | @return void
    |
    */

    public function testUnit() {
        // Populate dummy data : https://github.com/fzaninotto/Faker
        $faker = Faker::create();
        // Test host available & Descrition
        $this->hostTest();
        // Test Login Page with Dummy user
        $credentials    = $this->loginTest();
        // get the first data from first date
        $first_data = Nigorice::orderBy('date')->first();
        // Test Show Page with first data
        $this->showTest($credentials,$first_data);
        // Test Create new data with faker
        $this->createTest($credentials,$faker);
        // Test Update data with faker 
        $this->updateTest($credentials,$faker,$first_data);
    }

    /*
    |--------------------------------------------------------------------------
    | Test host available & Description 
    |--------------------------------------------------------------------------
    | @return void
    |
    */

    private function hostTest() {
        $this->get('/')
        ->assertStatus(200)
        ->assertSee("Nigorice Test 3");
    }

    /*
    |--------------------------------------------------------------------------
    | Test Login Page with Dummy user
    |--------------------------------------------------------------------------
    | @return credentials login
    |
    */

    private function loginTest() {
        // populate data from factory
        // https://laravel.com/docs/5.5/seeding
        $user = factory(Users::class)->create();
        // Authentication
        $credentials       = $this->actingAs($user);
        // testing index page and Description
        $credentials->get('/index')
            ->assertStatus(200)
            ->assertSee("Dashboard");
        return $credentials;
    }

    /*
    |--------------------------------------------------------------------------
    | Test Show Page with first data
    |--------------------------------------------------------------------------
    | @return void
    |
    */

    private function showTest($credentials,$first_data) {
        
        /*
        |--------------------------------------------------------------------------
        | get & status : check the http response status from get 
        | assertSee : check the description is equal to data or not
        | cast to convert int to string :  
        | http://php.net/manual/en/language.types.type-juggling.php
        |--------------------------------------------------------------------------
        |
        */

        $credentials->get('/show?uuid='.$first_data->uuid)
            ->assertStatus(200) 
            ->assertSee($first_data->date)
            ->assertSee((string)$first_data->max)
            ->assertSee((string)$first_data->min)
            ->assertSee('Show Detail of information');
    }

    /*
    |--------------------------------------------------------------------------
    | Test Create new data with faker
    |--------------------------------------------------------------------------
    | @return void
    |
    */

    private function createTest($credentials,$faker) {
        // get & status : check the http response status from get  & Desc
        $credentials->get('/create')
            ->assertStatus(200)
            ->assertSee('Create New Data');
        // populate data from faker
        $data = [
            'date'          => $faker->date("2016-m-d","now"),
            'max'           => $faker->numberBetween(50,60),
            'min'           => $faker->numberBetween(40,49),
            'uuid'          => $faker->uuid,
            'created_at'    => date("Y-m-d H:i:s")
        ];
        // test HTTP post to create the data & the redirect uri 
        $credentials->json('POST', '/create_post', $data)
            ->assertRedirect('/index');
    }

    /*
    |--------------------------------------------------------------------------
    | Test Update data with faker 
    |--------------------------------------------------------------------------
    | @return void
    |
    */

    private function updateTest($credentials,$faker,$first_data) {
        
        /*
        |--------------------------------------------------------------------------
        | get & status : check the http response status from get 
        | assertSee : check the description is equal to data or not
        | cast to convert int to string :  
        | http://php.net/manual/en/language.types.type-juggling.php
        |--------------------------------------------------------------------------
        |
        */

        $credentials->get('/edit?uuid='.$first_data->uuid)
                    ->assertStatus(200)
                    ->assertSee($first_data->date)
                    ->assertSee((string)$first_data->max)
                    ->assertSee((string)$first_data->min)
                    ->assertSee('Edit information');
        // populate data from faker
        $data = [
            'max'       => $faker->numberBetween(1000,1007),
            'min'       => $faker->numberBetween(980,990),
            'uuid'      => $first_data->uuid
        ];            
        // test HTTP post to create the data & the redirect uri 
        $credentials->json('POST', '/edit_post', $data)
            ->assertRedirect('/index');
    }

}
