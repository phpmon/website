<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class ReleaseNotesReachabilityTest extends TestCase
{
    private string $releaseNotesPath;

    private ?string $originalContent = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->releaseNotesPath = public_path('builds/early-access/sponsors/changelog.md');

        if (File::exists($this->releaseNotesPath)) {
            $this->originalContent = File::get($this->releaseNotesPath);
        }
    }

    protected function tearDown(): void
    {
        if ($this->originalContent !== null) {
            File::put($this->releaseNotesPath, $this->originalContent);
        } else {
            File::delete($this->releaseNotesPath);

            $directory = dirname($this->releaseNotesPath);
            $publicPath = public_path();

            while ($directory !== $publicPath
                && File::isDirectory($directory)
                && File::isEmptyDirectory($directory)
            ) {
                File::deleteDirectory($directory);
                $directory = dirname($directory);
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
