<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPolicyReachabilityTest extends TestCase
{
    public function test_privacy_policy_is_reachable()
    {
        $response = $this->get('/privacy-policy');

        $response->assertStatus(200);
    }
}
