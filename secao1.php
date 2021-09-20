<?
$h1         = 'RecordTV';
$title      = 'Home';
$desc       = 'Top Chef';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Home';
include('inc/head.php');
include('inc/fancy.php');
include('inc/fancymorph.php');
?>
<script src="<?=$url?>js/organictabs.jquery.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/organictabs.css">
</head>
<body id="bodyscroll">
	<div class="exp">
		<h2>Coloque o celular na horizontal para navegar</h2>
		<img src="<?=$url?>imagens/phone.gif">
	</div>
<? include('inc/topo.php'); ?>
<? include('inc/menuzin.php'); ?>
<main>
	<div class="content">
		<section>

			<div id="hidevideo">
				<a class="videointro" id="videointro" onclick="videointro()" href="javascript:;">
					<img src="<?=$url?>imagens/avancar.png" alt="">
				</a>
			<video id="myVideo" playsinline autoplay muted controls controlsList="nodownload" src="https://vsh.r7.com/5f10a85719d224ad72000af2/935330af728b455f8aef8b3611df684c_TopChef_Intro_2D_720p.mp4"></video>
		</div>
		<div class="vr-box" id="hideportal">
			<!-- <div id="fade">
				<a id="avancar fade" onclick="avancar()" href="javascript:;"><img src="<?=$url?>imagens/sec1/logo-topchef.png" class="logo-topchef" id="logo-topchef" alt=""></a>
			</div> -->
			<a id="avancar" onclick="avancar()" href="javascript:;"><img src="<?=$url?>imagens/sec1/seta-portal.gif" class="seta-portal" alt=""></a>
			<a id="avancar" onclick="avancar()" href="javascript:;"><div class="portal"></div></a>

			<!-- <div class="portaltrigger"></div> -->
		</div>
		<img src="<?=$url?>imagens/sec2/menu.png" id="menu-360" alt="">
		<div id="avancar2">
			<script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/7b3Hw?fs=1&vr=0&sd=1&autorotate=0.26&thumbs=1&hideinst=1&lang=pt&chromeless=0&logo=0" data-width="100%" data-height="100vh"></script>
		</div>

		<div id="set-height"></div>
		<p id="time"></p>
		<div id="v0box">
			<video id="v0" tabindex="0" autobuffer preload>
				<source type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;" src="<?=$url?>imagens/videos/def-mec5.mp4"></source>
				<p>Sorry, your browser does not support the &lt;video&gt; element.</p>
			</video>
		<div id="v0box2"></div>
		<div id="v0box3"></div>
		<div id="v0box4"></div>

		</div>

		
		<div class="clear"></div>
		<div class="strips">
				<div class="conteudo-index4" id="juri">
					
					<article class="strips__strip">
						<div class="strip__content">
							<!-- <h1 class="strip__title" data-name="Lorem">Awesome</h1> -->
							<div class="strip__inner-text">
								<!-- <h2>Ettrics</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
								<p>
									<a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
								</p> -->
							</div>
							
						</div>
					</article>
					<article class="strips__strip">
						<div class="strip__content">
							<!-- <h1 class="strip__title" data-name="Lorem">Awesome</h1> -->
							<div class="strip__inner-text">
								<!-- <h2>Ettrics</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
								<p>
									<a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
								</p> -->
							</div>
							
						</div>
					</article>
					<article class="strips__strip">
						<div class="strip__content">
							<!-- <h1 class="strip__title" data-name="Ipsum">Words</h1> -->
							<div class="strip__inner-text">
								<!-- <h2>Ettrics</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
								<p>
									<a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
								</p> -->
							</div>
						</div>
					</article>
					<article class="strips__strip">
						<div class="strip__content">
							<!-- <h1 class="strip__title" data-name="Dolor">Go</h1> -->
							<div class="strip__inner-text">
								<!-- <h2>Ettrics</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sapiente deserunt consectetur, quod reiciendis corrupti quo ea aliquid! Repellendus numquam quo, voluptate. Suscipit soluta omnis quibusdam facilis, illo voluptates odit!</p>
								<p>
									<a href="https://twitter.com/ettrics" target="_blank"><i class="fa fa-twitter"></i></a>
								</p> -->
							</div>
						</div>
					</article>
				
				<i class="fa fa-close strip__close"></i>
				</div>
			</div>
			<div class="clear"></div>
		<div class="wrapper">
			<div class="conteudo-index2 desliza" >
					<div class="scrollme" id="secmerchan">
						<div class="animateme"
					data-when="span"
					data-from="0.5"
					data-to="0"
					data-opacity="0"
					data-translatex="-200">
							<!-- <h2 class="titulo-sec5">Olha quem já reunimos em torno da nossa <span class="laranja">primeira mesa</span></h2> -->
							<img src="<?=$url?>imagens/sec5/titulo-panelas.png" class="titulo-panelas" alt="">
						</div>
					</div>
							<img src="<?=$url?>imagens/sec5/panelas-juntas.png" class="panelas-juntas" alt="">
							<!-- <img src="<?=$url?>imagens/sec5/menu-panelas.png" class="menu-panelas" alt=""> -->
							<!-- <a href="" class="botao1"></a> -->
							<!-- <span class="morphing-btn-wrap btn-absolute botao1"><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content" href="javascript:;" class="btn btn-primary morphing-btn"></a></span> -->
			<div class="scrollme">
				<div class="animateme"
					data-when="span"
					data-from="0.5"
					data-to="0"
					data-opacity="0"
					data-translatex="-200">
					<div class="panela-box1">
						<!-- <img src="<?=$url?>imagens/sec5/panela1.png" class="panela1" alt=""> -->
						<!-- <img src="<?=$url?>imagens/sec5/interior-panela.png" class="interior-panela" alt=""> -->
				<span class="morphing-btn-wrap btn-absolute" ><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content" href="javascript:;" class="btn btn-primary morphing-btn"><img src="<?=$url?>imagens/sec5/tampa1.gif" class="tampa1" alt=""></a></span>
			
															<div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
											
													<div id="morphing-content" style="display: none;" class="morphing-content">
															<video class="panela" playsinline controls controlsList="nodownload" src="https://vsh.r7.com/5f15a45e4b49552c0d00000f/TopChef_Case_President_720p.mp4"></video>
													</div>

					</div>
					</div>
					</div>

			<div class="scrollme">
				<div class="animateme"
					data-when="span"
					data-from="0.5"
					data-to="0"
					data-opacity="0"
					data-translatex="-200">
					<div class="panela-box2">
						<!-- <img src="<?=$url?>imagens/sec5/panela1.png" class="panela1" alt=""> -->
						<!-- <img src="<?=$url?>imagens/sec5/interior-panela.png" class="interior-panela" alt=""> -->
				<span class="morphing-btn-wrap btn-absolute" ><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content2" href="javascript:;" class="btn btn-primary morphing-btn"><img src="<?=$url?>imagens/sec5/tampa1.gif" class="tampa1" alt=""></a></span>
			
															<div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
											
													<div id="morphing-content2" style="display: none;" class="morphing-content">
															<video class="panela" playsinline controls controlsList="nodownload" src="https://vsh.r7.com/5f15a43e43527f458a000111/TopChef_Case_Salton_720p.mp4"></video>
													</div>

					</div>
					</div>
					</div>

					<div class="scrollme">
				<div class="animateme"
					data-when="span"
					data-from="0.5"
					data-to="0"
					data-opacity="0"
					data-translatex="-200">
					<div class="panela-box3">
						<!-- <img src="<?=$url?>imagens/sec5/panela1.png" class="panela1" alt=""> -->
						<!-- <img src="<?=$url?>imagens/sec5/interior-panela.png" class="interior-panela" alt=""> -->
				<span class="morphing-btn-wrap btn-absolute" ><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content3" href="javascript:;" class="btn btn-primary morphing-btn"><img src="<?=$url?>imagens/sec5/tampa1.gif" class="tampa1" alt=""></a></span>
			
															<div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
											
													<div id="morphing-content3" style="display: none;" class="morphing-content">
															<video class="panela" playsinline controls controlsList="nodownload" src="https://vsh.r7.com/5f15a4534b4955f66b0003a6/TopChef_Case_OI_720p.mp4"></video>
													</div>

					</div>
					</div>
					</div>
					<div class="scrollme">
				<div class="animateme"
					data-when="span"
					data-from="0.5"
					data-to="0"
					data-opacity="0"
					data-translatex="-200">
					<div class="panela-box4">
						<!-- <img src="<?=$url?>imagens/sec5/panela1.png" class="panela1" alt=""> -->
						<!-- <img src="<?=$url?>imagens/sec5/interior-panela.png" class="interior-panela" alt=""> -->
				<span class="morphing-btn-wrap btn-absolute" ><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content4" href="javascript:;" class="btn btn-primary morphing-btn"><img src="<?=$url?>imagens/sec5/tampa1.gif" class="tampa1" alt=""></a></span>
			
															<div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
											
													<div id="morphing-content4" style="display: none;" class="morphing-content">
															<video class="panela" playsinline controls controlsList="nodownload" src="https://vsh.r7.com/5f15af9919d224e1f9000425/TopChef_Case_Semp_720p.mp4"></video>
													</div>

					</div>
					</div>
					</div>
					<div class="scrollme">
				<div class="animateme"
					data-when="span"
					data-from="0.5"
					data-to="0"
					data-opacity="0"
					data-translatex="-200">
					<div class="panela-box5">
						<!-- <img src="<?=$url?>imagens/sec5/panela1.png" class="panela1" alt=""> -->
						<!-- <img src="<?=$url?>imagens/sec5/interior-panela.png" class="interior-panela" alt=""> -->
				<span class="morphing-btn-wrap btn-absolute" ><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content5" href="javascript:;" class="btn btn-primary morphing-btn"><img src="<?=$url?>imagens/sec5/tampa1.gif" class="tampa1" alt=""></a></span>
			
															<div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
											
													<div id="morphing-content5" style="display: none;" class="morphing-content">
															<video class="panela" playsinline controls controlsList="nodownload" src="https://vsh.r7.com/5f15f78fcd77c0315600009f/TopChef_Case_Santander_720p.mp4"></video>
													</div>

					</div>
					</div>
					</div>
				
		</div>
		

		<div class="clear"></div>
		<div class="conteudo-index3 desliza" id="secagendar">
			
			<div class="time-line">
				<div class="mar"></div>
				<a href="<?=$url?>#slide-1">1</a>
				<a href="<?=$url?>#slide-2">2</a>
				<a href="<?=$url?>#slide-3">3</a>
				<a href="<?=$url?>#slide-4">4</a>
				<a href="<?=$url?>#slide-5">5</a>
				<a href="<?=$url?>#slide-6">6</a>
				<a href="<?=$url?>#slide-7">7</a>
				<a href="<?=$url?>#slide-8">8</a>
				<a href="<?=$url?>#slide-9">9</a>
				<a href="<?=$url?>#slide-10">10</a>
				<a href="<?=$url?>#slide-11">11</a>
				<a href="<?=$url?>#slide-12">12</a>
			</div>
		
	
			<div class="slider">
				
				
				<div class="slides">
					<div id="slide-1">
						<img src="<?=$url?>imagens/sec6/jul-01.png" class="calendario" alt="">
					</div>
					<div id="slide-2">
						<img src="<?=$url?>imagens/sec6/jul-02.png" class="calendario" alt="">
					</div>
					<div id="slide-3">
						<img src="<?=$url?>imagens/sec6/jul-03.png" class="calendario" alt="">
					</div>
					<div id="slide-4">
						<img src="<?=$url?>imagens/sec6/ago-01.png" class="calendario" alt="">
					</div>
					<div id="slide-5">
						<img src="<?=$url?>imagens/sec6/ago-02.png" class="calendario" alt="">
					</div>
					<div id="slide-6">
						<img src="<?=$url?>imagens/sec6/ago-03.png" class="calendario" alt="">
					</div>
					<div id="slide-7">
						<img src="<?=$url?>imagens/sec6/ago-04.png" class="calendario" alt="">
					</div>
					<div id="slide-8">
						<img src="<?=$url?>imagens/sec6/set-01.png" class="calendario" alt="">
					</div>
					<div id="slide-9">
						<img src="<?=$url?>imagens/sec6/set-02.png" class="calendario" alt="">
					</div>
					<div id="slide-10">
						<img src="<?=$url?>imagens/sec6/set-03.png" class="calendario" alt="">
					</div>
					<div id="slide-11">
						<img src="<?=$url?>imagens/sec6/set-04.png" class="calendario" alt="">
					</div>
					<div id="slide-12">
						<img src="<?=$url?>imagens/sec6/out-01.png" class="calendario" alt="">
					</div>
				</div>
			 

			</div>
			
			
			<!-- <a class="lightbox" data-src="#modal2" href="javascript:;"><img src="<?=$url?>imagens/sec6/agendar.png" class="agendar" alt=""></a> -->
			  
			  <script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script><script type="text/javascript"> var JFL_201890276086056 = new JotformFeedback({ formId: '201890276086056', base: 'https://form.jotform.com/', windowTitle: 'Top Chef', background: '#FFA500', fontColor: '#FFFFFF', type: 'false', height: 500, width: 700, openOnLoad: false }); </script> <a class="btn lightbox-201890276086056" style="margin-top: 16px"><img src="<?=$url?>imagens/sec6/agendar.png" class="agendar" alt=""></a>
		
			 


			<img src="<?=$url?>imagens/sec6/titulo-sec6.png" class="titulo-sec6" alt="">
			<img src="<?=$url?>imagens/sec6/galeria/galeria1.png" class="galeria1" alt="">
			<img src="<?=$url?>imagens/sec6/galeria/galeria2.png" class="galeria2" alt="">
			<img src="<?=$url?>imagens/sec6/galeria/galeria3.png" class="galeria3" alt="">
			<!-- <img src="<?=$url?>imagens/sec6/time-line.png" class="time-line" alt=""> -->
			
		</div>
		<div class="clear"></div>
		<!-- <div class="icon-scroll"><div/> -->
			<a href="<?=$url?>#set-height"><img src="<?=$url?>imagens/sec1/seta-portal.gif" class="icon-scroll" alt=""></a>
				<div class="clear"></div>
	</section>
