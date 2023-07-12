<?php

declare(strict_types=1);

namespace Smarts\Components;

use Livewire\Component;

abstract class LivewireComponent extends Component
{
    /** @var array */
    public static array $assets = [];

    public static function assets(): array
    {
        return static::$assets;
    }
}
