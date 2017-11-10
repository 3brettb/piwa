<?php

namespace App\Http\ViewComposers\Task;

use App\Http\ViewComposers\ViewComposer;
use Illuminate\View\View;
use App\Resources\Models\Task as TaskResource;

class Create extends ViewComposer
{

    private $priorities;

    private $types;

    /**
     * Create a new task create composer.
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->priorities = TaskResource::PrioritiesList();
        $this->types = TaskResource::TypesList();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('priorities_list', $this->priorities)
             ->with('types_list', $this->types);
    }
}