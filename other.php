<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/phonestyle.css">
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
$('.test_tour').click(function(){
$(this).find('.tour_category').slideToggle();

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
        <li  class="active"><a href="other.php">手機周邊</a></li>
        <li><a href="member.php">會員專區</a></li>
        <li><a href="#">關於我們</a></li>
      </ul>
    </nav>

  </div>
  <!-- logoL -->
  </div>
</header>
<div class="content">
<div id="contentLeft">
<div id="alltour">

<ul class="test_tour">
  <li class="tour_list"><a class="DB" href="#">充電類 <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
  <li class="tour_category"><a class="DB " href="#">充電線/座</a></li>
  <li class="tour_category"><a class="DB " href="#">無線座充</a></li>
  <li class="tour_category"><a class="DB " href="#">行動電源</a></li>
</ul>


<ul class="test_tour">
  <li class="tour_list"><a class="DB" href="#">耳機 <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
  <li class="tour_category"><a class="DB " href="#">Apple 專用</a></li>
  <li class="tour_category"><a class="DB " href="#">3.5mm 耳道式</a></li>
  <li class="tour_category"><a class="DB " href="#">3.5mm 耳掛式</a></li>
  <li class="tour_category"><a class="DB " href="#">藍芽耳機</a></li>
</ul>

<ul class="test_tour">
  <li class="tour_list"><a class="DB" href="#">保護殼<i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
  <li class="tour_category"><a class="DB " href="#">Apple</a></li>
  <li class="tour_category"><a class="DB " href="#">SAMSUNG</a></li>
  <li class="tour_category"><a class="DB " href="#">SONY</a></li>
  <li class="tour_category"><a class="DB " href="#">HTC</a></li>
  <li class="tour_category"><a class="DB " href="#">ASUS</a></li>
</ul>

<ul class="test_tour">
  <li class="tour_list"><a class="DB" href="#">其他 <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
  <li class="tour_category"><a class="DB " href="#">觸控筆</a></li>
  <li class="tour_category"><a class="DB " href="#">手機布</a></li>
  <li class="tour_category"><a class="DB " href="#">記憶卡</a></li>
  <li class="tour_category"><a class="DB " href="#">自拍桿/支架</a></li>
  <li class="tour_category"><a class="DB " href="#">其它</a></li>
</ul>

</div>
</div>

<div id="contentRight">
  <div id="Breadcrumb">
    <ul class="breadcrumb">
      <li><a href="#">首頁</a></li>
      <li><a href="news.php">最新消息</a></li>
      <li class="active"><a href="#">消息分類</a></li>
    </ul>
  </div>
<!-- <hr class="breaklinet"> -->

<ul id="PhoneContent">
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_zf.jpg" alt=""></div>
    <p class="Phonename">SAMSUNG Galaxy Tab S2 8.0 Wi-Fi T713 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
  <li>
    <div class="Phoneimg"><img src="uploads/phone/phone_htc10.jpg" alt=""></div>
    <p class="Phonename">Sony Xperia X Performance 64GB</p>
    <p class="Phoneprice"><span class="NT">NT$</span>23,000</p>
  </li>
</ul>





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
