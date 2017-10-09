<?php

namespace App\Http\ViewComposers\Project;

use Illuminate\View\View;
use App\User;
use App\Models\Project;

class Index
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $projects;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
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