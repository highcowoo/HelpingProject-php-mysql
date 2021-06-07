<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/main.css">
  <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
 
 <style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                width: 50px;
                padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
                 
                
        }
 
</style>
 
<body>
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="Guide.html">소개</a></li>
   <li><a href="Login.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.php">고객센터</a></li>
   <li><a href="informod.php">내정보</a></li>
   <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>
   </ul>
   </nav>
   </header>
   <?php
                session_start();
                $URL = "./Service.php";
                if(!isset($_SESSION['id'])) {
        ?>
 
                <script>
                        alert("로그인이 필요합니다");
                        location.replace("<?php echo $URL?>");
                </script>
        <?php
                }
        ?>

   
   <form method =post action = "question_write_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=10 align= center bgcolor=#ccc><font color=white>문의사항 글쓰기</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>제목</td>
                        <td><input type ="text" name ='title' size=60></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name ='content' cols=85 rows=15></textarea></td>
                        </tr>
                        </table>
 
                        <center>
                        <input type =submit value="작성">
                        </center>
                </td>
                </tr>
        </table>
        </form>

  </body>
  </html>