<?php

/**
 * @package     Sven.Bluege
 * @subpackage  com_slicommentstodisqus
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');

$article_id=$this->article->id;
$catid=$this->article->catid;

$newUrl = ContentHelperRoute::getArticleRoute($article_id, $catid);

// better will be check if SEF option is enable!
$router = new JRouterSite(array('mode'=>JROUTER_MODE_SEF));
$newUrl = $router->build($newUrl)->toString(array('path', 'query', 'fragment'));
// SEF URL !
$newUrl = str_replace('/administrator/', '', $newUrl);

//and now the tidying, as Joomlas JRoute makes a cockup of the urls.
#$newUrl = str_replace('component/content/article/', '', $newUrl);

$title = $this->article->title;

// make a full qualified url and remove the double slash
$link = JUri::base().substr($newUrl,1);


$fulltext = $this->article->fulltext;
if (strlen($fulltext)<10) {
    $fulltext = $this->article->introtext;
}
$fulltext="";

$created = $this->article->created;



?>

        <item>
            <!-- title of article -->
            <title><?php echo $title;?></title>
            <!-- absolute URI to article -->
            <link><?php echo $link; ?></link>
            <!-- body of the page or post; use cdata; html allowed (though will be formatted to DISQUS specs) -->
            <content:encoded><![CDATA[<?php echo $fulltext ?>]]></content:encoded>
            <!-- value used within disqus_identifier; usually internal identifier of article -->
            <dsq:thread_identifier>/joomla/com_content.article/<?php echo $this->article->id?></dsq:thread_identifier>
            <!-- creation date of thread (article), in GMT. Must be YYYY-MM-DD HH:MM:SS 24-hour format. -->
            <wp:post_date_gmt><?php echo $created; ?></wp:post_date_gmt>
            <!-- open/closed values are acceptable -->
            <wp:comment_status>open</wp:comment_status>
            <?php echo $this->loadTemplate('comments'); ?>
        </item>
