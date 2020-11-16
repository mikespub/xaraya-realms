<?php
/**
 * Return the options for the admin menu
 *
 */

// TODO: turn this into an xml file
    function realms_dataapi_adminmenu()
    {
        return array(
            array('includes' => array('main','overview'), 'target' => 'main', 'label' => xarML('Realms Overview')),
            array('mask' => 'ManageRealms', 'includes' => 'view_members', 'target' => 'view_members', 'title' => xarML('Manage members of realms'), 'label' => xarML('Realm Members')),
            array('mask' => 'ManageRealms', 'includes' => 'view', 'target' => 'view', 'title' => xarML('Manage the master tables of thsi module'), 'label' => xarML('Master Tables')),
            array('mask' => 'AdminRealms', 'includes' => 'modifyconfig', 'target' => 'modifyconfig', 'title' => xarML('Modify the Realms configuration'), 'label' => xarML('Modify Config')),
        );
    }
