<?
	include "../include/common_func.php";			// Common Function

	$bs_name		= getboardname($bs_code);
	$bs_category	= "커뮤니티";
	$b_code			= $HTTP_GET_VARS["b_code"];

	if($bs_code == 8)
	{
		//setStatisticsCode(22);
	}
	else if($bs_code == 9)
	{
		//setStatisticsCode(23);
	}
	else if($bs_code == 13)
	{
		//setStatisticsCode(24);
	}
	else if($bs_code == 14)
	{
		//setStatisticsCode(25);
	}
	else if($bs_code == 16)
	{
		//setStatisticsCode(26);
	}
	else if($bs_code == 17)
	{
		//setStatisticsCode(27);
	}
	else if($bs_code == 18)
	{
		//setStatisticsCode(28);
	}
	else if($bs_code == 19)
	{
		//setStatisticsCode(29);
	}

	if($b_code)
	{
		$db_conn = dbconnect();
		$board_data = get_one_rdata("b_subject, b_content, b_img01, b_img02, b_attach01, b_attach02, b_status", "board", "and b_code = ".$b_code);
		close_db($db_conn);
	}

	include ("./skin/board_insert.php");
?>