<script>
$(document).ready(function() {
$(".eplist").each(function() {
if ($(this).text() == "Episode ") {
$(this).text("Movie/OVA");
}});
});
</script>
<script>
$("#lightdark").click(function() {
if (jdark == 1) {
setCookie('jdark', 0, 365); $("#sld").attr('class', 'fa fa-moon-o slider roundld');
} else {
setCookie('jdark', 1, 365); $("#sld").attr('class', 'fa fa-sun-o slider roundld');
}location.reload();
}); if (jdark == 1) {
$("#lightdark").prop('checked', true); $("#sld").attr('class', 'fa fa-sun-o slider roundld');
}function delaykey(fn, ms) {
let timer = 0; return function(dk) {
clearTimeout(timer); timer = setTimeout(fn.bind(this, dk), ms || 0)}}$(document).ready(function() {
$('#search').on('keyup keydown keypress paste', delaykey(function() {
var kw = $(this).val(); if ($(this).val() == '') {
$("#scx").hide(); $("#suggesstion-box").html('');
} else {
$('#scx').show(); $.ajax({
type: "POST", url: "/ajax/search_suggests.php", data: {
kw: $(this).val()}, dataType: "json", beforeSend: function() {
$("#suggesstion-box").html('<div class="center txtld">Loading...</div>');
}, success: function(result) {
if (result['status'] == 1) {
var obj = result['data']; var x = []; $.each(obj, function(i, item) {
var xd = '<li><a href="/'+obj[i].slug+'"><img alt="'+obj[i].title+'" height="30" width="30" src="/assets/covers/'+obj[i].img+'" class="iconsgts" /> '+obj[i].title+'</a></li>'; x.push(xd);
}); $("#suggesstion-box").html('<ul class="suggestlist"><li><div><center><b>Pencarian cepat</b></center></div></li>'+x.join('')+'</ul>'); if (result['more'] == 0) {
$(".suggestlist").append('<li><div class="center top5px"><b>Hasil terakhir</b></div></li>');
} else {
$(".suggestlist").append('<li><a href="/search/?q='+kw+'"><div class="center top5px"><b>Hasil selanjutnya ></b></div></a></li>');
}} else {
$("#suggesstion-box").text('');
}}});
}}, 1000)); $("#scx").click(function() {
$("#search").val(''); $("#scx").hide(); $("#search").focus(); $("#suggesstion-box").html('');
}); if ($("#search").val() !== "") {
$('#scx').show();
}}); var pgname = window.location.href.split('/')[3]; if (pgname == "") {
var pgname = "inhome";
}$('#'+pgname).addClass('navatv');
</script>
<div class="footer-body bg-dg center">
<a href="">Home</a> / <a href="/ongoing">Ongoing</a> / <a href="/complete">Complete</a> / <a href="https://anoboy.vip">Anoboy</a> / <a href="/dcma-disclaimer">Disclaimer</a>
</div>
<div class="footer bg-lg center">
&copy; 2022, <a href=""><?=$webName ?></a><br />Portal Download dan Streaming Anime Subtitle Indonesia.
</div>
<script>
$stick = $('.footer'); if (window.matchMedia("(min-width: 768px)").matches) {
$stick = $('#marker');
}$(function($) {
function fixDiv() {
var $cache = $('#sidesticky'); if ($(window).scrollTop() > $stick.offset().top) {
$cache.css({
'position': 'fixed', 'top': '10px'
});
} else {
$cache.css({
'position': 'relative', 'top': 'auto'
});
}}$(window).scroll(fixDiv); fixDiv();
});
</script>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4597363,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4597363&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body>
</html>