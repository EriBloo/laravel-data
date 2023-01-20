<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Max extends StringValidationAttribute
{
    public function __construct(protected int $value)
    {
    }

    public static function keyword(): string
    {
        return 'max';
    }

    public function parameters(?string $path): array
    {
        return [$this->value];
    }
}
