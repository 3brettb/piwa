<?php

namespace App\Http\ViewComposers\Task;

use Illuminate\View\View;
use App\Models\Project;
use App\Resources\Task as TaskResource;

class Create
{

    private $priorities;

    private $types;

    /**
     * Create a new task create composer.
     *
     * @param Project $project
     */
    public function __construct(Project $project)
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