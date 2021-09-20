<?
$h1         = 'RecordTV';
$title      = 'Home';
$desc       = 'Top Chef';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Home';
include('inc/head.php');
include('inc/fancy.php');

?>
</head>
<body>
<? include('inc/topo.php'); ?>
<? include('inc/menuzin.php'); ?>
<main>
  <div class="content">
    <section>
      
      <div class="conteudo-index3">
      <div class="slider">
        
        
        <div class="slides">
          <div id="slide-1">
            <img src="<?=$url?>imagens/sec6/jul-01.png" alt="">
          </div>
          <div id="slide-2">
            <img src="<?=$url?>imagens/sec6/jul-02.png" alt="">
          </div>
          <div id="slide-3">
            <img src="<?=$url?>imagens/sec6/ago-01.png" alt="">
          </div>
          <div id="slide-4">
            <img src="<?=$url?>imagens/sec6/ago-02.png" alt="">
          </div>
          <div id="slide-5">
            <img src="<?=$url?>imagens/sec6/ago-03.png" alt="">
          </div>
          <div id="slide-6">
            <img src="<?=$url?>imagens/sec6/set-01.png" alt="">
          </div>
          <div id="slide-7">
            <img src="<?=$url?>imagens/sec6/set-02.png" alt="">
          </div>
          <div id="slide-8">
            <img src="<?=$url?>imagens/sec6/set-03.png" alt="">
          </div>
        </div>
       

      </div>
      <a class="lightbox" data-src="#modal2" href="javascript:;"><img src="<?=$url?>imagens/sec6/agendar.png" class="agendar" alt=""></a>
        <div style="display: none;" id="modal2" class="plano2">
          <iframe
          id="JotFormIFrame-93215145747661"
          title="Download PDF"
          onload="window.parent.scrollTo(0,0)"
          allowtransparency="true"
          allowfullscreen="true"
          allow="geolocation; microphone; camera"
          src="https://form.jotformz.com/93215145747661"
          frameborder="0"
          style="
          min-width: 100%;
          height:539px;
          border:none;"
          scrolling="no"
          >
          </iframe>
          <script type="text/javascript">
          var ifr = document.getElementById("JotFormIFrame-93215145747661");
          if(window.location.href && window.location.href.indexOf("?") > -1) {
          var get = window.location.href.substr(window.location.href.indexOf("?") + 1);
          if(ifr && get.length > 0) {
          var src = ifr.src;
          src = src.indexOf("?") > -1 ? src + "&" + get : src  + "?" + get;
          ifr.src = src;
          }
          }
          window.handleIFrameMessage = function(e) {
          if (typeof e.data === 'object') { return; }
          var args = e.data.split(":");
          if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); }
          if (!iframe) { return; }
          switch (args[0]) {
          case "scrollIntoView":
          iframe.scrollIntoView();
          break;
          case "setHeight":
          iframe.style.height = args[1] + "px";
          break;
          case "collapseErrorPage":
          if (iframe.clientHeight > window.innerHeight) {
          iframe.style.height = window.innerHeight + "px";
          }
          break;
          case "reloadPage":
          window.location.reload();
          break;
          case "loadScript":
          var src = args[1];
          if (args.length > 3) {
          src = args[1] + ':' + args[2];
          }
          var script = document.createElement('script');
          script.src = src;
          script.type = 'text/javascript';
          document.body.appendChild(script);
          break;
          case "exitFullscreen":
          if      (window.document.exitFullscreen)        window.document.exitFullscreen();
          else if (window.document.mozCancelFullScreen)   window.document.mozCancelFullScreen();
          else if (window.document.mozCancelFullscreen)   window.document.mozCancelFullScreen();
          else if (window.document.webkitExitFullscreen)  window.document.webkitExitFullscreen();
          else if (window.document.msExitFullscreen)      window.document.msExitFullscreen();
          break;
          }
          var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
          if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
          var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
          iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
          }
          };
          if (window.addEventListener) {
          window.addEventListener("message", handleIFrameMessage, false);
          } else if (window.attachEvent) {
          window.attachEvent("onmessage", handleIFrameMessage);
          }
          </script>
        </div>
      <img src="<?=$url?>imagens/sec6/titulo-sec6.png" class="titulo-sec6" alt="">
      <img src="<?=$url?>imagens/sec6/galeria/galeria1.png" class="galeria1" alt="">
      <img src="<?=$url?>imagens/sec6/galeria/galeria2.png" class="galeria2" alt="">
      <img src="<?=$url?>imagens/sec6/galeria/galeria3.png" class="galeria3" alt="">
      <!-- <img src="<?=$url?>imagens/sec6/time-line.png" class="time-line" alt=""> -->
      <div class="time-line">
        <a href="<?=$url?>secao7#slide-1">1</a>
        <a href="<?=$url?>secao7#slide-2">2</a>
        <a href="<?=$url?>secao7#slide-3">3</a>
        <a href="<?=$url?>secao7#slide-4">4</a>
        <a href="<?=$url?>secao7#slide-5">5</a>
        <a href="<?=$url?>secao7#slide-6">6</a>
        <a href="<?=$url?>secao7#slide-7">7</a>
        <a href="<?=$url?>secao7#slide-8">8</a>
        <a href="<?=$url?>secao7#slide-9">9</a>
        <a href="<?=$url?>secao7#slide-10">10</a>
        <a href="<?=$url?>secao7#slide-11">11</a>
        <a href="<?=$url?>secao7#slide-12">12</a>
      </div>
    </div>
      
    </section>
  </div>
</main>
</body>
</html>