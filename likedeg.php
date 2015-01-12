<?php


include("include/config.php");
include("include/functions/import.php");

$pid = intval(cleanit($_REQUEST['pid']));
$art = cleanit($_REQUEST['art']);
$SID = intval($_SESSION['USERID']);
if(($SID > 0) && ($pid > 0))
{
	if($art == "1")
	{
		$query="INSERT INTO posts_favorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
		
		$cname = $pid;
		if($pid > 0 && !isset($_COOKIE[$cname]))
		{
			$query="UPDATE posts SET favclicks=favclicks+1 WHERE PID='".mysql_real_escape_string($pid)."'";
			$result=$conn->execute($query);
			$expire=time()+60*60*24;
			setcookie($cname, "yes", $expire);
		}
	}
	elseif($art == "-1")
	{
		$query="DELETE FROM posts_favorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
	}
	$query="SELECT count(*) as total FROM posts_favorited WHERE PID='".mysql_real_escape_string($pid)."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	echo intval($total);
}
?>