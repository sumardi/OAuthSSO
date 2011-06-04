{include file='header.tpl'}

<div class="container" style='padding-top:20px'>
	<div id="header" class="span-24 last">
		<h1><a href="index.php">{$TITLE}</a></h1>
	</div>
	<hr />
	
	    <div class="span-17" id="content">
	    	<p>A service has requested you to authenticate yourself. Please enter your username and password in the form below.</p>
        	<form method="post" action="{$BASE_URL}/authorize">
        			<h2>Authentication User</h2>
        			<p>
        				<label for="email">Username : </label><br />
        				<input type="text" class="title" name="email" size="50" />
        			</p>	
        			<p>
        				<label for="pass">Password : </label><br />
        				<input type="password" class="title" name="pass" size="50" /> 
        			</p>	
        			<p>
        				<input type="submit" value="Login" />
        			</p>
        	</form>
       	</div>
    
</div>

{include file='footer.tpl'}