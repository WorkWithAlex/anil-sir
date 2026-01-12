<?php

if (! function_exists('is_active_route')) {
    function is_active_route($routeNames): string
    {
        foreach ((array) $routeNames as $route) {
            if (request()->routeIs($route)) {
                return 'text-slate-900 font-semibold';
            }
        }

        return 'text-slate-600 hover:text-slate-900';
    }
}
