# PHP Monitor website

This is a simplified Laravel project, with some providers and Laravel functionality disabled because said functionality is not needed for the simple marketing site that is required.

## What's included

This repository contains the PHP Monitor marketing site and a few project-specific pages and utilities:

- A custom homepage for PHP Monitor with the site's marketing content and feature highlights.
- An early access changelog page at `/early-access/release-notes`, which renders a Markdown changelog from `public/builds/early-access/sponsors/changelog.md`.
- A privacy policy page at `/privacy-policy`, sourced from `resources/markdown/privacy_policy.md`.
- Short redirect routes such as `/github`, `/releases`, `/faq`, `/sponsor`, and a few wiki shortcuts that point visitors to the main project resources.
- Two small console commands:
  - `php artisan github:fetch-statistics`, which retrieves GitHub stars and release download counts for display on the homepage.
  - `php artisan github:fetch-latest-release`, which retrieves the latest stable PHP Monitor version and release date for the homepage release banner.
- Composer hooks that run both GitHub fetch commands after autoloads are dumped, so homepage metadata is refreshed during deploys and dependency installs.

There are also feature tests covering the homepage, the privacy policy page, the release notes page, and the custom redirects.

## Requirements

See `composer.json`.

## Development setup

```bash
cp .env.example .env
php artisan key:generate
npm i
npm run build
```

## Tests

    composer verify

This will run Rector, Pint and check if all tests pass.
