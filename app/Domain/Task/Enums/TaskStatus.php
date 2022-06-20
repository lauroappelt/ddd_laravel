<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

class TaskStatus extends Enum
{
    private const COMPLETE = 'COMPLETE';
    private const INCOMPLETE = 'INCOMPLETE';

    public static function status($value)
    {
        if ($value == self::COMPLETE) {
            return 'line-through';
        } elseif ($value == self::INCOMPLETE) {
            return 'none';
        }
    }
}
