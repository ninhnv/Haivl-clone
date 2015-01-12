<?php /* Smarty version 2.6.6, created on 2014-10-24 17:26:56
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'footer.tpl', 5, false),)), $this); ?>
	<div class="footer">
        <div>
			<p>
				<!--<?php if ($_SESSION['USERID'] != ""): ?>
					You are logged in as <?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 - <a href=<?php echo $this->_tpl_vars['mobileurl']; ?>
/logout>logout</a>
				<?php else: ?>  
					You are logged in as a visitor. <a href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/login">Login</a> to be able to vote
				<?php endif; ?>-->
        	<p>&copy; 2014 Ảnh hải | Hoyvl.net. <a target="_blank" href="http://www.hoyvl.net"></a></p>
        </div>
    </div>
</body>
</html>