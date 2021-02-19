<?php

namespace Pyr0hu\LaravelModelChanges;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pyr0hu\LaravelModelChanges\LaravelModelChanges
 */
class LaravelModelChangesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-model-changes';
    }
}
