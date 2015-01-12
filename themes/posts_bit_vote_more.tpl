                    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                    {section name=i loop=$posts}               
                    <li class=" gag-link" data-url="{$baseurl}/photo/{$posts[i].PID}" data-text="{$posts[i].story|stripslashes|mb_truncate:20:"...":'UTF-8'}" gagId="{$posts[i].PID}" itemType="list" id="entry-{$posts[i].PID}">
                        <div class="content">
                            <div class="img-wrap">
                                {if $posts[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
                                	<a target="_blank" href="{$baseurl}/photo/{$posts[i].PID}"><img src="{$baseurl}/images/nsfw.jpg" alt="{$posts[i].story|stripslashes}" /></a>
                                {else}
                                	{if $posts[i].pic ne ""}
                                	<a target="_blank" href="{$baseurl}/photo/{$posts[i].PID}"><img src="{$purl}/t/{$posts[i].pic}" alt="{$posts[i].story|stripslashes}" /></a>
                                    {else}
										<a target="_blank" href="{$baseurl}/photo/{$posts[i].PID}">
                                        {if $posts[i].youtube_key != ""}
                                        <center>
                                        {insert name=return_youtube3 value=a assign=youtube youtube=$posts[i].youtube_key}{$youtube}
                                        </center>
                                        {else}
                                        <center>
                                        {insert name=return_fod2 value=a assign=fod fod=$posts[i].fod_key}{$fod}
                                        </center>
                                        {/if}
										</a>
                                    {/if}
                                {/if}
                            </div>
                            <div class="watermark-clear"></div>                        
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info scriptolution-stop" id="action-{$posts[i].PID}">
                                <h1><a target="_blank" href="{$baseurl}/photo/{$posts[i].PID}" class="jump_focus">{$posts[i].story|stripslashes}</a></h1>
                                <h4>
                                    <a target="_blank" href="{$baseurl}/user/{$posts[i].username|stripslashes}"><span style="color: #999">Đăng bởi</span> {$posts[i].username|stripslashes}</a>
                                    <p>{insert name=get_time_to_days_ago time=$posts[i].time_added}</p>
                                </h4>                                
                                <p>
                                    <span class="comment">
                                    	<iframe frameborder="0" scrolling="no" src="{$baseurl}/fbcoms.php?id={$posts[i].PID}" width="20px" height="13"></iframe>
                                    </span>
                                    {insert name=get_fav_count value=var assign=fcount PID=$posts[i].PID}
                                    <span id="love_count_{$posts[i].PID}" class="loved" votes="{$fcount}" score="0">{$fcount}</span>
									<div class="fb-like fb_iframe_widget" data-href="{$baseurl}/photo/{$posts[i].PID}" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                </p>
                                <ul class="actions">
                                	{if $smarty.session.USERID ne ""}
                                        {insert name=get_fav_status value=var assign=isfav PID=$posts[i].PID}
                                        {if $isfav eq "1"}
                                        <li>
                                            <a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down "  entryId="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang180}</span></a>
                                        </li>
                                        <li>
                                            <a class="vote love loved" id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang144}</span></a>
                                        </li>
                                        {else}
                                        	{insert name=get_unfav_status value=var assign=isunfav PID=$posts[i].PID}
                                        	{if $isunfav eq "1"}
                                            <li>
                                                <a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down unloved "  entryId="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang180}</span></a>
                                            </li>
                                            <li>
                                                <a class="vote love " id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang144}</span></a>
                                            </li>
                                            {else}
                                            <li>
                                                <a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down "  entryId="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang180}</span></a>
                                            </li>
                                        	<li>
                                                <a class="vote love " id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang144}</span></a>
                                            </li>
                                            {/if}
                                    	{/if}
                                    {else}
                                    <li>
                                    	<a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down " entryId="{$posts[i].PID}" href="{$baseurl}/login"><span>{$lang180}</span></a>
                                    </li>
                                    <li>
                                    	<a class="vote love " id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="{$baseurl}/login"><span>{$lang144}</span></a>
                                    </li>
                                    {/if}
                                </ul>
                                <div style="display:none" class="sharing-box ">
                                    <hr class="arrow" />
                                    <ul class="sharing ">
                                        <li class="facebook" id="share1-{$posts[i].PID}">
										<div class="fb-like" data-href="{$baseurl}/photo/{$posts[i].PID}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                                        </li>
                                    </ul>
                                </div>
                                <a style="display:none" class="fix" href="{$baseurl}/fix/{$posts[i].PID}">{$lang142}</a>
                                <a style="display:none" class="report" entryId="{$posts[i].PID}" href="javascript:void(0);">{$lang146}</a>
                            </div>
                        </div>
                    </li>
                    {/section}
                    {literal}
					<script type="text/javascript">
                    $('.unlove').click(function(){
                    var id=$(this).attr('entryId');
                    if( $(this).hasClass('unloved')){
                    $(this).removeClass('unloved');
                    ulikedeg($(this).attr('entryId'),0,-1);
                    }else{
                    $(this).addClass('unloved');
                    if($('#post_love_'+id).hasClass('loved')){
                    ulikedeg($(this).attr('entryId'),-1,1);	
                    $('#post_love_'+id).removeClass('loved');
                    }else{
                    ulikedeg($(this).attr('entryId'),0,1);	
                    }
                    }
                    });
                    $('.vote').click(function(){
                    var id=$(this).attr('rel');
                    if( $(this).hasClass('loved')){
                    $(this).removeClass('loved');
                    ulikedeg($(this).attr('rel'),-1,0);
                    }else{
                    $(this).addClass('loved');
                    if($('#vote-down-btn-'+id).hasClass('unloved')){
                    $('#vote-down-btn-'+id).removeClass('unloved');
                    ulikedeg($(this).attr('rel'),1,-1);
                    }else{
                    ulikedeg($(this).attr('rel'),1,0);
                    }
                    }
                    });        
                    function ulikedeg(p,l,u){
                    jQuery.ajax({
                    type:'POST',
                    url:'{/literal}{$baseurl}{literal}'+ '/votegag.php',
                    data:'l='+l+'&pid=' + p +'&u='+u,
                    success:function(e){
                    $('#love_count_'+p).html(e);
                    }
                    });
                    }        
                    </script>
                    {/literal}