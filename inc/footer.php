<div class="clear"></div>
<footer>
	<div class="wrapper">
		<div class="contact-footer">
			<address>
				<!-- <span>Para mais informações, consulte seu atendimento comercial! <br> Ou pelos canais:</span> -->
				<!-- <span>Dúvidas? Entre em contato:<a rel="nofollow" class="white link-contato" href="mailto:<?=$emailContato?>" target="_blank" title="Envie um E-mail">comercial@recordtv.com.br!</a></span> -->
			</address>
			<!-- <a rel="nofollow" class="white link-contato" href="mailto:<?=$emailContato?>" target="_blank" title="Envie um E-mail"><i class="fa fa-envelope fa-x3"></i>  comercial@recordtv.com.br<span class="brag">|</span></a> -->
			
			<!-- <a rel="nofollow" class="white link-contato" href="tel:<?=$fone?>" target="_blank" title="Telefone"><i class="fa fa-phone fa-x3"></i>  11 3300-4450</a> -->
			<div class="icones"><? include('inc/share.php');?></div>
		</div>
		
		
		<div class="logo-footer">
			<img src="<?=$url?>imagens/logo-footer.png" class="logo-footer" alt="Logo">
		</div>
		<br class="clear">
	</div>
</footer>
<div class="copyright-footer">
	<div class="wrapper">
		<div class="selos">
			Vice-Presidência Comercial - Rádio e Televisão Record S/A.
		</div>
	</div>
</div>
<script defer src="https://apis.google.com/js/plusone.js" ></script>
<script defer src="<?=$url?>js/geral.js"></script>
<!-- Plugin facebook -->
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.defer=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?=$idAnalytics?>', 'auto');
ga('send', 'pageview');
</script>
<!-- BOTAO SCROLL -->
<script async src="<?=$url?>js/jquery.scrollUp.min.js"></script>
<!-- <script async src="<?=$url?>js/scroll.js"></script> -->
<!-- /BOTAO SCROLL -->