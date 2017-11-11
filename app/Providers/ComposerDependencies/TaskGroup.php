<?php

use Illuminate\Support\Facades\View;

View::composer(
    ['dir.taskgroup.show'],
    'App\Http\ViewComposers\TaskGroup\Show'
);