<?php /* Smarty version 2.6.6, created on 2014-10-24 17:26:56
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<title><?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
</title>
	<meta name="description" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  if ($this->_tpl_vars['metadescription'] != ""):  echo $this->_tpl_vars['metadescription']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
" />
	<meta name="keywords" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
,<?php endif;  if ($this->_tpl_vars['metakeywords'] != ""):  echo $this->_tpl_vars['metakeywords']; ?>
,<?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;' name='viewport'>
	<link href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/css/style.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/images/gag.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['mobileurl']; ?>
/js/mobile.js" type="text/javascript"></script>
    <html xmlns:fb="http://ogp.me/ns/fb#">
</head>
<body>
	<div id="fb-root"></div>
    <?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
    <?php echo '
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-55882938-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>
<script>
  FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe(\'auth.login\', function(response) {
    window.location.reload();
  });	  
</script>
'; ?>

    <?php endif; ?>