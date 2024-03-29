<?php
/**************************************************************************************************
| Mobile Module V 1.0
| Best 9Gag Clone Script
| http://www.best9gagclonescript.com
| support@best9gagclonescript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| 
|
| Copyright (c) best9gagclonescript.com. All rights reserved.
|**************************************************************************************************/

include("config.php");
$mobileurl = $config['mobileurl'];
include($config['maindir']."/include/config.php");
STemplate::assign('mobileurl',$mobileurl);
$mobile_per_page = $config[mobile_per_page];

$page = intval($_REQUEST[page]);

if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$mobile_per_page;
}
else
{
	$pagingstart = "0";
}

$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase='0' order by A.PID asc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase='0' order by A.PID asc limit $pagingstart, $config[mobile_per_page]";
		
$executequery1 = $conn->Execute($query1);

$totalvideos = $executequery1->fields['total'];
if ($totalvideos > 0)
{
	if($executequery1->fields['total']<=$config[maximum_results])
	{
		$total = $executequery1->fields['total'];
	}
	else
	{
		$total = $config[maximum_results];
	}
	
	$toppage = ceil($total/$mobile_per_page);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}
	
	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	
	if ($currentpage > 0)
	{
		if($currentpage > 1) 
		{
			$pagelinks.="<a href='$mobileurl/trending?page=1'>$lang[64]</a>&nbsp;&nbsp;";
			$pagelinks.="...&nbsp;&nbsp;";
			$pagelinks.="<a href='$mobileurl/trending?page=$theprevpage'>&laquo; $lang[65]</a>&nbsp;&nbsp;";
			STemplate::assign('tpp',$theprevpage);
		}
		
		$counter=0;
		
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$mobileurl/trending?page=$lowercount'>$lowercount</a>&nbsp;&nbsp;";
			$lowercount++;
			$counter++;
		}
		
		$pagelinks.="<strong>$currentpage</strong>&nbsp;&nbsp;";
		
		$uppercounter = $currentpage+1;
		
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$mobileurl/trending?page=$uppercounter'>$uppercounter</a>&nbsp;&nbsp;";
			$uppercounter++;
		}
		
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$mobileurl/trending?page=$thenextpage'>$lang[66] &raquo;</a>&nbsp;&nbsp;";
			STemplate::assign('tnp',$thenextpage);
			$pagelinks.="...&nbsp;&nbsp;";
			$pagelinks.="<a href='$mobileurl/trending?page=$toppage'>$lang[67]</a>&nbsp;&nbsp;";
		}
	}
}

$templateselect = "trending.tpl";
$pagetitle = $lang['173'];
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total);
STemplate::assign('posts',$posts);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>