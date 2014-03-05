<?php
	include ("../template/index_head.php");			// Head Include
?>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- 로고&1뎁스메뉴s -->
<?php
	include ("../template/top_community.php");			// Top Include
?>
<!-- 로고&1뎁스메뉴e -->
<table border="0" cellspacing="0" cellpadding="0">
	<tr height="10"> 
		<td></td>
	</tr>
</table>
<table width="1197" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="16"></td>
    <td width="180" valign="top"> 
<!-- 개인정보및 출책s -->	
<?php
	include ("../template/memberinfo.php");			// Member Info Include
?>
<!-- 개인정보및 출책e -->
		<table border="0" cellspacing="0" cellpadding="0">
			<tr height="10"> 
				<td></td>
			</tr>
		</table>
<!-- 서브메뉴 s -->	
<?php
	include ("../template/sub_menu_community.php");			// Sub Menu Project Include
?>
<!-- 서브메뉴e -->
		<table border="0" cellspacing="0" cellpadding="0">
			<tr height="10"> 
				<td></td>
			</tr>
		</table>
<!-- 회의실 예약 현황s -->
<?php
	include ("../template/meetinginfo.php");			// Meeting Info Include
?>
<!-- 회의실 예약 현황e -->
		<table border="0" cellspacing="0" cellpadding="0">
			<tr height="10"> 
				<td></td>
			</tr>
		</table>
<!-- quick link s -->
<?php
	include ("../template/quicklink.php");			// Quick Link Include
?>
<!-- quick link e -->
		<table border="0" cellspacing="0" cellpadding="0">
			<tr height="10"> 
				<td></td>
			</tr>
		</table>
    </td>
	<td width="10" valign="top"></td>
    <td valign="top" align="center"> 
      <!-- 컨텐츠 s-->
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="4" height="4"><img src="<?=$httpImages?>/linety03_01.gif" width="4" height="4"></td>
          <td background="<?=$httpImages?>/linety03_02.gif"><img src="<?=$httpImages?>/linety03_02.gif" width="4" height="4"></td>
          <td width="4" height="4"><img src="<?=$httpImages?>/linety03_03.gif" width="4" height="4"></td>
        </tr>
        <tr>
          <td background="<?=$httpImages?>/linety03_04.gif"><img src="<?=$httpImages?>/linety03_04.gif" width="4" height="4"></td>
          <td height="40" align="center"> 
            <table width="95%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td class="t1"><?=$bs_name?></td>
                <td class="mori" align="right">처음 &gt; <?=$bs_category?> &gt; <?=$bs_name?></td>
              </tr>
            </table>
          </td>
          <td background="<?=$httpImages?>/linety03_05.gif"><img src="<?=$httpImages?>/linety03_05.gif" width="4" height="4"></td>
        </tr>
        <tr>
          <td width="4" height="4"><img src="<?=$httpImages?>/linety03_06.gif" width="4" height="4"></td>
          <td background="<?=$httpImages?>/linety03_07.gif"><img src="<?=$httpImages?>/linety03_07.gif" width="4" height="4"></td>
          <td width="4" height="4"><img src="<?=$httpImages?>/linety03_08.gif" width="4" height="4"></td>
        </tr>
      </table>
		<table border="0" cellspacing="0" cellpadding="0">
			<tr height="10"> 
				<td></td>
			</tr>
		</table>
<!-- 공지사항 s -->
<?php
	include ("../template/index_notice.php");			// Notice Include
