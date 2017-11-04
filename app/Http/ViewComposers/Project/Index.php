<?php

namespace App\Http\ViewComposers\Project;

use Illuminate\View\View;
use App\User;
use App\Models\Project;

class Index
{
    /**
     * The user projects
     *
     * @var Project[]
     */
    protected $projects;

    /**
     * Create a new project index composer.
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->projects = auth()->user()->projects()->paginate(10);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('projects', $this->projects);
    }
}