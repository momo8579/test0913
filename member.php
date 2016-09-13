<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/phonestyle.css">
  <link rel="stylesheet" href="css/memberstyle.css">
  <link rel="stylesheet" href="boostrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="boostrap/js/bootstrap.js" charset="utf-8"></script>
  <title>Mobile GO SHOP</title>
</head>


<script>


//###############Icon點擊展開nav###################///
$(function(){
$('#Icon').click(function(){
$('#nav').slideToggle();
});//.icon.click end
//###############Icon點擊展開nav###################///


//###############新聞圖片###################///
$('.Newstitle a').mouseover(function(){
  // 把 #show-image 的 src 改成被移到的超連結的位置
  // $('.showimg').attr('src', $(this).attr('href'));

  $('.showimg').attr('src',$(this).attr('value'));
})
//###############新聞圖片###################///

//###############topicom回頂端###################///
  $('#topicon').hide();

$(window).scroll(function(){
  if($(this).scrollTop()>100){ //當window的scrolltop距離大於1，
    $('#topicon').show();
  }else{
    $('#topicon').fadeOut();
  };//if else end


  if($(this).scrollTop()>1200){
    // alert('ooo');
     $('#topicon').css("bottom","200px");
   }else{
     $('#topicon').css("bottom","20px");
   };


}); //window.scrool end

//###############topicom回頂端###################///



//###############NEWS練習###################///
$('.tour_list').click(function(){
$('.tour_category').slideToggle();
});//.icon.click end
//###############INEWS練習###################///




});//documentready end






</script>



<body>
<header id="header">
  <div id="tool">
      <div id="Member"><a class="DB" href="#"><i class="fa fa-user fa-2x" aria-hidden="true"></i><span class="ttext">會員登入</span></a></div>
      <div id="AddMember"><a class="DB" href="#"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i><span class="ttext">加入會員</a></div>
      <div id="CI">
        <div id="MyCart"><a class="DB" href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><span class="ttext">購物車</span></a></div>
        <div id="Icon"><a class="DB" href="#"><span class=""><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span></a></div>
      </div>


  </div>
  <div class="content">

  <h1 id="logo"><a href="index.php" class="DB"><img src="img/logo.jpg" alt=""></a></h1>
  <div id="logoR">
    <h2 id="title"><a href="#">MOBILE GO SHOP</a></h2>
    <h2 class="SrOnly">主導覽</h2>
    <nav id="nav">
      <ul>
        <li><a href="news.php">最新消息</a></li>
        <li><a href="phone.php">手機總覽</a></li>
        <li><a href="other.php">手機周邊</a></li>
        <li class="active"><a href="member.php">會員專區</a></li>
        <li><a href="#">關於我們</a></li>
      </ul>
    </nav>

  </div>
  <!-- logoL -->
  </div>
</header>
<div class="content">
  <div class="tour">
  <ul>
    <li class="tour_list"><a class="DB" href="#">會員中心 <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
    <li class="tour_category"><a class="DB " href="#">會員條款</a></li>
    <li class="tour_category"><a class="DB " href="#">購物說明</a></li>
    <li class="tour_category"><a class="DB " href="#">Q & A</a></li>
  </ul>



  </div>
<div id="contentRight">
<div id="memberlogintitle"><img src="img/member_login.png" alt="" /></div>

<div id="memberlogin">
<form class="form-horizontal formwidth" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label ">電子郵件</label>
    <div class="col-sm-10">
      <input type="email" class="form-control inputpwidth" id="inputEmail3" placeholder="輸入電子郵件">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密碼</label>
    <div class="col-sm-10">
      <input type="password" class="form-control inputpwidth" id="inputPassword3" placeholder="密碼">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> 記住我
        </label>
        <a class="AddMember" href="">忘記密碼?</a>
        <a class="AddMember"href="">加入會員</a>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 loginbtn">
      <button type="submit" class="btn btn-default ">登入</button>
    </div>
  </div>
</form>
</div> <!-- memberlogin -->
<div id="memberlogintitle"><img src="img/memberfb_login.png" alt="" /></div>
</div>



</div> <!-- news_content end -->









</div>
<div id="topicon"><a href="#"><i class="fa fa-caret-up fa-2x" aria-hidden="true"></i></a></div>
<footer id="footer">
  <div id="footerlogo"><img src="img/logonoback.png" alt=""></div>
  <h2>MOBILE GO  SHOP</h2>
  <div id="footerlink">
    <ul>
      <li><a href="#">聯絡我們</a></li>
      <li><a href="#">會員條款</a></li>
      <li><a href="#">購物須知</a></li>
      <li><a href="#">隱私權聲明</a></li>
    </ul>
  </div>
  <div id="footercc"><p>© 2010-2016 MGS馬烏比 版權所有</<p></div>

  <!-- <div class="content">footer</div> -->
</footer>
</body>
</html>
