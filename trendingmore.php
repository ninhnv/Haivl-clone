<?php


include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];

$page = intval($_REQUEST['page']);

if($page=="")
{
	$page = "1";
}
$currentpage = $page;
STemplate::assign('page',$page);
if ($page >=2)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}

$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'1' $gridsql order by rand() desc limit  $config[maximum_results]";
$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'1' $gridsql order by rand() desc limit $pagingstart, $config[items_per_page]";
	
$executequery1 = $conn->Execute($query1);

$totalvideos = $executequery1->fields['total'];
if ($totalvideos > 0)
{
	if($executequery1->fields['total']<=$config['maximum_results'])
	{
		$total = $executequery1->fields['total'];
	}
	else
	{
		$total = $config['maximum_results'];
	}
	
	$toppage = ceil($total/$config['items_per_page']);
	if($page <= $toppage)
	{
		$executequery2 = $conn->Execute($query2);
		$posts = $executequery2->getrows();
		STemplate::assign('posts',$posts);
		STemplate::display('posts_bit_trending_more.tpl');
	}
}
?>