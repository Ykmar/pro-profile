<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPolicyControllerTest extends TestCase
{
    /** @test */
    public function guest_can_see_the_privacy_policy()
    {
        $response = $this->get('/privacy-policy');

        $response->assertStatus(200);
        $response->assertSee('Politique de confidentialité');
    }
}
