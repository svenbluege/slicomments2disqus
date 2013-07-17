<?php
/**
 * @package     Sven.Bluege
 * @subpackage  com_slicommentstodisqus
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

//load tables
JTable::addIncludePath(
    JPATH_COMPONENT . DIRECTORY_SEPARATOR . 'tables'
);

JLoader::registerPrefix('slicommentstodisqus', JPATH_COMPONENT);

// Execute the task.
$controller	= JControllerLegacy::getInstance('slicommentstodisqus');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

