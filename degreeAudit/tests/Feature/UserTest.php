<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = \App\Models\users::create(['First_Name' => 'Test', 'Last_Name' => 'Dummy', 'Email' => 'test@email', 'Role_Id' => 1, 'Program_Id' => 2]);
        $this->assertDatabaseHas('users',['First_Name' => 'Test', 'Last_Name' => 'Dummy', 'Email' => 'test@email', 'Role_Id' => 1, 'Program_Id' => 2]);
    }
}
