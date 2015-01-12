<?php /* Smarty version 2.6.6, created on 2014-10-24 17:26:56
         compiled from view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_advertisement', 'view.tpl', 16, false),array('insert', 'return_youtube', 'view.tpl', 29, false),array('insert', 'return_fod', 'view.tpl', 33, false),array('insert', 'return_vfy', 'view.tpl', 37, false),array('insert', 'return_vmo', 'view.tpl', 41, false),array('modifier', 'stripslashes', 'view.tpl', 22, false),array('modifier', 'makeseo', 'view.tpl', 72, false),)), $this); ?>
<div id="header">
       <h1 class="hooppps"> <a href='<?php echo $this->_tpl_vars['mobileurl']; ?>
/'><img style="padding-top: 7px;" src="<?php echo $this->_tpl_vars['mobileurl']; ?>
/images/l2.png" /></a> </h1>
        <!--<a id="nav_button" label="<?php echo $this->_tpl_vars['lang173']; ?>
" class='nav' href='javascript:void(0);'><?php echo $this->_tpl_vars['lang173']; ?>
</a>-->
        <!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'lang.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->
    </div>
	<div style="display:none" id="header">
       <div id="search_wrapper">
                    <form action="<?php echo $this->_tpl_vars['mobileurl']; ?>
/search">
                        <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="<?php echo $this->_tpl_vars['lang189']; ?>
"/>
                    </form>
        </div>
		<a href='<?php echo $this->_tpl_vars['mobileurl']; ?>
/submit' class='submit'>submit</a>
    </div>
    <div class="post-leaderboard-ads">
    	<center>
    	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 1)), $this); ?>

        </center>
    </div>

    <div id="content">
    
        <a href="<?php echo $this->_tpl_vars['mobileurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
"><h1><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h1></a>
		<?php if ($this->_tpl_vars['p']['pic'] != ""): ?>
            <a href="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['p']['pic']; ?>
">Xem toàn màn hình</a>
			<a href="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['p']['pic']; ?>
"><img alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['p']['pic']; ?>
" /></a>
        <?php else: ?>
            <?php if ($this->_tpl_vars['p']['youtube_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['p']['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>

            </center>
            <?php elseif ($this->_tpl_vars['p']['fod_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['p']['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>

            </center>
			<?php elseif ($this->_tpl_vars['p']['vfy_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['p']['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>

            </center>
			<?php elseif ($this->_tpl_vars['p']['vmo_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['p']['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>

            </center>
			<?php else: ?>
			<center>
			<?php echo $this->_tpl_vars['lang143']; ?>

			</center>
            <?php endif; ?>
        <?php endif; ?>
		
		
        <div class='stats-container'>
            <div class='stats-tooltip-border'></div>
            <div class='stats-tooltip'></div>
            <ul class='stats'>
				<?php if ($_SESSION['USERID'] != ""): ?>
					<?php if ($this->_tpl_vars['p']['favorited'] == '1'): ?>
					<a href=""><li class='loved'><?php echo $this->_tpl_vars['p']['favclicks']; ?>
</li></a>
					<a href=""><li class='unlove'>&nbsp;</li></a>
					<?php else: ?>
						<?php if ($this->_tpl_vars['p']['unfavorited'] == '1'): ?>
						<a href=""><li class='love'><?php echo $this->_tpl_vars['p']['favclicks']; ?>
</li></a>
						<a href=""><li class='unloved'>&nbsp;</li></a>
						<?php else: ?>
						<a href=""><li class='love'><?php echo $this->_tpl_vars['p']['favclicks']; ?>
</li></a>
						<a href=""><li class='unlove'>&nbsp;</li></a>
                    <?php endif; ?>
				<?php endif; ?>
				<?php else: ?>
				<a href=""><li class='love'><?php echo $this->_tpl_vars['p']['favclicks']; ?>
</li></a>
				<a href=""><li class='unlove'>&nbsp;</li></a>
				<?php endif; ?>
				<li class='fblike'><fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : makeseo($_tmp)); ?>
.html<?php endif; ?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like></li>
                <li class='view'>
                    <a> </fb:comments-count> <?php echo $this->_tpl_vars['lang143']; ?>
</a>
                </li>
            </ul>
        </div>
        <div id="facebook-comments-<?php echo $this->_tpl_vars['p']['PID']; ?>
" class="facebook-comments inited">
            <fb:comments href="" num_posts="5" width="300" colorscheme="dark"></fb:comments>
        </div>
    
    </div>
    
    <!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'lang2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->