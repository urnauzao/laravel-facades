<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class MyLogger extends Facade
{
    protected static function getFacadeAccessor(){
        return 'MyLogger';
    }
}