<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Use this class to add some common functionality to your site. Like a navigation menu or whatever you like.
 *
 */
class MasterController extends MY_Controller {

	protected $_pageTitle = 'Ganz Toll';

	public function show($additionalData = array())
	{
		/* Add some code here for example	.
		 *
		*/

		parent::show($additionalData);
	}
	
	public function responsiveImage($filename, $width)
	{
		/*
		 * restrinjo en 3 tamaños
		 * 
		 * 500px
		 * 1000px
		 * 1500px
		 */
		if ( $width <= 500 )
			parent::responsiveImage ($filename, 500);
		elseif ( $width > 500 && $width <= 1000 )
			parent::responsiveImage ($filename, 1000);
		else
			parent::responsiveImage ($filename, 1500);
	}
}