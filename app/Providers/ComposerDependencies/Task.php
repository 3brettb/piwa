<?php

    use Illuminate\Support\Facades\View;

    View::composer(
        ['dir.task.create'],
        'App\Http\ViewComposers\Task\Create'
    );

    View::composer(
        ['dir.task.edit'],
        'App\Http\ViewComposers\Task\Edit'
    );