</div>
</main>
<? include('inc/footer.php'); ?>
<!-- =====================video começo======================= -->
<script>
var hidevideo = document.getElementById("hidevideo");
var bodyscroll = document.getElementById("bodyscroll");
function videointro() {
$("#hidevideo").delay(100).fadeOut();
$("#bodyscroll").css('overflow','unset');
}
</script>
<script>
var bodyscroll = document.getElementById("bodyscroll");
$(document).ready(function() {
document.getElementById('myVideo').addEventListener("timeupdate", function() {
if(this.currentTime > 18) {
$("#myVideo").delay(100).fadeOut();
$("#videointro").delay(100).fadeOut();
$("#bodyscroll").css('overflow','unset');
}
});
});
</script>
<!-- =====================hover no logo======================= -->
<!-- <script>
	$('#fade').hover(
function() {
$('#logo-topchef').fadeIn('slow');
},function() {
$('#logo-topchef').fadeOut('slow');
}
);
</script> -->
<!-- =====================hide portal on click======================= -->
<script>
var hideportal = document.getElementById("hideportal");
function avancar() {
$("#hideportal").animate({left: '-70%'});
$("#menu-360").animate({bottom: '0%'}).css('display','unset');
$(".icon-scroll").css('display','unset');

}
</script>
<!-- =====================video-scroll======================= -->
<script>
var frameNumber = 0, // start video at frame 0
// lower numbers = faster playback
playbackConst = 300,
// get page height from video duration
setHeight = document.getElementById("set-height"),
// select video element
vid = document.getElementById('v0');
// var vid = $('#v0')[0]; // jquery option
// dynamically set the page height according to video length
// vid.addEventListener('loadedmetadata', function() {
// setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
// });
// Use requestAnimationFrame for smooth playback
function scrollPlay(){
var frameNumber  = window.pageYOffset/playbackConst;
vid.currentTime  = frameNumber;
window.requestAnimationFrame(scrollPlay);
}
window.requestAnimationFrame(scrollPlay);
</script>
<!-- =====================video-scroll-fix======================= -->
<script>
	var v0box2 = $('#v0box2').offset();
	var v0box3 = $('#v0box3').offset();
	var v0 = $('#v0').offset();
	