?>
<!-- 공지사항 e -->	  
		<table border="0" cellspacing="0" cellpadding="0">
			<tr height="10"> 
				<td></td>
			</tr>
		</table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="12" height="12"><img src="<?=$httpImages?>/linety05_01.gif" width="12" height="12"></td>
          <td background="<?=$httpImages?>/linety05_02.gif"><img src="<?=$httpImages?>/linety05_02.gif" width="12" height="12"></td>
          <td width="12" height="12"><img src="<?=$httpImages?>/linety05_03.gif" width="12" height="12"></td>
        </tr>
        <tr> 
          <td background="<?=$httpImages?>/linety05_04.gif"><img src="<?=$httpImages?>/linety05_04.gif" width="12" height="12"></td>
          <td valign="top" align="right"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0" height="230">
              <tr> 
                <td width="4" height="4"><img src="<?=$httpImages?>/linety03_01.gif" width="4" height="4"></td>
                <td background="<?=$httpImages?>/linety03_02.gif"><img src="<?=$httpImages?>/linety03_02.gif" width="4" height="4"></td>
                <td width="4" height="4"><img src="<?=$httpImages?>/linety03_03.gif" width="4" height="4"></td>
              </tr>
              <tr> 
                <td background="<?=$httpImages?>/linety03_04.gif" rowspan="2"><img src="<?=$httpImages?>/linety03_04.gif" width="4" height="4"></td>
                <td align="center" height="38" background="<?=$httpImages?>/staff_034.gif">
                  <table width="97%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="7%" height="22">NO</td>
                      <td width="55%" align="center">제목</td>
                      <td width="14%" align="center">이름</td>
                      <td width="15%" align="center">날짜</td>
                      <td width="9%" align="center">조회</td>
                    </tr>
                  </table>
                </td>
                <td background="<?=$httpImages?>/linety03_05.gif" rowspan="2"><img src="<?=$httpImages?>/linety03_05.gif" width="4" height="4"></td>
              </tr>
              <tr> 
                <td align="center" valign="top"> 
                  <table width="97%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="4%" height="10"></td>
                      <td width="58%" align="center" height="10"></td>
                      <td width="14%" align="center" height="10"></td>
                      <td width="15%" align="center" height="10"></td>
                      <td width="9%" align="center" height="10"></td>
                    </tr>
					<?php
						if(count($list_data[0])) {
							$bgstyle = getTrColor(count($list_data[0]));

							$list_no = $list_info[0]-($page_size*($page_no-1));
							for($i=0;$i<count($list_data[0]);$i++) {
								if((time()-86400) < $list_data[6][$i]) {
									$new_button = "<img src='".$httpImages."/staff_027.gif' width='23' height='12' align='absmiddle' alt='NEW'>";
								} else {
									$new_button = "";
								}
					?>
                    <tr class="t0_light" style="<?=$bgstyle[$i]?>">
                      <td height="30"><?if($list_data[7][$i]==1){?><?=$list_no--?><?}else{?><img src="<?=$httpImages?>/staff_059.gif"  align="absmiddle"><?$list_no--;}?></td>
                      <td><?if($list_data[7][$i]==1){?><?if(IsBoardAuthority($sm_code, $bs_code)){?><a href="../community/board_view.php?bs_code=<?=$bs_code?>&b_code=<?=$list_data[0][$i]?>&s_method=<?=$s_method?>&s_keyword=<?=$s_keyword?>&page_no=<?=$page_no?>"><?}else{?><a href="javascript:alert('글을 볼수 있는 권한이 없습니다.');"><?}?><?=cut_function($list_data[1][$i], 30)?></a><?}else{?><?if(IsBoardAuthority($sm_code, $bs_code)){?> <b><a href="../community/board_view.php?bs_code=<?=$bs_code?>&b_code=<?=$list_data[0][$i]?>"><?}else{?><a href="javascript:alert('글을 볼수 있는 권한이 없습니다.');"><?}?><?=cut_function($list_data[1][$i], 60)?></a></b><?}?> 
					  <?if($list_data[8][$i]){?><img src="<?=$httpImages?>/board_comment3.gif" width="11" height="10" border="0" alt="이미지"> <?}?>
					  <?if($list_data[9][$i]){?><img src="<?=$httpImages?>/board_comment3.gif" width="11" height="10" border="0" alt="이미지"><?}?>
					  <?if($list_data[10][$i]){?><img src="<?=$httpImages?>/board_comment2.gif" width="11" height="10" border="0" alt="첨부파일"><?}?>
					  <?if($list_data[11][$i]){?><img src="<?=$httpImages?>/board_comment2.gif" width="11" height="10" border="0" alt="첨부파일"><?}?>
					  <?if($list_data[5][$i] > 0){?><font color="444444"><span class="mori"><img src="<?=$httpImages?>/board_comment.gif" width="11" height="9" border="0" alt="현재 덧글이 <?=$list_data[5][$i]?>개 있습니다.">(<?=$list_data[5][$i]?>)</span></font><?}?> <?=$new_button?></td>
                      <td align="center"><?=$list_data[2][$i]?></td>
                      <td align="center"><?=$list_data[3][$i]?></td>
                      <td align="center"><?=number_format($list_data[4][$i])?></td>
                    </tr>
					<?
								if($i != count($list_data[0])-1)
								{
					?>
                    <tr bgcolor="e2e2e2"> 
                      <td height="1"></td>
                      <td height="1"></td>
                      <td align="center" height="1"></td>
                      <td align="center" height="1"></td>
                      <td align="center" height="1"></td>
                    </tr>
					<?
								}
							}
						}
						else
						{
					?>
                    <tr bgcolor="fbfafa" height="100" align="center" class="t0_light"> 
                      <td colspan="5" bgcolor="fbfafa">등록된 게시물이 없습니다.</td>
                    </tr>
					<?
						}
					?>
                  </table>
                  
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="3">
              <tr bgcolor="e2e2e2"> 
                <td class="t2" height="1" colspan="2"></td>
                <td class="t2" height="1" width="12%"></td>
              </tr>
              <tr bgcolor="fbfafa"> 
                <td height="50" class="mori" width="13%"></td>
				<td align="center">
					<table width="250" border="0" cellspacing="0" cellpadding="0" height="40">
						<tr class="t0_light"> 
							<td align="center"><?if(intval($list_info[1]>1)){?><?=(get_list_link($page_no,$link_url,$list_info[1],$list_info[2],$list_info[3],$request_data,$gap,$selected,$normal,$back_page,$back_record,$next_record,$next_page))?><?}?></td>
						</tr>
					</table>
				</td>
				<td align="right" height="50" width="12%">
				<?
					if($sm_id)
					{
						if(IsBoardAuthority($sm_code, $bs_code))
						{
				?>
					<a href="../community/board_insert.php?bs_code=<?=$bs_code?>"><img src="<?=$httpImages?>/bt35.gif" width="63" height="28" border="0" alt="글쓰기" align="absmiddle"></a>
				<?
						}
					}
				?>
				</td>
              </tr>
              <tr bgcolor="e2e2e2"> 
                <td class="t2" height="1" bgcolor="e2e2e2" colspan="2"></td>
                <td class="t2" height="1" width="12%"></td>
              </tr>
            </table>
            <br>
            <table border="0" cellspacing="0" cellpadding="2" align="center" height="30">
			<form name="search_form" method="get" action="<?=$PHP_SELF?>" onsubmit="return search_check();">
			<input name="bs_code" type="hidden" value="<?=$bs_code?>">
              <tr> 
                <td> 
                  <select name="s_method" class="select" style="width:100px;">
                    <option value="b_subject">제목</option>
                    <option value="b_content">내용</option>
					<?
					if(IsAnonymity($bs_code) == 1)
					{
					?>
                    <option value="m_kname">글쓴이</option>
					<?
					}
					?>
                  </select>
                  <input type="text" name="s_keyword" size="40" class="input1">
                </td>
                <td><input type="image" src="<?=$httpImages?>/bt36.gif" width="55" height="21" border="0" align="absmiddle" alt="검색"></td>
              </tr>
			</form>
            </table>
          </td>
          <td background="<?=$httpImages?>/linety05_05.gif"><img src="<?=$httpImages?>/linety05_05.gif" width="12" height="12"></td>
        </tr>
        <tr> 
          <td width="12" height="12"><img src="<?=$httpImages?>/linety05_06.gif" width="12" height="12"></td>
          <td background="<?=$httpImages?>/linety05_07.gif"><img src="<?=$httpImages?>/linety05_07.gif" width="12" height="12"></td>
          <td width="12" height="12"><img src="<?=$httpImages?>/linety05_08.gif" width="12" height="12"></td>
        </tr>
      </table>
      <!-- 컨텐츠 e-->	
		<table border="0" cellspacing="0" cellpadding="0">
			<tr height="10"> 
				<td></td>
			</tr>
		</table>
    </td>
	<td width="10" valign="top"></td>
    <td width="180" valign="top" align="right"> 
<!-- 검색앤진 & link s -->
		<?php
			include ("../template/searchengine.php");			// Search Engine Include
		?>
<!-- 검색앤진 & link e -->
<table border="0" cellspacing="0" cellpadding="0">
	<tr height="10"> 
		<td></td>
	</tr>
</table>
<!-- 나의북마크 s -->
<?php
//	include ("../template/bookmark.php");			// Book Mark Include
?>
<!-- 나의북마크 e -->
<!-- <table border="0" cellspacing="0" cellpadding="0">
	<tr height="10"> 
		<td></td>
	</tr>
</table> -->
<!-- 손노리 북마크 s -->
<?php
	include ("../template/sonnoribookmark.php");			// Sonnori Book Mark Include
?>
<!-- 손노리 북마크 e -->
<!-- <table border="0" cellspacing="0" cellpadding="0">
	<tr height="10"> 
		<td></td>
	</tr>
</table> -->
<!-- STAFF 버그 신고 s -->
<?php
	include ("../template/buginfo.php");			// Bug Info Include
?>
<!-- STAFF 버그 신고 e -->
	</td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0">
	<tr height="5"> 
		<td></td>
	</tr>
</table>
<?php
	include ("../template/footer.php");			// Footer Include
?>
</body>
</html>
