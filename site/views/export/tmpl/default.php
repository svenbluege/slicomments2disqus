<?php
/**
 * @package     Sven.Bluege
 * @subpackage  com_slicommentstodisqus
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');

require_once JPATH_ROOT . '/components/com_content/helpers/route.php';
require_once JPATH_ROOT . '/components/com_content/router.php';

$db		= JFactory::getDbo();
$query	= $db->getQuery(true)
    ->select('*')
    ->from('#__content');

$db->setQuery($query);
$articles = $db->loadObjectList();

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0"
     xmlns:content="http://purl.org/rss/1.0/modules/content/"
     xmlns:dsq="http://www.disqus.com/"
     xmlns:dc="http://purl.org/dc/elements/1.1/"
     xmlns:wp="http://wordpress.org/export/1.0/"
    >
    <channel>
        <?php foreach($articles as $article): ?>
            <?php $this->set('article',$article); echo $this->loadTemplate('item'); ?>
        <?php ENDFOREACH ?>
    </channel>
</rss>