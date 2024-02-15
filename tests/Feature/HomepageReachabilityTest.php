<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class HomepageReachabilityTest extends TestCase
{
    public function test_homepage_is_reachable()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
