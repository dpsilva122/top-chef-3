<?
$h1       = 'Thumbnails Shop';
$title    = 'Thumbnails Shop';
$desc     = 'Thumbnails Shop';
$key      = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var    = 'Thumbnails Shop';
include('inc/head.php');
?>
<link rel="stylesheet" href="<?=$url?>css/thumbnails.css">
<script  src="<?=$url?>js/scriptbreaker-multiple-accordion-1.js"></script>
<script  src="<?=$url?>js/drop-list.js"></script>
<style>
.example{
width: 100%;
resize: none;
height: 250px;
}
</style>
<link rel="stylesheet" href="<?=$url?>css/accordion.css">
<body>
  <? include('inc/topo.php');?>
  <div class="wrapper">
    <main>
      <div class="content">
        <section>
          <?=$caminho?>
          <h1><?=$h1?></h1>
          <article class="full">
            <h2>MOD 1</h2>
            <ul class="thumbnails-mod1">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod1 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod1 li {
                      float: left;
                      width: 200px;
                      height: 200px;
                      margin: 10px 22px;
                      text-align: center;
                      border: 2px solid;
                      border-color: rgb(204, 224, 233);
                      box-sizing: border-box;
                      padding: 10px;
                      transition: .3s;
                      }
                      .thumbnails-mod1 h2 {
                      font-size: 12px;
                      text-transform: uppercase;
                      margin: 5px 0;
                      }
                      .thumbnails-mod1 a {
                      text-decoration: none;
                      color: #1475ab;
                      }
                      .thumbnails-mod1 li:hover {
                      text-decoration: none;
                      border-color: #017395;
                      cursor: pointer;
                      transition: 0.3s;
                      }
                      .thumbnails-mod1 img{
                      width: 100%;
                      height: 150px;
                      object-fit: cover;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod1{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod1 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 2</h2>
            <ul class="thumbnails-mod2">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod2{
                      display:inline-block;
                      list-style:none;
                      list-style-type:none;
                      }
                      .thumbnails-mod2 li{
                      float:left;
                      width: 160px;
                      height:210px;
                      margin: 10px 40px;
                      text-align:center;
                      transition: .3s;
                      }
                      .thumbnails-mod2 li:hover{
                      opacity:0.8;
                      }
                      .thumbnails-mod2 img{box-sizing: border-box;
                      border-radius:90px;
                      border:5px solid #5294b9;
                      margin-bottom:-10px;
                      width: 100%;
                      height: 150px;
                      object-fit: cover;
                      }
                      .thumbnails-mod2 h2{
                      font-size:11px;
                      width: 160px;
                      height:60px;
                      border-radius:50px;
                      }
                      .thumbnails-mod2 a{text-decoration:none;
                      color: #5294b9;
                      }
                      .thumbnails-mod2 a:hover{text-decoration:none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod2{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod2 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 3</h2>
            <ul class="thumbnails-mod3">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="info-thumb">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </a>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="info-thumb">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </a>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="info-thumb">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </a>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="info-thumb">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </a>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="ESTRUTURA">ESTRUTURA<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      <ul class="thumbnails-mod3">
                        <li>
                          <a rel="nofollow" href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui">
                          <img src="<?php echo '<?=$url;?>'?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <h2><a href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                          <a href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui">
                            <div class="info-thumb">
                              <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                          </a>
                        </li>
                      </ul>
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod3 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod3 li {
                      float: left;
                      width: 200px;
                      height: 230px;
                      margin: 10px 20px;
                      text-align: center;
                      text-transform: uppercase;
                      position: relative;
                      }
                      .thumbnails-mod3 li:hover .info-thumb{
                      background: rgba(0, 49, 107, 0.3);
                      }
                      .thumbnails-mod3 li .info-thumb{
                      position: absolute;
                      top: 0;
                      width: 100%;
                      height: 170px;
                      background: rgba(0, 49, 107, 0.0);
                      transition: 1s;
                      }
                      .thumbnails-mod3 li:hover .info-thumb .fa{
                      color: #000;
                      background: #fff;
                      padding: 10px;
                      border-radius: 50px;
                      margin-top: 60px;
                      display: inline-block;
                      transform: scale(1.6);
                      }
                      .thumbnails-mod3 li .info-thumb .fa{
                      color: rgba(255, 255, 255, 0);
                      background: rgba(255, 255, 255, 0);
                      padding: 10px;
                      border-radius: 50px;
                      margin-top: 60px;
                      transform: scale(0.6);
                      transition: all 0.5s ease-in-out;
                      }
                      .thumbnails-mod3 img{
                      width: 100%;
                      height: 170px;
                      object-fit: cover;
                      }
                      .thumbnails-mod3 h2 {
                      font-size: 11px;
                      border: 0;
                      height: 20px;
                      padding: 5px 0px;
                      margin-top: 0px;
                      }
                      .thumbnails-mod3 a {
                      text-decoration: none;
                      color: #000;
                      }
                      .thumbnails-mod3 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod3{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod3 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 4</h2>
            <ul class="thumbnails-mod4">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod4 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod4 li {
                      border-radius: 5px;
                      border: 1px solid #ccc;
                      box-shadow: 2px 2px 2px #ccc;
                      float: left;
                      width: 300px;
                      height: 240px;
                      margin: 10px 12px;
                      text-align: center;
                      text-transform: uppercase;
                      transition: .3s;
                      position: relative;
                      }
                      .thumbnails-mod4 li:hover{
                      opacity: 0.9;
                      }
                      .thumbnails-mod4 img{
                      border-radius: 5px 5px 0px 0;
                      width: 300px;
                      object-fit: cover;
                      height: 200px;
                      transition: .3s;
                      }
                      .thumbnails-mod4 h2 {
                      font-size: 11px;
                      margin-top: 0;
                      background: #222;
                      height: 40px;
                      display: table-cell;
                      vertical-align: middle;
                      width: 300px;
                      border-radius: 0px 0px 5px 5px;
                      }
                      .thumbnails-mod4 a {
                      text-decoration: none;
                      color: #ffffff;
                      }
                      .thumbnails-mod4 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod4{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod4 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 5</h2>
            <ul class="thumbnails-mod5">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod5{
                      display:inline-block;
                      list-style:none;
                      list-style-type:none;
                      }
                      .thumbnails-mod5 li{
                      float:left;
                      border:2px solid #2f3033;
                      width:180px;
                      height:180px;
                      margin: 10px 28px;
                      text-align:center;
                      text-transform:uppercase;
                      box-shadow:2px 2px 2px #2f3033;
                      transition:0.3s;
                      }
                      .thumbnails-mod5 li:hover{
                      opacity:0.9;
                      }
                      .thumbnails-mod5 li:hover img{
                      opacity:0.9;
                      }
                      .thumbnails-mod5 li:hover h2 a{
                      opacity:0.9;
                      color:#ff7519;
                      }
                      .thumbnails-mod5 img{
                      width:180px;
                      height:180px;
                      object-fit: cover;
                      }
                      .thumbnails-mod5 h2{
                      font-size:10px;
                      background:rgba(47, 48, 51, 0.7);
                      height:25px;
                      padding:5px 0px;
                      margin-top:0px;
                      position:relative;
                      top:-35px;
                      }
                      .thumbnails-mod5 a{
                      text-decoration:none;
                      color:white;
                      }
                      .thumbnails-mod5 a:hover{
                      text-decoration:none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod5{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod5 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 6</h2>
            <ul class="thumbnails-mod6">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod6 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod6 li {
                      float: left;
                      border: 2px solid #C7C7C9;
                      width: 180px;
                      height: 230px;
                      margin: 10px 30px;
                      text-align: center;
                      text-transform: uppercase;
                      transition: .2s;
                      }
                      .thumbnails-mod6 li:hover{
                      border: 2px solid #9f9fa0;
                      box-shadow: 2px 2px 2px #9f9fa0;
                      }
                      .thumbnails-mod6 li:hover img{
                      opacity: 0.9;
                      }
                      .thumbnails-mod6 img{
                      height: 180px;
                      width: 180px;
                      object-fit: cover;
                      transition: .2s;
                      }
                      .thumbnails-mod6 li:hover h2{
                      opacity: 0.9;
                      }
                      .thumbnails-mod6 h2 {
                      font-size: 10px;
                      height: 32px;
                      padding: 8px 0px;
                      margin-top: 0;
                      border-top: 2px solid #ccc;
                      }
                      .thumbnails-mod6 a {
                      text-decoration: none;
                      color: #666;
                      }
                      .thumbnails-mod6 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod6{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod6 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 7</h2>
            <ul class="thumbnails-mod7">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod7 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod7 li {
                      float: left;
                      border-radius: 10px;
                      width: 180px;
                      height: 180px;
                      margin: 10px 32px;
                      text-align: center;
                      text-transform: uppercase;
                      transition: 0.3s;
                      }
                      .thumbnails-mod7 li:hover h2{
                      background: rgba(157, 39, 37, 1);
                      }
                      .thumbnails-mod7 img{
                      width: 180px;
                      height: 180px;
                      border-radius: 10px;
                      object-fit: cover;
                      }
                      .thumbnails-mod7 h2 {
                      font-size: 10px;
                      background: rgba(157, 39, 37, 0.6);
                      height: 35px;
                      padding: 5px 0px;
                      margin-top: 0px;
                      position: relative;
                      top: -45px;
                      display: table-cell;
                      vertical-align: middle;
                      width: 180px;
                      border-radius: 0 0px 6px 6px;
                      transition: 0.3s;
                      }
                      .thumbnails-mod7 a {
                      text-decoration: none;
                      color: white;
                      }
                      .thumbnails-mod7 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod7{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod7 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 8</h2>
            <ul class="thumbnails-mod8">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod8 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod8 li:hover {
                      -webkit-transform:scale(1.1);
                      -moz-transform:scale(1.1);
                      -o-transform:scale(1.1);
                      transform:scale(1.1);
                      }
                      .thumbnails-mod8 li {
                      background: #fff;
                      float: left;
                      width: 210px;
                      height: 210px;
                      border: solid 1px #DDD;
                      margin: 10px;
                      padding: 5px;
                      border-radius: 5px;
                      text-align: center;
                      border-bottom: solid 9px #0776ad;
                      transition-property: all;
                      transition-duration: 0.3s;
                      }
                      .thumbnails-mod8 img{
                      width: 100%;
                      height: 150px;
                      }
                      .thumbnails-mod8 h2 {
                      font-size: 14px ;
                      margin: 5px 0;
                      }
                      .thumbnails-mod8 a {
                      text-decoration: none;
                      color: #1475ab;
                      }
                      .thumbnails-mod8 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod8{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod8 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 9</h2>
            <ul class="thumbnails-mod9">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod9 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod9 li {
                      float: left;
                      width: 300px;
                      height: 245px;
                      margin: 10px 13px;
                      text-align: center;
                      text-transform: uppercase;
                      transition: .3s;
                      }
                      .thumbnails-mod9 li:hover img{
                      opacity: 0.9;
                      }
                      .thumbnails-mod9 img{
                      width: 300px;
                      height: 200px;
                      object-fit: cover;
                      box-sizing: border-box;
                      border: 2px solid #ffcd00;
                      transition: .3s;
                      }
                      .thumbnails-mod9 h2 {
                      font-size: 12px;
                      /* background: #333; */
                      height: 35px;
                      padding: 5px 0px;
                      margin-top: 0px;
                      }
                      .thumbnails-mod9 li:hover a{
                      color: #ffcd00;
                      }
                      .thumbnails-mod9 a {
                      text-decoration: none;
                      color: #333;
                      transition: .3s;
                      }
                      .thumbnails-mod9 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod9{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod9 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 10</h2>
            <ul class="thumbnails-mod10">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod10 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod10 li {
                      float: left;
                      border: 1px solid #ccc;
                      width: 230px;
                      height: 190px;
                      margin: 10px 5px;
                      text-align: center;
                      text-transform: uppercase;
                      box-shadow: 2px 2px 2px #ccc;
                      transition: .3s;
                      }
                      .thumbnails-mod10 li:hover{
                      opacity: 0.9;
                      }
                      .thumbnails-mod10 img{
                      width: 230px;
                      height: 150px;
                      object-fit: cover;
                      }
                      .thumbnails-mod10 h2 {
                      font-size: 10px;
                      box-sizing: border-box;
                      padding: 0 5px;
                      margin-top: 5px;
                      }
                      .thumbnails-mod10 a {
                      text-decoration: none;
                      color: #555;
                      }
                      .thumbnails-mod10 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod10{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod10 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 11</h2>
            <ul class="thumbnails-mod11">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod11 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod11 li {
                      float: left;
                      width: 250px;
                      height: 210px;
                      margin: 10px 38px;
                      text-align: center;
                      text-transform: uppercase;
                      transition: .3s;
                      }
                      .thumbnails-mod11 li:hover img{
                      opacity: 0.9;
                      }
                      .thumbnails-mod11 img{
                      width: 250px;
                      box-sizing: border-box;
                      height: 170px;
                      border: 2px solid #eee;
                      object-fit: cover;
                      transition: .3s;
                      }
                      .thumbnails-mod11 h2 {
                      font-size: 12px;
                      background: #eee;
                      height: 30px;
                      padding: 5px 0px;
                      margin-top: 0px;
                      border-radius: 0;
                      width: 100%;
                      border: 0;
                      box-shadow: 10px 10px 10px #bbb;
                      transition: .3s;
                      }
                      .thumbnails-mod11 li:hover a {
                      text-decoration: none;
                      color: #ad2222;
                      opacity: 1;
                      }
                      .thumbnails-mod11 a {
                      text-decoration: none;
                      color: #333;
                      transition: .3s;
                      }
                      .thumbnails-mod11 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod11{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod11 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 12</h2>
            <ul class="thumbnails-mod12">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="thumb-descricao">
                    <h2>Escrever Aqui</h2>
                    <p>Saiba mais</p>
                  </div>
                </a>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="thumb-descricao">
                    <h2>Escrever Aqui</h2>
                    <p>Saiba mais</p>
                  </div>
                </a>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="thumb-descricao">
                    <h2>Escrever Aqui</h2>
                    <p>Saiba mais</p>
                  </div>
                </a>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <div class="thumb-descricao">
                    <h2>Escrever Aqui</h2>
                    <p>Saiba mais</p>
                  </div>
                </a>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="ESTRUTURA">ESTRUTURA<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      <ul class="thumbnails-mod12">
                        <li>
                          <a rel="nofollow" href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui"><img src="<?php echo '<?=$url;?>'?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <a href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui">
                            <div class="thumb-descricao">
                              <h2>Escrever Aqui</h2>
                              <p>Saiba mais</p>
                            </div>
                          </a>
                        </li>
                      </ul>
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod12 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod12 li {
                      float: left;
                      width: 200px;
                      height: 230px;
                      margin: 10px 16px;
                      text-align: center;
                      text-transform: uppercase;
                      position: relative;
                      }
                      .thumbnails-mod12 li:hover .thumb-descricao{
                      background: rgba(0, 0, 0, 0);
                      }
                      .thumbnails-mod12 li:hover .thumb-descricao p{
                      display: none;
                      }
                      .thumbnails-mod12 li:hover .thumb-descricao h2{
                      position: absolute;
                      top: auto;
                      bottom: 0;
                      left: 0;
                      right: 0;
                      margin: 0 auto;
                      color: #FAB005;
                      background: rgba(0, 0, 0, 0.6);
                      padding: 5px;
                      font-size: 12px;
                      }
                      .thumbnails-mod12 .thumb-descricao{
                      position: absolute;
                      background: rgba(0, 0, 0, 0.6);
                      top: 0;
                      width: 100%;
                      height: 100%;
                      transition: 1s;
                      }
                      .thumbnails-mod12 .thumb-descricao p{
                      color: white;
                      font-weight: bold;
                      position: absolute;
                      bottom: 15px;
                      right: 0;
                      left: 0;
                      margin: 0 auto;
                      font-size: 11px;
                      text-align: center;
                      }
                      .thumbnails-mod12 .thumb-descricao h2{
                      position: absolute;
                      top: 40px;
                      left: 0;
                      right: 0;
                      margin: 0 auto;
                      color: #FAB005;
                      transition: .6s;
                      }
                      .thumbnails-mod12 img{
                      width: 100%;
                      height: 230px;
                      object-fit: cover;
                      }
                      .thumbnails-mod12 a {
                      text-decoration: none;
                      color: white;
                      }
                      .thumbnails-mod12 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod12{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod12 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 13</h2>
            <ul class="thumbnails-mod13">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod13 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod13 li {
                      box-sizing: border-box;
                      float: left;
                      border: 1px solid #ddd;
                      width: 200px;
                      height: 260px;
                      margin: 10px 16px;
                      text-align: center;
                      text-transform: uppercase;
                      padding: 10px;
                      box-shadow: 0 0 15px #fff;
                      transition: .3s;
                      }
                      .thumbnails-mod13 li:hover{
                      /* border: 2px solid #8f8f8f; */
                      box-shadow: 0 0 15px #ccc;
                      }
                      .thumbnails-mod13 li:hover img{
                      /* opacity: 0.9; */
                      border: 1px solid #ddd;
                      }
                      .thumbnails-mod13 img{
                      width: 100%;
                      height: 200px;
                      object-fit: cover;
                      transition: .3s;
                      border: 1px solid #fff;
                      }
                      .thumbnails-mod13 h2 {
                      font-size: 10px;
                      /* background: #222; */
                      height: 20px;
                      padding: 5px 0px;
                      margin-top: 0px;
                      }
                      .thumbnails-mod13 a {
                      text-decoration: none;
                      color: #222;
                      }
                      .thumbnails-mod13 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod13{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod13 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 14</h2>
            <ul class="thumbnails-mod14">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod14 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod14 li {
                      float: left;
                      width: 200px;
                      height: 230px;
                      margin: 10px 16px;
                      text-align: center;
                      text-transform: uppercase;
                      transition: .3s;
                      }
                      .thumbnails-mod14 li:hover img{
                      opacity: 0.9;
                      }
                      .thumbnails-mod14 li:hover h2{
                      opacity: 0.9;
                      }
                      .thumbnails-mod14 img{
                      width: 100%;
                      object-fit: cover;
                      height: 200px;
                      transition: .3s;
                      }
                      .thumbnails-mod14 h2 {
                      font-size: 10px;
                      background: #232323;
                      border-top: 3px solid #f3211a;
                      height: 25px;
                      padding: 5px 0px;
                      margin-top: 0px;
                      transition: .3s;
                      }
                      .thumbnails-mod14 a {
                      text-decoration: none;
                      color: white;
                      }
                      .thumbnails-mod14 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod14{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod14 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 15</h2>
            <ul class="thumbnails-mod15">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod15 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      }
                      .thumbnails-mod15 li {
                      float: left;
                      width: 200px;
                      height: 250px;
                      margin: 10px 16px;
                      text-align: center;
                      text-transform: uppercase;
                      transition: .3s;
                      }
                      .thumbnails-mod15 li:hover img{
                      opacity: 0.9;
                      transform: scale(1.05);
                      }
                      .thumbnails-mod15 li:hover h2{
                      opacity: 0.9;
                      }
                      .thumbnails-mod15 img{
                      width: 100%;
                      height: 200px;
                      border-radius: 130px;
                      transition: .3s;
                      object-fit: cover;
                      }
                      .thumbnails-mod15 h2 {
                      font-size: 10px;
                      /* background: #202020; */
                      height: 20px;
                      padding: 10px 0px;
                      margin-top: 0px;
                      border: 0;
                      }
                      .thumbnails-mod15 a {
                      text-decoration: none;
                      color: #10588d;
                      }
                      .thumbnails-mod15 a:hover {
                      text-decoration: none;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod15{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod15 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <h2>MOD 16</h2>
            <ul class="thumbnails-mod16">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
              </li>
            </ul>
            <ul class="drop-list">
              <li>
                <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                <ul>
                  <li>
                    <div>
                      <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                      .thumbnails-mod16 {
                      display: inline-block;
                      list-style: none;
                      list-style-type: none;
                      background:none;
                      }
                      .thumbnails-mod16 li {float: left;width: 220px;height: 180px;margin: 20px 6px;text-align: center;background:none;padding: 5px;}
                      .thumbnails-mod16 li:hover img{
                      transform: scale(1.05);
                      }
                      .thumbnails-mod16 img {
                      padding: 5px;
                      width: 100%;
                      height: 140px;
                      object-fit: contain;
                      box-sizing: border-box;
                      border: 2px solid #efb62c;
                      transition: .3s;
                      }
                      .thumbnails-mod16 h2 {
                      font-size: 14px;
                      margin: 0px 0;
                      text-align:center;
                      padding: 5px;
                      height: 50px;
                      }
                      .thumbnails-mod16 a {
                      text-decoration: none;
                      color: #1475ab;
                      }
                      @media only screen and (max-width: 765px){
                      .thumbnails-mod16{
                      text-align: center;
                      width: 100%;
                      }
                      .thumbnails-mod16 li{
                      margin: 20px auto;
                      float: none;
                      }
                      }
                      </textarea>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <hr>
            <script  src="js/jquery.hoverdir.js"></script>
            <script>
            $(function() {
            $(' .thumbnails-mod17 > li ').each( function() { $(this).hoverdir({
            hoverDelay : 75
            }); } );
            });
            </script>
            <h2>MOD 17</h2>
            <ul class="thumbnails-mod17">
              <li>
                <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                  <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/><div><h2>Escrever Aqui</h2></div></a>
                </li>
                <li>
                  <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                    <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/><div><h2>Escrever Aqui</h2></div></a>
                  </li>
                  <li>
                    <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                      <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/><div><h2>Escrever Aqui</h2></div></a>
                    </li>
                    <li>
                      <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                        <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/><div><h2>Escrever Aqui</h2></div></a>
                      </li>
                    </ul>
                    <br class="clear">
                    <ul class="drop-list">
                      <li>
                        <a href="#" title="INSERIR NA HEAD">INSERIR NA HEAD<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                        <ul>
                          <li>
                            <div>
                              <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                              <script  src="js/jquery.hoverdir.js"></script>
                              <script>
                              $(function() {
                              $(' .thumbnails-mod17 > li ').each( function() { $(this).hoverdir({
                              hoverDelay : 75
                              }); } );
                              });
                              </script>
                              </textarea>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="ESTRUTURA">ESTRUTURA<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                        <ul>
                          <li>
                            <div>
                              <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                              <ul class="thumbnails-mod17">
                                <li>
                                  <a rel="nofollow" href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui">
                                    <img src="<?php echo '<?=$url;?>'?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/><div><h2>Escrever Aqui</h2></div></a>
                                  </li>
                                </ul>
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                .thumbnails-mod17 {
                                list-style: none;
                                width: 100%;
                                position: relative;
                                margin: 30px auto;
                                padding: 0;
                                }
                                .thumbnails-mod17 li {
                                float: left;
                                width: 200px;
                                height: 180px;
                                margin: 10px 12px;
                                background: #fff;
                                padding: 7px;
                                border: 1px solid #ddd;
                                position: relative;
                                }
                                .thumbnails-mod17 li a, .thumbnails-mod17 li a img {
                                display: block;
                                position: relative;
                                width: 100%;
                                height: 180px;
                                object-fit: cover;
                                }
                                .thumbnails-mod17 li a {
                                overflow: hidden;
                                }
                                .thumbnails-mod17 li a div {
                                position: absolute;
                                background: rgba(9, 157, 202, 0.7);
                                width: 100%;
                                height: 100%;
                                }
                                .thumbnails-mod17 li a div h2 {
                                word-wrap: break-word;
                                text-align: center;
                                font-size: 24px;
                                display: block;
                                margin: 40px 20px 20px 20px;
                                font-weight: normal;
                                color: rgba(255, 255, 255, .8);
                                }
                                @media only screen and (max-width: 765px){
                                .thumbnails-mod17{
                                text-align: center;
                                width: 100%;
                                }
                                .thumbnails-mod17 li{
                                margin: 20px auto;
                                float: none;
                                }
                                }
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <hr>
                      <br class="clear">
                      <h2>MOD 18</h2>
                      <ul class="thumbnails-mod18">
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                            <div class="fundo-thumb">
                              <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                            <div class="fundo-thumb">
                              <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                            <div class="fundo-thumb">
                              <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <h2><a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui">
                            <div class="fundo-thumb">
                              <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                          </a>
                        </li>
                      </ul>
                      <br class="clear">
                      <hr>
                      <br class="clear">
                      <ul class="drop-list">
                        <li>
                          <a href="#" title="ESTRUTURA">ESTRUTURA<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                
                                <ul class="thumbnails-mod18">
                                  <li>
                                    <img src="<?php echo '<?=$url;?>'?>imagens/slider/bnds.jpg" alt="Escrever Aqui" title="Escrever Aqui"/>
                                    <h2><a href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui">Escrever Aqui</a></h2>
                                    <a href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui">
                                      <div class="fundo-thumb">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                      </div>
                                    </a>
                                  </li>
                                </ul>
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                .thumbnails-mod18 {
                                display: inline-block;
                                list-style: none;
                                list-style-type: none;
                                }
                                .thumbnails-mod18 li {position:relative;float: left;border-radius: 10px;border: 1px solid #ddd;width: 220px;height: 170px;margin: 10px 10px;text-align: center;text-transform: uppercase;transition: 0.5s; overflow:hidden;}
                                .thumbnails-mod18 img{
                                transition: .5s;
                                width: 100%;
                                height: 170px;
                                border-radius: 15px;
                                box-sizing: border-box;
                                object-fit: cover;
                                padding: 8px;
                                }
                                .thumbnails-mod18 h2 {z-index: 2;background: rgba(0, 0, 0, 0.7);box-sizing:  border-box;padding: 15px 0px;bottom: 20px;width: 100%;font-size: 12px;transition: 0.5s;font-weight: bold;text-transform: uppercase;position:  absolute;margin: 0;}
                                .thumbnails-mod18 li a{
                                color: #fff;
                                }
                                .thumbnails-mod18 li:hover h2{
                                background: rgb(0, 0, 0);
                                }
                                .thumbnails-mod18 li:hover img{
                                transform: scale(1.05);
                                }
                                .thumbnails-mod18 li .fundo-thumb{
                                position: absolute;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                background: rgba(0, 0, 0, 0.8);
                                border-radius: 10px;
                                opacity: 0;
                                transition: 1s;
                                }
                                .thumbnails-mod18 li .fundo-thumb .fa{
                                position: absolute;
                                background: #2172b3;
                                box-sizing: border-box;
                                padding: 15px 20px;
                                border-radius: 0px 10px 0px 10px;
                                transition: 1s;
                                right: -50px;
                                top: -50px;
                                }
                                .thumbnails-mod18 li:hover .fundo-thumb .fa{
                                right: 0;
                                top: 0;
                                transition: 1s;
                                }
                                .thumbnails-mod18 li:hover .fundo-thumb{
                                opacity: 1;
                                transition: 1s;
                                }
                                @media only screen and (max-width: 765px){
                                .thumbnails-mod18{
                                text-align: center;
                                width: 100%;
                                }
                                .thumbnails-mod18 li{
                                margin: 20px auto;
                                float: none;
                                }
                                }
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <br class="clear">
                      <h2>MOD 19</h2>
                      <ul class="thumbnails-19">
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><h2>Escrever Aqui</h2></a>
                        </li>
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><h2>Escrever Aqui</h2></a>
                        </li>
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><h2>Escrever Aqui</h2></a>
                        </li>
                        <li>
                          <a rel="nofollow" href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                          <a href="<?=$url;?>escrever-aqui" title="Escrever Aqui"><h2>Escrever Aqui</h2></a>
                        </li>
                      </ul>
                      <br class="clear">
                      <hr>
                      <br class="clear">
                      <ul class="drop-list">
                        <li>
                          <a href="#" title="ESTRUTURA">ESTRUTURA<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                <ul class="thumbnails-19">
                                  <li>
                                    <a rel="nofollow" href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui"><img src="<?php echo '<?=$url;?>'?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                                    <a href="<?php echo '<?=$url;?>'?>escrever-aqui" title="Escrever Aqui"><h2>Escrever Aqui</h2></a>
                                  </li>
                                </ul>
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                .thumbnails-19 {
                                display: inline-block;
                                list-style: none;
                                list-style-type: none;
                                }
                                .thumbnails-19 li {position: relative;float: left;/* border: 2px solid #2172b3; */width: 200px;height: 200px;margin: 10px 16px;text-align: center;text-transform: uppercase;transition: .3s;}
                                .thumbnails-19 li:hover img{
                                opacity: 0.9;
                                }
                                .thumbnails-19 li:hover h2{opacity: 0.9;height: 200px;transition: 1.5s;background: rgba(204, 0, 0, 0.55);}
                                .thumbnails-19 img{width: 200px;height: 200px;object-fit: cover;transition: .3s;}
                                .thumbnails-19 h2 {position: absolute;width: 100%;bottom: 0;font-size: 12px;background: rgba(33, 114, 179, 0.8);margin: 0;transition: 1.5s;display: flex;height: 40px;text-align: center;justify-content: center;align-items: center;color:#fff;}
                                .thumbnails-19 a {
                                text-decoration: none;
                                color: white;
                                }
                                .thumbnails-19 a:hover {
                                text-decoration: none;
                                }
                                @media only screen and (max-width: 765px){
                                .thumbnails-19 li {
                                width: 100%;
                                margin: 10px 0;
                                }
                                .thumbnails-19 {
                                width: 100%;
                                box-sizing: border-box;
                                padding: 10px;
                                }
                                .thumbnails-19 img{
                                width: 100%;
                                }
                                }
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <h2>MOD 20</h2>
                      <ul class="thumbnails-20">
                        <li>
                          <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/>
                          
                          <a href="<?=$url;?>" title="Escrever Aqui">
                            <div class="thumbnail-texto">
                              <h2>Teste</h2>
                              <p>Produto 1</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/>
                          
                          <a href="<?=$url;?>" title="Escrever Aqui">
                            <div class="thumbnail-texto">
                              <h2>Teste</h2>
                              <p>Produto 1</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/>
                          
                          <a href="<?=$url;?>" title="Escrever Aqui">
                            <div class="thumbnail-texto">
                              <h2>Teste</h2>
                              <p>Produto 1</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/>
                          
                          <a href="<?=$url;?>" title="Escrever Aqui">
                            <div class="thumbnail-texto">
                              <h2>Teste</h2>
                              <p>Produto 1</p>
                            </div>
                          </a>
                        </li>
                      </ul>
                      <br class="clear">
                      <hr>
                      <br class="clear">
                      <ul class="drop-list">
                        <li>
                          <a href="#" title="ESTRUTURA">ESTRUTURA<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                <ul class="thumbnails-20">
                                  <li>
                                    <img src="<?php echo '<?=$url;?>'?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/>
                                    
                                    <a href="<?php echo '<?=$url;?>'?>" title="Escrever Aqui">
                                      <div class="thumbnail-texto">
                                        <h2>Teste</h2>
                                        <p>Produto 1</p>
                                      </div>
                                    </a>
                                  </li>
                                </ul>
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                
                                .thumbnails-20 {
                                display: inline-block;
                                list-style: none;
                                list-style-type: none;
                                }
                                .thumbnails-20 li {
                                float: left;
                                width: 213px;
                                height: 200px;
                                margin: 10px 16px;
                                text-align: center;
                                text-transform: uppercase;
                                transition: .3s;
                                position: relative;
                                }
                                .thumbnails-20 li:hover img {
                                opacity: 0.9;
                                }
                                .thumbnails-20 li:hover h2 {
                                opacity: 0.9;
                                }
                                .thumbnails-20 img {
                                width: 100%;
                                height: 200px;
                                object-fit: cover;
                                transition: .3s;
                                }
                                .thumbnails-20 h2 {
                                font-size: 10px;
                                background: #2172b3;
                                height: 20px;
                                padding: 8px 0px;
                                margin-top: 0px;
                                transition: .3s;
                                color:  #fff;
                                }
                                .thumbnails-20 a {
                                text-decoration: none;
                                color: white;
                                }
                                .thumbnails-20 a:hover {
                                text-decoration: none;
                                }
                                .thumbnails-20 .thumbnail-texto{
                                position: absolute;
                                top: 0;
                                height: 100%;
                                width: 100%;
                                background: rgba(0, 0, 0, 0.5);
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                flex-direction: column;
                                box-sizing: border-box;
                                padding: 20px;
                                opacity: 0;
                                transition: .3s;
                                }
                                .thumbnails-20 .thumbnail-texto h2{
                                background: none;
                                font-size: 20px;
                                height:  auto;
                                padding: 0;
                                width:  100%;
                                margin: 0;
                                word-wrap: break-word;
                                }
                                .thumbnails-20 .thumbnail-texto p{font-size: 12px;width: 100%;word-wrap: break-word;text-align: center;}
                                .thumbnails-20 li:hover .thumbnail-texto{
                                opacity: 1;
                                }
                                @media only screen and (max-width: 765px) {
                                .thumbnails-20{
                                text-align: center;
                                }
                                .thumbnails-20 li{
                                float: none;
                                display: inline-block;
                                }
                                }
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      
                      <h2>MOD 21</h2>
                      
                      <div class="thumb">
                        <div class="card-portfolio">
                          <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                          <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                            <i class="fa fa-camera"></i>
                          </a>
                          <div class="card-title">
                            <h3>Exemplo</h3>
                            <p>Exemplo</p>
                          </div>
                        </div>
                        <div class="card-portfolio">
                          <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                          <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                            <i class="fa fa-camera"></i>
                          </a>
                          <div class="card-title">
                            <h3>Exemplo</h3>
                            <p>Exemplo</p>
                          </div>
                        </div>
                        <div class="card-portfolio">
                          <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                          <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                            <i class="fa fa-camera"></i>
                          </a>
                          <div class="card-title">
                            <h3>Exemplo</h3>
                            <p>Exemplo</p>
                          </div>
                        </div>
                        <div class="card-portfolio">
                          <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                          <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                            <i class="fa fa-camera"></i>
                          </a>
                          <div class="card-title">
                            <h3>Exemplo</h3>
                            <p>Exemplo</p>
                          </div>
                        </div>
                      </div>
                      <br class="clear">
                      <hr>
                      <br class="clear">
                      <ul class="drop-list">
                        <li>
                          <a href="#" title="ESTRUTURA">ESTRUTURA<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                <div class="thumb">
                                  <div class="card-portfolio">
                                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                                    <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                                      <i class="fa fa-camera"></i>
                                    </a>
                                    <div class="card-title">
                                      <h3>Exemplo</h3>
                                      <p>Exemplo</p>
                                    </div>
                                  </div>
                                  <div class="card-portfolio">
                                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                                    <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                                      <i class="fa fa-camera"></i>
                                    </a>
                                    <div class="card-title">
                                      <h3>Exemplo</h3>
                                      <p>Exemplo</p>
                                    </div>
                                  </div>
                                  <div class="card-portfolio">
                                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                                    <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                                      <i class="fa fa-camera"></i>
                                    </a>
                                    <div class="card-title">
                                      <h3>Exemplo</h3>
                                      <p>Exemplo</p>
                                    </div>
                                  </div>
                                  <div class="card-portfolio">
                                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Obras Comerciais" title="Obras Comerciais">
                                    <a href="<?=$url?><?=$url?>imagens/escrever-aqui-01.jpg" class="quick_view" data-fancybox="obras-comerciais" data-qw-form="qw-form-1">
                                      <i class="fa fa-camera"></i>
                                    </a>
                                    <div class="card-title">
                                      <h3>Exemplo</h3>
                                      <p>Exemplo</p>
                                    </div>
                                  </div>
                                </div>
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="#" title="CSS">C??DIGO CSS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                          <ul>
                            <li>
                              <div>
                                <textarea class="example" onclick="this.select();document.execCommand('copy'); alert('Copiado!')">
                                
                                .thumb {
                                display: grid;
                                grid-template-columns: repeat(4, auto);
                                grid-column-gap: 15px;
                                }
                                .card-portfolio {
                                position: relative;
                                height: 275px;
                                }
                                .card-portfolio .card-title {
                                position: absolute;
                                bottom: 0;
                                width: 100%;
                                opacity: 0;
                                transition: 0.5s;
                                }
                                .card-portfolio img {border: 2px solid white;box-shadow: 0 0 1px rgba(0, 0, 0, 0.75);border-radius: 2px;width: 100%;height: 100%;object-fit: cover;}
                                .card-portfolio .card-title h3,
                                .card-portfolio .card-title p {
                                text-align: center;
                                color: white;
                                }
                                .card-portfolio .card-title h3 {
                                font-size: 17px;
                                font-weight: normal;
                                margin: 15px 0 5px 0;
                                }
                                .card-portfolio .card-title p {
                                font-size: 11px;
                                margin: 5px 0 15px 0;
                                }
                                .card-portfolio a {
                                position: absolute;
                                top: 2px;
                                left: 2px;
                                background: rgba(0, 0, 0, 0.5);
                                width: 100%;
                                height: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                opacity: 0;
                                transition: 0.5s;
                                }
                                .card-portfolio a i {
                                font-size: 16px;
                                color: #4a4a4a;
                                background: #d8d8d8;
                                padding: 13px;
                                border-radius: 50%;
                                box-shadow: 0 0 0 4px rgba(216, 216, 216, 0.5);
                                }
                                .card-portfolio:hover .card-title,
                                .card-portfolio:hover a {
                                opacity: 1;
                                }
                                @media only screen and (max-width: 765px){
                                .thumb {
                                display: grid;
                                grid-template-columns: repeat(2, auto);
                                grid-column-gap: 15px;
                                grid-row-gap: 15px;
                                }
                                }
                                </textarea>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      
                    </article>
                  </section>
                </div>
              </main>
              </div><!-- .wrapper -->
              <? include('inc/footer.php');?>
            </body>
          </html>