<?php

namespace App\Http;

class Redirection
{
    public function __construct(
        public readonly string $url,
        public readonly string $target,
        public readonly string $name
    ) {}

    public static function named($name, $url, $target): Redirection {
        return new Redirection($url, $target,$name);
    }
}