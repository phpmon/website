<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class InstallAppleDevtoolsReachabilityTest extends TestCase
{
    public function test_install_apple_devtools_page_is_reachable(): void
    {
        $response = $this->get('/install-apple-devtools');

        $response->assertOk();
    }

    public function test_install_apple_devtools_page_explains_setup(): void
    {
        $response = $this->get('/install-apple-devtools');

        $response->assertOk();
        $response->assertSee('Why PHP Monitor needs Apple Command Line Tools');
        $response->assertSee('xcode-select --install', false);
        $response->assertSee('Why this is required');
        $response->assertSee('After the tools are installed');
        $response->assertSee('/install-homebrew');
    }
}
