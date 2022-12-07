<?php
require('./php/info.php');
function getSearch($url) {
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  return json_decode($response, true);
}
?>
<!DOCTYPE HTML>
<html lang="id-ID" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
  <meta name="google-site-verification" content="<?=$google ?>" />
<title>Download dan Streaming Anime Ongoing  Sub Indo Terbaru dan Terlengkap | <?=$webName ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#232b32">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="keywords" content="Download Anime Subtitle Indonesia, Download Anime Sub Indo, Anime Subtitle Indonesia, Anime Sub Indo, Anime Batch, 480p, 720p, 1080p, Download Kakkou no Iinazuke Subtitle Indonesia, Download A Couple of Cuckoos Subtitle Indonesia, Download Cuckoo&#039;s Fiancee Subtitle Indonesia">
<meta name="description" content="Download dan Streaming Anime Ongoing  Sub Indo Terbaru dan Terlengkap, <?=$webName ?>, Eps Terbaru & Terlengkap dalam Format Mkv 480p, 720p dan Mp4 240p, 360p, 3GP + BATCH dengan link Google Drive, Zippy, Anoboy, Oploverz, Samehadaku, Meownime, Muse Indonesia." />
<meta property="og:type" content="website" />
<meta property="og:title" content="Download dan Streaming Anime Ongoing  Sub Indo Terbaru dan Terlengkap | <?=$webName ?>" />
<meta property="og:description" content="Download dan Streaming Anime Ongoing  Sub Indo Terbaru dan Terlengkap, <?=$webName ?>, Eps Terbaru & Terlengkap dalam Format Mkv 480p, 720p dan Mp4 240p, 360p, 3GP + BATCH dengan link Google Drive, Zippy, Anoboy, Oploverz, Samehadaku, Meownime, Muse Indonesia." />
<meta property="og:url" content="<?=$webUrl ?>/ongoing" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="https://batchnime.my.id" />
<meta property="og:image:alt" content="<?=$webName ?> | Nonton dan Streaming Anime Subtitle Indonesia" />
<meta name="msapplication-TileImage" content="<?=$webUrl ?>/assets/img/favicon.png" />
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png" sizes="32x32" />
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="<?=$webUrl ?>/assets/img/favicon.png" />
<link rel="stylesheet" href="<?=$webUrl ?>/jstyle.css?v1.3">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.jpro {
position: absolute;
z-index: 1;
padding-top: 100px;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
}
</style>
<script>
function getCookie(cname) {
var name = cname + "="; var decodedCookie = decodeURIComponent(document.cookie); var ca = decodedCookie.split(';'); for (var i = 0; i < ca.length; i++) {
var c = ca[i]; while (c.charAt(0) == ' ') {
c = c.substring(1);
}if (c.indexOf(name) == 0) {
return c.substring(name.length, c.length);
}}return "";
}function setCookie(cname, cvalue, exdays) {
var d = new Date(); d.setTime(d.getTime() + (exdays*24*60*60*1000)); var expires = "expires="+ d.toUTCString(); document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
var jdark = getCookie("jdark"); if (jdark == 1) {
var style = document.createElement('style');
style.type = 'text/css'; style.innerHTML = 'html,body,.downloadlist ul li,.dlulist ul li,.nw>.maxurl{background:#f1f1f1;color:#000;}ol.breadcrumb,.go,.panel-body,.bg-white{background-color:#fff;}ol.breadcrumb>li>a,.txtld>a{color: #232b32!important;}.jayapanel>h3{color:#333;border-bottom: 3px solid #232b34;}.suggestlist>li>a:hover,.suggestlist>li>div:hover,.othereps,.tablist,.boltab,.boltab>h2,h2.titletab{background:#eee;color:#000;}.new-alert,.bg-lg{background-color: #d3d3d3;}.othereps:hover{background-color:#c7c7c7;color:#000;}.pagination span.disabled{background-color:#ddd;color:black;}.suggestlist>li>a,.suggestlist>li>div{background:#fff;color:#202020;}.bottom-line{border-bottom:1px solid #232b34;}.btm-line{border-bottom:1px solid #eee;}.btm-linex{border-bottom:1px solid #ccc;}.infolist li a{color:#444;}.sm-icons>span,.sm-icons>span>span,.thumbhd,.infolist,ul.infopost,ul.infopost>li>span>a:link,#randPost,.pagination a,.pagination span,.txtld,ol.breadcrumb>li+li:before,.footer,.footer>a,.line-card>h2,label,.sinops,.post-body,h6,.txtwb,.new-alert,.jcontent,.postlist,#switch,.maxtitle,.post-content{color:#000;}.downloadlist ul a,.dlulist ul a,.maxurl a,.maxdl>.maxurl>a,ol.breadcrumb>li.last>a,.maxullink>li>div>a,a.glink{color:#555;}.jayainfo h5,.content h5,.line-card p,.dtlist{color:#333;}.title-post,.new-alert a:link{color:#232b32;}.ddlist{color:#666;}.abjlist a,.tdcolor,.downloadlist>h2,.dlulist>h2,.maxdl .maxtitle,.ptitle,.maxlist,.btn-submit{background-color:#232b34;}.alert{background-color:#2abb9c;}.tableInfo{color: black !important;background-color: #f2f2f2;}.tab{color:#f2f2f2!important;}.alert{color:#fff;}.pagination .bg-gdark{background-color:#000;color:#fff;}.linklist>li>a,.tab button.active,.tabcontent,.card,.panel{background-color:#fff;color:#000;}.tablist a,.boltab a{color:#0061b0;}';
document.getElementsByTagName('head')[0].appendChild(style);
}
</script>
</head>
<body>
<div class="topmenu">
<nav>
<ul class="clear">
<li id="movie"><a href="/movie">Movie</a></li>
<li id="dcma-disclaimer"><a href="/dcma-disclaimer">DCMA</a></li>
<li id="faqs" class="mr"><a href="/faqs">FAQs</a></li>
<span class="lightdark">
<label class="switchld">
<input id="lightdark" type="checkbox">
<span id="sld" class="fa fa-moon-o slider roundld"></span>
</label>
</span>
</ul>
</nav>
<a class="logo" href="<?=$webUrl ?>"><?=$webName ?></a>
</div>
<div class="topnav responsive">
<nav>
<ul>
<li><a id="inhome" href="<?=$webUrl ?>"><i class="fa fa-home"></i> Home</a></li>
<li><a id="ongoing" href="<?=$webUrl ?>/ongoing"><i class="fa fa-fire"></i> On-Going</a></li>
<li><a id="jadwal-rilis" href="<?=$webUrl ?>/jadwal-rilis"><i class="fa fa-calendar"></i> Jadwal Rilis</a></li>
<li><a id="anime-list" href="<?=$webUrl ?>/anime-list"><i class="fa fa-list"></i> Anime List</a></li>
</ul>
<div class="linesrc"></div>
<div class="search">
<form class="search" action="/search">
<input id="search" type="text" name="s" placeholder="Cari anime disini..." autocomplete="off" /><span class="scx hide" id="scx">&times;</span>
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</nav>
</div>
<div id="suggesstion-box"></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row">
<div class="container">
<div class="main-col">
<?php
$url = 'https://komi.kato-rest.us/api/otakudesu/home/';
$datas = getSearch($url);
?>
<div class="panel shadow">
<span class="bg-gdark"><i class="fa fa-fire" aria-hidden="true"></i> Anime ongoing &gt;</a>
</div>
<?php
foreach ($datas['ongoing'] as $data):
$img = $data['thumb'];
$endpoint = $data['endpoint'];
$title = $data['name'];
$episode = $data['episode_name'];
?>
<div class="bg-white shadow xrelated relative">
<a href="/<?php echo $endpoint ?>"><img src="<?php echo $img ?>" alt="<?php echo $title ?>" /><div class="eplist">
<?php echo $episode ?>
</div>
<div class="titlelist tublok">
<?php echo $title ?>
</div>
</a>
</div>
<?php endforeach; ?>
</div>
<div class="sidebar" style="overflow:hidden;">
<div id="donatid"></div>
<div class="shadow panel">
<span class="bg-gdark"><i class="fa fa-support"></i> Link Bantuan</span>
</div>
<ul class="linklist">
<li><a href="/faqs">Solusi file batch tidak dapat di extract/file rusak (corrupt)</a></li>
<li><a href="/filter-anime">Mencari anime berdasarkan genre dan studio (Filter Anime)</a></li>
<li><a href="/faqs">Cara efektif menuliskan judal anime pada kotak pencarian</a></li>
</ul>
<div id="marker"></div>
<div id="sidesticky" style="position:fixed;top:10px;width:auto;">
</div>
</div>
</div>
</div>
<?php
require('./foot.php');
?>