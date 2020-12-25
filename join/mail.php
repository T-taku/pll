<?php


$secretKey = '6LfC8BIaAAAAAKKlhy-YrO3uUWpXmVel8nghKJGf';
$Response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);
$result = json_decode($Response);
if ($result->success) 
{
  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $category = $_POST["category"];
  $content = $_POST["content"];
  $date = date("Y/m/d/H:i:s");
  $id = str_pad(mt_rand(0, 999999), 6, 0, STR_PAD_LEFT);
  $ip = $_SERVER['REMOTE_ADDR'];


  // 自動送信

  $to = $mail;
  $subject = "【 project Little Lindo 】お問い合わせにつきまして";
  $message = "$name 様

お世話になっております。
この度はお問い合わせありがとうございました。

送信した内容に関しましては以下の通りです。

|－－－－－　お問い合わせ内容　－－－－－|

お名前: $name
メールアドレス: $mail
カテゴリー: $category
本文: $content

送信日時: $date
お問い合わせ番号: $id

|－－－－－－－－－－－－－－－－－－－－｜

こちらのメールは自動送信です。こちらのメールアドレスにメールを送信しても返信は返ってきません。
お問い合わせの補足などにつきましては littlelindo.official@gmail.com に［お問い合わせ番号］とともにお願いします。

【 project Little Lindo 】
公式サイト: https://littlelindo.jp/
公式twitter: https://twitter.com/p_LittleLindo";
  $headers = "From: info@littlelindo.jp";
  mb_send_mail($to, $subject, $message, $headers);





  // しくろ

  $subject = "【 project Little Lindo 】お問い合わせメールが送信されました";
  $message = "送信された内容は以下の通りです。

|－－－－－　お問い合わせ内容　－－－－－|

お名前: $name
メールアドレス: $mail
カテゴリー: $category
本文: $content

送信日時: $date
お問い合わせ番号: $id
送信者IP: $ip

|－－－－－－－－－－－－－－－－－－－－｜";
  $headers = "From: info@littlelindo.jp";
  mb_send_mail("littlelindo.official@gmail.com", $subject, $message, $headers);
}


?>