$(window).scroll(function(){

if($(window).scrollTop() > v0box2.top){
$('#v0').css('position','fixed').css('height','100vh');
}
if($(window).scrollTop() < v0box2.top){
$('#v0').css('position','absolute').css('height','100vh');
}

if($(window).scrollTop() > v0box3.top){
$('#v0').css('position','absolute').css('height','100vh');
}
});
</script>

<!-- =====================hover jurados======================= -->
<script>
	var Expand = (function() {
	var tile = $('.strips__strip');
	var tileLink = $('.strips__strip > .strip__content');
	var tileText = tileLink.find('.strip__inner-text');
	var stripClose = $('.strip__close');
	
	var expanded  = false;

	var open = function() {
			
		var tile = $(this).parent();

			if (!expanded) {
				tile.addClass('strips__strip--expanded');
				// add delay to inner text
				tileText.css('transition', 'all .5s .3s cubic-bezier(0.23, 1, 0.32, 1)');
				stripClose.addClass('strip__close--show');
				stripClose.css('transition', 'all .6s 1s cubic-bezier(0.23, 1, 0.32, 1)');
				expanded = true;
			} 
		};
	
	var close = function() {
		if (expanded) {
			tile.removeClass('strips__strip--expanded');
			// remove delay from inner text
			tileText.css('transition', 'all 0.15s 0 cubic-bezier(0.23, 1, 0.32, 1)');
			stripClose.removeClass('strip__close--show');
			stripClose.css('transition', 'all 0.2s 0s cubic-bezier(0.23, 1, 0.32, 1)')
			expanded = false;
		}
	}

		var bindActions = function() {
			tileLink.on('click', open);
			stripClose.on('click', close);
		};

		var init = function() {
			bindActions();
		};

		return {
			init: init
		};

	}());

