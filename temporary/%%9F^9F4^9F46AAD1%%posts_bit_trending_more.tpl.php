<?php /* Smarty version 2.6.6, created on 2014-10-23 23:18:45
         compiled from posts_bit_trending_more.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'posts_bit_trending_more.tpl', 3, false),array('modifier', 'mb_truncate', 'posts_bit_trending_more.tpl', 3, false),array('insert', 'return_youtube3', 'posts_bit_trending_more.tpl', 15, false),array('insert', 'return_fod2', 'posts_bit_trending_more.tpl', 19, false),array('insert', 'get_time_to_days_ago', 'posts_bit_trending_more.tpl', 33, false),array('insert', 'get_fav_count', 'posts_bit_trending_more.tpl', 39, false),array('insert', 'get_fav_status', 'posts_bit_trending_more.tpl', 45, false),array('insert', 'get_unfav_status', 'posts_bit_trending_more.tpl', 54, false),)), $this); ?>
                    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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
                    <li class=" gag-link" data-url="<?php echo $this->_tpl_vars['baseurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" data-text="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, "...", 'UTF-8') : smarty_modifier_mb_truncate($_tmp, 20, "...", 'UTF-8')); ?>
" gagId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" itemType="list" id="entry-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                        <div class="content">
                            <div class="img-wrap">
                                <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
                                	<a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /></a>
                                <?php else: ?>
                                	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
                                	<a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /></a>
                                    <?php else: ?>
										<a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                                        <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
                                        <center>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube3', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>

                                        </center>
                                        <?php else: ?>
                                        <center>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod2', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>

                                        </center>
                                        <?php endif; ?>
										</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="watermark-clear"></div>                        
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info scriptolution-stop" id="action-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                                <h1><a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="jump_focus"><?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></h1>
                                <h4>
                                    <a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
                                    <p><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</p>
                                </h4>                                
                                <p>
                                    <span class="comment">
                                    	<iframe frameborder="0" scrolling="no" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/fbcoms.php?id=<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" width="20px" height="13"></iframe>
                                    </span>
                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_fav_count', 'value' => 'var', 'assign' => 'fcount', 'PID' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                    <span id="love_count_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="loved" votes="<?php echo $this->_tpl_vars['fcount']; ?>
" score="0"><?php echo $this->_tpl_vars['fcount']; ?>
</span>
									<div class="fb-like fb_iframe_widget" data-href="<?php echo $this->_tpl_vars['baseurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                </p>
                                <ul style="display:none" class="actions">
                                	<?php if ($_SESSION['USERID'] != ""): ?>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_fav_status', 'value' => 'var', 'assign' => 'isfav', 'PID' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                        <?php if ($this->_tpl_vars['isfav'] == '1'): ?>
                                        <li>
                                            <a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down "  entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                        </li>
                                        <li>
                                            <a class="vote love loved" id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                        </li>
                                        <?php else: ?>
                                        	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_unfav_status', 'value' => 'var', 'assign' => 'isunfav', 'PID' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                        	<?php if ($this->_tpl_vars['isunfav'] == '1'): ?>
                                            <li>
                                                <a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down unloved "  entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                            </li>
                                            <li>
                                                <a class="vote love " id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down "  entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                            </li>
                                        	<li>
                                                <a class="vote love " id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                            </li>
                                            <?php endif; ?>
                                    	<?php endif; ?>
                                    <?php else: ?>
                                    <li>
                                    	<a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down " entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                    </li>
                                    <li>
                                    	<a class="vote love " id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                                <div style="display:none" class="sharing-box ">
                                    <hr class="arrow" />
                                    <ul class="sharing ">
                                        <li class="facebook" id="share1-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                                        	<span id="list-share-twitter-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                                        	<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, "...", 'UTF-8') : smarty_modifier_mb_truncate($_tmp, 20, "...", 'UTF-8')); ?>
" data-url="<?php echo $this->_tpl_vars['baseurl']; ?>
/photo/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" data-count="horizontal" data-via="">&nbsp;</a>		
                                            </span>
                                        	<div style="float:right">
                                            <iframe frameborder="0" scrolling="no" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/share.php?id=<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" width="80px"></iframe>                                            
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a style="display:none" class="fix" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/fix/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"><?php echo $this->_tpl_vars['lang142']; ?>
</a>
                                <a style="display:none" class="report" entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang146']; ?>
</a>
                            </div>
                        </div>
                    </li>
                    <?php endfor; endif; ?> 
                    <?php echo '
					<script type="text/javascript">
                    $(\'.unlove\').click(function(){
                    var id=$(this).attr(\'entryId\');
                    if( $(this).hasClass(\'unloved\')){
                    $(this).removeClass(\'unloved\');
                    ulikedeg($(this).attr(\'entryId\'),0,-1);
                    }else{
                    $(this).addClass(\'unloved\');
                    if($(\'#post_love_\'+id).hasClass(\'loved\')){
                    ulikedeg($(this).attr(\'entryId\'),-1,1);	
                    $(\'#post_love_\'+id).removeClass(\'loved\');
                    }else{
                    ulikedeg($(this).attr(\'entryId\'),0,1);	
                    }
                    }
                    });
                    $(\'.vote\').click(function(){
                    var id=$(this).attr(\'rel\');
                    if( $(this).hasClass(\'loved\')){
                    $(this).removeClass(\'loved\');
                    ulikedeg($(this).attr(\'rel\'),-1,0);
                    }else{
                    $(this).addClass(\'loved\');
                    if($(\'#vote-down-btn-\'+id).hasClass(\'unloved\')){
                    $(\'#vote-down-btn-\'+id).removeClass(\'unloved\');
                    ulikedeg($(this).attr(\'rel\'),1,-1);
                    }else{
                    ulikedeg($(this).attr(\'rel\'),1,0);
                    }
                    }
                    });        
                    function ulikedeg(p,l,u){
                    jQuery.ajax({
                    type:\'POST\',
                    url:\'';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/trendgag.php\',
                    data:\'l=\'+l+\'&pid=\' + p +\'&u=\'+u,
                    success:function(e){
                    $(\'#love_count_\'+p).html(e);
                    }
                    });
                    }        
                    </script>
                    '; ?>