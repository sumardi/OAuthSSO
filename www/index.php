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
ob_start();
require_once("../core/init.php");

switch($_GET['opt']) {
	case 'authorize':
		echo "Authorize";
	break;
	
	default:
		header("HTTP/1.1 500 Internal Server Error");
		header("Content-Type: text/plain");
		echo "Unknown request.";
}
?>