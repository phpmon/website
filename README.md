# PHP Monitor website

This is a simplified Laravel project, with some providers and Laravel functionality disabled because said functionality is not needed for the simple marketing site that is required.

## What's included

This repository contains the PHP Monitor marketing site and a few project-specific pages and utilities:

- A custom homepage for PHP Monitor with the site's marketing content and feature highlights.
- An early access changelog page at `/early-access/release-notes`, which renders a Markdown changelog from `public/builds/early-access/sponsors/changelog.md`.
- A privacy policy page at `/privacy-policy`, sourced from `resources/markdown/privacy_policy.md`.
- Short redirect routes such as `/github`, `/releases`, `/faq`, `/sponsor`, and a few wiki shortcuts that point visitors to the main project resources.
- A small console command, `php artisan github:fetch`, that retrieves GitHub stars and release download counts for display on the homepage.

There are also feature tests covering the homepage, the privacy policy page, the release notes page, and the custom redirects.

## Requirements

See `composer.json`.

## Tests

    composer verify

This will run Rector, Pint and check if all tests pass.
