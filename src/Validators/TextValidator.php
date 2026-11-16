<?php

namespace Moonsea\Fields\Validators;

use Moonsea\Fields\Contracts\FieldValueValidator;

final class TextValidator implements FieldValueValidator
{
    public function validate(array $value, array $options = [], array $validation = []): bool
    {
        $text = $value['value_string'] ?? null;
        if (! is_string($text) || trim($text) === '') {
            return false;
        }
        $length = mb_strlen(trim($text));

        return $length >= ($validation['min_length'] ?? 0) && $length <= ($validation['max_length'] ?? 512);
    }

    public function filter(array $value, array $options = [], array $validation = []): array
    {
        return ['value_string' => trim((string) $value['value_string'])];
    }

    public function scalar(array $value): ?string
    {
        return $value['value_string'] ?? null;
    }
}
