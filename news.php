<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <li class="active"><a href="news.php">最新消息</a></li>
        <li><a href="phone.php">手機總覽</a></li>
        <li><a href="other.php">手機周邊</a></li>
        <li><a href="member.php">會員專區</a></li>
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
  <li class="tour_list"><a class="DB" href="#">新聞分類 <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
  <li class="tour_category"><a class="DB " href="#">新機消息</a></li>
  <li class="tour_category"><a class="DB " href="#">未來消息</a></li>
  <li class="tour_category"><a class="DB " href="#">站內消息</a></li>
</ul>



</div>
<div id="news_content">
  <div id="Breadcrumb">

    <ul class="breadcrumb">
      <li><a href="#">首頁</a></li>
      <li><a href="news.php">最新消息</a></li>
      <li class="active"><a href="#">消息分類</a></li>
    </ul>



  </div>
  <!-- 新聞CONTENT -->
<!-- <hr class="breaklinet"> -->
<div class="content">

<div class="newsimg"><img src="uploads/news/news_2.jpg" alt=""></div>
<h3 class="newstitle">搭載Android 7.0的LG V20主頁亮相 9/7韓國
同步發表</h3>
<p class="News_newsdate">2016-08-08</p>
</div>
  <!-- 新聞CONTENT -->

  <!-- <hr class="linet"> -->

  <!-- 新聞CONTENT -->
<div class="content">
<div class="newsimg"><img src="uploads/news/news_3.jpg" alt=""></div>
<h3 class="newstitle">搭載Android 7.0的LG V20主頁亮相 9/7韓國
同步發表</h3>
<p class="News_newsdate">2016-08-08</p>
</div>
  <!-- 新聞CONTENT -->

  <!-- <hr class="linet"> -->

  <!-- 新聞CONTENT -->
<div class="content">
<div class="newsimg"><img src="uploads/news/news_iphone7.jpg" alt=""></div>
<h3 class="newstitle">搭載Android 7.0的LG V20主頁亮相 9/7韓國
同步發表</h3>
<p class="News_newsdate">2016-08-08</p>
</div>
  <!-- 新聞CONTENT -->



  <div id="pagechange">
      <ul class"pageul">
        <li class="pageneup"><a class="DB" href="#">上一頁</a></li>
        <li><a class="DB" href="#">1</a></li>
        <li><a class="DB"href="#">2</a></li>
        <li><a class="DB"href="#">3</a></li>
        <li><a class="DB"href="#">4</a></li>
        <li class="pageneup"><a class="DB" href="#">下一頁</a></li>
      </ul>

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
