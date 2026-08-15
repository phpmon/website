<?php

declare(strict_types=1);

namespace App\Content;

use Illuminate\Support\Collection;

/**
 * The homepage Q&A, used both to render the FAQ section and to emit the
 * matching FAQPage structured data. Keep it here so the two can't drift apart.
 */
final class Faq
{
    /**
     * @return Collection<int, Question>
     */
    public static function questions(): Collection
    {
        return collect([
            Question::make(
                'Can PHP Monitor set up PHP on a fresh Mac?',
                'Yes. Setup Assistant can guide you through preparing a local PHP development environment on macOS, including the various packages and dependencies that PHP Monitor expects to find and uses to give you a great development environment.',
            ),
            Question::make(
                'Does PHP Monitor require Laravel Valet?',
                'Not required, but recommended.',
                'I should note that PHP Monitor works best with <a href="https://github.com/laravel/valet" class="text-primary underline">Laravel Valet</a> because many of its project and domain management features integrate with Valet.',
                "Some PHP version and configuration features can still be useful without it! If you don't have Valet installed, PHP Monitor runs in Standalone Mode.",
            ),
            Question::make(
                'Can I use multiple PHP versions?',
                'Yes. PHP Monitor includes a PHP Version Manager for installing, upgrading, removing, repairing, and switching between PHP versions.',
            ),
            Question::make(
                'Can each site use a different PHP version?',
                'Yes. PHP Monitor supports site isolation, so individual domains can use their own PHP version while the rest of your system keeps using the global version.',
            ),
            Question::make(
                'Can PHP Monitor install PHP extensions?',
                'Yes, some extensions can be installed and removed via the PHP Extension Manager.',
                'If an uncommon extension is not listed, you can use <a href="https://github.com/php/pie" class="text-primary underline">pie</a> to install and manage that extension, and it will show up in PHP Monitor, too.',
            ),
            Question::make(
                'Is PHP Monitor totally free?',
                'Yes. There are no walled off features.',
                'PHP Monitor is 100% free and open source. Development is supported by voluntary sponsorships and donations.',
            ),
            Question::make(
                'Why should I use this instead of Laravel Herd?',
                'Well, you should use the developer tooling you find most useful and works best for your workflow!',
                'I built PHP Monitor because it neatly integrates with <a href="' . route('setup.homebrew') . '" class="text-primary underline">Homebrew</a>, which you may already be using for other dependencies, too. It\'s a great package manager.',
                '<a href="https://herd.laravel.com" class="text-primary underline">Laravel Herd</a> and other solutions don\'t integrate with Homebrew, which can be an advantage or disadvantage depending on your use case. You can decide what works best for you. I\'m just offering you a free, open-source option here.',
            ),
        ]);
    }

    /**
     * The Q&A as a schema.org FAQPage graph.
     *
     * @return array<string, mixed>
     */
    public static function schema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => self::questions()->toArray(),
        ];
    }
}
