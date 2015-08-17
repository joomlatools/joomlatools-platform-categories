<?php
/**
 * Joomla Platform - http://developer.joomlatools.org/platform
 *
 * @copyright	Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/joomlatools/joomla-platform for the canonical source repository
 */

JLoader::register('CategoriesTableCategories' , JPATH_ADMINISTRATOR . '/components/com_categories/tables/categories.php');
JLoader::register('CategoriesViewCategories'  , JPATH_SITE . '/components/com_categories/views/categories/view.html.php');
JLoader::register('CategoriesViewCategoryfeed', JPATH_SITE . '/components/com_categories/views/category/view.feed.php');

JLoader::registerAlias('JTableCategory'   , 'CategoriesTableCategories');
JLoader::registerAlias('JViewCategories'  , 'CategoriesViewCategories');
JLoader::registerAlias('JViewCategoryfeed', 'CategoriesViewCategoryfeed');

JHtml::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_categories/helpers/html');