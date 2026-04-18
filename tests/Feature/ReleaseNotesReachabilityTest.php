<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class ReleaseNotesReachabilityTest extends TestCase
{
    private string $releaseNotesPath;

    private bool $releaseNotesExisted = false;

    private ?string $originalReleaseNotesContent = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->releaseNotesPath = public_path('builds/early-access/sponsors/changelog.md');
        $this->releaseNotesExisted = File::exists($this->releaseNotesPath);
        $this->originalReleaseNotesContent = $this->releaseNotesExisted
            ? File::get($this->releaseNotesPath)
            : null;
    }

    protected function tearDown(): void
    {
        if ($this->releaseNotesExisted) {
            File::put($this->releaseNotesPath, $this->originalReleaseNotesContent ?? '');
        } else {
            File::delete($this->releaseNotesPath);

            foreach ([
                dirname($this->releaseNotesPath),
                dirname(dirname($this->releaseNotesPath)),
                dirname(dirname(dirname($this->releaseNotesPath))),
            ] as $directory) {
                if (File::isDirectory($directory) && File::isEmptyDirectory($directory)) {
                    File::deleteDirectory($directory);
                }
            }
        }

        parent::tearDown();
    }

    public function test_release_notes_returns_not_found_when_markdown_file_is_missing(): void
    {
        File::delete($this->releaseNotesPath);

        $response = $this->get('/early-access/release-notes');

        $response->assertNotFound();
    }

    public function test_release_notes_renders_markdown_content(): void
    {
        File::ensureDirectoryExists(dirname($this->releaseNotesPath));
        File::put($this->releaseNotesPath, "# Test heading\n\nA paragraph for sponsors.");

        $response = $this->get('/early-access/release-notes');

        $response->assertOk();
        $response->assertSee('<h1>Release Notes</h1>', false);
        $response->assertSee('<h1>Test heading</h1>', false);
        $response->assertSee('<p>A paragraph for sponsors.</p>', false);
    }
}
