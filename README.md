<h1>Description</h1>
A single sign-on platform using OAuth.
<h1>Installation</h1>
<h2>Prerequisites</h2>
<ul>
	<li>Web server capable of executing PHP scripts</li>
	<li>PHP version >= 5.2.0</li>
	<li>Support of for the following PHP extensions:</li>
		<ul>
			<li>PDO</li>
			<li>OAuth</li>
		</ul>
</ul>
<h2>Configuring Apache</h2>
Find the Apache configuration file for the virtual hosts where you want to run OAuthSSO. The configuration may look like this:<br />
	<code>
	<VirtualHost *>
	        ServerName connect.example.com
	        DocumentRoot /var/www/connect.example.com
	
	        Alias /oauthsso /var/www/connect.example.com/www
	        
	        <Directory "/var/www/connect.example.com">
                    Options Indexes FollowSymLinks MultiViews
                    AllowOverride None
                    Order allow,deny
                    Allow from all
            </Directory>
	</VirtualHost>
	</code>
<h1>License</h1>
OAuthSSO is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. You should have received a copy of the GNU General Public License along with OAuthSSO. If not, see http://www.gnu.org/licenses.
<h1>Authors</h1>
Sumardi Shukor <a href="mailto:smd@.php.net.my">&lt;smd@php.net.my&gt;</a>

