<?php

declare(strict_types=1);

namespace App\Http;

final readonly class Redirection
{
    public function __construct(
        public string $url,
        public string $target,
        public string $name
    ) {}

    public static function named($name, $url, $target): Redirection
    {
        return new Redirection($url, $target, $name);
    }
}
