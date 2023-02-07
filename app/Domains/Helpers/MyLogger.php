<?php

namespace App\Domains\Helpers;

use Illuminate\Support\Facades\Log;

class MyLogger
{
    public function critical(string $msg, array $context = [], string $code = ""){
        logs()->critical("$code | $msg", $context);
    }

    public function error(string $msg, array $context = [], string $code = ""){
        Log::error("$code | $msg", $context);
    }
}
