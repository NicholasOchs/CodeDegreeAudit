<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExceptionsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = \App\Models\Exceptions::create(['Cause_of_Exception' => 'Some reason']);
        $this->assertDatabaseHas('exceptions',['Cause_of_Exception' => 'Some reason']);
    }
}
