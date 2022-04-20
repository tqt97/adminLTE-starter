<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('formatDate')) {
    function formatDate($date, $format = 'd-m-Y')
    {
        return date($format, strtotime($date));
    }
}
if (!function_exists('aside')) {
    function aside()
    {
        $sidebarSettings = Cache::rememberForever('aside', function () {
            return  config('aside');
        });
        if ($sidebarSettings) {

            return $sidebarSettings;
        }
    }
}
