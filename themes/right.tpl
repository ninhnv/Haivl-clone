	<div class="side-bar">
		<div class="note highlightBox">
            	<p>Vào <a href="https://www.facebook.com/pages/Hoyvl/829623453725688">Facebook</a> để duyệt hoyvl sướng hơn! Bạn không vào được? Xem hướng dẫn cách vào <a href="#">Facebook</a>.</p>
        </div> 
    	{if $smarty.session.USERID eq ""}
        <li id="side-bar-signup">
        	<a class="spcl-button green" href="{$baseurl}/signup" label="Header">{$lang148}</a>
        </li>
        {/if}
		{include file='top10.tpl'}
        <div style="display:none" class="s-300">
        	<!--{insert name=get_advertisement AID=2}-->
        </div>
        <div class="social-block">
            <h3>{$lang153} </h3>
            <div class="facebook-like">
				<div class="fb-like" data-href="{$baseurl}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="twitter-follow">
            	<a href="http://twitter.com/{$twitter}" class="twitter-follow-button">{$lang149} @{$twitter}</a>
            </div>            
            <div class="google-plus">
            	<p>{$lang150}</p>
            	<g:plusone size="medium" href="{$baseurl}"></g:plusone>
            </div>
        </div>
		<!--<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
                <div class="popular-block">
                    <h3>Hot</h3>
                    <ol>
                    	{insert name=get_feat_gags assign=recgags}
                        {section name=i loop=$recgags}
                        <a class="wrap" href="{$baseurl}/photo/{$recgags[i].PID}">
                            <li>
                            	{if $recgags[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
                                <img src="{$baseurl}/images/nsfw.jpg" alt="{$recgags[i].story|stripslashes|mb_truncate:20:"...":'UTF-8'}" />	
                                {else}
                                <img src="{$purl}/{$recgags[i].pic}" alt="{$recgags[i].story|stripslashes|mb_truncate:20:"...":'UTF-8'}" />
                                {/if}		
                                <h4>{$recgags[i].story|stripslashes|mb_truncate:20:"...":'UTF-8'}</h4>
                                <h4><a href="{$baseurl}/user/{$recgags[i].username|stripslashes}">{$recgags[i].username|stripslashes}</a></h4>
                                <p class="meta">
									<span class="comment"><fb:comments-count href="{$baseurl}/photo/{$recgags[i].PID}"></fb:comments-count></span>
                                    <span class="loved">{insert name=get_fav_count value=var assign=fcount PID=$recgags[i].PID}{$fcount}</span>
									<span class="viewed">{$recgags[i].postviewed}</span>
                                </p>
                            </li>
                        </a>
                        {/section}
                    </ol>
                </div>
            </div>-->
        <div id="moving-boxes">
            <div class="s-300" >            
            	<!--{insert name=get_advertisement AID=1}-->
				<a href="https://www.facebook.com/pages/Hoyvl/829623453725688"><img style="width:100%; height:100%;border: 1px solid;" src="{$baseurl}/images/like.png" /></a>
            </div> 
            <div class="section-2" style="width:250px">
                <div class="wrap" style="width:250px">
                    <ul class="sideinfo side-items-left" style="overflow:visible; width:400px;display: block;">
                        <li><a href="{$baseurl}/about">Giới thiệu</a></li>
                        <li style="display:none">·<a href="{$baseurl}/rules">{$lang135}</a></li>
                        <li>·<a href="{$baseurl}/faq">{$lang202}</a></li>
                        <li style="display:none">·<a href="{$baseurl}/terms_of_service">{$lang203}</a></li>
                        <li style="display:none">·<a href="{$baseurl}/privacy_policy">{$lang204}</a></li>
                        <li>·<a href="{$baseurl}/contact">{$lang205}</a></li>
                    </ul>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>