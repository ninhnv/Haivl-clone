<?php /* Smarty version 2.6.6, created on 2014-10-14 11:34:34
         compiled from search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'search.tpl', 18, false),array('modifier', 'stripslashes', 'search.tpl', 23, false),array('modifier', 'truncate', 'search.tpl', 31, false),)), $this); ?>
<div id="main">
    <div id="content-holder">
        <div class="search-bar">
            <form id="searchbar" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search" method="get">
                <div class="field search">
                	<input id="page_search" type="text" name="query" class="search search_input" value="<?php echo $this->_tpl_vars['query']; ?>
" placeholder="<?php echo $this->_tpl_vars['lang190']; ?>
" />
                </div>
            </form>
        </div>
        <div id="content">
            <div id="view-controller">
                <div id="view-info">
                	<p><?php echo $this->_tpl_vars['total']; ?>
 <?php echo $this->_tpl_vars['lang191']; ?>
</p>
                </div>
            </div>
            <div id="entries-content" class="grid">
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
                <ul id="grid-col-1" class="col-<?php if ($this->_sections['i']['iteration'] > 9):  echo smarty_function_math(array('equation' => "x - 9",'x' => $this->_sections['i']['iteration']), $this); elseif ($this->_sections['i']['iteration'] > 6):  echo smarty_function_math(array('equation' => "x - 6",'x' => $this->_sections['i']['iteration']), $this); elseif ($this->_sections['i']['iteration'] > 3):  echo smarty_function_math(array('equation' => "x - 3",'x' => $this->_sections['i']['iteration']), $this); else:  echo $this->_sections['i']['iteration'];  endif; ?>">
                    <li class=" ">
                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="jump_stop">
                            <div style="" class="thimage">
                            	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
                                <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/youtube.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                                <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
                                <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/fod.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                                <?php else: ?>
                            	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </a>
                    	<h1><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</h1>
                        <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
                    </li>
                </ul>
                <?php endfor; endif; ?>            
            </div>
            <div id="paging-buttons" class="paging-buttons">
            	<?php if ($this->_tpl_vars['tpp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/search?page=<?php echo $this->_tpl_vars['tpp']; ?>
&query=<?php echo $this->_tpl_vars['query']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/search?page=<?php echo $this->_tpl_vars['tnp']; ?>
&query=<?php echo $this->_tpl_vars['query']; ?>
" class="older"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '
<script type="text/javascript">
var adloca=$(\'#moving-boxes\').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $(\'#moving-boxes\').css(\'position\',\'fixed\');
        $(\'#moving-boxes\').css(\'top\',\'55px\');
        $(\'#moving-boxes\').css(\'z-index\',\'200\');
    };
    if(curloca <= adloca){
        $(\'#moving-boxes\').css(\'position\',\'static\');
        $(\'#moving-boxes\').css(\'top\',\'!important\');
        $(\'#moving-boxes\').css(\'z-index\',\'!important\');
    };
    });
</script> 
'; ?>
   
<div id="footer" class="">