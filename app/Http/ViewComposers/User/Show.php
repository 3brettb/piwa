<?php

namespace App\Http\ViewComposers\User;

use App\Http\ViewComposers\ViewComposer;
use Illuminate\View\View;

class Show extends ViewComposer
{
    /**
     * The displayed User
     * @var $user
     */
    private $user;

    /**
     * Tasks Opened by this User
     * @var $opened
     */
    private $opened;

    /**
     * Unresolved Tasks Assigned to this User
     * @var $assigned
     */
    private $assigned;

    /**
     * Create a new task create composer.
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->user = routeVar('user');
        $this->opened = $this->user->opened_tasks;
        $this->assigned = $this->user->assigned_tasks;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('opened_tasks', $this->opened)
             ->with('assigned_tasks', $this->assigned);
    }

}