<?php
/**
 * @version		1.0
 * @package		plg_sys_copyproof_website
 * @copyright	Copyright (C) Tawhidur Rahman Dear. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Import required Joomla classes
use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Plugin\CMSPlugin;


class plgSystemCopyproof_Website extends JPlugin
{
    // Class constructor
    public function __construct($subject, $config)
    {
        parent::__construct($subject, $config);
    }

    // Triggered before the <head> tag is compiled
    public function onBeforeCompileHead()
    {
        $app  = Factory::getApplication();
        $doc  = Factory::getDocument();

        // Make sure the script runs on the front-end only
        if ($app->isClient('administrator') || $doc->getType() !== 'html') {
            return;
        }

        // Add jQuery (if not already added)
		use Joomla\CMS\HTML\HTMLHelper;
		HTMLHelper::_('jquery.framework');


        // Path to your JavaScript file
        $scriptPath = Uri::root() . 'media/plg_system_copyproof_website/copyproof_website.js';

        // Add your JavaScript file to the head
        $doc->addScript($scriptPath);
    }
}