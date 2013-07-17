<?php 
/**
 * @package     Sven.Bluege
 * @subpackage  com_slicommentstodisqus
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

jimport( 'joomla.application.component.view');

class slicommentstodisqusViewExport extends JViewLegacy
{
    

	function display($tpl = null)
	{	
		JToolBarHelper::title(   JText::_( 'slicomments 2 disqus' ), 'generic.png' );
		parent::display($tpl);
	}
}

