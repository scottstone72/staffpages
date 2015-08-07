<?php namespace Stone\StaffPages\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Manager Back-end Controller
 */
class Manager extends Controller
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

        BackendMenu::setContext('Stone.StaffPages', 'staffpages', 'manager');
    }
}