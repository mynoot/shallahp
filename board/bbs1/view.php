<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <title>Shalla 1979 | English Speech club.</title>
        <link href="assets/css/layout.css" rel="stylesheet"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/css/fonts/Rubik-Fonts.css" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/earlyaccess/nanumpenscript.css" rel="stylesheet">

        <style>
            .section-header .separator {
                margin: 0em auto 2em;
            }
            .space-50{
                height: 50px;
                width: 100%;
                display: block;
                content: "";
            }
            .section .parallax > img{
                width: 100%;
                min-width: 0;
                min-height: 0;
            }
            .pattern-image:after{
                opacity: .2;
/*                 background: #111; */
            }
            .section-header h1{
                text-shadow: -2px 2px 30px rgba(0, 0, 0, 0.25), -2px 4px 14px rgba(0, 0, 0, 0.1);
            }
            .section-header h5{
                  text-shadow: 0px 0px 11px rgba(0, 0, 0, 0.3);
            }
            .section-header .content{
                top: 42%;
            }
            .section-we-are-1 .title{
                max-width: 960px;
            }
            .card .icon ~ h3{
                margin-bottom: 10px;
            }
            .section-with-hover .project .content{
                text-align: center;
            }
            .section-with-hover .project .over-area{
                background: rgba(0, 0, 0, .83);
            }
            .section-clients-2{
                padding: 6em 0 1em;
            }
            .section-clients-2 .nav-text li {
                margin: 0 15px 10px 15px;
            }
            .section-contact-3 .contact-container .address-container{
                width: 28%;
                background-color: #FFFFFF;
                height: 470px;
                top: 50px;
                padding: 20px;
            }
            .section-contact-3 .address{
                margin-top: 40px;
            }
            .section-we-made-3 .content{
                padding: 0 15px;
                text-align: center;
            }
            .section-we-made-3 .over-area .content h3{
                margin: 5px 0 20px;
            }
            .section-we-made-3 .over-area .content p{
                font-size: .9em;
                color: #898989;
            }
            .section-we-made-3 .over-area .content h5{
                margin-bottom: 0px;
                margin-top: 20px;
            }

            .btn-black{
                letter-spacing: 1px;
                margin-top: 20px;
            }

            .copyright a{
                color: #FFFFFF;
            }

            .section-team-2 .team .member p {
              font-size: .9em;
              padding: 0 10px;
            }

            .card{
                margin-bottom: 30px;
            }
            .section-with-hover .project .over-area.over-area-sm .content p {
              font-size: .85em;
            }
            .section-with-hover .project .over-area.over-area-sm .content h4 {
              font-size: 1.6em;
            }
            .logo{
                display: block;
                margin: 0 auto 10px;
                width: 61px;
                height: 61px;
                border-radius: 50%;
                border: 1px solid #333333;
                overflow: hidden;
            }
            .logo img{
                width: 100%;
                height: 100%;
            }
            .loading .loading-container p {
                font-size: 30px;
                width: 220px;
                margin: 0 auto;
                margin-bottom: 30px;
                height: 35px;
            }
            .loading .logo{
                opacity: 0;
                transition: all 0.9s;
                -webkit-transition: all 0.9s;
                -moz-transition: all 0.9s;
            }
            .loading .logo.visible{
                opacity: 1;
            }
            .sharrre.btn{
                color: #444444;
                border-color: #444444;
                font-weight: 400;
            }
            .address .col-md-6{
                padding-right: 7px;
                padding-left: 7px;
            }
            a.img-class{
                opacity: 1;
            }
            a.img-class:hover{
                opacity: .9;
            }

            .btn-lg{
                padding: 14px 10px;
            }

            @media (max-width: 1200px){
                .section-contact-3 .contact-container .address-container{
                    height: 520px;
                }
            }
            .dim-layer * {
                  margin: 0;
                  padding: 0;
                }

            .dim-layer body {
                  margin: 100px;
                }

            .dim-layer .pop-layer .pop-container {
                  padding: 20px 25px;
                }

            .dim-layer .pop-layer p.ctxt {
                  color: #666;
                  line-height: 25px;
                }

            .dim-layer .pop-layer .btn-r {
                  width: 100%;
                  margin: 10px 0 20px;
                  padding-top: 10px;
                  border-top: 1px solid #DDD;
                  text-align: right;
                }

            .dim-layer .pop-layer {
                  display: block;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  width: 650px;
                  height: auto;
                  background-color: #fff;
                  border: 5px solid #3571B5;
                  border-radius: 10px;
                  z-index: 10;
                }
            @media (max-width: 650px){
                 .dim-layer .pop-layer {
                  display: block;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  width: 100%;
                  height: auto;
                  background-color: #fff;
                  border: 5px solid #3571B5;
                  border-radius: 10px;
                  z-index: 10;
                   margin-top: 0;
                     margin-left: 0;

                }
            }
            .dim-layer {
                  display: none;
                  position: fixed;
                  _position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  z-index: 100;
                }

            .dim-layer .dimBg {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  background: #000;
                  opacity: .5;
                  filter: alpha(opacity=50);
                }

          .dim-layer a.btn-layerClose {
                  display: inline-block;
                  height: 35px;
                  padding: 0 14px 0;
                  border: 1px solid #304a8a;
                  background-color: #3f5a9d;
                  border-radius: 7px;
                  font-size: 22px;
                  color: #fff;
                  line-height: 31px;
                }

            .dim-layer a.btn-layerClose:hover {
                  border: 1px solid #091940;
                  background-color: #1f326a;
                  color: #fff;
                }
        </style>
    </head>
    <body>


         <div class="wrapper">
            <div class="section section-header">
                <div class="parallax pattern-image">
                    <img src="assets/img/bg2.jpg"/>
