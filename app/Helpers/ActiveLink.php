<?php

// use Illuminate\Http\Request;

function activeUrl($url)
{
    return request()->is($url) ? 'active' : 'ưởng';
}

function activeRoute($route)
{
    return request()->routeIs($route) ? 'active' : 'ưởng';
}
