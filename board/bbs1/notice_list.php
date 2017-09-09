<html>
<head>
<?

include('../../lib/db_connect.php');
$connect=dbconn(); //DB컨넥트
$member=member();  //회원정보
?>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link type="text/css" href="../../lib/m_style.css" rel='stylesheet' />
<title>샬라 공지게시판</title>
</head>

<body>
<TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
<TR>
<TD WIDTH='100%'  HEIGHT='70'  ALIGN='LEFT'  VALIGN='MIDDLE' BGCOLOR='#E89C05'>
<table border='0' width='90%' height='70' bgcolor='#E89C05' align='center' cellspacing='0' cellpadding='0'>
<tr>

<tr>
    <td width='100%' height='100%' align='left' valign='middle'>&nbsp;</td>

	</tr>
	</table>

</TD>


<TR>
<?
$_page=$_GET[_page];

$Search_text=$_GET[Search_text];
$Search_mode=$_GET[Search_mode];




$view_total = 10; //한 페이지에 3개 게시글이 보인다.
if(!$_page)($_page=1); //페이지 번호가 지정이 안되었을 경우
$page= ($_page-1)*$view_total;

$where="no";

//검색할 종목을 선택 했을 때.
 if($Search_text){
   if($Search_mode==1) $tmp="subject";
   if($Search_mode==2) $tmp="story";

//전체에서 검색
if($Search_mode==3){
 $where="(subject like '%$Search_text%' or story like '%$Search_text%')";
}else{
 $where="$tmp like '%$Search_text%'";
}
}

$href = "&Search_mode=$Search_mode&Search_text=$Search_text"; //검색값 페이지처리에 보내기

$query="select count(*) from notice where $where and id='notice'";
mysql_query("set names utf8");  //언어셋 utf8
$result= mysql_query($query, $connect);
$temp= mysql_fetch_array($result);
$totals= $temp[0];


?>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>
<table border='0' width='75%' height='100%' bgcolor='E0DFDE' align='center' cellspacing='0' cellpadding='0'>
<tr>
    <td width='100%' height='10' colspan='5' bgcolor='FFFFF'>&nbsp;</td>
<tr>
    <td width='100%' height='30' colspan='5' class='font_td1' bgcolor='FFFFF'>- 공지게시판 -</td>

<tr>
    <td class='font_tr2' width='5%' height='30' align='center' valign='middle'>no</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>이름</td>
	<td class='font_tr2' width='40%' height='30' align='center' valign='middle'>제목</td>
	<td class='font_tr2' width='15%' height='30' align='center' valign='middle'>날짜</td>
	<td class='font_tr2' width='10%' height='30' align='center' valign='middle'>hit</td>

<?
$query= "select * from notice where $where and id='notice' order by no desc limit $page, $view_total";  //desc 내림차순   ASC 오름차순
$result=mysql_query($query,$connect);
$cnt=1;
while($data = mysql_fetch_array($result)){

$date_y= substr($data[regdate],2,2); //년도
$date_m= substr($data[regdate],4,2); //월
$date_d= substr($data[regdate],6,2); //일
$date_h= substr($data[regdate],8,2); //시간
$date_i= substr($data[regdate],10,2); //분

$subject= mb_substr($data[subject], 0, 26,'UTF-8');
?>
	<tr>
    <td height='25' align='center' bgcolor='EFEEEC'><?=$cnt?></td>
	<td height='25' align='center' bgcolor='EFEEEC'><?=$data[name]?></td>
	<td height='25' align='left' bgcolor='EFEEEC'><a href='view.php?no=<?=$data[no]?>&id=<?=$data[id]?>'><?=$subject?>
	&nbsp; &nbsp; <? if($data[comment]>=1) echo ("[".$data[comment]."]");?></a>
	</td>
	<td height='25' align='center' bgcolor='EFEEEC'>
	<?echo $date_y."-".$date_m."/".$date_d."&nbsp; &nbsp;".$date_h.":".$date_i; ?>
	</td>
	<td height='25' align='center' bgcolor='EFEEEC'><?=$data[hit]?></td>
<?
	$cnt++;
	}?>
<tr>
    <td height='20' colspan='5' bgcolor='FFFFF'><?include ('./notice_list_page.php');?></td>

	<tr>
    <td height='20' align='right' colspan='5' bgcolor='FFFFF'>
	 <a href='notice_write.php'><strong>[게시판 글쓰기]</strong></a>
	 &nbsp; &nbsp;</td>


<tr>
 <!---게시물 검색--->
 <form action='<?=$PHP_SELE?>'>
	 <td height='20' colspan='5' bgcolor='#FFFFFF' align='right'>
	 Search &nbsp;
	 <select name='Search_mode'>
	   <option value='3'>전체에서
	   <option value='1'> 제목에서
	   <option value='2'>내용에서
	   </select>

	   <input type='text' name='Search_text' size='10'>
	   <input type='submit' value='Search'>
	   &nbsp; &nbsp;
	   <input type='reset' value='리셋' onclick='location.reload();'>
	   &nbsp;
	 </td>
	 </form>
	</tr>
	</table>

</TD>




<TR>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>&nbsp;</TD>
</TR>
</TABLE>

</body>
</html>
