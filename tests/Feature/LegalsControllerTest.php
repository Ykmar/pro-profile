<?php

namespace Tests\Feature;

use Tests\TestCase;

class LegalsControllerTest extends TestCase
{
    /** @test */
    public function guest_can_see_the_legal_notice()
    {
        $response = $this->get('/legals');

        $response->assertStatus(200);
        $response->assertSee('Mentions légales');
    }
}
