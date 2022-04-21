<?php

use Illuminate\Support\Facades\Artisan;


function toggleSettings($config, $key, $folder)
{
    config([$config . '.' . $key => !config($config . '.' . $key)]);

    $fp = fopen(base_path() . '/config/' . $folder . '.php', 'w');

    fwrite($fp, '<?php return ' . var_export(config('adminlte'), true) . ';');

    fclose($fp);

    Artisan::call('config:clear');
}


function showClassNavbar()
{
    $navbar = config('adminlte.aside');
    $classNavbar = [];
    if ($navbar) {
        foreach ($navbar as $key => $value) {
            if ($value) {
                $classNavbar[] = $key;
            }
        }
    }
    return $classNavbar;
}
