<?php

declare(strict_types=1);

namespace Shipyard;

/**
 * Placeholder release. Shipyard reserves this package name while the real
 * engine is in development.
 *
 * @see https://useshipyard.io
 */
final class Shipyard
{
    public const MESSAGE = 'useshipyard — coming soon. https://useshipyard.io';

    public static function comingSoon(): string
    {
        return self::MESSAGE;
    }
}
