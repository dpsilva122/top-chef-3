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
			
			<!-- <div class="conteudo-index4">
					<div id="felipeinfo">
					<img src="<?=$url?>imagens/sec7/felipeinfo.png" class="felipeinfo" alt="">
				</div>
				<div id="juradainfo">
					<img src="<?=$url?>imagens/sec7/felipeinfo.png" class="juradainfo" alt="">
				</div>
				<div id="juradoinfo">
					<img src="<?=$url?>imagens/sec7/felipeinfo.png" class="juradoinfo" alt="">
				</div>
				<div class="col-4">
					<div class="jurada" id="juradahover"></div>
				</div>
				<div class="col-4">
					<div class="felipe" id="felipehover"></div>
				</div>
				<div class="col-4">
					<div class="jurado" id="juradohover"></div>
				</div>
				<div class="clear"></div>
			</div> -->
			<div class="strips">
				<div class="conteudo-index4">

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
				</div>
				
				<i class="fa fa-close strip__close"></i>
			</div>
			
</main>
<? include('inc/footer.php'); ?>
</body>
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
</html>