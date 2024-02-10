<?php

namespace Feature;

use Tests\TestCase;

class ReleaseNotesReachabilityTest extends TestCase
{
    public function test_release_notes_is_reachable()
    {
        $response = $this->get('/early-access/release-notes');

        $response->assertStatus(200);
    }
}