<!--                     <img src="/assets/img/header6.jpg"/> -->
                    <div class="container">
                        <div class="content">
                            <div class="separator-container">
                                <div class="separator line-separator">∎</div>
                            </div>
                            </div>
                    </div>
                </div>
             </div>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Shalla</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Shalla</a>
          <ul class="dropdown-menu">
            <li><a href="../../intro_shalla.php">샬라소개</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../../staff_his.php">스텝연혁</a></li>
            <li><a href="../../HOF.php">명예의전당</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notice</a>
          <ul class="dropdown-menu">
            <li><a href="../../notice_board.php">공지게시판</a></li>
            <li><a href="../../cal.php">00기 일정</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Board</a>
          <ul class="dropdown-menu">
            <li><a href="../../s_intro.php">자기소개란</a></li>
            <li><a href="../../free_board.php">자유게시판</a></li>

            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../../secret_b.php">익명게시판</a></li>
          </ul>
         </li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Library</a>
            <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            </ul>
        </li>
      </ul>

    <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <div class="navbar-right navbar-brand">
        <?if($member[user_id]){
        echo $member[name]."(".$member[user_id].") 님 환영합니다.";
        }else{?>
        <a href="?tag=sign_up"><strong>Sign-Up</strong></a>

        <a href="./member/login.php" class="btn-popup"><strong>Log-In</strong></a>

            <?}?>
       <?if($member[user_id]){?>
        <a href="./member/logout.php"><strong>Log-Out</strong></a>
        <?}?>
      </div>
      <?ob_start();?>

      <html>
      <head>
      <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
      <link type="text/css" href="../../lib/m_style.css" rel='stylesheet' />
      <title>자유게시판 글보기</title>
      <?

      include ("../../lib/db_connect.php");
      $connect= dbconn();
      $member= member();

      if(!$member[user_id])Error("로그인 후 이용해 주세요.");

      $no= $_GET[no];
      $id= $_GET[id];

      $re_wt=$_GET[re_wt];  //코멘트 답글입력란 생성  값이 (Y)면 .....
      $lo_reply_1=$_GET[lo_reply_1]; //페이지 로케이션
      $d_no=$_GET[d_no]; //코멘트 순번.


      $bbs1=$no;
      if($no != $_COOKIE['hit_bbs1_'.$no]){
      $_query="update bbs1 set hit=hit+1 where no='$no'";
      mysql_query($_query, $connect);
      setcookie("hit_bbs1_".$no,$no,time()+60*60*24,"/");
      }
      ?>
      </head>

      <body>

      <TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
      <TR>
      <TD WIDTH='70%'  HEIGHT='100%'  ALIGN='LEFT'  VALIGN='MIDDLE' BGCOLOR='#ffffff'>
      <table border='0' width='90%' height='100%' bgcolor='#ffffff' align='center' cellspacing='0' cellpadding='0'>
      <tr>

      </td>
      <?
       $query="select * from bbs1 where no='$no' and id='$id' ";
       mysql_query("set names utf8");
        $result= mysql_query($query, $connect);
       $data= mysql_fetch_array($result);
      ?>
      <tr>
      <td width='100%' height='10' align='center' valign='middle'>
      &nbsp;
      </td>

      <tr>
      <td width='100%' height='15' align='left' valign='middle'>
      <li> 이 름:<?=$data[name]?> (<?=$data[user_id]?>)  &nbsp; &nbsp; &nbsp; <?if($data[nick_name]){?>닉네임:<?echo $data[nick_name]; }?>
      </td>

      <tr>
      <td width='100%' height='25' align='left' valign='middle'>
      <li>글 제 목:<?=$data[subject]?>
      </td>

      <tr>
      <td width='100%' height='300' align='left' valign='top' bgcolor='FFFFFF'>
      <hr size='0.1' width='98%' color='94A0FC' />
      <div align='center'>
      <?if($data[file01]){?>
      <img src='./data/<?=$data[file01]?>' >
      <?}?>
      </div>
      <br>
      <?=$data[story]?>
      </td>

      <tr>
      <td width='100%' height='10' align='center' valign='middle'>
      &nbsp;
      </td>

      <tr>
      <td width='100%' height='20' align='center' valign='middle' bgcolor='D4D5D3'>
      <a href="list.php">글목록</a> &nbsp; &nbsp;
      <a href="edit.php?no=<?=$data[no]?>&id=<?=$data[id]?>">글수정</a> &nbsp; &nbsp;
      <a href="del.php?no=<?=$data[no]?>&id=<?=$data[id]?>" onclick="return confirm('정말 삭제 하시겠습니까?');">삭 제</a>
      </td>

      <tr>
      <td width='100%' height='50' align='center' valign='middle'>
      &nbsp;
      </td>

      </tr>
      </table>
      </TD>

      <TR>
      <TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>


      <!---/////////////////////////////[코 멘 트]//////////////////////////////////--->
      <table border='0'   width='100%' cellspacing='0' cellpadding='0'>
      <tr>
      <td width='854' align='center'><hr></td>



      <tr>
      <td width='854' align='center'>

      <!-------코맨트 출력---------->
      <table border='0'  width='800' cellspacing='0' cellpadding='0' id='lo_reply_1'>
      <?
      $q_count= "select count(*) from bbs1_comment where bbs1_no='$data[no]'";
      $r_count = mysql_query($q_count, $connect);
      $count=mysql_fetch_array($r_count);
      $total_count= $count[0]; //코멘트 총개수
      ?>
      <tr>
      <td colspan='4' align='right'>
      <font color='9C9A9A'>TOTAL comment: <?=$total_count?></font>&nbsp; &nbsp;
      </td>

      <?
      $q= "select * from bbs1_comment where bbs1_no='$data[no]' and replys='0' order by regdate asc, no asc";
      $r= mysql_query($q, $connect);
      while($d=mysql_fetch_array($r)){
      ?>

      <tr>
      <td width='50' align='center' valign='middle' rowspan='3' bgcolor='#E3E0E0'>
      <img src='./img/pv_x.gif' width='50' height='50'>
      </td>

      <td width='10' valign='middle' rowspan='3' bgcolor='#E3E0E0'>&nbsp;</td>




      <tr>
      <td width='674'  valign='middle' bgcolor='#E3E0E0'>
      <span style='font-size:9pt; font-family:Tahoma; color:#727371'>
      <?if($d[nick_name]){
      	echo $d[nick_name];
      }else{
      	echo $d[name]; }?>
      	&nbsp; &nbsp; &nbsp; &nbsp;

      	<?
      	echo $d_Y= substr($d[regdate],0,4)."-";
      	echo $d_m= substr($d[regdate],4,2)."-";
      	echo $d_d= substr($d[regdate],6,2)."&nbsp;";
      	echo $d_h= substr($d[regdate],8,2).":";
      	echo $d_i= substr($d[regdate],10,2);
      	?>
        </span>
        </td>


      <td width='120' align='right' valign='middle' bgcolor='#E3E0E0'>
      <?if($member[user_id]){?>
      <a href='view.php?id=<?=$id?>&re_wt=Y&no=<?=$data[no]?>&d_no=<?=$d[no]?>&#lo_reply_2' onfocus="this.blur()">
       <span style='font-size:9pt; font-family:Tahoma; color:#727371'>[답글달기]</span></a> &nbsp;
       <?}?>
        </td>


      <tr>
      <td colspan='4' valign='top'bgcolor='#E3E0E0'>
      		<? echo "<font color='#073C62'>".nl2br($d[memo])."</font>";?>
      		<div align='right'>
      		<a href='./comment_del.php?d_no=<?=$d[no]?>&no_s=<?=$data[no]?>&bbs1_no=<?=$d[bbs1_no]?>&replys_all=all' onfocus='this.blur()'>
      		<font color='#FF0000' onclick="return confirm('정말로 삭제 하시겠습니까?')">[DEL]</font></a>
      		&nbsp; &nbsp; &nbsp;
      		</div>
      		</td>

      <?
      ////////////// 코맨트 (답글-출력)/////////////
      $q_2="select * from bbs1_comment where bbs1_no='$data[no]' and replys='$d[no]' order by regdate asc";
      $r_2= mysql_query($q_2, $connect);
      while($d_2=mysql_fetch_array($r_2)){
      ?>
      <tr>
      <td  width='100%' height='5' valign='top' colspan='4'  >

      <table border='0' width='100%' height='5' valign='middle'>
      <tr>
      <td width='10'>&nbsp;</td>
      <td width='10' align='center'>
      <span style='font-size:11pt; color:#8A8A88'>└</span>
      </td>

      <td width='30' align='center'>
      <img src="./img/pv_x.gif" width='30' height='30'>
      </td>

      <td width='75%' align='left'>
      <span style='font-size:9pt; color:#8A8A88'>
      <?
      if($d_2[nick_name]){
      	echo $d_2[nick_name];
      }else{
      	echo $d_2[name];
      }
      ?>
      &nbsp; &nbsp; &nbsp; &nbsp;
      <?
      echo $d_2_Y= substr($d_2[regdate],0,4)."-";
      echo $d_2_m= substr($d_2[regdate],4,2)."-";
      echo $d_2_d= substr($d_2[regdate],6,2)."&nbsp;";
      echo $d_2_h= substr($d_2[regdate],8,2).":";
      echo $d_2_i= substr($d_2[regdate],10,2);
      ?>
       <br>
      <?=$d_2[memo]?></span>
      &nbsp; &nbsp;
      		<div align='right'>
              <a href="comment_del.php?d_no=<?=$d_2[no]?>&no_s=<?=$data[no]?>&bbs1_no=<?=$d_2[bbs1_no]?>&replys=<?=$d_2[replys]?>&reply_rr=rr" onfocus="this.blur()" >
      		<span style='font-size:8pt; color:#5A5B5A' onclick="return confirm('정말로 삭제 하시겠습니까?')">[del]</span></a>
      		&nbsp; &nbsp; &nbsp;
      		</div>

      </td>

      </tr>
      </table>
      </td>
      <?	}
      //////////////  코맨트 (답글-출력) [끝]///////////// ?>



      <? /// 코맨트 (답글-입력) ///
       if($re_wt=='Y' and $d_no==$d[no]){
      ?>
      <form name='replys'  action='comment_write.php' method='post'>
      <input type=hidden name='id' value='<?=$data[id]?>'>
      <input type=hidden name='bbs1_no' value='<?=$data[no]?>' >
      <input type=hidden name='replys' value='<?=$d[no]?>'>



      <tr>
      <td id='lo_reply_2' colspan='2' align='right'>
      <span style='font-size:11pt; color:#8A8A88'>└</span>
      </td>

      <td  align='center' valign='middle'>
      <textarea name='memo' style="width:90%; height:30px;"></textarea>
      </td>

      <td align='center' valign='middle'>
      <input type=submit value='submit' style="width:80px; height:20px;" />
      </td>
      </form>
      <?
      	}
      } /// 코맨트 (답글-입력) [끝] ///?>


      <tr>
      <td  width='100%' height='5' valign='top' colspan='4'>&nbsp;</td>

      </tr>
       </table>









      <? /////////// 코맨트 (입력) ////////////
        if($member[user_id]){  //회원아이디가 있으면 실행
      ?>
        <table border='0' width='800' cellspacing='0' cellpadding='0'>
        <tr>
      <td width='100%' height='30' colspan='5' align='center' valign='middle' bgcolor='#FFFFFF'>
      <hr size='0.1' width='95%' color='#B2B2B2' />
      </td>

      	 <tr>
      <form name='replys'  action='comment_write.php' method='post'>
      <input type=hidden name='bbs1_no' value='<?=$data[no]?>' title='게시판글 번호'>
      <input type=hidden name='replys' value='0'>
      <input type=hidden name='id' value='<?=$data[id]?>'>


      <td width=120 align='center' valign='middle' bgcolor='#E7CADE'>
      <?
      if($member[nick_name]){
      	 echo $member[nick_name];
      }else{
      	echo $member[name];
      }
      ?>
      </td>

      <td width='20' align='left' bgcolor='#FFD2F1'>&nbsp;</td>


      <td width='100' align='right' bgcolor='#FFD2F1'>Comment &nbsp;</td>

      	   <td align='left' bgcolor='#FFD2F1'>
      	   <textarea name='memo' cols=80 rows=3 style='width=100%'></textarea>
      	   </td>


      	   <td width=30> <input type=submit value='O K'></td>
      	   </tr>
      	   	 </form>
          </table>
      	<?} //회원아이디가 있으면 여기까지?>
       <!---//////////코맨트 (입력) [끝] //////////--->

      </td>
      </tr>
      </table>
      <!---/////////////////////////////[코 멘 트 ((끝))]//////////////////////////////////--->

      </TD>
      </TR>
      </TABLE>

      </body>
      </html>

    </div><!-- /.navbar-collapse -->
    <div class="dim-layer">
                <div class="dimBg"></div>
                <div id="layer2" class="pop-layer">
                    <div class="pop-container">
                        <div class="pop-conts">
        <!--content //-->
                            <?php
                            echo file_get_contents('member/login.php');
                            ?>
        <!--// content-->
                            <div class="btn-r">
                                <a href="" class="btn-layerClose">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  </div><!-- /.container-fluid -->
