<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--다국어 언어: UTF-8-->
<title>회원가입</title>
<style>
    
        .s_u_contents {
         width: 750px;
    }
    @media (max-width: 767px) {.s_u_contents { 
       width:100%;
        } }

    </style>
</head>

<body>
<TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>
<table border='0' height='100%' bgcolor='FFFFFF' align='center' cellspacing='0' cellpadding='0'  class="s_u_contents">
<tr>

<form action='./join_post.php' name='member' method='post'>
    <td height='300' align='left' valign='top' style="padding-bottom:20px;">
	 <p style="border-top:2px solid; font-family: 'Nanum Pen Script', serif; font-size:30px"><strong>&nbsp &nbsp회 원 가 입</strong></p> <br>

<!--<input type='hidden' name='id' value='test'>-->
<input type='text' class="sign_up_input form-control" id="input" placeholder="Shalla ID" name='user_id'>
<input type='text' class="form-control sign_up_input" id="input" placeholder="암호" name='password'>
<input type='text' class="form-control sign_up_input" id="input" placeholder="이름" name='name'> 
<input type='text' class="form-control sign_up_input" id="input" placeholder="닉네임" name='nick_name'>
<input type='text' class="form-control sign_up_input" id="input" placeholder="샬라 기수" name='gisu'>
<input type='text' class="form-control sign_up_input" id="input" placeholder="대학교" name='college'>
<input type='text' class="form-control sign_up_input" id="input" placeholder="휴대전화번호" name='tel'>
<center><input style=" color:#fff; background-color: #0070c9; background: linear-gradient(#42a1ec, #0070c9); width:110px; height:60px; font-weight:500; font-size:20px;" margin:0 auto; class="btn btn-default" type='submit' value='가입하기'></center>
	 </td>
	 </form>



	 <tr>
	 <td style="border-top:3px solid;" height='100%'  align='center'> &nbsp;</td>

	 </tr>
	 </table>

	 </TD>
	 </TR>
        </TABLE>

</body>
</html>
