<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class InstallHomebrewReachabilityTest extends TestCase
{
    public function test_install_homebrew_page_is_reachable(): void
    {
        $response = $this->get('/install-homebrew');

        $response->assertOk();
    }

    public function test_install_homebrew_page_explains_homebrew_setup(): void
    {
        $response = $this->get('/install-homebrew');

        $response->assertOk();
        $response->assertSee('Why PHP Monitor needs Homebrew');
        $response->assertSee('/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"', false);
        $response->assertSee('Why this is required');
        $response->assertSee('After Homebrew is installed');
        $response->assertSee('/install-apple-devtools');
        $response->assertSee('https://brew.sh');
    }
}