<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="YouTubeを主体とし様々なメディアから世界にバーチャル(仮想的) × エンターテインメントを発信する「project Little Lindo」。若き精鋭のクリエイター達が偶像に命を吹き込み、それらを観測する価値を見出している。">
  <meta property="og:image" content="https://replyinfo.jp/pll/img/icon.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="img/logo.jpg">
  <title>送信完了 | project Little Lindo</title>
  <link rel="stylesheet" href="mail.css" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon-precomposed" href="https://replyinfo.jp/pll/img/icon.png" />
  <script>
    (function(d) {
      var config = {
        kitId: 'slv4dzh',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="margin: 0px; padding: 0px;">
  <header>
    <a href="https://littlelindo.jp/"><img src="img/logo.jpg" alt=""></a>
    <ul id="headTag">
      <li><a href="https://littlelindo.jp#about">About</a></li>
      <li><a href="https://littlelindo.jp/artist">Artist</a></li>
      <li><a href="https://littlelindo.jp/music">Music</a></li>
      <li><a href="https://littlelindo.jp/news">News</a></li>
      <li><a href="https://littlelindo.jp/store">Store & Fanbox</a></li>
      <li><a href="https://littlelindo.jp/contact">Contact & Join</a></li>
    </ul>
    <ul id="headLink">
      <a href="https://twitter.com/p_LittleLindo" id="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://www.youtube.com/channel/UCwK8ctwBwUycT4UmRGGojtQ" id="youtube" target="_blank"><i class="fab fa-youtube"></i></a>
    </ul>
    <div id="button">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>
  <ul id="mobile">
    <li><a href="https://littlelindo.jp#about">About</a></li>
    <li><a href="https://littlelindo.jp/artist">Artist</a></li>
    <li><a href="https://littlelindo.jp/music">Music</a></li>
    <li><a href="https://littlelindo.jp/news">News</a></li>
    <li><a href="https://littlelindo.jp/store">Store & Fanbox</a></li>
    <li><a href="https://littlelindo.jp/contact">Contact & Join</a></li>
    <li><a href="https://twitter.com/p_LittleLindo" target="_blank">Twitter</a></li>
    <li><a href="https://www.youtube.com/channel/UCwK8ctwBwUycT4UmRGGojtQ" target="_blank">YouTube</a></li>
  </ul>
  <main>
    <h1>送信完了</h1>
    <p>お問い合わせメールを送信しました。</p>
    <div id="mainLinks">
      <a href="https://littlelindo.jp">トップページに戻る</a>
      <a href="https://twitter.com/p_LittleLindo">Twitter</a>
      <a href="https://www.youtube.com/channel/UCwK8ctwBwUycT4UmRGGojtQ">YouTube</a>
    </div>
  </main>
  <footer>
    <div><img src="img/logo2.png" alt=""></div>
    <div><img src="img/logo3.png" alt=""></div>
    <div id="links">
      <ul>
        <li>Link</li>
        <li><a href="https://littlelindo.jp#about">About</a></li>
        <li><a href="https://littlelindo.jp/artist">Artist</a></li>
        <li><a href="https://littlelindo.jp/music">Music</a></li>
        <li><a href="https://littlelindo.jp/news">News</a></li>
        <li><a href="https://littlelindo.jp/store">Store & Fanbox</a></li>
        <li><a href="https://littlelindo.jp/contact">Contact & Join</a></li>
      </ul>
      <ul>
        <li>Other</li>
        <li><a href="https://twitter.com/p_LittleLindo" target="_blank">Twitter</a></li>
        <li><a href="https://www.youtube.com/channel/UCwK8ctwBwUycT4UmRGGojtQ" target="_blank">YouTube</a></li>
        <li><a href="https://kagami-mira.booth.pm/" target="_blank">Booth</a></li>
        <li><a href="https://littlelindo.jp/privacy-policy">Privacy Policy</a></li>
        <li><a href="https://littlelindo.jp/guideline">Guidline</a></li>
      </ul>
      <ul>
        <a class="twitter-timeline" data-lang="ja" data-width="100%" data-height="300" data-theme="dark" href="https://twitter.com/p_LittleLindo">Tweets by p_LittleLindo</a>
      </ul>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <small>©︎ 2020 project Little Lindo .</small>
  </footer>
  <div id="scrollTop">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
  </div>
  <div id="back"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script>
    $("#scrollTop").click(function() {
      anime({
        targets: "html, body",
        scrollTop: 0,
        duration: 2000,
        easing: "easeInOutQuint",
      });
    });
    $(window).scroll(function() {
      if ($(window).scrollTop() > 200) {
        $("#scrollTop").fadeIn(400);
      } else {
        $("#scrollTop").fadeOut(400);
      }
    });
    $("#button").click(function() {
      if (!$(this).hasClass("animation")) {
        $(this).addClass("animation")
        $(this).stop(true).toggleClass("active");
        if ($(this).hasClass("active")) {
          $("#mobile").show();
          $("#back").fadeIn(500);
          anime.timeline().add({
            targets: "#mobile li",
            duration: 1200,
            opacity: [0, 1],
            easing: "easeOutExpo",
            delay: (el,i)=> 70 * i
          });
          setTimeout(() => {
            $(this).removeClass("animation");
          }, 1200);
        } else {
          anime.timeline().add({
            targets: "#mobile li",
            duration: 1200,
            opacity: [1, 0],
            easing: "easeOutExpo",
            delay: (el,i)=> 70 * i
          });
          setTimeout(() => {
            $("#back").fadeOut(500);
            $("#mobile").hide();
            $(this).removeClass("animation");
          }, 800);
        };
      };
    });
    $(window).resize(function() {
      $("#button").removeClass("active");
      $("#back").hide();
      $("#mobile").hide();
    });
  </script>
</body>

</html>