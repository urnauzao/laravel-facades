<?php

namespace App\Domains\Helpers;

use Illuminate\Support\Facades\Log;

class MyBestLogger
{
    public function critical(string $msg, array $context = [], string $code = ""){
        logs()->critical("Best $code | $msg", $context);
    }

    public function error(string $msg, array $context = [], string $code = ""){
        Log::error("Best $code | $msg", $context);
    }
}
