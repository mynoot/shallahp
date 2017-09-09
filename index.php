
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <title>Shalla 1979 | English Speech club.</title>

        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/rubick_pres.css" rel="stylesheet"/>
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/css/fonts/Rubik-Fonts.css" rel="stylesheet" />

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

            @media(max-width: 650px){
                .dim-layer .pop-layer {
                  display: block;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  height: auto;
                  width: 100%;
                  background-color: #fff;
                  border: 5px solid #3571B5;
                  border-radius: 10px;
                  z-index: 10;
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



        <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-burger" role="navigation">
            <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
            <div class="container">
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a target="_blank" href="" class="navbar-brand">
                    SHALLA
                    </a>

                   <tr>
                   <td width='100%' height='50' align='right'>
                 <?if($member['user_id']){
                echo $member[name]."(".$member[user_id].") 님 환영합니다.";
                   }else{?>
                     <a id="signup" class="navbar-brand" style="float: right; font-size: 15px" href="a_s.php?tag=sign_up"><strong>Sign-up</strong></a>
                     &nbsp; &nbsp; &nbsp;

                    <a href="member/login.php" class="btn-popup navbar-brand" style="float: right; font-size: 15px" ><strong>Log-in</strong></a>
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
                   <?}?>

                   <?if($member['user_id']){?>
                     <a id="logout" class="navbar-brand" style="float: right; font-size: 15px" href="./member/logout.php"><strong>Log-out</strong></a>
                     <?}?>
                   </td>


                </div>
            </div>

            <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">
                        <li class="social-links">
                            <a href="https://www.facebook.com/groups/216517061710551/">
                                <i class="fa fa-facebook-square"></i>
                            </a>

                        </li>
                        <li>
                            <a href="a_s.php?tag=shalla_intro">
                            About Shalla
                            </a>
                        </li>
                        <li>
                            <a href="notice_board.php">
                            Notice
                            </a>
                        </li>
                        <li>
                            <a href="free_board.php">
                            Board
                            </a>
                        </li>
                        <li>
                            <a href="a_s.php?tag=">
                            Library
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div class="section section-header">
                <div class="parallax pattern-image">
                    <img src="https://ununsplash.imgix.net/photo-1427434846691-47fc561d1179?fit=crop&fm=jpg&h=700&q=75&w=1050"/>
<!--                     <img src="/assets/img/header6.jpg"/> -->
                    <div class="container">
                        <div class="content">
                            <h1>SHALLA</h1>
                            <div class="separator-container">
                                <div class="separator line-separator">∎</div>
                            </div>

                            <h5>English speech club for university student in Seoul & KyeongIn area.</h5>

                        </div>
                    </div>
                </div>
                <a href="" data-scroll="true" data-id="#whoWeAre" class="scroll-arrow hidden-xs hidden-sm">
                <i class="fa fa-angle-down"></i>
                </a>
            </div>
            <div class="section section-we-are-1" id="whoWeAre">
                <div class="text-area">
                    <div class="container">
                        <div class="row">
                            <div class="title" id="animationTest">
                                <h2>About Shalla</h2>
                                <div class="separator-container">
                                    <div class="separator line-separator">∎</div>
                                </div>
                                <p class="large">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card add-animation animation-2">
                                        <img alt="..." src="assets/img/pic10.jpg" />
                                    </div>
                                    <div class="card add-animation animation-4">
                                        <img alt="..." src="assets/img/pic6.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card add-animation animation-1">
                                        <img alt="..." src="assets/img/pic11.jpg"/>
                                    </div>
                                    <div class="card add-animation animation-3">
                                        <img alt="..." src="assets/img/pic1.jpg"/>
                                    </div>
                                    <div class="card add-animation animation-2">
                                        <img alt="..." src="assets/img/pic9.jpg"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card add-animation animation-3">
                                        <img alt="..." src="assets/img/pic2.jpg"/>
                                    </div>
                                     <div class="card add-animation animation-1">
                                        <img alt="..." src="assets/img/pic4.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-we-do-2" id="workflow">
                <div class="container">
                    <div class="row">
                        <div class="title add-animation">
                            <h2>What we do</h2>
                            <div class="separator-container">
                                <div class="separator line-separator">∎</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card add-animation animation-1">
                                <div class="icon">
                                    <i class="pe-7s-tools"></i>
                                </div>
                                <h3>Create UI Tools</h3>
                                <p>We have created the tools that will help you in your next design project. From plugins to complex kits, we've got you covered in all areas regarding front-end development. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-2">
                                <div class="icon">
                                    <i class="pe-7s-gift"></i>
                                </div>
                                <h3>Share Freebies</h3>
                                <p>Everything that we used to create our platform can be downloaded for free and guess what, people love free stuff. People have already trusted and used them in thousands of sites.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-3">
                                <div class="icon">
                                    <i class="pe-7s-rocket"></i>
                                </div>
                                <h3>Power Hackathons</h3>
                                <p>We've sponsored many hackathons around the world with the tools that they need to make awesome web applications. We like to help where we can, and our tools go hand in hand with startups. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-we-made-3" id="projects">
                <div class="container">
                    <div class="row">
                        <div class="title add-animation">
                            <h2>Our Famous Freebies</h2>
                            <div class="separator-container">
                                <div class="separator line-separator">∎</div>
                            </div>
                            <p>Check out the most popular freebies from our platform. We would love to hear your feedback.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="project add-animation animation-1">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/material-dashboard?ref=presentation-page">
                                    <img src="assets/img/opt_md_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">Just Launched</h5>
                                        <h3>Material Dashboard</h3>
                                        <p>Material Dashboard is a free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design</p>
                                        <a target="_blank" href="http://demos.creative-tim.com/material-dashboard/examples/dashboard.html" class="btn btn-round">Live View</a>
                                        <a target="_blank" href="http://www.creative-tim.com/product/material-dashboard?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="project add-animation animation-2">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/material-kit?ref=presentation-page">
                                   <img src="assets/img/opt_mk_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">6.800+ Downloads</h5>
                                        <h3>Material Kit</h3>
                                        <p>Material Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Google's material design. You asked for it, so we built it. It's a great pleasure to introduce...</p>
                                        <a target="_blank" href="http://demos.creative-tim.com/material-kit/index.html?ref=presentation-page" class="btn btn-round">Live View</a>
                                        <a target="_blank" href="http://www.creative-tim.com/product/material-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="project add-animation animation-3">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/get-shit-done-kit?ref=presentation-page">
                                    <img src="assets/img/opt_GSDK_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">19.200+ Downloads</h5>
                                        <h3>Get Shit Done Kit</h3>
                                        <p>Free Bootstrap 3 UI Kit, the best starting point for any online project you are building. It magically offers responsive design and easy to use elements.</p>
                                        <a target="_blank" href="http://www.creative-tim.com/get-shit-done" class="btn btn-round">Live View</a>
                                        <a target="_blank" href="http://www.creative-tim.com/product/get-shit-done-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="space-50"></div>

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="project add-animation animation-1">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/gaia-bootstrap-template?ref=presentation-page">
                                    <img src="assets/img/opt_gbt_thumbnail.jpg">
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">3.100+ Downloads</h5>
                                        <h3>Gaia Bootstrap Template</h3>
                                        <p>Gaia Bootstrap Template is the Free Demo of Gaia Bootstrap Template PRO which is a multi-page Bootstrap template designed to be easy to use and stylish.
</p>
                                        <a target="_blank" href="http://demos.creative-tim.com/gaia-bootstrap-template/freebie.html" class="btn btn-round">Live View</a>
                                        <a target="_blank" href="http://www.creative-tim.com/product/gaia-bootstrap-template?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="project add-animation animation-2">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/light-bootstrap-dashboard?ref=presentation-page">
                                    <img src="assets/img/opt_lbd_thumbnail.jpg">
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">8.500+ Downloads</h5>
                                        <h3>Light Bootstrap Dashboard</h3>
                                        <p>Light Bootstrap Dashboard is an admin dashboard template designed to be beautiful and simple. It is built on top of Bootstrap 3 and it is fully responsive.</p>
                                         <a target="_blank" href="http://demos.creative-tim.com/light-bootstrap-dashboard/dashboard" class="btn btn-round">Live View</a>
                                        <a target="_blank" href="http://www.creative-tim.com/product/light-bootstrap-dashboard?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="project add-animation animation-3">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/paper-kit?ref=presentation-page">
                                    <img src="assets/img/opt_pk_thumbnail.jpg">
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">6.200+ Downloads</h5>
                                        <h3>Paper Kit</h3>
                                        <p>Paper Kit is a free Bootstrap UI kit that can get you going in a new creative direction! To say the least, it's different since it's not material, flat or iOS inspired.</p>
                                        <a target="_blank" href="http://demos.creative-tim.com/paper-kit" class="btn btn-round">Live View</a>
                                        <a target="_blank" href="http://www.creative-tim.com/product/paper-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="section section-we-made-3" id="uitools">
                <div class="container">
                    <div class="row">
                        <div class="title add-animation">
                            <h2>Our Premium UI Tools</h2>
                            <div class="separator-container">
                                <div class="separator line-separator">∎</div>
                            </div>
                            <p>Check out these UI Tools, they will speed up your development process for sure!<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="project add-animation animation-1">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/material-kit-pro?ref=presentation-page">
                                    <img src="assets/img/opt_mkp_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">UI Kit from $79</h5>
                                        <h3>Material Kit PRO</h3>
                                        <p>Start Your Development With A Badass Bootstrap UI Kit inspired by Material Design. If you like Google's Material Design, you will love this kit!</p>
                                         <a target="_blank" href="http://www.creative-tim.com/product/material-kit-pro/?ref=presentation-page" class="btn btn-round btn-fill">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="project add-animation animation-2">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/gaia-bootstrap-template-pro?ref=presentation-page">
                                    <img src="assets/img/opt_gbtp_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">Template from $29</h5>
                                        <h3>Gaia Bootstrap Template PRO</h3>
                                        <p>Gaia is a multi-page Bootstrap Template designed to be easy to use and stylish. If you are trying to create a new website, presentation page or blog, this is definitely a great fit for you.</p>
                                         <a target="_blank" href="http://www.creative-tim.com/product/gaia-bootstrap-template-pro/?ref=presentation-page" class="btn btn-round btn-fill">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="project add-animation animation-3">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro/?ref=presentation-page">
                                    <img src="assets/img/opt_lbd_pro_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">Dashboard from $39</h5>
                                        <h3>Light Bootstrap Dashboard PRO</h3>
                                        <p>Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. It comes integrated with a large number of plugins redesigned to fit in with the rest of the elements. </p>
                                         <a target="_blank" href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro/?ref=presentation-page" class="btn btn-round btn-fill">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="project add-animation animation-1">
                                <a target="_blank" class="img-class" href="http://creative-tim.com/product/paper-kit-pro/?ref=presentation-page">
                                    <img src="assets/img/opt_pk_pro_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">UI Kit from $49</h5>
                                        <h3>Paper Kit PRO</h3>
                                        <p>Paper Kit PRO is a set of coded web components built over Bootstrap, having a design that resembles paper. The kit comes with a huge number of customisable components.</p>
                                        <a target="_blank" href="http://creative-tim.com/product/paper-kit-pro/?ref=presentation-page" class="btn btn-round btn-fill">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="project animation-3">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/paper-dashboard-pro?ref=presentation-page">
                                    <img src="assets/img/opt_pdp_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">Dashboard from $39</h5>
                                        <h3>Paper Dashboard PRO</h3>
                                        <p>Paper Dashboard PRO is a beautiful Bootstrap admin dashboard with a large number of components, designed to look neat and organised.</p>
                                         <a target="_blank" href="http://www.creative-tim.com/product/paper-dashboard-pro/?ref=presentation-page" class="btn btn-round btn-fill">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="project add-animation animation-2">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/get-shit-done-pro/?ref=presentation-page">
                                    <img src="assets/img/opt_gsdk_new_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">UI Kit from $39</h5>
                                        <h3>Get Shit Done PRO</h3>
                                        <p>Get Shit Done Kit Pro comes with a huge number of customisable components. The components are not only designed to be pixel perfect and light but are also easy to use and match each other perfectly.</p>
                                        <a target="_blank" href="http://www.creative-tim.com/product/get-shit-done-pro/?ref=presentation-page" class="btn btn-round btn-fill">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">

                            <div class="project add-animation animation-3">
                                <a target="_blank" class="img-class" href="http://www.creative-tim.com/product/rubik-presentation-page?ref=presentation-page">
                                    <img src="assets/img/opt_rubik_thumbnail.jpg"/>
                                </a>
                                <div class="over-area over-area-sm color-1">
                                    <div class="content">
                                        <h5 class="text-gray">Template from $19</h5>
                                        <h3>Rubik Presentation Page</h3>
                                        <p>Create your own page with many combinations! We created a builder that resembles a rubik cube. All the possible sections are simply awesome and will create an amazing looking presentation page.</p>
                                         <a target="_blank" href="http://www.creative-tim.com/product/rubik-presentation-page/?ref=presentation-page" class="btn btn-round btn-fill">More Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>



            <div class="section section-clients-2" id="clients">
                <div class="container">
                    <div class="title add-animation">
                        <h2>What people think...</h2>
                        <div class="separator-container">
                            <div class="separator line-separator">∎</div>
                        </div>
                    </div>
                    <div class="tab-content quotes add-animation animation-2">
                        <div class="tab-pane active" id="sony">
                            <p class="large">
                                Hey Creative-Tim team. Absolutely love your work! It's a God-send for a developer like me who doesn't know his ass from great design! Keep up the awesome work! Ed
                            </p>
                        </div>

                        <div class="tab-pane" id="canon">
                            <p class="large">Hello there, My Name is Abhi Khatri. You're simply awesome. I would love to contact you. I'm a new front-end developer but everytime I checkout your stuff it gives me idea to make my own stuff. Keep it up :)</p>
                        </div>

                        <div class="tab-pane" id="samsung">
                            <p class="large">
                                Finding a website with a vast purpose is always inspiring to continue front web development. But you did Magic my friends. Keep going and be sure if there is a donation, I'm in. Thanks for your daily hardworking. hope to meet u guys one day.
                            </p>
                        </div>

                        <div class="tab-pane" id="intel">
                            <p class="large">Hi, your site and all the stuff on it looks simply awesome, thank's for sharing. Love this. Greetings from Germany!</p>
                        </div>
                    </div>
                    <ul class="nav nav-text list-logos add-animation animation-2" role="tablist">
                        <li class="active">
                            <a href="../#sony" role="tab" data-toggle="tab">
                                <h3 class="big-text">Edwin Rede</h3>
                            </a>
                        </li>
                        <li>
                            <a href="../#canon" role="tab" data-toggle="tab">
                                <h3 class="big-text">Abhi Khatri</h3>
                            </a>
                        </li>
                        <li>
                            <a href="../#samsung" role="tab" data-toggle="tab">
                                <h3 class="big-text">Fars Kid</h3>
                            </a>
                        </li>
                        <li>
                            <a href="../#intel" role="tab" data-toggle="tab">
                                <h3 class="big-text">Kolodziej Nikolai</h3>
                            </a>
                        </li>
                    </ul>
                </div>
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
        if (docHeight < $elHeight || docWidth <$elWidth ) {
            $el.css({
                marginTop: -$docHeight /2,
                marginLeft: -$docWidth/2
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
