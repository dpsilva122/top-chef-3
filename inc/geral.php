<?
$nomeSite			= 'RecordTV';
$slogan				= 'Top Chef';
// $url				= 'http://localhost/top-chef/';
$url				= 'http://www.comercial.recordtv.com.br/top-chef/';
$ddd				= '11';
$fone				= '9999-0000';
// $fone2				= '2222-4444';
// $fone3				= '2123-4444';
$emailContato		= 'comercial@recordtv.com.br';
$rua				= 'Rua Pequetita, 179';
$bairro				= 'Vila Olimpia';
$cidade				= 'São Paulo';
$UF					= 'SP';
$cep				= 'CEP: 04552-060';
$latitude			= '-22.546052';
$longitude			= '-48.635514';
$idCliente			= 'ID do cliente no mpi sistema';
$idAnalytics		= 'ID do Google Analytics';
$senhaEmailEnvia	= '102030'; // colocar senha do e-mail mkt@dominiodocliente.com.br
$explode			= explode("/", $_SERVER['PHP_SELF']);
$urlPagina 			= end($explode);
$urlPagina	 		= str_replace('.php','',$urlPagina);
$urlPagina 			== "index"? $urlPagina= "" : "";
$urlAnalytics = str_replace("http://www.", '', $url);
$urlAnalytics = str_replace("/", '', $urlAnalytics);
//reCaptcha do Google
$siteKey = '6Lfc7g8UAAAAAHlnefz4zF82BexhvMJxhzifPirv';
$secretKey = '6Lfc7g8UAAAAAKi8al32HjrmsdwoFoG7eujNOwBI';
//********************COM SIG APAGAR********************
//Gerar htaccess automático
$urlhtaccess = $url;
$schemaReplace = strpos($urlhtaccess, 'http://www.') === false ? 'http://' : 'http://www.';
$urlhtaccess = str_replace($schemaReplace, '', $urlhtaccess);
$urlhtaccess = rtrim($urlhtaccess,'/');
define('RAIZ', $url);
define('HTACCESS', $urlhtaccess);
include('inc/gerador-htaccess.php');
//********************FIM SIG APAGAR********************
//Breadcrumbs
$caminho 			= '
<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
	<a rel="home" itemprop="url" href="'.$url.'" title="Home"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
	<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
</div>
';
$caminho2	= '
<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
	<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
	<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="'.$url.'informacoes" title="Informações" class="category" itemprop="url"><span itemprop="title"> Informações </span></a> »
		<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
		</div>
	</div>
</div>
';
//Pasta de imagens, Galeria, url Facebook, etc.
$pasta 				= 'imagens/informacoes/';
//Redes sociais
// $idFacebook			= 'Link para achar o ID da página do Facebook http://graph.facebook.com/Nome da página do Facebook';
$idGooglePlus		= 'http://plus.google.com.br'; // ID da página da empresa no Google Plus
// $paginaFacebook		= 'PAGINA DO FACEBOOK DO CLIENTE';
$author = ''; // Link do perfil da empresa no g+ ou deixar em branco
//Reescrita dos links dos telefones
$link_tel = str_replace('(', '', $ddd);
$link_tel = str_replace(')', '', $link_tel);
$link_tel = str_replace('11', '', $link_tel);
$link_tel .= '5511'.$fone;
$link_tel = str_replace('-', '', $link_tel);
$prepos = array(' a ',' á ',' à ',' ante ',' até ',' após ',' de ',' desde ',' em ',' entre ',' com ',' para ',' por ',' perante ',' sem ',' sob ',' sobre ',' na ',' no ',' e ',' do ',' da ',' ','(',')','\'','"','.','/',':',' | ', ',, ');
$creditos			= 'Marketing Publicitário - Record TV';
$siteCreditos		= 'www.comercial.recordtv.com.br';
$caminhoBread 			= '
<div class="title-breadcrumb">
	<div class="wrapper">
		<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
			<a rel="home" itemprop="url" href="'.$url.'" title="Home"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
			<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
		</div>
		<h1>'.$h1.'</h1>
	</div>
</div>
';
$caminhoBread2	= '
<div class="title-breadcrumb">
	<div class="wrapper">
		<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
			<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
			<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="'.$url.'informacoes" title="Informações" class="category" itemprop="url"><span itemprop="title"> Informações </span></a> »
				<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
				</div>
			</div>
		</div>
		<h1>'.$h1.'</h1>
	</div>
</div>
';
?>