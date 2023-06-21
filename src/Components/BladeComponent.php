<?php

declare(strict_types=1);

namespace BladeUIKit\Components;

use Illuminate\View\Component as IlluminateComponent;

abstract class BladeComponent extends IlluminateComponent
{
    /** @var array */
    public static array $assets = [];

    public static function assets(): array
    {
        return static::$assets;
    }
}
