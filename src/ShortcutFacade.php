<?php

namespace LudioAo\Shortcut;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LudioAo\Shortcut\Shortcut
 */
class ShortcutFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shortcut';
    }
}
