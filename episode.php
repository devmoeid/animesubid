<?php
require_once('./php/info.php');
$parts = parse_url($_SERVER['REQUEST_URI']);
$page_url = explode('/', $parts['path']);
$url = $page_url[count($page_url)-1];
//$url = "lr-episode-1-sub-indo";

$getAnime = file_get_contents("$apiLink/episode/$url");
$getAnime = json_decode($getAnime, true);
$title = $getAnime['data']['title'];
$stream_link = $getAnime['data']['stream_url'];
$download_urls = $getAnime['data']['download_urls'];
?>
<!DOCTYPE HTML>
<html lang="id-ID" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
  <meta name="google-site-verification" content="<?=$google ?>" />
<title><?php echo $title ?> | Anime Batch</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#232b32">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="keywords" content="Download Anime Subtitle Indonesia, Download Anime Sub Indo, Anime Subtitle Indonesia, Anime Sub Indo, Anime Batch, 480p, 720p, 1080p, Download Kakkou no Iinazuke Subtitle Indonesia, Download A Couple of Cuckoos Subtitle Indonesia, Download Cuckoo&#039;s Fiancee Subtitle Indonesia">
<meta name="description" content="Download dan Streaming <?php echo $title ?> Batch, Eps Terbaru & Terlengkap dalam Format Mkv 480p, 720p dan Mp4 240p, 360p, 3GP dengan link Google Drive, Zippyshare, Meownime, Anitoki, Samehadaku, Anoboy" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $title ?> | <?php echo $webName ?>" />
<meta property="og:description" content="Download dan Streaming <?php echo $title ?> Batch, Eps Terbaru & Terlengkap dalam Format Mkv 480p, 720p dan Mp4 240p, 360p, 3GP dengan link Google Drive, Zippyshare, Meownime, Anitoki, Samehadaku, Anoboy" />
<meta property="og:url" content="<?=$webUrl ?>/<?php echo $url ?>" />
<meta property="og:image" content="<?php echo $thumbnail ?>" />
<meta property="og:site_name" content="batchnime.my.id" />
<meta property="og:image:alt" content="<?php echo $title ?> | <?php echo $webName ?>" />
<meta name="msapplication-TileImage" content="<?php echo $webUrl ?>/assets/img/favicon.png" />
<meta name="purpleads-verification" content="59c52e2d25406a3017a1bb27" />
<link rel="icon" href="<?php echo $webUrl ?>/assets/img/favicon.png" sizes="32x32" />
<link rel="icon" href="<?php echo $webUrl ?>/assets/img/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo $webUrl ?>/assets/img/favicon.png" />
<link rel="stylesheet" href="/jstyle.css">
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
<a class="logo" href="<?php echo $webUrl ?>"><?php echo $webName ?></a>
</div>
<div class="topnav responsive">
<nav>
<ul>
<li><a id="inhome" href="<?php echo $webUrl ?>"><i class="fa fa-home"></i> Home</a></li>
<li><a id="ongoing" href="<?php echo $webUrl ?>/ongoing"><i class="fa fa-fire"></i> On-Going</a></li>
<li><a id="jadwal-rilis" href="<?php echo $webUrl ?>/jadwal-rilis"><i class="fa fa-calendar"></i> Jadwal Rilis</a></li>
<li><a id="anime-list" href="<?php echo $webUrl ?>/anime-list"><i class="fa fa-list"></i> Anime List</a></li>
<li><a id="bookmark" href="<?php echo $webUrl ?>/bookmark"><i class="fa fa-bookmark"></i> Bookmark</a></li>
<li><a href="<?php echo $webUrl ?>/random"><i class="fa fa-star-o"></i> Surprise Me!</a></li>
</ul>
<div class="linesrc"></div>
<div class="search">
<form class="search" action="/search">
<input id="search" type="text" name="q" placeholder="Cari anime disini..." autocomplete="off" /><span class="scx hide" id="scx">&times;</span>
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</nav>
</div>
<div id="suggesstion-box"></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</div>
<div class="row">
<div class="container">
<div class="main-col">
<div class="bg-white shadow">
<div class="post-body">
<h1 class="title-post"><?php echo $title ?></h1>
<span class="date"><i class="fa fa-calendar"></i> 2022-10-04 01:57:46</span>
</div>
</div>
<div class="bg-white shadow">
<div class="clear"></div>
<div id="lightsVideo">
<div class="contstream">
<iframe id="istream" class="responsive-stream" src="<?php echo $stream_link ?>"allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
</div>
</div>
<div class="btm-line"></div>
<div id="switch">
<div class="lightSwitcher">
Cinema OFF
</div>
<span class="fs10pt">
<span class="fa fa-info-circle icspc"></span> Jika Mirror Streaming dan Link Download Error, silahkan gunakan Mirror dan Link alternative lainnya.</span>
</div>
</div>
<p class="clear"></p>
<div class="bg-white shadow">
<div class="post-body">
<div class="jcontent jayapanel">
<h3><span class="fa fa-download icspc"></span> Link Download <?php echo $title ?> | Anime Batch</h3>
</div>
</div>
<div class="downloadlist"> <h2><?php echo $title ?> [Samehadaku]</h2>
<?php foreach (array_slice($download_urls, 0, 30) as $download) {
?>
<ul><li><strong><?=$download['resolution']?></strong> <a href="<?=$download['url']?>" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer"><?=$download['host']?></a> | <i><?=$download['size']?></i></li></ul><?php
} ?>
</div>
</div>
<div class="btn-comment bg-dblue shadow" id="show-comments" onclick="disqus();return false;">
Tampilkan Komentar
</div>
<div class="hidex card shadow" style="display:none">
<div class="line-card">
<h2>Komentar</h2>
</div>
<div class="comment-box">
<div id="disqus-comments">
<div class="comment-block">
</div>
<div id="disqus_thread"></div>
</div>
</div>
</div>
<script>
var disqus_loaded = false;
var disqus_shortname = 'otakudezu'; //Add your shortname here
function disqus() {
$('.hidex').show();
if (!disqus_loaded) {
disqus_loaded = true;
var e = document.createElement("script");
e.type = "text/javascript";
e.async = true;
e.src = "//" + disqus_shortname + ".disqus.com/embed.js";
(document.getElementsByTagName("head")[0] ||
document.getElementsByTagName("body")[0])
.appendChild(e);
//Hide the button after opening
document.getElementById("show-comments").style.display = "none";
}
}
//Opens comments when linked to directly
var hash = window.location.hash.substr(1);
if (hash.length > 8) {
if (hash.substring(0, 8) == "comment-") {
disqus();
}
}
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" data-wpel-link="external" target="_blank" rel="external noopener noreferrer">comments powered by Disqus.</a></noscript><div id="randPost"></div>
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
</div>
</div>
</div>
<?php
require('./foot.php');
?>