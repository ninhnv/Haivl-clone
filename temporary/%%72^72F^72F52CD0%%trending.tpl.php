<?php /* Smarty version 2.6.6, created on 2014-10-23 23:35:16
         compiled from trending.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_advertisement', 'trending.tpl', 16, false),array('insert', 'return_youtube', 'trending.tpl', 33, false),array('insert', 'return_fod', 'trending.tpl', 37, false),array('insert', 'return_vfy', 'trending.tpl', 41, false),array('insert', 'return_vmo', 'trending.tpl', 45, false),array('modifier', 'stripslashes', 'trending.tpl', 24, false),array('modifier', 'makeseo', 'trending.tpl', 74, false),)), $this); ?>
	<div id="header">
        <h1 class="hooppps"> <a href='<?php echo $this->_tpl_vars['mobileurl']; ?>
/'><img style="padding-top: 7px;" src="<?php echo $this->_tpl_vars['mobileurl']; ?>
/images/l2.png" /></a> </h1>
        <a id="nav_button" label="<?php echo $this->_tpl_vars['lang173']; ?>
" class='nav' href='javascript:void(0);'><?php echo $this->_tpl_vars['lang173']; ?>
</a>
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
    
    	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['posts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <a href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">  
            <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h1>
		</a>
		<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
			<a href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">  
				<img alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" border="0" />
			</a>
        <?php else: ?>
            <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>

            </center>
            <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>

            </center>
			<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>

            </center>
			<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'] != ""): ?>
            <center>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>

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
					<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['favorited'] == '1'): ?>
					<a href=""><li class='loved'><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
</li></a>
					<a href=""><li class='unlove'>&nbsp;</li></a>
					<?php else: ?>
						<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['unfavorited'] == '1'): ?>
						<a href=""><li class='love'><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
</li></a>
						<a href=""><li class='unloved'>&nbsp;</li></a>
						<?php else: ?>
						<a href=""><li class='love'><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
</li></a>
						<a href=""><li class='unlove'>&nbsp;</li></a>
                    <?php endif; ?>
				<?php endif; ?>
				<?php else: ?>
				<a href=""><li class='love'><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
</li></a>
				<a href=""><li class='unlove'>&nbsp;</li></a>
				<?php endif; ?>
				<li class='fblike'><fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : makeseo($_tmp)); ?>
.html<?php endif; ?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like></li>
                <li class='view'>
                    <a  data-url="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:comments-count> <?php echo $this->_tpl_vars['lang143']; ?>
</a>
                </li>
            </ul>
        </div>
        <div id="facebook-comments-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="facebook-comments" style="display:none"></div>
       	<?php endfor; endif; ?>
    
    </div>
    
    <div style="text-align:center">
        <div id="pagination" class="flip">
        	<!--<?php if ($this->_tpl_vars['tpp'] != ""): ?>
            <a id="jump_next" class='pagebuttons' href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/trending?page=<?php echo $this->_tpl_vars['tpp']; ?>
">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
            <?php else: ?>
        	<a href="#" onclick="return false;" class="pagebuttons disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
            <?php endif; ?>-->
            <?php if ($this->_tpl_vars['tnp'] != ""): ?>
         	<a id="jump_next" class='pagebuttons' href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/trending?page=<?php echo $this->_tpl_vars['tnp']; ?>
">Xem tiếp. Còn nhiều lắm</a>	
            <?php else: ?>
            <a href="#" onclick="return false;" class="pagebuttons disabled">Xem tiếp. Còn nhiều lắm</a>
            <?php endif; ?>												
        </div>
    </div>
			
    <div id='nav'>
        <ul>
            <div class='tip-border'></div>
            <li><a href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/"><?php echo $this->_tpl_vars['lang172']; ?>
</a></li>
            <li><a href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/trending"><?php echo $this->_tpl_vars['lang173']; ?>
</a></li>
            <li><a href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/vote"><?php echo $this->_tpl_vars['lang174']; ?>
</a></li>
        </ul>
    </div>
    
    <?php echo '
    <script type="text/javascript">
    $(function() {
    $(\'.nav\').toggle(
    function() {    
    $(\'.nav\').text("x");
    $(\'#nav\').css({ display: \'block\', opacity: 1}); 
    },
    function() {
    $(\'.nav\').html($(\'#nav_button\').attr(\'label\'));
    $(\'#nav\').css({ display: \'\'});
    }
    );
    });
    </script>
    '; ?>

    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'lang2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>