<?php /* Smarty version Smarty-3.0.8, created on 2011-06-04 15:53:46
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/OAuthSSO/core/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14362642384dea550a3a9fb8-15290801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29eacfe143f9d26cbf0d16d2fc2d8c6daf6da88' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/OAuthSSO/core/templates/login.tpl',
      1 => 1307202825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14362642384dea550a3a9fb8-15290801',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<div class="container" style='padding-top:20px'>
	<div id="header" class="span-24 last">
		<h1><a href="index.php"><?php echo $_smarty_tpl->getVariable('TITLE')->value;?>
</a></h1>
	</div>
	<hr />
	
	    <div class="span-17" id="content">
	    	<p>A service has requested you to authenticate yourself. Please enter your username and password in the form below.</p>
        	<form method="post" action="<?php echo $_smarty_tpl->getVariable('BASE_URL')->value;?>
/authorize">
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

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>