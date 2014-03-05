<?php
	include "../include/common_func.php";			// Common Function

	// 파라미터 정의
	$bs_code	= $HTTP_POST_VARS["bs_code"];
	$bc_mcode	= $HTTP_POST_VARS["bc_mcode"];
	$bc_bcode	= $HTTP_POST_VARS["bc_bcode"];
	$s_method	= $HTTP_POST_VARS["s_method"];
	$s_keyword	= $HTTP_POST_VARS["s_keyword"];
	$page_no	= $HTTP_POST_VARS["page_no"];
	$bc_content	= $HTTP_POST_VARS["bc_content"];

	$db_conn = dbconnect();
	$query = "insert into board_comment (bc_mcode, bc_bcode, bc_content, bc_regdate) values (".$bc_mcode.", ".$bc_bcode.", '".$bc_content."', now())";
	exec_query($query);
	close_db($db_conn);

	goURL("../community/board_view.php?bs_code=".$bs_code."&b_code=".$bc_bcode."&s_method=".$s_method."&s_keyword=".$s_keyword."&page_no=".$page_no);
?>
