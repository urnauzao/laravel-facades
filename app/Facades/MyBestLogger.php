<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * @method static /App/Domains/Helpers/MyLogger error(string $message, array $context = [], $string $code = "")
 * @method static /App/Domains/Helpers/MyLogger critical(string $message, array $context = [], $string $code = "")
 * @see App/Domains/Helpers/MyBestLogger
 */
class MyBestLogger extends Facade
{
    protected static function getFacadeAccessor(){
        return "mybestlogger";
    }
}
