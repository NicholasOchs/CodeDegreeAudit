<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CatalogTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = \App\Models\Catalog::create(['Program_Name' => 'Test', 'Year_Created' => 2000]);
        $this->assertDatabaseHas('catalogs',['Program_Name' => 'Test', 'Year_Created' => 2000]);
    }
}
