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

      <?
      include ("./lib/db_connect.php");
      $connect= dbconn();
      $member=member();?>
         <div class="wrapper">
            <div class="section section-header">
                <div class="parallax pattern-image">
                    <img src="assets/img/bg2.jpg"/>
<!--                     <img src="/assets/img/header6.jpg"/> -->
                    <div class="container">
                        <div class="content">
                            <h1><?php
                                switch($_GET['tag']){
                                    case 'notice' : echo ('공지'); break;
                                    case 'cal' : echo ('00기 일정'); break;
                                    case 'free_b' : echo ('자유게시판'); break;
                                    case 'secret_b' : echo ('익명게시판'); break;
                                    case 's_intro' : echo ('자기소개란'); break;
                                    case 'shalla_intro' : echo ('샬라소개'); break;
                                    case 'staff_his' : echo ('스텝연혁'); break;
                                    case 'HOF' : echo ('명예의전당'); break;
                                    case 'sign_up' : echo ('회원가입'); break;
                                    default : echo('Shalla'); break;
                                }
                                ?></h1>
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
            <li><a href="intro_shalla.php">샬라소개</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="staff_his.php">스텝연혁</a></li>
            <li><a href="HOF.php">명예의전당</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notice</a>
          <ul class="dropdown-menu">
            <li><a href="notice.php">공지게시판</a></li>
            <li><a href="cal.php">00기 일정</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Board</a>
          <ul class="dropdown-menu">
            <li><a href="s_intro.php">자기소개란</a></li>
            <li><a href="free_board.php">자유게시판</a></li>

            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="secret_b.php">익명게시판</a></li>
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
  <iframe src="https://calendar.google.com/calendar/embed?src=f26o03mc65ddrlb5n9i52qu78c%40group.calendar.google.com&ctz=Asia/Seoul" style="border:0; border-radius:7px"  width="800" height="600" frameborder="0" scrolling="no" ALIGN='CENTER'></iframe>


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
