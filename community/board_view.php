<?
	include "../include/common_func.php";			// Common Function

	$bs_name		= getboardname($bs_code);
	$bs_category	= "커뮤니티";
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

	$b_code			= $HTTP_GET_VARS["b_code"];
	$s_method		= $HTTP_GET_VARS["s_method"];
	$s_keyword		= $HTTP_GET_VARS["s_keyword"];
	$page_no		= $HTTP_GET_VARS["page_no"];

	BoardIncreaseCount($b_code,"b_code","board","b_count");
	//------------------------------------------------------------------------------
	// 리스트 쿼리
	//------------------------------------------------------------------------------
	//리스트 데이터 Fetch
	$db_conn = dbconnect();
	$bs_filepath = get_one_data("bs_filepath","board_scategory","and bs_code = ".$bs_code);
	if(IsAnonymity($bs_code) == 1)
	{
		$view_data = get_one_rdata("b_subject, b_count, left(b_regdate,10), right(b_regdate,8), b_img01, b_img02, b_attach01, b_attach02, b_content, b_mcode, m_kname, m_code", "board left outer join member on b_mcode = m_code", "and b_code = ".$b_code);
	}
	else
	{
		$view_data = get_one_rdata("b_subject, b_count, left(b_regdate,10), right(b_regdate,8), b_img01, b_img02, b_attach01, b_attach02, b_content, b_mcode, '손노리군™' as m_kname, m_code", "board left outer join member on b_mcode = m_code", "and b_code = ".$b_code);
	}

	$where = "and b_code >".$b_code;
	$where .= "and bs_code = ".$bs_code;
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

	$viewlist_data_next = get_data("b_code, b_subject, m_kname, left(b_regdate,10), b_count, (select count(*) from board_comment where bc_bcode = b_code) as comment_cnt, unix_timestamp(b_regdate), b_status, b_img01, b_img02, b_attach01, b_attach02","board left outer join member on b_mcode = m_code left outer join board_scategory on b_bscode = bs_code","and b_code >".$b_code,"order by b_code asc","limit 2");

	$viewlist_data_past = get_data("b_code, b_subject, m_kname, left(b_regdate,10), b_count, (select count(*) from board_comment where bc_bcode = b_code) as comment_cnt, unix_timestamp(b_regdate), b_status, b_img01, b_img02, b_attach01, b_attach02","board left outer join member on b_mcode = m_code left outer join board_scategory on b_bscode = bs_code","and b_code <".$b_code,"order by b_code desc","limit 2");

	//------------------------------------------------------------------------------
	// 리스트, 페이지 설정
	//------------------------------------------------------------------------------
	$crequest_data	= "&bs_code=".$bs_code."&b_code=".$b_code."&s_method=".$s_method."&s_keyword=".$s_keyword."&page_no=".$page_no;
	$cgap			= "&nbsp;&nbsp;";
	$cselected		= "<b>";
	$cnormal			= "";
	$cback_page		= "<img src='".$httpImages."/bt_page_before1.gif' width='13' height='11' align='absmiddle' border='0' alt='이전페이지'>";
	$cback_record	= "이전글";
	$cnext_record	= "다음글";
	$cnext_page		= "<img src='".$httpImages."/bt_page_next1.gif' width='13' height='11' align='absmiddle' border='0' alt='다음페이지'>";
	$cnew_icon		= "<font color='blue'>new</font>";
	$chot_icon		= "<font color='red'>hot</font>";
	$cpage_size		= 15;
	$clist_size		= 5;

	if(!$cpage_no)
	{
		$cpage_no = 1;
	}

	//------------------------------------------------------------------------------
	// 리스트 쿼리
	//------------------------------------------------------------------------------
	
	$comment_cnt = get_one_data("count(*)", "board_comment left outer join member on bc_mcode = m_code", "and bc_bcode = ".$b_code);
	if(IsAnonymity($bs_code) == 1)
	{
		$select = "bc_code, m_kname, left(bc_regdate,10), right(bc_regdate,8), bc_content, m_code";
	}
	else
	{
		$select = "bc_code, '손노리군™' as m_kname, left(bc_regdate,10), right(bc_regdate,8), bc_content, m_code";
	}
	$from = "board_comment left outer join member on bc_mcode = m_code";
	$where = "and bc_bcode = ".$b_code;
	$order = "order by bc_code desc";
	$limit	= "limit ".$cpage_size * ($cpage_no - 1).",".$cpage_size;

	//리스트 데이터 Fetch
	$clist_data = get_data($select,$from,$where,$order,$limit);
	$clist_info = get_list_info($from,$where,$cpage_size,$clist_size,$cpage_no);

	//------------------------------------------------------------------------------
	// 리스트, 페이지 설정
	//------------------------------------------------------------------------------
	$request_data	= "&bs_code=".$bs_code."&b_code=".$b_code."&s_method=".$s_method."&s_keyword=".$s_keyword;
	$gap			= "&nbsp;&nbsp;";
	$selected		= "<b>";
	$normal			= "";
	$back_page		= "<img src='".$httpImages."/bt_page_before1.gif' width='13' height='11' align='absmiddle' border='0' alt='이전페이지'>";
	$back_record	= "이전글";
	$next_record	= "다음글";
	$next_page		= "<img src='".$httpImages."/bt_page_next1.gif' width='13' height='11' align='absmiddle' border='0' alt='다음페이지'>";
	$new_icon		= "<font color='blue'>new</font>";
	$hot_icon		= "<font color='red'>hot</font>";
	$page_size		= 20;
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

	$list_data = get_data($select,$from,$where,$order,$limit);
	$list_info = get_list_info($from,$where,$page_size,$list_size,$page_no);
	close_db($db_conn);

	include ("./skin/board_view.php");
?>