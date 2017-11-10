<?php

    use Illuminate\Support\Facades\View;

    View::composer(
        ['dir.project.index'],
        'App\Http\ViewComposers\Project\Index'
    );

    View::composer(
        ['dir.project.show'],
        'App\Http\ViewComposers\Project\Show'
    );