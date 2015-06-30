<?php
$fakehtml = <<<EOF
<header id="header">
<h1 id="logo"><a href="https://loli.wiki/ "target="_blank"Loli Wiki</a></h1>
<nav id="nav">
<ul>
<li><a href="https://loli.help/" class="button special">Home</a></li>
<li><a href="help"target="_blank">Help</a></li>
<li><a href="http://tieba.loli.help/ "target="_blank">TiebaSign</a></li>
<li><a href="http://music.loli.help/ "target="_blank">Music</a></li>
</ul>
</nav>
</header>
<section id="banner">
<div class="content">
<header>
<h2>Please Give Me The Cookie :)</h2>
<p>Or, This Website is NOT Available.</p>
</header>
<span class="image"><p>document.cookie = 'openSesame=loli.help'</p></span>
</div>
</section>
EOF;
$truehtml = <<<EOF
<header id="header">
<h1 id="logo"><a href="https://loli.wiki/ "target="_blank">Loli Wiki</a></h1>
<nav id="nav">
<ul>
<li><a href="https://loli.help/">Home</a></li>
<li><a><del>Donate</del></a></li>
<li><a href="help/" class="button special" target="_blank">Help</a></li>
<li><a href="http://tieba.loli.help/ "target="_blank">TiebaSign</a></li>
<li><a href="http://music.loli.help/ "target="_blank">Music</a></li>
</ul>
</nav>
</header>
<section id="banner">
<div class="content">
<header>
<h2>Public Shadowsocks Sharing Programme</h2>
<p>Your IP Address: <span id="ip"></span> &nbsp Your Country: <span id="country"></span><br />
Nice Job! Welcome to the "REAL" Internet.</p>
</header>
<span class="image"><img src="images/pic16.png" alt="" /></span>
</div>
<a href="#one" class="goto-next scrolly">Next</a>
</section>
<section id="one" class="wrapper style1 special fade-up">
<div class="container">
<header class="major">
<h2>Public Shadowsocks Servers List</h2>
<p>The list is NOT updated regularly, you can choose Area and Method freely.</p>
</header>
<div class="box alt">
<div class="row uniform">
<table>
<tbody>
<tr>
<th align="center" class="tb_hide">Area</th>
<th align="center">Servers</th>
<th align="center">Server Port</th>
<th align="center">Method</th>
<th align="center">Password</th>
</tr>
<tr>
<td align="center" class="tb_hide">Hong Kong, China</td>
<td align="center">hk.loli.help</td>
<td align="center">50432</td>
<td align="center">RC4-MD5</td>
<td align="center">test</td>
</tr>
<tr>
<td align="center" class="tb_hide">Yokohama, Japan</td>
<td align="center">tk.loli.help</td>
<td align="center">50432</td>
<td align="center">RC4-MD5</td>
<td align="center">test</td>
</tr>
<tr>
<td align="center" class="tb_hide">Fremont, United States</td>
<td align="center">fc.loli.help</td>
<td align="center">50432</td>
<td align="center">RC4-MD5</td>
<td align="center">test</td>
</tr>
<tr>
<td align="center" class="tb_hide">San Francisco, United States</td>
<td align="center">sf.loli.help</td>
<td align="center">50432</td>
<td align="center">RC4-MD5</td>
<td align="center">test</td>
</tr>
<tr>
<td align="center" class="tb_hide">Singapore</td>
<td align="center">sg.loli.help</td>
<td align="center">50015</td>
<td align="center">RC4-MD5</td>
<td align="center">16907</td>
</tr>
<tr>
<td align="center" class="tb_hide">Hong Kong, China</td>
<td align="center">hc.loli.help</td>
<td align="center">50015</td>
<td align="center">RC4-MD5</td>
<td align="center">16907</td>
</tr>
<tr>
<td align="center" class="tb_hide">Dallas, United States</td>
<td align="center">da.loli.help</td>
<td align="center">50015</td>
<td align="center">RC4-MD5</td>
<td align="center">16907</td>
</tr>
<tr>
<td align="center" class="tb_hide">Los Angeles, United States</td>
<td align="center">lo.loli.help</td>
<td align="center">50015</td>
<td align="center">RC4-MD5</td>
<td align="center">16907</td>
</tr>
<tr>
<td align="center" class="tb_hide">Phoenix, United States</td>
<td align="center">za.loli.help</td>
<td align="center">23097</td>
<td align="center">AES-256-CFB</td>
<td align="center">YWI0ZjA5Mm</td>
</tr>
<tr>
<td align="center" class="tb_hide">Washington, United States</td>
<td align="center">wa.loli.help</td>
<td align="center">8989</td>
<td align="center">AES-256-CFB</td>
<td align="center">6sFgvGU8f8</td>
</tr>
<tr>
<td align="center" class="tb_hide">Los Angeles, United States</td>
<td align="center">la.loli.help</td>
<td align="center">43108</td>
<td align="center">AES-256-CFB</td>
<td align="center">odRVPumUmP</td>
</tr>
<tr class="old">
<td align="center" colspan="5"><b>Warning! </b>Do not spread any node in public!<b></br>It is strictly forbidden to send out email through the server!</b></td>
</tr>
</tbody>
</table>
</div>
</div>
<footer class="major">
<ul class="actions">
<li><a href="javascript:location.reload();" class="button">Refresh</a></li>
</ul>
</footer>
</div>
</section>
<section id="five" class="wrapper style2 special fade">
<div class="container">
<header>
<h2>Want Latest Shadowsocks Servers List?</h2>
<p>Just enter your email address and subscribe it~</p>
</header>
<form method="post" name="form1" action="https://click.publicaster.com/RSSFWDOptIn.aspx" class="container 50%" onSubmit="return bingEmail();">
<div class="row uniform 50%">
<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
<div class="4u$ 12u$(xsmall)"><input type="submit" value="Subscribe Now" class="fit special"/></div>
</div>
</form>
</div>
</section>
<footer id="footer">
<audio src="https://dn-lolistatic.qbox.me/bg.mp3" controls autoplay preload="metadata">浏览器过旧,请更换Firefox/Chrome</audio>
<p><br><em>Lolita, light of my life, fire of my loins. My sin, my soul.</em></p>
<ul class="copyright">
<li>&copy; <a href="http://www.loacg.com/"target="_blank">Sendya</a> &amp <a href="https://loli.wiki/"target="_blank">Loli Wiki</a>. All rights reserved.</li><li>Assistant: <a href="https://nekosc.com/"target="_blank">Ovrase</a></li><li>Theme Design: <a href="http://html5up.net"target="_blank">HTML5 UP</a></li>
</ul>
</footer>
EOF;
?>
<!DOCTYPE HTML>
<!--
                       ::
                      :;J7, :,                        ::;7:
                      ,ivYi, ,                       ;LLLFS:
                      :iv7Yi                       :7ri;j5PL
                     ,:ivYLvr                    ,ivrrirrY2X,
                     :;r@Wwz.7r:                :ivu@kexianli.
                    :iL7::,:::iiirii:ii;::::,,irvF7rvvLujL7ur
                   ri::,:,::i:iiiiiii:i:irrv177JX7rYXqZEkvv17
                ;i:, , ::::iirrririi:i:::iiir2XXvii;L8OGJr71i
              :,, ,,:   ,::ir@mingyi.irii:i:::j1jri7ZBOS7ivv,
                 ,::,    ::rv77iiiriii:iii:i::,rvLq@huhao.Li
             ,,      ,, ,:ir7ir::,:::i;ir:::i:i::rSGGYri712:
           :::  ,v7r:: ::rrv77:, ,, ,:i7rrii:::::, ir7ri7Lri
          ,     2OBBOi,iiir;r::        ,irriiii::,, ,iv7Luur:
        ,,     i78MBBi,:,:::,:,  :7FSL: ,iriii:::i::,,:rLqXv::
        :      iuMMP: :,:::,:ii;2GY7OBB0viiii:i:iii:i:::iJqL;::
       ,     ::::i   ,,,,, ::LuBBu BBBBBErii:i:i:i:i:i:i:r77ii
      ,       :       , ,,:::rruBZ1MBBqi, :,,,:::,::::::iiriri:
     ,               ,,,,::::i:  @arqiao.       ,:,, ,:::ii;i7:
    :,       rjujLYLi   ,,:::::,:::::::::,,   ,:i,:,,,,,::i:iii
    ::      BBBBBBBBB0,    ,,::: , ,:::::: ,      ,,,, ,,:::::::
    i,  ,  ,8BMMBBBBBBi     ,,:,,     ,,, , ,   , , , :,::ii::i::
    :      iZMOMOMBBM2::::::::::,,,,     ,,,,,,:,,,::::i:irr:i:::,
    i   ,,:;u0MBMOG1L:::i::::::  ,,,::,   ,,, ::::::i:i:iirii:i:i:
    :    ,iuUuuXUkFu7i:iii:i:::, :,:,: ::::::::i:i:::::iirr7iiri::
    :     :rk@Yizero.i:::::, ,:ii:::::::i:::::i::,::::iirrriiiri::,
     :      5BMBBBBBBSr:,::rv2kuii:::iii::,:i:,, , ,,:,:i@petermu.,
          , :r50EZ8MBBBBGOBBBZP7::::i::,:::::,: :,:,::i;rrririiii::
              :jujYY7LS0ujJL7r::,::i::,::::::::::::::iirirrrrrrr:ii:
           ,:  :@kevensun.:,:,,,::::i:i:::::,,::::::iir;ii;7v77;ii;i,
           ,,,     ,,:,::::::i:iiiii:i::::,, ::::iiiir@xingjief.r;7:i,
        , , ,,,:,,::::::::iiiiiiiiii:,:,:::::::::iiir;ri7vL77rrirri::
         :,, , ::::::::i:::i:::i:i::,,,,,:,::i:i:::iir;@Secbone.ii:::
     
