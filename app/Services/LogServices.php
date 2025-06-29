<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class LogServices
{

    /**
     * @method Create Error log
     * @param
     * @return
     */
    public static function createInfoLog($details, $default = 'vermocs_log')
    {
        Log::channel($default)->info($details);
        return true;
    }

    /**
     * @method Create Error log
     * @param
     * @return
     */
    public static function createErrorLog($details, $default = 'vermocs_log')
    {

        Log::channel($default)->error($details);
        return true;
    }

    /**
     * @method Create Warning log
     * @param
     * @return
     */
    public static function createWarningLog($details, $default = 'vermocs_log')
    {
        Log::channel($default)->warning($details);
        return true;
    }
}
