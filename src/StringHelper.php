<?php

namespace Gloobit\StringTools;

class StringHelper
{
    public function upper(string $value): string
    {
        return strtoupper($value);
    }

    public function lower(string $value): string
    {
        return strtolower($value);
    }

    public function slug(string $value): string
    {
        $value = strtolower(trim($value));

        $value = preg_replace('/[^a-z0-9]+/', '-', $value);

        return trim($value, '-');
    }
}
