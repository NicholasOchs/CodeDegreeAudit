<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = \App\Models\Classes::create(['Class_Code' => 'CS500', 'Common_Name' => 'Computer Stuff', 'Credits' => 3]);
        $this->assertDatabaseHas('classes',['Class_Code' => 'CS500', 'Common_Name' => 'Computer Stuff', 'Credits' => 3]);
    }
}
