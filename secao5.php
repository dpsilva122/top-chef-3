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
</head>
<body>
<? include('inc/topo.php'); ?>
<? include('inc/menuzin.php'); ?>
<main>
	<div class="content">
		<section>
			<div class="conteudo-index2">
				<h2 class="titulo-sec5">Harmonize com <span class="laranja">XXXXXXXXXXXX</span></h2>
				<img src="<?=$url?>imagens/sec5/panela1.png" class="panela1" alt="">
				<img src="<?=$url?>imagens/sec5/interior-panela.png" class="interior-panela" alt="">
				<p class="aviso-sec5">Clique para ver o conteúdo</p>
			<span class="morphing-btn-wrap btn-absolute" ><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content" href="javascript:;" class="btn btn-primary morphing-btn"><img src="<?=$url?>imagens/sec5/tampa1.gif" class="tampa1" alt=""></a></span>

                            <div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
                    
                        <div id="morphing-content" style="display: none;" class="morphing-content">
                            <video class="panela" playsinline autoplay muted controls controlsList="nodownload" src="https://vsh.r7.com/5eff1d814b495538fd0003a8/f8291164a40e44bcbbd6362593e1fe34_TopChef_Intro_2D_720p.mp4"></video>
                        </div>
			</div>
		</section>
	</div>
</main>
<? include('inc/footer.php'); ?>

</body>
</html>