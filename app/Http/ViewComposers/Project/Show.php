<?php

namespace App\Http\ViewComposers\Project;

use Illuminate\View\View;
use App\Resources\Models\Project as ProjectResource;
use App\Models\Project;

class Show
{

    /**
     * Create a new project index composer.
     *
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('recent_tasks', ProjectResource::RecentTasks($view->project, 10));
    }
}