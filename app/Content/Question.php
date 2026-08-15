<?php

declare(strict_types=1);

namespace App\Content;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\HtmlString;

/**
 * A single homepage Q&A entry, which knows how to render itself and how to
 * describe itself as a schema.org Question.
 */
final readonly class Question implements Arrayable
{
    private function __construct(
        public string $question,
        public HtmlString $answer,
    ) {}

    /**
     * Answers are written as one or more paragraphs. Links are allowed: Google
     * renders a limited subset of HTML inside `acceptedAnswer`.
     */
    public static function make(string $question, string ...$paragraphs): self
    {
        return new self($question, new HtmlString(
            collect($paragraphs)->map(fn (string $paragraph): string => "<p>{$paragraph}</p>")->implode('')
        ));
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '@type' => 'Question',
            'name' => $this->question,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $this->answer->toHtml(),
            ],
        ];
    }
}
