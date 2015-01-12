    <div id="scriptolution-soft-share" class="scriptolution-soft-box ">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-scriptolution-soft-share" class="modal" action="">
                <h3>Tải lên thành công<span id="post-share-dismiss-counter"></span></h3>
                <h4>Ảnh của bạn sẽ được bình chọn bởi cộng đồng trước khi được hiển thị ở trang chủ.</h4>
                <div class="facebook-share">
                	<a href="javascript:myWindow('Facebook Share', 'http://www.facebook.com/sharer/sharer.php?u={$encodedurl}{$p.PID}', 'Facebook-Share-After-User-Post', 'Clicked');"></a>					
                </div>
                <div style="border-bottom: 0px solid #ddd;" class="other-social">
                    <div class="twitter-tweet">
                    	<a href="https://twitter.com/share" class="twitter-share-button" data-text="{$p.story|stripslashes}" data-url="{$baseurl}/photo/{$p.PID}" data-count="horizontal" data-via="">&nbsp;</a>						
                    </div>
                    <div class="google-plus">
                    	<g:plusone size="medium" href="{$baseurl}/photo/{$p.PID}"></g:plusone>	
                    </div>                    
                    <div class="facebook-button">
                    	<fb:like href="{$baseurl}/photo/{$p.PID}?ref=fb" send="false" layout="button_count" width="90" show_faces="false" font="" label="PostShare"></fb:like>
                    </div>
                    <div style="display:none" class="stumbleupon-button">
                    	<su:badge layout="1" location="{$baseurl}/photo/{$p.PID}?ref=stumbleupon"></su:badge> {literal}<script type="text/javascript"> (function() { var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;  li.src = 'https://platform.stumbleupon.com/1/widgets.js';  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);  })(); </script>{/literal}						
                    </div>                
                </div>
                <div style="display:none" class="field">
                	<p>Paste link in <b>email</b> or <b>IM</b>:</p>
                	<input id="post-share-entry-url" type="text" class="text" value="{$baseurl}/photo/{$p.PID}" placeholder="{$baseurl}/photo/{$p.PID}" />
                </div>
            </form>
        </div>                
    </div>
</div>
{literal}
<script type="text/javascript">
$('#overlay-shadow').removeClass('hide');
$('#overlay-container').removeClass('hide');  
$('.close-btn').click(function(){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
});
var i=10;		
function delayedAlert()  
{  
timeoutID = window.setTimeout(decrease, 1000);  
}  
function decrease()  
{  
$('#post-share-dismiss-counter').html('('+i+')');
i--;
if(i==-1){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide'); 
}else{
delayedAlert() ;	  
};
}  
delayedAlert(); 
function clearAlert()  
{  
window.clearTimeout(timeoutID);  
}
</script>
{/literal}