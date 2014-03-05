<?php
	include "../include/common_func.php";			// Common Function

	// 파라미터 정의
	$b_code		= $HTTP_GET_VARS["b_code"];
	$bs_code	= $HTTP_GET_VARS["bs_code"];

	$db_conn = dbconnect();
	$bs_filepath = get_one_data("bs_filepath","board_scategory","and bs_code = ".$bs_code);
	$board_data = get_one_rdata("b_img01, b_img02, b_attach01, b_attach02","board","and b_code = ".$b_code);

	for($i=0;$i<count($board_data);$i++)
	{
		if($board_data[$i]) unlink($files_local_host."/board/".$bs_filepath."/".$board_data[$i]);
	}

	$bc_count = get_one_data("count(*)","board_comment","and bc_bcode = ".$b_code);

	if($bc_count)
	{
		$query = "delete from board_comment where bc_bcode = ".$b_code;
		exec_query($query);
	}

	$query = "delete from board where b_code = ".$b_code;
	exec_query($query);
	close_db($db_conn);
	goURL("../community/board_list.php?bs_code=".$bs_code);
?>
