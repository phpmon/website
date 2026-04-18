<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPolicyReachabilityTest extends TestCase
{
    public function test_privacy_policy_is_reachable(): void
    {
        $response = $this->get('/privacy-policy');

        $response->assertOk();
    }

    public function test_privacy_policy_renders_markdown_content(): void
    {
        $response = $this->get('/privacy-policy');

        $response->assertOk();
        $response->assertSee('<h2>Introduction</h2>', false);
        $response->assertSee('<h2>Crash reports</h2>', false);
        $response->assertSee('info@phpmon.app');
    }
}
