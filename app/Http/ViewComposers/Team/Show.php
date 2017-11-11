<?php

namespace App\Http\ViewComposers\Team;

use App\Http\ViewComposers\ViewComposer;
use Illuminate\View\View;
use App\Resources\Enums;

class Show extends ViewComposer
{

    /**
     * The Team Project
     * @var $project
     */
    private $project;

    /**
     * The displayed Team
     * @var $team
     */
    private $team;

    /**
     * Unresolved Tasks Assigned to this Team
     * @var $assigned
     */
    private $assigned;

    /**
     * Create a new task create composer.
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->project = routeVar('project');
        $this->team = routeVar('team');
        $this->assigned = $this->team->assigned_tasks();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('assigned_tasks', $this->assigned->where('status_id', '<', Enums\Status::$RESOLVED)->get())
             ->with('resolved_tasks', $this->assigned->where('status_id', Enums\Status::$RESOLVED)->get());
    }

}