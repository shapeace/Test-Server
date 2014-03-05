<?php
	include "../include/common_func.php";			// Common Function

	// 파라미터 정의
	$b_code		= $HTTP_GET_VARS["b_code"];
	$bs_code	= $HTTP_GET_VARS["bs_code"];
	$bc_code	= $HTTP_GET_VARS["bc_code"];
	$s_method	= $HTTP_GET_VARS["s_method"];
	$s_keyword	= $HTTP_GET_VARS["s_keyword"];
	$page_no	= $HTTP_GET_VARS["page_no"];
	$m_code		= getMyCode($sm_id);

	$db_conn = dbconnect();
	$query = "delete from board_comment where bc_code = ".$bc_code;
	exec_query($query);
	close_db($db_conn);

	goURL("../community/board_view.php?bs_code=".$bs_code."&b_code=".$b_code."&s_method=".$s_method."&s_keyword=".$s_keyword."&page_no=".$page_no);

?>
