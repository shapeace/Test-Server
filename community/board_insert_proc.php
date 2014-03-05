<?php
	include "../include/common_func.php";			// Common Function

	$b_code		= $HTTP_POST_VARS["b_code"];
	$bs_code	= $HTTP_POST_VARS["bs_code"];
	$b_mcode	= $HTTP_POST_VARS["b_mcode"];
	$b_subject	= $HTTP_POST_VARS["b_subject"];
	$b_content	= $HTTP_POST_VARS["b_content"];
	$b_status	= $HTTP_POST_VARS["b_status"];
	$b_img01_delete	= $HTTP_POST_VARS["b_img01_delete"];
	$b_img02_delete	= $HTTP_POST_VARS["b_img02_delete"];
	$b_attach01_delete	= $HTTP_POST_VARS["b_attach01_delete"];
	$b_attach02_delete	= $HTTP_POST_VARS["b_attach02_delete"];


	$db_conn = dbconnect();
	$bs_filepath = get_one_data("bs_filepath","board_scategory","and bs_code = ".$bs_code);
	close_db($db_conn);

	if($b_code)
	{
		$db_conn = dbconnect();
		$file_data = get_one_rdata("b_img01, b_img02, b_attach01, b_attach02","board","and b_code = ".$b_code, $db_conn);

		if($b_img01_delete == 1)
		{
			@unlink($files_local_host."/board/".$bs_filepath."/".$file_data[0]);
			$query = "update board set b_img01 = '' where b_code = ".$b_code;
			exec_query($query);
		}

		if($b_img02_delete == 1)
		{
			@unlink($files_local_host."/board/".$bs_filepath."/".$file_data[1]);
			$query = "update board set b_img02 = '' where b_code = ".$b_code;
			exec_query($query);
		}

		if($b_attach01_delete == 1)
		{
			@unlink($files_local_host."/board/".$bs_filepath."/".$file_data[2]);
			$query = "update board set b_attach01 = '' where b_code = ".$b_code;
			exec_query($query);
		}

		if($b_attach02_delete == 1)
		{
			@unlink($files_local_host."/board/".$bs_filepath."/".$file_data[3]);
			$query = "update board set b_attach02 = '' where b_code = ".$b_code;
			exec_query($query);
		}
		close_db($db_conn);
	}


	// 이미지 첨부파일01
	if($HTTP_POST_FILES["b_img01"]["name"])
	{
		$b_img01_tmp	= $HTTP_POST_FILES["b_img01"]["tmp_name"];
		$b_img01		= $HTTP_POST_FILES["b_img01"]["name"];
		$b_img01_size	= $HTTP_POST_FILES["b_img01"]["size"];
		if($b_img01_size > 5000000) ALERT("파일 크기를 5MB 이하로 업로드 해 주시기 바랍니다.");

		//중복일 경우 이름변경
		$b_img01 = chk_filename($files_local_host."/board/".$bs_filepath."/",$b_img01);

		//파일저장
		copy($b_img01_tmp,$files_local_host."/board/".$bs_filepath."/".$b_img01);
	}
	else
	{
		if($b_code)
		{
			$db_conn = dbconnect();
			$b_img01_data = get_one_data("b_img01","board","and b_code = ".$b_code, $db_conn);
			close_db($db_conn);
			
			if($b_img01_data) $b_img01 = $b_img01_data;
			else $b_img01 = "";
		}
		else
		{
			$b_img01 = "";
		}
	}

	// 이미지 첨부파일02
	if($HTTP_POST_FILES["b_img02"]["name"])
	{
		$b_img02_tmp	= $HTTP_POST_FILES["b_img02"]["tmp_name"];
		$b_img02		= $HTTP_POST_FILES["b_img02"]["name"];
		$b_img02_size	= $HTTP_POST_FILES["b_img02"]["size"];
		if($b_img02_size > 5000000) ALERT("파일 크기를 5MB 이하로 업로드 해 주시기 바랍니다.");

		//중복일 경우 이름변경
		$b_img02 = chk_filename($files_local_host."/board/".$bs_filepath."/",$b_img02);

		//파일저장
		copy($b_img02_tmp,$files_local_host."/board/".$bs_filepath."/".$b_img02);
	}
	else
	{
		if($b_code)
		{
			$db_conn = dbconnect();
			$b_img02_data = get_one_data("b_img02","board","and b_code = ".$b_code, $db_conn);
			close_db($db_conn);
			
			if($b_img02_data) $b_img02 = $b_img02_data;
			else $b_img02 = "";
		}
		else
		{
			$b_img02 = "";
		}
	}

	// 첨부파일01
	if($HTTP_POST_FILES["b_attach01"]["name"])
	{
		$b_attach01_tmp		= $HTTP_POST_FILES["b_attach01"]["tmp_name"];
		$b_attach01			= $HTTP_POST_FILES["b_attach01"]["name"];
		$b_attach01_size	= $HTTP_POST_FILES["b_attach01"]["size"];
		if($b_attach01_size > 30000000) ALERT("파일 크기를 30MB 이하로 업로드 해 주시기 바랍니다.");

		//중복일 경우 이름변경
		$b_attach01 = chk_filename($files_local_host."/board/".$bs_filepath."/",$b_attach01);

		//파일저장
		copy($b_attach01_tmp,$files_local_host."/board/".$bs_filepath."/".$b_attach01);
	}
	else
	{
		if($b_code)
		{
			$db_conn = dbconnect();
			$b_attach01_data = get_one_data("b_attach01","board","and b_code = ".$b_code, $db_conn);
			close_db($db_conn);
			
			if($b_attach01_data) $b_attach01 = $b_attach01_data;
			else $b_attach01 = "";
		}
		else
		{
			$b_attach01 = "";
		}
	}

	// 첨부파일02
	if($HTTP_POST_FILES["b_attach02"]["name"])
	{
		$b_attach02_tmp		= $HTTP_POST_FILES["b_attach02"]["tmp_name"];
		$b_attach02			= $HTTP_POST_FILES["b_attach02"]["name"];
		$b_attach02_size	= $HTTP_POST_FILES["b_attach02"]["size"];
		if($b_attach02_size > 30000000) ALERT("파일 크기를 30MB 이하로 업로드 해 주시기 바랍니다.");

		//중복일 경우 이름변경
		$b_attach02 = chk_filename($files_local_host."/board/".$bs_filepath."/",$b_attach02);

		//파일저장
		copy($b_attach02_tmp,$files_local_host."/board/".$bs_filepath."/".$b_attach02);
	}
	else
	{
		if($b_code)
		{
			$db_conn = dbconnect();
			$b_attach02_data = get_one_data("b_attach02","board","and b_code = ".$b_code, $db_conn);
			close_db($db_conn);
			
			if($b_attach02_data) $b_attach02 = $b_attach02_data;
			else $b_attach02 = "";
		}
		else
		{
			$b_attach02 = "";
		}
	}

	$db_conn = dbconnect();
	if($b_code)
	{
		$query = "update board set b_subject = '".$b_subject."', b_content = '".$b_content."', b_img01 = '".$b_img01."', b_img02 = '".$b_img02."', b_attach01 = '".$b_attach01."', b_attach02 = '".$b_attach02."', b_status= ".$b_status." where b_code = ".$b_code;
	}
	else
	{
		$query = "insert into board (b_bscode, b_mcode, b_subject, b_content, b_img01, b_img02, b_attach01, b_attach02, b_regdate, b_status) values
		(".$bs_code.", ".$b_mcode.", '".$b_subject."', '".$b_content."', '".$b_img01."', '".$b_img02."', '".$b_attach01."', '".$b_attach02."', now(), ".$b_status.")";
	}

	exec_query($query);
	close_db($db_conn);

	if($b_code) goURL("../community/board_view.php?bs_code=".$bs_code."&b_code=".$b_code);
	else goURL("../community/board_list.php?bs_code=".$bs_code);
?>
