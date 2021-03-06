<?php
/**
 * OAuthSSO
 * a single sign-on platform using OAuth
 *
 * @author		Sumardi Shukor <smd@php.net.my>
 * @license		GNU GPL
 * @version		0.1.1
 * 
 * OAuthSSO is free software; you can redistribute it and/or modify it under the terms of 
 * the GNU General Public License as published by the Free Software Foundation; either version 2 
 * of the License, or (at your option) any later version.
 * 
 * You should have received a copy of the GNU General Public License along with OAuth. 
 * If not, see <http://www.gnu.org/licenses/>
 */
define("BASE_PATH", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);
define("LIBS_PATH", BASE_PATH . DS . "libs");

if(!defined("INCLUDED")) define("INCLUDED", true);

require_once(BASE_PATH . DS . "config.php");
require_once(LIBS_PATH . DS . "smarty" . DS . "Smarty.class.php");

$tpl = new Smarty();
$tpl->cache_dir = "./cache";
$tpl->compile_dir = "./cache/templates_c";
$tpl->template_dir = array(BASE_PATH . DS . "templates");

// assign default variables
$tpl->assign("BASE_URL", BASE_URL);
$tpl->assign("TITLE", "OAuth Single Sign-On");

?>