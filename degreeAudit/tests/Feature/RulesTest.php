<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RulesTest extends TestCase
{
    Use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = \App\Models\Rules::create(['Name' => 'Credit Rule', 'Stated_Rule' => 'This program needs 118 Credits']);
        $this->assertDatabaseHas('Rules',['Name' => 'Credit Rule', 'Stated_Rule' => 'This program needs 118 Credits']);
    }
}
