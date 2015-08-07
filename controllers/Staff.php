<?php namespace Stone\StaffPages\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Staff Back-end Controller
 */
class Staff extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Stone.StaffPages', 'staffpages', 'staff');
    }

//    public function index() {
//        $this->addCss('/plugins/stone/staffpages/assets/css/staffPages.css');
//    }
}