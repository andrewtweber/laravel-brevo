<?php

declare(strict_types=1);

namespace Hofmannsven\Brevo\Facades;

use Brevo\Client\Configuration;
use Illuminate\Support\Facades\Facade;

/**
 * For some reason larastan is not detecting these Facade methods:
 * 
 * @method static Configuration getConfiguration()
 * @method static void setConfiguration(Configuration $configuration)
 */
class Brevo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'brevo';
    }
}
