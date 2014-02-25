<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>Team Dolphin</title>
    <meta name="keywords" content="和光大学,プログラミング,研究会,チーム,ドルフィン,Team,Dolphin">
    <meta name="description" content="和光大学で唯一のプログラミングサークル『TeamDolphin』のお問い合わせ窓口です。">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="jquery.typist.js"></script>
    <link rel="stylesheet" href="./css/mail_style.css" />
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
   <header>
    <div id="title">
     <h1>Team Dolphin</h1>
    </div>
   </header>
      <ul class="banna">
	<li><a href = "./index.html"><img src="./icon/top.gif" border="0" width="157" height="50" alt="トップ"
             onmouseover="this.src='./icon/top_o.gif';" onmouseout="this.src='./icon/top.gif'" /></a></li>
	<li><a href = "./about.html"><img src="./icon/about.gif" border="0" width="157" height="50" alt="Team Dolphinとは？"
             onmouseover="this.src='./icon/about_o.gif';" onmouseout="this.src='./icon/about.gif'" /></a></li>
	<li><a href = "./results.html"><img src="./icon/results.gif" border="0" width="157" height="50" alt="活動実績"
             onmouseover="this.src='./icon/results_o.gif';" onmouseout="this.src='./icon/results.gif'" /></a></li>
	<li><a href = "./member.html"><img src="./icon/mem.gif" border="0" width="157" height="50" alt="メンバーの部屋"
             onmouseover="this.src='./icon/mem_o.gif';" onmouseout="this.src='./icon/mem.gif'" /></a></li>
	<li><a href = "http://blog.teamdolphin.net/" target="_blank"><img src="./icon/blog.gif" border="0" width="157" height="50" alt="ブログ"
             onmouseover="this.src='./icon/blog_o.gif';" onmouseout="this.src='./icon/blog.gif'" /></a></li>
	<li><a href = "./mail.php"><img src="./icon/mail.gif" border="0" width="157" height="50" alt="連絡先"
             onmouseover="this.src='./icon/mail_o.gif';" onmouseout="this.src='./icon/mail.gif'" /></a></li>
      </ul>
   <section>

    <div id ="terminal"></div>

     <div id="sns">
      <a class="twitter-timeline"  href="https://twitter.com/WakoTeamDolphin"  data-widget-id="319869623698849792">@WakoTeamDolphin からのツイート</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
     </div> <!-- sns -->

    <div id = "question">
     <h1>送信結果</h1>
<p class="explanation">

<?php
      if(isset($_POST['name'])) { $name = htmlspecialchars($_POST['name'], ENT_QUOTES, "UTF-8"); }
      if(isset($_POST['address'])) { $address = htmlspecialchars($_POST['address'], ENT_QUOTES, "UTF-8"); }
      if(isset($_POST['subject'])) { $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, "UTF-8"); }
      if(isset($_POST['body'])) { $body = htmlspecialchars($_POST['body'], ENT_QUOTES, "UTF-8"); }


      mb_language("Japanese");
      mb_internal_encoding("UTF-8");

      $to = "info@teamdolphin.net";
      $mailfrom_name = mb_encode_mimeheader($name);
      $mailfrom = 'From: '.$mailfrom_mail.'<'.$address.'>'."\n"; 

      if(mb_send_mail($to,$subject,$body,$mailfrom)){
	print "メールの送信が成功しました。<br>お問い合わせありがとうございました！</p>";
      } else {
	print "何らかの送信トラブルが発生しました。もう一度お試しください。</p>";
      }
?>

    </div> <!-- question -->
   </section>
<script type="text/javascript">
$(function() {
    var console = $('#terminal').typist({
        height: 300,
        width: 960,
    });
 
    var play = function() {
        console.html('');
        console.typist('prompt')
        .typist('wait','1400')
        .typist('speed','slow')
        .typist('type','traceroute www.wako.ac.jp')
        .typist('wait','500')
        .typist('speed','fast')
        .typist('echo','traceroute to www.wako.ac.jp [202.209.38.2] 30 hops max')
        .typist('echo','1　　192.168.1.1　　　112 ms　101 ms　105 ms')
        .typist('echo','2　　172.16.80.1　　　002 ms　002 ms　001 ms')
        .typist('echo','3　　210.173.176.94　 124 ms　102 ms　101 ms')
        .typist('echo','4　　150.99.104.82 　 127 ms　100 ms　101 ms')
        .typist('echo','5　　150.99.104.94 　 109 ms　101 ms　202 ms')
        .typist('echo','6　　202.209.38.250　 225 ms　101 ms　101 ms')
        .typist('echo','7　　202.209.38.193　 231 ms　100 ms　101 ms')
        .typist('echo','8　　202.209.38.2　　 227 ms　101 ms　100 ms')
        .typist('echo','traceroute complete !')
    };
    play();
});
</script>
  <footer>
   <div id="copyright">
    <p>Copyright (c) 2014  Team Dolphin All rights reserved.</p>
   </div>
  </footer>
  </body>
</html>