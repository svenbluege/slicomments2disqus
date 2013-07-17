<?php
/**
 * @package     Sven.Bluege
 * @subpackage  com_slicommentstodisqus
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');



class slicommentstodisqusController extends JControllerLegacy
{
	
	protected $default_view = 'export';


	function __construct()
	{
		parent::__construct();	
	}
	/*
	 * Standard display method
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   array    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JControllerLegacy  A JControllerLegacy object to support chaining.

	 */
	public function display($cachable = false, $urlparams = false)
	{
		parent::display($cachable, $urlparams);
	}
	
}
