<?php namespace Stone\StaffPages;

use System\Classes\PluginBase;
use Backend;

/**
 * StaffPages Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'StaffPages',
            'description' => 'Adds the ability to add staff and have page update dynamically when new entries added',
            'author'      => 'Stone',
            'icon'        => 'icon-venus-double'
        ];
    }

    public function registerComponents() {
        return [
          'Stone\StaffPages\Components\StaffListing' => 'stafflisting',
          'Stone\StaffPages\Components\ManagersListing' => 'managerslisting'
        ];
    }

    public function registerPermissions()
    {
        return [
          'stone.staffpages.access_staff_pages' => ['tab' => 'staff', 'label' => 'Hello']
        ];
    }

    public function registerNavigation() {
        return [
          'staffpages' => [
                'label' => 'Staff Pages',
                'url' => Backend::url('stone/staffpages/manager'),
                'icon' => 'icon-venus-double',
                'permissions' => ['stone.staffpages.*'],
                'order' => 100,

                'sideMenu' => [
                  'managers' => [
                    'label' => 'Managers',
                    'icon' => 'icon-male',
                    'url' => Backend::url('stone/staffpages/manager'),
                    'permissions' => ['stone.staffpages.access_staff_pages']
                  ],
                  'staff' => [
                        'label' => 'Staff',
                        'icon' => 'icon-venus-mars',
                        'url' => Backend::url('stone/staffpages/staff'),
                        'permissions' => ['stone.staffpages.access_staff_pages']
                      ],
                ],
          ],
        ];
    }

}
