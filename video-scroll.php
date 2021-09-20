<?
$h1         = 'RecordTV';
$title      = 'Home';
$desc       = 'Top Chef';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Home';
include('inc/head.php');
?>
</head>
<body>
<? include('inc/topo.php'); ?>
<? include('inc/menuzin.php'); ?>
<main>
	<div class="content">
		<section>
			<!-- <video data-toggle="modal" class="video-mobile video" data-target="#home" playsinline autoplay muted loop controlsList="nodownload">
				<source src="https://vsh.r7.com/5efe5eb819d224edaf000fc8/4c535e5ba2034f4385d6cdaa3700db4c_PG3_Prato_720p.mp4" type="video/mp4">
			</video> -->
			<!-- <div id="set-height"></div>
			<p id="time"></p>
			<video id="v0" tabindex="0" autobuffer="autobuffer" preload="preload"><source type="video/mp4; codecs=&quot;vp8, vorbis&quot;" src="https://vsh.r7.com/5eff455043527faf82000243/PG3_Prato_720p.mp4"></source>
				
				<source type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;" src="https://vsh.r7.com/5eff455043527faf82000243/PG3_Prato_720p.mp4"></source>
				<p>Sorry, your browser does not support the &lt;video&gt; element.</p>
			</video> -->


			<div id="set-height"></div>
			<p id="time"></p>
			<video id="v0" tabindex="0" autobuffer="autobuffer" preload="preload"><source type="video/mp4; codecs=&quot;vp8, vorbis&quot;" src="<?=$url?>imagens/videos/web.webm"></source>
				<source type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;" src="<?=$url?>imagens/videos/web.webm"></source>
				<p>Sorry, your browser does not support the &lt;video&gt; element.</p>
			</video>

		</section>
	</div>
</main>
<? include('inc/footer.php'); ?>
<script>
var frameNumber = 0, // start video at frame 0
// lower numbers = faster playback
playbackConst = 500,
// get page height from video duration
setHeight = document.getElementById("set-height"),
// select video element
vid = document.getElementById('v0');
// var vid = $('#v0')[0]; // jquery option
// dynamically set the page height according to video length
vid.addEventListener('loadedmetadata', function() {
setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
});
// Use requestAnimationFrame for smooth playback
function scrollPlay(){
var frameNumber  = window.pageYOffset/playbackConst;
vid.currentTime  = frameNumber;
window.requestAnimationFrame(scrollPlay);
}
window.requestAnimationFrame(scrollPlay);
</script>
</body>
</html>