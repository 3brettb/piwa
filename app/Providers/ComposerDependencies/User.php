<?php

use Illuminate\Support\Facades\View;

View::composer(
    ['dir.user.show'],
    'App\Http\ViewComposers\User\Show'
);