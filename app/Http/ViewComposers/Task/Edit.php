<?php

namespace App\Http\ViewComposers\Task;

use Illuminate\View\View;
use App\Models\Project;
use App\Resources\Models\Task as TaskResource;
use App\Resources\Models\Project as ProjectResource;

class Edit
{

    private $priorities;

    private $types;

    private $statuses;

    private $taskables;

    /**
     * Create a new task create composer.
     *
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        $project = request()->route('project');
        // Dependencies automatically resolved by service container...
        $this->priorities = TaskResource::PrioritiesList();
        $this->statuses = TaskResource::StatusesList();
        $this->types = TaskResource::TypesList();
        $this->taskables = ProjectResource::TaskableList($project);
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
             ->with('statuses_list', $this->statuses)
             ->with('types_list', $this->types)
             ->with('taskable_list', $this->taskables);
    }
}