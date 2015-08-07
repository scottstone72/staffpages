<?php namespace Stone\StaffPages\Components;

use Cms\Classes\ComponentBase;
use Stone\StaffPages\Models\Manager;


class ManagersListing extends ComponentBase
{

    /**
     * Holds list of managers to a page
     * @var
     */
    public $managers;

    public function componentDetails()
    {
        return [
            'name'        => 'Managers Listing',
            'description' => 'This adds ability to dynamically add managers to a page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->managers = Manager::all();
    }

}