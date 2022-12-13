<?php

namespace Tests\Unit;

use Tests\TestCase;

class secondTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->assertTrue(true);
       $this->get("/second")->assertStatus(200);
    }
}
