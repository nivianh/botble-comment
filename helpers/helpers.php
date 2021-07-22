<?php

use Illuminate\Contracts\Filesystem\FileNotFoundException;

if (!function_exists('has_member')) {
    function has_member(): bool
    {
        if (config()->has('has_member')) {
            return config('has_member');
        }

        $config = (function () {
            try {
                return is_plugin_active('member');
            } catch (FileNotFoundException $exception) {
                return false;
            }
        })();

        config([
            'has_member' => $config,
        ]);

        return $config;
    }
}

if (!function_exists('has_passport')) {
    function has_passport(): bool
    {
        return class_exists('Laravel\Passport\Passport');
    }
}
