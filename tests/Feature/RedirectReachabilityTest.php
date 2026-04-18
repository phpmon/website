<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class RedirectReachabilityTest extends TestCase
{
    public function test_redirects_work(): void
    {
        foreach ([
            '/github' => 'https://github.com/nicoverbruggen/phpmon',
            '/releases' => 'https://github.com/nicoverbruggen/phpmon/releases',
            '/faq' => 'https://github.com/nicoverbruggen/phpmon?tab=readme-ov-file#%E2%80%8D%EF%B8%8F-faq--troubleshooting',
            '/sponsor' => 'https://nicoverbruggen.be/sponsor',
            '/sponsor/now' => 'https://nicoverbruggen.be/sponsor#pay-now',
            '/prerelease-php' => 'https://github.com/nicoverbruggen/phpmon/wiki/Supporting-pre-release-versions-of-PHP',
            '/php-unavailable' => 'https://github.com/nicoverbruggen/phpmon/wiki/Installing-or-upgrading-to-the-latest-version-of-PHP#why-is-a-php-version-marked-as-unavailable',
            '/php-upgrade' => 'https://github.com/nicoverbruggen/phpmon/wiki/Installing-or-upgrading-to-the-latest-version-of-PHP',
        ] as $path => $target) {
            $this->get($path)
                ->assertStatus(302)
                ->assertRedirect($target);
        }
    }
}
