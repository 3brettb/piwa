<?php

    use Illuminate\Support\Facades\View;

    View::composer(
        ['dir.task.create'],
        'App\Http\ViewComposers\Task\Create'
    );