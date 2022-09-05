<?php

namespace Tests\Feature;

use Tests\TestCase;

class RedirectReachabilityTest extends TestCase
{
    public function test_redirects_work()
    {
        $response = $this->get('/github');
        $response->assertStatus(302);
        $response->assertRedirect('https://github.com/nicoverbruggen/phpmon');

        $this->get('/faq')->assertStatus(302);
        $this->get('/releases')->assertStatus(302);
        $this->get('/sponsor')->assertStatus(302);
        $this->get('/sponsor/now')->assertStatus(302);
    }
}
