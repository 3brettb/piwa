<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

abstract class ViewComposer
{

    abstract function compose(View $view);

}