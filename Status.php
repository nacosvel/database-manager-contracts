<?php

namespace Nacosvel\Contracts\DatabaseManager;

abstract class Status
{
    const START    = 1;
    const COMMIT   = 2;
    const ROLLBACK = 4;

    public static function fromValue(int $value): string
    {
        return match ($value) {
            1 => 'START',
            2 => 'COMMIT',
            4 => 'ROLLBACK',
            default => $value,
        };
    }

}
