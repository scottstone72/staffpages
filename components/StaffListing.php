<?php namespace Stone\StaffPages\Components;

use Cms\Classes\ComponentBase;
use Stone\StaffPages\Models\Staff;

class StaffListing extends ComponentBase
{

    /**
     * To hold our staff listings passed from the model
     * @var
     */
    public $staffListing;

    public function componentDetails()
    {
        return [
            'name'        => 'Staff Listing',
            'description' => 'This adds ability to dynamically add staff to a page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->staffListing = Staff::all();
    }

}