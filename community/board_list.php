<?
	include "../include/common_func.php";			// Common Function

	$bs_code		= $HTTP_GET_VARS["bs_code"];
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

	$bs_name		= getboardname($bs_code);
	$bs_category	= "커뮤니티";
	$s_method		= $HTTP_GET_VARS["s_method"];
	$s_keyword		= $HTTP_GET_VARS["s_keyword"];

	//------------------------------------------------------------------------------
	// 리스트, 페이지 설정
	//------------------------------------------------------------------------------
	$request_data	= "&bs_code=".$bs_code."&s_method=".$s_method."&s_keyword=".$s_keyword;
	$gap			= "&nbsp;&nbsp;";
	$selected		= "<b>";
	$normal			= "";
	$back_page		= "<img src='".$httpImages."/bt_page_before1.gif' width='13' height='11' align='absmiddle' border='0' alt='이전페이지'>";
	$back_record	= "이전글";
	$next_record	= "다음글";
	$next_page		= "<img src='".$httpImages."/bt_page_next1.gif' width='13' height='11' align='absmiddle' border='0' alt='다음페이지'>";
	$new_icon		= "<font color='blue'>new</font>";
	$hot_icon		= "<font color='red'>hot</font>";
	$page_size		= 15;
	$list_size		= 5;

	if(!$page_no) $page_no = 1;

	//------------------------------------------------------------------------------
	// 리스트 쿼리
	//------------------------------------------------------------------------------
	if(IsAnonymity($bs_code) == 1)
	{
		$select = "b_code, b_subject, m_kname, left(b_regdate,10), b_count, (select count(*) from board_comment where bc_bcode = b_code) as comment_cnt, unix_timestamp(b_regdate), b_status, b_img01, b_img02, b_attach01, b_attach02";
	}
	else
	{
		$select = "b_code, b_subject, '손노리군™' as m_kname, left(b_regdate,10), b_count, (select count(*) from board_comment where bc_bcode = b_code) as comment_cnt, unix_timestamp(b_regdate), b_status, b_img01, b_img02, b_attach01, b_attach02";
	}
	$from = "board left outer join member on b_mcode = m_code left outer join board_scategory on b_bscode = bs_code";
	$where = "and bs_code = ".$bs_code;
	if($s_method)
	{
		if($s_keyword)
		{
			$where .= " and ".$s_method." like '%".$s_keyword."%'";
		}
		else
		{
			ALERT("검색 방법이 적절하지 않습니다.");
		}
	}
	$order = "order by b_status desc, b_code desc";
	$limit	= "limit ".$page_size * ($page_no - 1).",".$page_size;

	//리스트 데이터 Fetch
	$db_conn = dbconnect();
	$list_data = get_data($select,$from,$where,$order,$limit);
	$list_info = get_list_info($from,$where,$page_size,$list_size,$page_no);
	close_db($db_conn);

	include ("./skin/board_list.php");
?>