-->
<html>
<head>
<title><?php 
if($_COOKIE['openSesame'] != "loli.help"){
echo 'Loli Help' ;
} else {
echo "Loli Help - Public Shadowsocks Sharing Programme" ;
}?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Public Shadowsocks Sharing Programme" />
<meta name="keywords" content="vpn,shadowsocks,Japan,和谐,代理,舰娘" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/jquery.dropotron.min.js"></script>
<script src="js/jquery.scrollex.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="js/init.js"></script>
<noscript>
<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<link rel="stylesheet" href="css/skel.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-xlarge.css" />
</noscript>
<script>
function bingEmail(){
var email = $('#email').val();
if(email!=null && email != "" ){
var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
if (!reg.test(email)) {
alert('Email Address is a required field.');
return false;
}
$('#email').val("Loading...");
$.post("https://click.publicaster.com/RSSFWDOptIn.aspx",{"Qriba":898, "Qnavryyr":782841, "Qnir":2, "UEmail":email},function(){
$('#email').val("");
alert("Thank you! Your subscription has been processed.");
});
} else{
alert('Email Address is a required field.');
}
return false;
}
$(document).ready(function(){
$.get("ajax.php",{"a":"getCountry"},function(data){
if(data.error==0){
$('#ip').html(data.ip);
$('#country').html(data.country);
}
}, 'json'); 
});
</script>
</head>
<body class="landing">
<?php
/*
function isCrawler() {
        $agent= strtolower($_SERVER['HTTP_USER_AGENT']);
        if (!empty($agent)) {
                $spiderSite= array(
                        "TencentTraveler",
                        "Baiduspider+",
                        "BaiduGame",
                        "Googlebot",
                        "msnbot",
                        "Sosospider+",
                        "Sogou web spider",
                        "ia_archiver",
                        "Yahoo! Slurp",
                        "YoudaoBot",
                        "Yahoo Slurp",
                        "MSNBot",
                        "Java (Often spam bot)",
                        "BaiDuSpider",
                        "Voila",
                        "Yandex bot",
                        "BSpider",
                        "twiceler",
                        "Sogou Spider",
                        "Speedy Spider",
                        "Google AdSense",
                        "Heritrix",
                        "Python-urllib",
                        "Alexa (IA Archiver)",
                        "Ask",
                        "Exabot",
                        "Custo",
                        "OutfoxBot/YodaoBot",
                        "yacy",
                        "SurveyBot",
                        "legs",
                        "lwp-trivial",
                        "Nutch",
                        "StackRambler",
                        "The web archive (IA Archiver)",
                        "Perl tool",
                        "MJ12bot",
                        "Netcraft",
                        "MSIECrawler",
                        "WGet tools",
                        "larbin",
                        "Fish search",
                );
                foreach($spiderSite as $val) {
                        $str = strtolower($val);
                        if (strpos($agent, $str) !== false) {
                                return true;
                        }
                }
        } else {
                return false;
        }
}*/
function isCrawler() {
    return false;
}
if ($_COOKIE['openSesame']=="loli.help" || isCrawler()){
    echo $truehtml;
} else{
    echo $fakehtml;
}
?>
<div style="display:none"><script src="https://s95.cnzz.com/z_stat.php?id=1254760097&web_id=1254760097" language="JavaScript"></script></div>
</body>
</html>