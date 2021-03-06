# Description
A single sign-on platform using OAuth.

# Installation

## Prerequisites
* Web server capable of executing PHP scripts
* PHP version >= 5.2.0
* Support of for the following PHP extensions:
	* PDO
	* OAuth
	* Rewrite

## Configuring Apache
Find the Apache configuration file for the virtual hosts where you want to run OAuthSSO. The configuration may look like this:


	<VirtualHost *:80>
	        ServerName connect.example.com
	        DocumentRoot /var/www/connect.example.com
	
	        Alias /oauthsso /var/www/connect.example.com/www
	        
	        <Directory "/var/www/connect.example.com">
                    Options Indexes FollowSymLinks MultiViews
                    AllowOverride All
                    Order allow,deny
                    Allow from all
            </Directory>
	</VirtualHost>
After installing OAuthSSO, you can access the homepage of your installation, which contains some information and a few links to the test services. The url of an installation can be e.g.:
	http://connect.example.com

# License
OAuthSSO is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. You should have received a copy of the GNU General Public License along with OAuthSSO. If not, see http://www.gnu.org/licenses.

# Authors
Sumardi Shukor <a href="mailto:smd@.php.net.my">&lt;smd@php.net.my&gt;</a>

