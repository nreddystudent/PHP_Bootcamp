<?php
	if (($_GET['action'] == 'set') && ($_GET['value']) && ($_GET['name'])){
		setcookie($_GET['name'], $_GET['value']);
	}
	elseif($_GET['action']=='get' && !$_GET['value'] && $_COOKIE[$_GET['name']]){
		echo $_COOKIE[$_GET['name']]."\n";
	}
	elseif($_GET['action'] == 'del'&& !$_GET['value'] && $_GET['name']){
		setcookie($_GET['name'], '', 1);
	}
?>