</nav>
<div style="text-align:center;">



</div>

            <footer class="footer footer-color-black">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a target="_blank" href="index.php">
                                Home
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/groups/216517061710551/">
                            <i class="fa fa-facebook-square"></i>Facebook
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2017 <a target="_blank">70th Wanny & Minoot </a>, page made with <a target="_blank" href="http://demos.creative-tim.com/rubik">Rubik</a>
                    </div>
                </div>
            </footer>

        </div> <!-- end wrapper -->
    </body>
    <!--   core js files    -->
  <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <!--   file for adding vertical points where we activate the elements animation   -->
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <!--  js library for devices recognition -->
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <!--  script for google maps   -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <!--   file where we handle all the script from the Rubik page   -->
    <script type="text/javascript" src="assets/js/rubick_pres.js"></script>

    <script type="text/javascript" src="assets/js/presentation-page/jquery.sharrre.js"></script>

     <script type="text/javascript">
    $('.btn-popup').click(function(){
        var $href = $(this).attr('href');
        layer_popup($href);
    });
    function layer_popup(el){

        var $el = $(el);        //레이어의 id를 $el 변수에 저장
        var isDim = $el.prev().hasClass('dimBg');   //dimmed 레이어를 감지하기 위한 boolean 변수

        isDim ? $('.dim-layer').fadeIn() : $el.fadeIn();

        var $elWidth = ~~($el.outerWidth()),
            $elHeight = ~~($el.outerHeight()),
            docWidth = $(document).width(),
            docHeight = $(document).height();

        // 화면의 중앙에 레이어를 띄운다.
        if ($elHeight < docHeight || $elWidth < docWidth) {
            $el.css({
                marginTop: -$elHeight /2,
                marginLeft: -$elWidth/2
            })
        } else {
            $el.css({top: 0, left: 0});
        }

        $el.find('a.btn-layerClose').click(function(){
            isDim ? $('.dim-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
            return false;
        });

        $('.layer .dimBg').click(function(){
            $('.dim-layer').fadeOut();
            return false;
        });

    }
    </script>
    <script type="text/javascript">

        $('#twitter').sharrre({
          share: {
            twitter: true
          },
          enableHover: false,
          enableTracking: true,
          enableCounter: false,
          buttons: { twitter: {via: 'CreativeTim'}},
          click: function(api, options){
            api.simulateClick();
            api.openPopup('twitter');
          },
          template: '<i class="fa fa-twitter"></i> Twitter &middot; 532',
          url: 'http://presentation.creative-tim.com/'
        });

        $('#facebook').sharrre({
          share: {
            facebook: true
          },
          enableHover: false,
          enableTracking: true,
          enableCounter: false,
          click: function(api, options){
            api.simulateClick();
            api.openPopup('facebook');
          },
          template: '<i class="fa fa-facebook-square"></i> Facebook &middot; 352',
          url: 'http://presentation.creative-tim.com/'
        });

    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46172202-5', 'auto');
      ga('send', 'pageview');

    </script>

</html>
