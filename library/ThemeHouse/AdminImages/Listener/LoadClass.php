<?php

class ThemeHouse_AdminImages_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_AdminImages' => array(
                'model' => array(
                    'XenForo_Model_Attachment',
                ), /* END 'model' */
            ), /* END 'ThemeHouse_AdminImages' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_AdminImages_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */
}