Expand.init();
</script>
<!-- =====================Funcionalidade Menu======================= -->
<script>
	$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("menuzin-active");
    $(this).addClass("menuzin-active");
});
});
</script>
<script>
	var secmerchan = $('#secmerchan').offset();
	var secagendar = $('#secagendar').offset();
	var juri = $('#juri').offset();
	var v0box4 = $('#v0box4').offset();
	var v0box2 = $('#v0box2').offset();
	var setheight = $('#set-height').offset();
	var avancar2 = $('#avancar2').offset();
	
$(window).scroll(function(){
if($(window).scrollTop() > avancar2.top){
$('li a').removeClass("menuzin-active");
    $('#hideportalmenu').addClass("menuzin-active");
}
if($(window).scrollTop() > v0box2.top){
$('li a').removeClass("menuzin-active");
    $('#set-heightmenu').addClass("menuzin-active");
}
if($(window).scrollTop() > v0box4.top){
$('li a').removeClass("menuzin-active");
    $('#v0box4menu').addClass("menuzin-active");
}
if($(window).scrollTop() > juri.top){
$('li a').removeClass("menuzin-active");
    $('#jurimenu').addClass("menuzin-active");
}
if($(window).scrollTop() > secmerchan.top){
$('li a').removeClass("menuzin-active");
    $('#secmerchanmenu').addClass("menuzin-active");
}
if($(window).scrollTop() > secagendar.top){
$('li a').removeClass("menuzin-active");
    $('#secagendarmenu').addClass("menuzin-active");
}
});
</script>

</body>
</html>