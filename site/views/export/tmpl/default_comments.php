<?php

/**
 * @package     Sven.Bluege
 * @subpackage  com_slicommentstodisqus
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');

$db		= JFactory::getDbo();
$query	= $db->getQuery(true)
    ->select('*')
    ->from('#__slicomments')
    ->where('article_id='. $this->article->id)
    ->where('status=1');
$db->setQuery($query);
$comments = $db->loadObjectList();

?>
<?php FOREACH ($comments as $comment):?>
        <wp:comment>
            <!-- internal id of comment -->
            <wp:comment_id><?php echo $comment->id?></wp:comment_id>
            <!-- author display name -->
            <wp:comment_author><?php echo $comment->name?></wp:comment_author>
            <!-- author email address -->
            <wp:comment_author_email><?php echo $comment->email?></wp:comment_author_email>
            <!-- author url, optional -->
            <wp:comment_author_url></wp:comment_author_url>
            <!-- author ip address -->
            <wp:comment_author_IP></wp:comment_author_IP>
            <!-- comment datetime, in GMT. Must be YYYY-MM-DD HH:MM:SS 24-hour format. -->
            <wp:comment_date_gmt><?php echo $comment->created?></wp:comment_date_gmt>
            <!-- comment body; use cdata; html allowed (though will be formatted to DISQUS specs) -->
            <wp:comment_content><![CDATA[<?php echo $comment->raw?>]]></wp:comment_content>
            <!-- is this comment approved? 0/1 -->
            <wp:comment_approved><?php echo $comment->status?></wp:comment_approved>
            <!-- parent id (match up with wp:comment_id) -->
            <wp:comment_parent>0</wp:comment_parent>
        </wp:comment>
<?php ENDFOREACH ?>
