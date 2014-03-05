<?php
	include ("../template/index_head.php");			// Head Include
?>
<script type="text/javascript">
function board_check() {
	with(board_form) {
		if(!b_subject.value) {
			alert("제목을 입력해 주세요.");
			b_subject.focus();
			return false;
		}

		if(!b_content.value) {
			alert("내용을 입력해 주세요.");
			b_content.focus();
			return false;
		}
	}
	return true;
}
</script>
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
    <td width="195" valign="top"> 
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
          <td width="4" height="4"><img src="..<?=$httpImages?>/linety03_01.gif" width="4" height="4"></td>
          <td background="..<?=$httpImages?>/linety03_02.gif"><img src="..<?=$httpImages?>/linety03_02.gif" width="4" height="4"></td>
          <td width="4" height="4"><img src="..<?=$httpImages?>/linety03_03.gif" width="4" height="4"></td>
        </tr>
        <tr>
          <td background="..<?=$httpImages?>/linety03_04.gif"><img src="..<?=$httpImages?>/linety03_04.gif" width="4" height="4"></td>
          <td height="40" align="center"> 
            <table width="95%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td class="t1"><?=$bs_name?></td>
                <td class="mori" align="right">처음 &gt; <?=$bs_category?> &gt; <?=$bs_name?></td>
              </tr>
            </table>
          </td>
          <td background="..<?=$httpImages?>/linety03_05.gif"><img src="..<?=$httpImages?>/linety03_05.gif" width="4" height="4"></td>
        </tr>
        <tr>
          <td width="4" height="4"><img src="..<?=$httpImages?>/linety03_06.gif" width="4" height="4"></td>
          <td background="..<?=$httpImages?>/linety03_07.gif"><img src="..<?=$httpImages?>/linety03_07.gif" width="4" height="4"></td>
          <td width="4" height="4"><img src="..<?=$httpImages?>/linety03_08.gif" width="4" height="4"></td>
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
          <td valign="top"> 
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="e2e2e2">
			<form name="board_form" method="post" action="../community/board_insert_proc.php" onsubmit="return board_check();" enctype="multipart/form-data">
			<input name="b_mcode" type="hidden" value="<?=getMyCode($sm_id)?>">
			<input name="bs_code" type="hidden" value="<?=$bs_code?>">
			<input name="b_code" type="hidden" value="<?=$b_code?>">
              <tr bgcolor="fbfafa"> 
                <td valign="top"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr class="t0"> 
                      <td width="10%"><b><img src="<?=$httpImages?>/staff_026.gif" width="10" height="11" align="absmiddle" border="0"> 제목 </b></td>
                      <td width="56%"><input type="text" name="b_subject" size="60" class="input1" value="<?=htmlspecialchars($board_data[0])?>" maxlength="40"></td>
					  <td width="10%"><b><img src="<?=$httpImages?>/staff_026.gif" width="10" height="11" align="absmiddle" border="0"> 상태 </b></td>
					  <td align="left">
						<select name="b_status" class="select" style="width:60px;">
							<option value="1">일반</option>
							<option value="2">공지</option>
						</select>
					  </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td valign="top"> 
                  <!-- <textarea name="textarea2"  style="font-size:12px; width:100%; height:400; background-color:#fbfbfb" class="inputBoard"></textarea> -->
				  <textarea name="b_content" geditor style='width:100%; word-break:break-all;' rows=15 itemname="내용" required ><?=$board_data[1]?></textarea>
                </td>
              </tr>
              <tr bgcolor="fbfafa"> 
                <td valign="top"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr class="t0"> 
                      <td width="13%"><b><img src="<?=$httpImages?>/staff_026.gif" width="10" height="11" align="absmiddle" border="0"> 
                        이미지업1</b></td>
                      <td width="87%"> 
                        <input type="file" name="b_img01" class="input1">
                        <span class="mori"><font color="0582b3">(파일용량은 5Mb 이하만 
                        가능하며 확장자는 JPG, JPEG, GIF만 가능합니다.)</font></span> </td>
                    </tr>
					<?
						if($board_data[2])
						{
					?>
					<tr height="5">
                      <td colspan="2"></td>
                    </tr>
					<tr>
                      <td colspan="2"> 
                        <span class="mori"><font color="0582b3">저장된 파일 : <?=$board_data[2]?></font> <input type="checkbox" name="b_img01_delete" value="1">삭제</span></td>
                    </tr>
					<?
						}
					?>
                  </table>
                </td>
              </tr>
              <tr bgcolor="fbfafa"> 
                <td valign="top"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr class="t0"> 
                      <td width="13%"><b><img src="<?=$httpImages?>/staff_026.gif" width="10" height="11" align="absmiddle" border="0"> 
                        이미지업2</b></td>
                      <td width="87%"> 
                        <input type="file" name="b_img02" class="input1">
                        <span class="mori"><font color="0582b3">(파일용량은 5Mb 이하만 
                        가능하며 확장자는 JPG, JPEG, GIF만 가능합니다.)</font></span> </td>
                    </tr>
					<?
						if($board_data[3])
						{
					?>
					<tr height="5">
                      <td colspan="2"></td>
                    </tr>
					<tr>
                      <td colspan="2"> 
                        <span class="mori"><font color="0582b3">저장된 파일 : <?=$board_data[3]?></font> <input type="checkbox" name="b_img02_delete" value="1">삭제</span></td>
                    </tr>
					<?
						}
					?>
                  </table>
                </td>
              </tr>
              <tr bgcolor="fbfafa"> 
                <td valign="top"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr class="t0"> 
                      <td width="13%"><b><img src="<?=$httpImages?>/staff_026.gif" width="10" height="11" align="absmiddle" border="0"> 
                        파일첨부1</b></td>
                      <td width="87%"> 
                        <input type="file" name="b_attach01" class="input1">
                        <span class="mori"><font color="0582b3">(파일용량은 30Mb 이하만 
                        가능합니다.)</font></span> </td>
                    </tr>
					<?
						if($board_data[4])
						{
					?>
					<tr height="5">
                      <td colspan="2"></td>
                    </tr>
					<tr>
                      <td colspan="2"> 
                        <span class="mori"><font color="0582b3">저장된 파일 : <?=$board_data[4]?></font> <input type="checkbox" name="b_attach01_delete" value="1">삭제</span></td>
                    </tr>
					<?
						}
					?>
                  </table>
                </td>
              </tr>
              <tr bgcolor="fbfafa"> 
                <td valign="top"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr class="t0"> 
                      <td width="13%"><b><img src="<?=$httpImages?>/staff_026.gif" width="10" height="11" align="absmiddle" border="0"> 
                        파일첨부2</b></td>
                      <td width="87%"> 
                        <input type="file" name="b_attach02" class="input1">
                        <span class="mori"><font color="0582b3">(파일용량은 30Mb 이하만 
                        가능합니다.)</font></span> </td>
                    </tr>
					<?
						if($board_data[5])
						{
					?>
					<tr height="5">
                      <td colspan="2"></td>
                    </tr>
					<tr>
                      <td colspan="2"> 
                        <span class="mori"><font color="0582b3">저장된 파일 : <?=$board_data[5]?></font> <input type="checkbox" name="b_attach02_delete" value="1">삭제</span></td>
                    </tr>
					<?
						}
					?>
                  </table>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" height="35">
              <tr> 
                <td align="right" height="45"><input type="image" src="<?=$httpImages?>/bt38.gif" width="51" height="28" alt="확인" border="0"> 
                  <a href="../community/board_list.php?bs_code=<?=$bs_code?>"><img src="<?=$httpImages?>/bt39.gif" width="51" height="28" border="0" alt="글쓰기를 취소합니다."></a></td>
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
    <td width="190" valign="top" align="right"> 
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
<script language="JavaScript">
var g4_path  = "../geditor";
var ge_path  = "../geditor";
</script>
<script language="JavaScript" src="../geditor/geditor.js"></script>
