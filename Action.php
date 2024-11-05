<?php

namespace Nacosvel\Contracts\DatabaseManager;

abstract class Action
{
    const ACTION_START            = 1;
    const ACTION_END              = 2;
    const ACTION_PREPARE          = 4;
    const ACTION_PREPARE_COMMIT   = 8;
    const ACTION_PREPARE_ROLLBACK = 16;
    const ACTION_COMMIT           = 32;
    const ACTION_ROLLBACK         = 64;

    public static function fromValue(int $value): string
    {
        return match ($value) {
            1 => 'ACTION_START',
            2 => 'ACTION_END',
            4 => 'ACTION_PREPARE',
            8 => 'ACTION_PREPARE_COMMIT',
            16 => 'ACTION_PREPARE_ROLLBACK',
            32 => 'ACTION_COMMIT',
            64 => 'ACTION_ROLLBACK',
            default => $value,
        };
    }

}
