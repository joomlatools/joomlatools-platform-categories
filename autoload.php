<?php
/**
 * Joomlatools Platform - http://developer.joomlatools.org/platform
 *
 * @copyright	Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/joomlatools/joomlatools-platform for the canonical source repository
 */

if (!defined('JOOMLATOOLS_PLATFORM')) {
	return;
}

JLoader::register('JCategories'               , JPATH_ADMINISTRATOR . '/components/com_categories/libraries/categories.php');
JLoader::register('JCategoryNode'             , JPATH_ADMINISTRATOR . '/components/com_categories/libraries/categories.php');
JLoader::register('CategoriesTableCategories' , JPATH_ADMINISTRATOR . '/components/com_categories/tables/categories.php');

if(JPATH_BASE == JPATH_SITE)
{
    JLoader::register('CategoriesViewCategory'    , JPATH_SITE . '/components/com_categories/views/category/view.html.php');
    JLoader::register('CategoriesViewCategories'  , JPATH_SITE . '/components/com_categories/views/categories/view.html.php');
    JLoader::register('CategoriesViewCategoryfeed', JPATH_SITE . '/components/com_categories/views/category/view.feed.php');
}

JLoader::register('JFormFieldCategoryEdit'  , JPATH_ADMINISTRATOR . '/components/com_categories/models/fields/categoryedit.php');
JLoader::register('JFormFieldCategoryParent', JPATH_ADMINISTRATOR . '/components/com_categories/models/fields/categoryparent.php');
JLoader::register('JFormFieldCategory'      , JPATH_ADMINISTRATOR . '/components/com_categories/models/fields/category.php');

JLoader::registerAlias('JTableCategory'   , 'CategoriesTableCategories');
JLoader::registerAlias('JViewCategories'  , 'CategoriesViewCategories');
JLoader::registerAlias('JViewCategoryfeed', 'CategoriesViewCategoryfeed');

JHtml::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_categories/helpers/html');