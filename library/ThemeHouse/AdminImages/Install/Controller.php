<?php

class ThemeHouse_AdminImages_Install_Controller extends ThemeHouse_Install
{
    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/admin-images.1266/';
    
    
	protected function _getContentTypeFields()
	{
		return array(
			'node' => array(
				'admin_image_handler_class' => 'ThemeHouse_AdminImages_AdminImageHandler_Node',
				'attachment_handler_class' => 'ThemeHouse_AdminImages_AttachmentHandler_Node',
			),
		);
	} /* END _getContentTypeFields */
}