<?php

function includeArea($file, $withSiteDir = true)
{
    \WM\Components\IncludeArea::inc('', array('PATH' => ($withSiteDir ? SITE_DIR : null) . 'include/' . $file . '.php'));
}

defined('_DS_') or define('_DS_', DIRECTORY_SEPARATOR);
if(is_file($_SERVER['DOCUMENT_ROOT'] . _DS_ . 'local' . _DS_ . 'WM' . _DS_ . 'autoloader.php'))
    require_once $_SERVER['DOCUMENT_ROOT'] . _DS_ . 'local' . _DS_ . 'WM' . _DS_ . 'autoloader.php';