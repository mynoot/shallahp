<?header("content-type:text/html; charset=UTF-8");

   include '../lib/db_connect.php';
   $connect=dbconn();

$id=$_POST[u_id];
$user_id=$_POST[user_id];
$name=$_POST[name];
$nick_name=$_POST[nick_name];
$gisu=$_POST[gisu];
$college=$_POST[college];
$pw=$_POST[pw];
$tel=$_POST[tel];

$pw=md5($pws);  //비밀번호 암호화

$regdate=date("YmdHis", time()); //날짜 시간
$ip=getenv("REMOTE_ADDR"); //ip

$query="insert into member(u_id, user_id, name, nick_name, gisu, college, pw, tel, regdate, ip)
values('$id', '$user_id', '$name', '$nick_name', '$gisu', '$college', '$pw', '$tel', '$regdate', '$ip')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);
mysql_close; //mysql끝내기
?>

<script>
window. alert('회원가입이 완료 되었습니다.');
location.href='../index.php';
</script>
