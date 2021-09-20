/* ==========================================================================Base styles========================================================================== */
* {
margin: 0;
padding: 0;
border: 0;
outline: 0;
}
.clear {
clear: both;
}
/** A better looking default horizontal rule*/
hr {
display: block;
height: 1px;
border: 0;
border-top: 1px solid #ccc;
margin: 1em 0;
padding: 0;
}
ul {
list-style-type: none;
list-style: none;
margin: 0;
padding: 0;
}
/** Remove the gap between images, videos, audio and canvas and the bottom of* their containers: h5bp.com/i/440*/
audio,
canvas,
img,
video {
vertical-align: middle;
}
/** Remove default fieldset styles.*/
fieldset {
border: 0;
margin: 0;
padding: 0;
}
/** Allow only vertical resizing of textareas.*/
textarea {
resize: vertical;
}

/*SCROLL ASIDE*/

::-webkit-scrollbar-track {
    background-color: #F4F4F4;
}
::-webkit-scrollbar {
    width: 8px;
    background: #F4F4F4;
}
::-webkit-scrollbar-thumb {
    background: #df4048;
}

/*END SCROLL ASIDE*/

/* ==========================================================================Browse Happy prompt========================================================================== */
.browsehappy {
margin: 0.2em 0;
background: #ccc;
color: #000;
padding: 0.2em 0;
}
/*==========================================================================Geral==========================================================================*/
body {font-size: 1rem;font-family: 'Open Sans', sans-serif;color: #0055b3;background: #0057b5;background-image: url(../imagens/bg.png);background-size: cover;background-attachment: fixed;height: 100vh;background-repeat: no-repeat;background-position-x: center;background-position-y: bottom;}
h1 {
color: #2172b3;
font-size: 24px;
text-decoration: none;
margin: 20px 0;
}
h2 {
font-size: 16px;
text-decoration: none;
margin: 20px 0;
color: #2172b3;
}
h3,
h4 {
font-size: 12px;
color: #2172b3;
text-decoration: none;
margin: 15px 0;
}
a {
color: #1475ab;
text-decoration: none;
}
a:hover {
text-decoration: none;
}
a.tel {
text-decoration: none;
color: inherit;
}
/*==================================================Header==================================================*/
.topofixo {
position: fixed;
width: 100%;
z-index: 10;
top: 0px;
}
.topofixo .logo .praca {width: 170px;transition: .3s;margin: 0 auto;display: block;}
.topofixo .logo .setinha {width: 44px;transition: .3s;margin: 0 auto;display: block;}
.topofixo .logo .play {width: 44px;transition: .3s;margin: 0 auto;display: block;}
.topofixo #menu2 {
font-size: 14px;
margin: 18px 0;
margin-right: 10px;
}
.topofixo .topo {
display: none;
}
header {margin: 0 auto;background: #b9eaff;position: fixed;width: 100%;z-index: 10;}
header .logo {float: left;margin: 16px 0;width: 100%;}
header .logo .praca {width: 220px;transition: .3s;margin: 0 auto;display: block;}
header .right {
float: right;
text-align: right;
color: #666;
font-size: 12px;
margin: 17px 0px;
}
header .right strong {
font-size: 20px;
}

/* TOPO MOBILE */

/* HIDE ON DESKTOP */

.social-inline{
    display: inline;
}

.flex-top-icons{
    display: none;
}


@media only screen and (min-width: 1400px) {
.margem {
    margin-top: 119px !important;
}
    
}

@media only screen and (min-width: 800px) {
.hide-desktop {
    display: none;
}
}

/* SHOW ON MOBILE */
@media only screen and (max-width: 812px) {    
    .mapa {
    width: 100%;
    position: relative;
    /* background-color: #333; */
    height: 433px;
    z-index: 1;
    left: -31%;
}

.record {
    position: absolute;
    width: 142px;
    height: 124px;
    left: 125%;
    bottom: -17%;
    background-image: url(../imagens/elementos/record.png);
    background-repeat: no-repeat;
}
.bandeira {
    width: 130px;
    left: 45%;
    top: -63%;
    position: absolute;
    z-index: 5;
}
.logo-circuito {
    width: 100px;
    left: 46%;
    top: 90%;
    position: absolute;
    z-index: 6;
}
}
@media only screen and (max-width: 765px) {    
.flex-top-icons{
    display: flex;
    justify-content: center;
    align-items: center;
}
.flex-top-icons a{
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size:  24px;
}
/*.flex-top-icons a:first-child{
    background: rgba(255, 255, 255, 0.1);
    color: white;
}
.flex-top-icons a:nth-child(2){
    background: rgba(255, 255, 255, 0.1);
    color: white;
}*/
}

/* END TOPO MOBILE */

/*==================================================Menu==================================================*/
header #menu {
clear: both;
position: relative;
height: 40px;
background: #E4E4E4;
font-size: 15px;
text-align: center;
}
header #menu li {
position: relative;
display: inline-block;
}
header #menu a {
display: block;
color: #666;
text-decoration: none;
padding: 8px 30px;
height: 25px;
text-align: center;
transition: all .3s linear;
/* Efeito de Transição dos itens do header #menu e sub-header #menu */
}
header #menu a:hover,
header #menu li:hover a {
color: #FFF;
background: #2172b3;
}
header #menu table {
border-collapse: collapse;
position: absolute;
left: 0;
top: 0;
}
header #menu .dropdown .sub-menu {
display: none;
position: absolute;
top: 41px;
left: 0;
margin: 0;
height: auto;
width: 230px;
z-index: 7;
background: #2172b3;
}
header #menu .dropdown:hover .sub-menu {
display: block;
}
header #menu .dropdown:hover .sub-menu li {
position: relative;
float: left;
width: 230px;
margin: 0;
padding: 0;
}
header #menu .dropdown:hover .sub-menu li a {
display: block;
width: 220px;
font-size: 13px;
padding: 5px;
height: auto;
text-align: left;
text-decoration: none;
color: #fff;
}
header #menu .dropdown:hover .sub-menu li a:hover {
background: #1a5b8f;
color: #FFF;
/* text-decoration:underline; */
}
header #menu .dropdown ul li.dropdown .sub-menu {
display: none;
position: absolute;
top: 0px;
left: 200px;
margin: 0;
height: auto;
width: 190px;
z-index: 7;
}
header #menu .dropdown ul li.dropdown:hover .sub-menu {
display: block;
}
header #menu .dropdown .sub-menu-info {
display: none;
position: absolute;
top: 31px;
left: 0;
margin: 0;
height: 400px;
width: 300px;
z-index: 7;
background: #2172b3;
overflow-y:  scroll;
overflow-x: hidden;
}
header #menu .dropdown:hover .sub-menu-info {
display: block;
}
header #menu .dropdown:hover .sub-menu-info li {
position: relative;
float: left;
width: 300px;
margin: 0;
padding: 0;
}
header #menu .dropdown:hover .sub-menu-info li a {
display: block;
width: 290px;
font-size: 12px;
padding: 5px;
height: auto;
text-align: left;
text-decoration: none;
color: #fff;
}
header #menu .dropdown:hover .sub-menu-info li a:hover {
background: #1a5b8f;
color: #FFF;
/* text-decoration:underline; */
}
header #menu .dropdown ul li.dropdown .sub-menu-info {
display: none;
position: absolute;
top: 0px;
left: 200px;
margin: 0;
height: auto;
width: 190px;
z-index: 7;
}
header #menu .dropdown ul li.dropdown:hover .sub-menu-info {
display: block;
}
header #menu2 {
height: 30px;
font-size: 15px;
text-align: center;
float: right;
margin: 29px 0;
margin-right: 10px;
}
header #menu2 li {
position: relative;
display: inline-block;
}
header #menu2 a {
display: block;
color: #666;
text-decoration: none;
padding: 3px 10px;
height: 25px;
text-align: center;
transition: all .3s linear;
/* Efeito de Transição dos itens do header #menu2 e sub-header #menu2 */
}
header #menu2 a:hover,
header #menu2 li:hover a {
color: #FFF;
background: #2172b3;
}
header #menu2 table {
border-collapse: collapse;
position: absolute;
left: 0;
top: 0;
}
header #menu2 .dropdown .sub-menu {
display: none;
position: absolute;
top: 31px;
left: 0;
margin: 0;
height: auto;
width: 230px;
z-index: 7;
background: #2172b3;
}
header #menu2 .dropdown:hover .sub-menu {
display: block;
}
header #menu2 .dropdown:hover .sub-menu li {
position: relative;
float: left;
width: 230px;
margin: 0;
padding: 0;
}
header #menu2 .dropdown:hover .sub-menu li a {
display: block;
width: 220px;
font-size: 13px;
padding: 5px;
text-align: left;
text-decoration: none;
color: #fff;
height: auto;
}
header #menu2 .dropdown:hover .sub-menu li a:hover {
background: #1a5b8f;
color: #FFF;
/* text-decoration:underline; */
}
header #menu2 .dropdown ul li.dropdown .sub-menu {
display: none;
position: absolute;
top: 0px;
left: 200px;
margin: 0;
height: auto;
width: 190px;
z-index: 7;
}
header #menu2 .dropdown ul li.dropdown:hover .sub-menu {
display: block;
}
header #menu2 .dropdown .sub-menu-info {
display: none;
position: absolute;
top: 31px;
left: 0;
margin: 0;
height: 400px;
width: 300px;
z-index: 7;
background: #2172b3;
overflow-x: hidden;
overflow-y: scroll;
}
header #menu2 .dropdown:hover .sub-menu-info {
display: block;
}
header #menu2 .dropdown:hover .sub-menu-info li {
position: relative;
float: left;
width: 300px;
margin: 0;
padding: 0;
}
header #menu2 .dropdown:hover .sub-menu-info li a {
display: block;
width: 290px;
font-size: 12px;
height: auto;
padding: 5px;
text-align: left;
text-decoration: none;
color: #fff;
}
header #menu2 .dropdown:hover .sub-menu-info li a:hover {
background: #1a5b8f;
color: #FFF;
/* text-decoration:underline; */
}
header #menu2 .dropdown ul li.dropdown .sub-menu-info {
display: none;
position: absolute;
top: 0px;
left: 200px;
margin: 0;
height: auto;
width: 190px;
z-index: 7;
}
header #menu2 .dropdown ul li.dropdown:hover .sub-menu-info {
display: block;
}
/*==================================================Content==================================================*/
.wrapper {
width: 100%;
max-width: 1280px;
margin: 0 auto;
}
.content {
/* padding:0 15px; */
}
section {
float: left;
width: 100%;
padding: 0;
min-height: 340px;
}
section p {
font-size: 14px;
text-align: justify;
}
article {
float: left;
width: 70%;
}
article p {
margin: 1.5em 0;
}
article strong {
font-weight: normal;
}
article.full {
width: 100%;
}
article .alerta {
font-size: 12px;
color: #444;
font-weight: bold;
}
.title-breadcrumb {
background: #2172b3;
box-sizing: border-box;
padding: 20px 0;
margin-bottom: 30px;
}
.title-breadcrumb h1 {
color: white;
margin: 0;
}
.title-breadcrumb #breadcrumb {
width: auto;
margin-top: 0px;
float: right;
background: white;
border-radius: 5px;
box-sizing: border-box;
padding: 10px;
}
.title-breadcrumb #breadcrumb a {
color: #666;
text-decoration: none;
}
.title-breadcrumb #breadcrumb a:hover {
color: #bbb;
text-decoration: none;
}
#breadcrumb {
display: inline-block;
clear: both;
width: 100%;
color: #333;
font-size: 12px;
margin-top: 15px;
}
#breadcrumb div {
display: inline;
}
#breadcrumb a {
color: #666;
text-decoration: none;
}
#breadcrumb a:hover {
color: #bbb;
text-decoration: none;
}
.list {
margin: 0 0 20px 40px;
}
.list li {
list-style: disc;
margin: 6px 0;
line-height: 1.5em;
font-size: 14px;
}
.picture-legend {
background: #eee;
display: inline-block;
padding: 3px;
}
.picture-legend strong {
clear: both;
display: block;
text-align: right;
font-weight: normal;
padding: 4px;
font-size: 9px;
}
.picture-legend img {
margin: 0 auto;
display: block;
}
.picture-left {
float: left;
margin: 0 10px 0 0;
max-width: 50%;
}
.picture-right {
float: right;
margin: 0 0 0 10px;
max-width: 50%;
}
.picture-center {
margin: 0 auto;
display: block;
}
.btn {border: 3px solid #ffffff;text-decoration: none;color: #ffffff;background: #00b189;padding: 10px 15px;box-sizing:  border-box;/* margin: 10px auto; */font-size: 14px;display: inline-block;border-radius: 38px;transition: .3s;font-size: 24px;font-weight: bold;}
.btn:hover {
opacity: 0.9;
}
.topo {
background: #2172b3;
color: white;
font-size: 13px;
padding: 8px 10px;
}
.topo a {
color: white;
margin: 0 10px;
text-decoration: none;
}
header .topo .social {
display: inline-block;
float: right;
}
.conteudo-index {
background: #efefef;
box-sizing: border-box;
padding: 10px 0px;
}
.conteudo-index h2,
.conteudo-index h1 {
color: #444;
}
.conteudo-index p {
color: #444;
}

.conteudo-index1 {
background: #efefef;
box-sizing: border-box;
padding: 10px 0px;
}
.conteudo-index1 h2,
.conteudo-index1 h1 {
color: #444;
}
.conteudo-index1 p {
color: #444;
}





  
#contenedor{
  width:720px;
  height:480px;
  background:rgb(200,200,200);
  
}
#menu{
  width:550px;
  position: fixed;
  top:100px;
  z-index: 20;
  overflow:hidden;
}

#menuLateral{
  position:relative;
  width: 130px;
  height: 427px;
  background: rgba(255, 255, 255, 0.65);
  left:-130px;
  -webkit-transition: left .5s;
  -moz-transition: left .5s;
  -o-transition: left .5s;
  -ms-transition: left .5s;
}

#flecha{
  position: absolute;
  display:inline-block;
  width:40px;
  height: 150px;
  /* background:rgb(40,40,40); */
  background-image: url(../imagens/lateral.png);
  background-repeat: no-repeat;
  background-size: contain;
  /* border-radius:50%; */
  left:85%;
  top: 147px;
  cursor:pointer;
  color: rgba(120, 120, 120, 0);
  text-align:center;
  padding-top:10px;
  /* padding-left: 10px; */
  margin-left: 19px;
  /* font-family:"Arial"; */
  /* font-weight: bolder; */
  -webkit-transition: color .2s;
  -moz-transition: color .2s;
  -o-transition: color .2s;
  -ms-transition: color .2s;
}

#flecha:hover{
  /* color:white; */
}

#opciones{
  display:inline-block;
  width:80%;
  height:100%;
  margin-top:20px;
  /*background:red;*/
}

ul li{
  list-style: none;
  width: 100%;
  height: 10%;
  /*background: #fff;*/
  margin-top: 12px;
  text-align: center;
  border-bottom: solid rgb(3, 80, 145) 1px;
  -webkit-transition:border .2s;
  -moz-transition:border .2s;
  -o-transition:border .2s;
  -ms-transition:border .2s;
}

ul li:hover{
  color:white;
  cursor: pointer;
  border-bottom: solid white 1px;
}

ul li:hover a{
  color:white;
}

ul{
  
  height: 70%;
  margin: 10px 0px;
}

a{
  text-decoration:none;
  color: rgb(0, 86, 180);
  font-weight: bolder;
  -webkit-transition:color .2s;
  -moz-transition:color .2s;
  -o-transition:color .2s;
  -ms-transition:color .2s;
}


.scrollme
{
  /* padding:2em; */
  /* border:1em solid #e8e8e8; */
  perspective:600px;
}

.animateme
{
  width: 100%;
  /* padding:10%; */
  /* background:#e8e8e8; */
  transform-origin:center center center;
}
/*==================================================meu style==================================================*/


#vidfim {
    width: 100%;
}
#vidfim video {
    width: 80%;
    display: block;
    margin: 20px auto;
}

.bandeirola {
    width: 100%;
    margin: 60px 0;
}
.info{
    width: 80%;
    /* float: left; */
    margin: 0 auto;
    display: block;
}

.progress-container {
  width: 95%;
  height: 8px;
  background: #045aa7;
  position: fixed;
}
#id {

}
.progress-bar {
  height: 8px;
  background: #df4048;
  width: 0%;
  border-radius: 0px 10px 10px 0px;
}
.setinha {
    width: 53px;
    /* width: 220px; */
    transition: .3s;
    /* margin: 0 auto; */
    /* display: block; */
    left: 1%;
    position: absolute;
    top: 26%;
}
.logo-casas {
    width: 103px;
    /* width: 220px; */
    transition: .3s;
    /* margin: 0 auto; */
    /* display: block; */
    left: 8%;
    position: absolute;
    top: 30%;
}
.play {
    width: 53px;
    /* width: 220px; */
    transition: .3s;
    /* margin: 0 auto; */
    /* display: block; */
    left: 93%;
    position: absolute;
    top: 65%;
    z-index: 11;
}
.altura {
    height: 100px;
}
.ajust-marg {
    margin-top: 51px !important;
}
.relative {
    position: relative;
}
.absolute {
    position: absolute;
}
.tela {
    width: 100%;
    height: 100vh;
    position: relative;
}
.avancar {

}
.avancar img {
    width: 119px;
    position: absolute;
    right: 2%;
    top: 3%;
    z-index: 12;
} 
.embreve {
    font-size: 30px;
    color: #fdfeff;
}

.clique {
    width: 420px;
    box-sizing: border-box;
    padding: 25px;
    margin-top: 100px;
}
.elementos-topo {
    position: relative;
    height: 0;
    /* background-color: #333; */
}
.bandeira {
    width: 130px;
    left: 45%;
    top: -63%;
    position: absolute;
}
.bandeirola1 {
    width: 530px;
    left: 0%;
    top: -3%;
    position: absolute;
}
.bandeirola2 {
    width: 490px;
    right: 0%;
    top: -116%;
    position: absolute;
}
.logo-circuito {
    width: 15%;
    left: 43%;
    /* top: 0; */
    z-index: 10;
    position: absolute;
}
.casas {
    width: 156px;
    float: right;
    margin-top: -108px;
}
.record {
     position: absolute;
     width: 142px;
     height: 124px;
     left: 95%;
     bottom: -17%;
     background-image: url(../imagens/elementos/record.png);
     background-repeat: no-repeat;
}
#myVideo {
    width: 100%;
    position: absolute;
    z-index: 11;
}

.mapa {
    width: 100%;
    position: relative;
    /* background-color: #333; */
    height: 432px;
    z-index: 1;
}
.mapa-base {
    position: absolute;
    width: 526px;
    left: 22%;
    top: -15%;
}
.mapa1 {
    position: absolute;
    width: 143px;
    left: 216px;
    top: 68px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa2 {
    position: absolute;
    width: 106px;
    left: 394px;
    top: 160px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa3 {
    position: absolute;
    width: 96px;
    left: 401px;
    top: 133px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa4 {
    position: absolute;
    width: 107px;
    left: 332px;
    top: 77px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa5 {
    position: absolute;
    width: 169px;
    left: 153px;
    top: 37px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa6 {
    position: absolute;
    width: 164px;
    left: 333px;
    top: 189px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa7 {
    position: absolute;
    width: 79px;
    left: 409px;
    top: 231px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa8 {
    position: absolute;
    width: 231px;
    left: 202px;
    top: 222px;
    transition-property: all;
    transition-duration: 0.3s;
}
.mapa9 {
    position: absolute;
    width: 51px;
    left: 407px;
    top: 242px;
    transition-property: all;
    transition-duration: 0.3s;
}

.titulo-datas {
    
color: #fff;
    
font-size: 31px;
    
text-transform: uppercase;
    
text-align: center;
    
margin-top: 90px;
}

.representante {
    float: left;
    width: 450px;
    position: relative;
}
.representante .estado {
    display: none;
}
.representante img {
 
}
#select-mapa {
    display: none;
    border: 1px solid #ccc;
    width: 100%;
}

.mapa1-links {
    position: absolute;
    width: 65px;
    height: 172px;
    left: 275px;
    top: 88px;
    z-index: 10;
    /* background-color: #000; */
}
.mapa1-links:hover ~ .mapa1{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa1-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/piaui.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}
.mapa2-links {
    position: absolute;
    width: 95px;
    height: 30px;
    left: 403px;
    top: 170px;
    z-index: 10;
    /* background: #333; */
}
.mapa2-links:hover ~ .mapa2{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa2-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/paraiba.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}
.mapa3-links {
    position: absolute;
    width: 73px;
    left: 412px;
    height: 31px;
    z-index: 10;
    top: 138px;
    /* background: #333; */
}
.mapa3-links:hover ~ .mapa3{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa3-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/rn.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}
.mapa4-links {
    position: absolute;
    width: 56px;
    height: 121px;
    left: 349px;
    top: 77px;
    /* background: #333; */
    z-index: 10;
}
.mapa4-links:hover ~ .mapa4{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa4-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/ceara.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}
.mapa5-links {
    position: absolute;
    width: 108px;
    height: 150px;
    /* background: #333; */
    left: 157px;
    top: 47px;
    z-index: 10;
}
.mapa5-links:hover ~ .mapa5{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa5-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/maranhao.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}
.mapa6-links {
    position: absolute;
    width: 146px;
    height: 30px;
    left: 343px;
    top: 202px;
    /* background: #333; */
    z-index: 10;
}
.mapa6-links:hover ~ .mapa6{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa6-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/pernambuco.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}
.mapa7-links {
    position: absolute;
    width: 56px;
    height: 20px;
    left: 417px;
    top: 241px;
    /* background: #333; */
    z-index: 10;
}
.mapa7-links:hover ~ .mapa7{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa7-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/alagoas.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}
.mapa8-links {
    position: absolute;
    width: 203px;
    height: 170px;
    left: 209px;
    /* background: #333; */
    top: 254px;
    z-index: 10;
}
.mapa8-links:hover ~ .mapa8{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa8-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/salvador.png);
    width: 382px;
    height: 124px;
    left: 70%;
    bottom: -17%;
}
.mapa9-links {
    position: absolute;
    width: 35px;
    height: 38px;
    left: 412px;
    top: 262px;
    /* background: #968686; */
    z-index: 10;
}
.mapa9-links:hover ~ .mapa9{
    webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
    z-index: 9;
}
.mapa9-links:hover ~ .record{
    z-index: 9;
    background-image: url(../imagens/elementos/sergipe.png);
    width: 262px;
    height: 124px;
    left: 82%;
    bottom: -17%;
}



/*==================================================Thumbnails==================================================*/
.thumbnails {
display: inline-block;
list-style: none;
list-style-type: none;
}
.thumbnails li {
float: left;
width: 213px;
height: 236px;
margin: 10px 16px;
text-align: center;
text-transform: uppercase;
transition: .3s;
}
.thumbnails li:hover img {
opacity: 0.9;
}
.thumbnails li:hover h2 {
opacity: 0.9;
}
.thumbnails img {
width: 100%;
height: 200px;
object-fit: cover;
transition: .3s;
}
.thumbnails h2 {
font-size: 10px;
background: #2172b3;
height: 22px;
padding: 8px 0px;
margin-top: 0px;
transition: .3s;
color:  #fff;
}
.thumbnails a {
text-decoration: none;
color: white;
}
.thumbnails a:hover {
text-decoration: none;
}
/*==================================================Sidebar==================================================*/
aside {
float: left;
width: 25%;
margin: 0 0 0 30px;
text-transform: uppercase;
}
aside h2 a {
display: block;
padding: 5px;
font-size: 15px;
background: #2172b3;
color: #fff;
text-decoration: none;
}
aside nav {
list-style: none;
list-style-type: none;
margin: 0 0 0 0;
padding: 0;
}
aside li {
margin: 5px 0 0 0;
}
aside li a {
font-size: 12px;
display: block;
padding: 5px;
color: #666;
transition: all .3s linear;
text-decoration: none;
border-left: 2px solid #cccccc;
}
aside nav li a:hover {
border-left: 2px solid #000;
}
aside h3 {
color: #fff;
background: #2172b3;
padding: 10px 0;
margin-bottom: 0;
text-align: center;
}
aside p {
background: #eee;
margin: 0;
text-align: center;
}
aside strong {
font-size: 16px;
line-height: 34px;
color: #666;
}
aside a {
text-decoration: none;
}

aside nav ul {
    max-height: 700px;
    overflow: scroll;
    height: auto;
}
/*==================================================Includes==================================================*/
/*  Saiba mais */
.more {
margin-bottom: 20px;
}
.more h2 strong {
font-size: 16px;
}
/*  Gallery  */
.gallery {
display: inline-block;
list-style-type: none;
list-style: none;
}
.gallery li {
float: left;
margin: 5px;
text-align: center;
transition: .3s;
}
.gallery li:hover {
opacity: 0.9;
transform: scale(1.05);
}
.gallery li img {
width: 120px;
height: 120px;
object-fit: cover;
border-radius: 5px;
border: 2px solid #ddd;
}
p.ampliar {
color: #F30;
font-size: 11px;
margin: 5px 0;
}
/*  Social midia  */
.compartilhe {
font-size: 0.75em;
margin: 0.5em 0;
display: block;
font-weight: bold;
}
.social-media {
display: inline-block;
padding: 0;
margin: 5px 0;
}
.social-media li {
float: left;
margin-right: 10px;
}
.bt-twitter {
text-indent: -5000px;
overflow: hidden;
display: block;
width: 55px;
height: 20px;
background: url(../imagens/icones/tweet.png) no-repeat 0 0;
}
.bt-twitter:hover {
background-position: 0px -20px;
}
/*  Páginas relacionadas  */
.related-posting-title {
font-size: 22px;
}
.related-posting {
list-style: none;
list-style-type: none;
margin: 0;
padding: 0;
}
.row {
clear: both;
display: block;
background: #E8E8E8;
border-left: 3px solid #ccc;
padding: 10px 20px;
transition: all .3s linear;
min-height: 85px;
margin: 0 0 2px 0;
overflow: hidden;
}
.row:hover {
border-left: 3px solid #666;
}
.row img {
display: block;
float: left;
width: 80px;
height: 80px;
border: 1px solid #CCC;
margin: 0 10px 0 0;
}
.row p {
font-size: 12px;
line-height: 15px;
margin-bottom: 0;
}
.row a {
color: #666;
text-decoration: none;
}
.row p a {
color: #69747b;
}
.row strong {
font-size: 12px;
}
/*  Tabs regiões  */
.hide {
position: absolute;
top: -9999px;
left: -9999px;
}
#servicosTabsDois .list-wrap {
background: #eee;
padding: 10px;
margin: 0 0 15px 0;
font-size: 10px;
}
#servicosTabsDois ul {
list-style: none;
display: inline-block;
}
#servicosTabsDois .list-wrap li {
width: 160px;
float: left;
color: #666;
}
#servicosTabsDois .nav {
overflow: hidden;
margin: 0;
padding: 0;
}
#servicosTabsDois .nav li {
float: left;
margin: 0 10px 0 0;
}
#servicosTabsDois .nav li.last {
margin-right: 0;
}
#servicosTabsDois .nav li a {
display: block;
text-decoration: none;
padding: 12px;
background: #ddd;
transition: all .3s linear;
color: #666;
font-size: 12px;
text-align: center;
border: 0;
}
#servicosTabsDois .nav li a:hover,
#servicosTabsDois .nav li a:focus {
background: #999;
color: #fff;
}
#servicosTabsDois ul li.nav-two a.current {
background-color: #eee !important;
color: #666;
}
/*  Copyright  */
.copyright {
font-size: 10px;
color: #666;
}
.copyright a {
font-size: 10px;
color: #666;
}
/*==================================================Footer==================================================*/
footer {
clear: both;
margin-top: 15px;
padding: 15px;
background: #333;
}
.contact-footer {
float: left;
color: #eee;
margin-right: 30px;
}
.contact-footer strong {
font-size: 18px;
/* letter-spacing: -1px; */
}
.contact-footer a {
text-decoration: none;
color: #fff;
}
footer address {
margin: 0 0 10px 0;
font-size: 12px;
font-style: normal;
line-height: 15px;
}
footer address span {
margin: 0 0 5px 0;
font-size: 14px;
font-weight: bold;
display: block;
}
footer .menu-footer {
text-align: right;
}
footer .menu-footer nav {
margin: 3px 0;
}
footer .menu-footer nav li {
display: inline;
padding: 0 10px 0 0;
}
footer .menu-footer nav li a {
color: #eee;
font-size: 13px;
text-decoration: none;
}
footer .menu-footer nav li a:hover {
color: #bbb;
}
footer .social {
margin: 15px 0 0 0;
float: right;
}
footer .social .social-icons:hover {
opacity: 1;
background: #FFF;
color: #2172b3;
}
footer .social .social-icons {
width: auto;
border-radius: 10px;
transition-property: all;
transition-duration: 0.3s;
padding: 10px;
display: block;
margin: 0 0 0 5px;
float: right;
font-size: 18px;
background: #2172b3;
color: #FFF;
min-width: 25px;
min-height: 20px;
text-align: center;
/* box-shadow: 2px 2px 2px #ccc; */
}
.copyright-footer {
text-align: left;
font-size: 10px;
color: #eee;
padding: 20px 0;
background: #333;
}
.copyright-footer .selos {
float: right;
}
.copyright-footer .selos strong {
background: #fff;
color: #363b36;
padding: 0px 5px;
}
.copyright-footer .selos a {
margin: 0 0 0 5px;
color: #B7B7B7;
text-decoration: none;
opacity: 0.8;
transition-property: all;
transition-duration: 0.3s;
}
.copyright-footer .selos a:hover {
opacity: 1;
}
/*==================================================Página Contato (Formulario)==================================================*/
.contact {
display: block;
padding: 0 20px;
}
.form {
float: left;
width: 50%;
}
.form label {
width: 185px;
font-weight: bold;
padding-right: 5px;
font-size: 13px;
display: table-cell;
vertical-align: middle;
}
.form label span {
font-size: 9px;
color: #C00;
}
.form input,
.form textarea,
.form select {
width: 80%;
margin: 10px 0 4px 0;
padding: 8px 5px;
border: solid 1px #CFCFCF;
font-size: 16px;
box-sizing: border-box;
}
input#ddd {
width: 17%;
}
input#telefone {
width: 59%;
}
@media screen and (max-width: 420px) {
.form input,
.form textarea,
.form select {
width: 100%;
}
input#ddd {
width: 30%;
}
input#telefone {
width: 67%;
}
.form textarea {
width: 100% !important;
}
}
input.ir {
width: 40%;
max-width: 150px;
}
.form textarea {
width: 80%;
font-family: fonte;
margin-bottom: 18px;
}
.form input:focus,
.form textarea:focus,
.form select:focus {
background: #eee;
}
.form .ir {
border: solid 1px #666;
background: #ffffff;
padding: 10px 18px;
color: #666;
cursor: pointer;
border-radius: 5px;
width: 40%;
max-width: 150px;
transition: all 300ms ease-in-out;
}
.form .ir:hover {
background: #2ecc71;
color: #ffffff;
border-color: #2ecc71;
}
.bt-submit {
display: block;
margin: 5px 0 0 0;
}
.form span.obrigatorio {
font-size: 0.8em;
color: #C00;
margin-top: 10px;
}
.form label.error {
display: block;
color: red;
margin: 0 .5em 0 0;
vertical-align: top;
font-size: 10px;
}
.help {
font-size: 11px;
color: #666;
}
.alert {
color: #FF0000;
}
.contact-form {
float: right;
color: #989898;
font-size: 11px;
width: 50%;
}
.contact-form strong {
color: #666;
}
/*==================================================Sitemap==================================================*/
.sitemap {
margin-left: 30px;
list-style: none;
list-style-type: none;
}
.sitemap li {
font-size: 15px;
margin: 10px 0;
}
.sitemap li a {
color: #777;
font-size: 20px;
line-height: 25px;
text-decoration: none;
}
.sitemap li a:hover {
color: #222 !important;
}
.sitemap li ul {
margin-left: 35px;
list-style: none;
list-style-type: none;
}
.sitemap li ul li {
margin: 5px 0;
padding: 0;
}
.sitemap li ul li a {
font-size: 12px;
color: #777;
}
.sitemap li ul li ul li {
margin: 5px 0;
}
.sitemap li ul li ul li a {
font-size: 13px;
color: #777;
}
.sitemap li a:hover {
color: #999;
}
.sitemap .fa {
display: none;
}
.sitemap br {
display: none;
}
/*========================================Page not found========================================*/
.msg-404 {
position: relative;
font-size: 22px;
line-height: 34px;
color: #A7A9AC;
margin-bottom: 30px;
}
.menu-404 {
background: #F8F8F8;
width: 95%;
padding: 15px;
margin-bottom: 20px;
float: left;
}
.menu-404 a {
display: block;
margin: 0 auto;
}
/* ==========================================================================Helper classes========================================================================== */
/** Image replacement*/
.ir {
background-color: transparent;
border: 0;
overflow: hidden;
/* IE 6/7 fallback */
/**text-indent: -9999px;*/
}
.ir:before {
content: "";
display: block;
width: 0;
height: 150%;
}
/** Hide from both screenreaders and browsers: h5bp.com/u*/
.hidden {
display: none !important;
visibility: hidden;
}
/** Hide only visually, but have it available for screenreaders: h5bp.com/v*/
.visuallyhidden {
border: 0;
clip: rect(0 0 0 0);
height: 1px;
margin: -1px;
overflow: hidden;
padding: 0;
position: absolute;
width: 1px;
}
/** Extends the .visuallyhidden class to allow the element to be focusable* when navigated to via the keyboard: h5bp.com/p*/
.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
clip: auto;
height: auto;
margin: 0;
overflow: visible;
position: static;
width: auto;
}
/** Hide visually and from screenreaders, but maintain layout*/
.invisible {
visibility: hidden;
}
/** Clearfix: contain floats** For modern browsers* 1. The space content is one way to avoid an Opera bug when the*    `contenteditable` attribute is included anywhere else in the document.*    Otherwise it causes space to appear at the top and bottom of elements*    that receive the `clearfix` class.* 2. The use of `table` rather than `block` is only necessary if using*    `:before` to contain the top-margins of child elements.*/
.clearfix:before,
.clearfix:after {
content: " ";
/* 1 */
display: table;
/* 2 */
}
.clearfix:after {
clear: both;
}
/** For IE 6/7 only* Include this rule to trigger hasLayout and contain floats.*/
.clearfix {
/**zoom: 1;*/
}
.slicknav_menu {
display: none;
}
.slicknav_nav .fa {
display: none;
}
.slicknav_nav br {
display: none;
}
/*==================================================Layout responsivo com Grid==================================================*/
.grid {
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
}
.grid:after {
content: "";
clear: both;
display: block;
}
[class*="col-"] {
float: left;
padding: 15px;
box-sizing: border-box;
}
/* [class*="col-"] iframe {display: block;margin: 0 auto;width: 100%;max-width: 300px;height: 200px;border: 0;} */
.col-1 {
width: 8.33%;
}
.col-2 {
width: 16.66%;
}
.col-3 {
width: 25%;
}
.col-4 {
width: 33.33%;
}
.col-5 {
width: 41.66%;
}
.col-6 {
width: 50%;
}
.col-7 {
width: 58.33%;
}
.col-8 {
width: 66.66%;
}
.col-9 {
width: 75%;
}
.col-10 {
width: 83.33%;
}
.col-11 {
width: 91.66%;
}
.col-12 {
width: 100%;
}
.txtcenter {
text-align: center;
}
.txtleft {
text-align: left;
}
.txtright {
text-align: right;
}
.pd {
padding: 0;
}
.fright {
float: right;
}
.fleft {
float: left;
}
.fwidth {
width: 100%;
}
.center-block {
display: block;
margin: 0 auto;
}
/*========================================Fancy Box - Lightbox========================================*/
#title-empresa h2 {
font-size: 14px;
background: #E9E9E9;
padding: 4px 10px;
line-height: 15px;
color: #717171;
text-transform: uppercase;
text-decoration: none;
margin: 0 0 10px 0;
font-weight: 500;
border-radius: 8px;
}
#title-keyword h3 {
font-size: 12px;
padding: 0 10px;
line-height: 15px;
color: #717171;
text-decoration: none;
margin: 0 0 10px 0;
border-radius: 8px;
}
/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
.fancybox-image,
.fancybox-inner,
.fancybox-nav,
.fancybox-nav span,
.fancybox-outer,
.fancybox-skin,
.fancybox-tmp,
.fancybox-wrap,
.fancybox-wrap iframe,
.fancybox-wrap object {
padding: 0;
margin: 0;
border: 0;
outline: 0;
vertical-align: top
}
.fancybox-wrap {
position: absolute;
top: 0;
left: 0;
z-index: 8020
}
.fancybox-skin {
position: relative;
background: #f9f9f9;
color: #444;
text-shadow: none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px
}
.fancybox-opened {
z-index: 8030
}
.fancybox-opened .fancybox-skin {
-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, .5);
-moz-box-shadow: 0 10px 25px rgba(0, 0, 0, .5);
box-shadow: 0 10px 25px rgba(0, 0, 0, .5)
}
.fancybox-inner,
.fancybox-outer {
position: relative
}
.fancybox-inner {
overflow: hidden
}
.fancybox-type-iframe .fancybox-inner {
-webkit-overflow-scrolling: touch
}
.fancybox-error {
color: #444;
font: 14px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
margin: 0;
padding: 15px;
white-space: nowrap
}
.fancybox-iframe,
.fancybox-image {
display: block;
width: 100%;
height: 100%
}
.fancybox-image {
max-width: 100%;
max-height: 100%
}
#fancybox-loading,
.fancybox-close,
.fancybox-next span,
.fancybox-prev span {
background-image: url(images-fancy/fancybox_sprite.png)
}
#fancybox-loading {
position: fixed;
top: 50%;
left: 50%;
margin-top: -22px;
margin-left: -22px;
background-position: 0 -108px;
opacity: .8;
cursor: pointer;
z-index: 8060
}
#fancybox-loading div {
width: 44px;
height: 44px;
background: url(images-fancy/fancybox_loading.gif) center center no-repeat
}
.fancybox-close {
position: absolute;
top: -18px;
right: -18px;
width: 36px;
height: 36px;
cursor: pointer;
z-index: 8040
}
.fancybox-nav {
position: absolute;
top: 0;
width: 40%;
height: 100%;
cursor: pointer;
text-decoration: none;
background: url(images-fancy/blank.gif);
-webkit-tap-highlight-color: transparent;
z-index: 8040
}
.fancybox-prev {
left: 0
}
.fancybox-next {
right: 0
}
.fancybox-nav span {
position: absolute;
top: 50%;
width: 36px;
height: 34px;
margin-top: -18px;
cursor: pointer;
z-index: 8040;
visibility: hidden
}
.fancybox-prev span {
left: 10px;
background-position: 0 -36px
}
.fancybox-next span {
right: 10px;
background-position: 0 -72px
}
.fancybox-nav:hover span {
visibility: visible
}
.fancybox-tmp {
position: absolute;
top: -99999px;
left: -99999px;
visibility: hidden;
max-width: 99999px;
max-height: 99999px;
overflow: visible!important
}
.fancybox-lock {
overflow: hidden!important;
width: auto
}
.fancybox-lock body {
overflow: hidden!important
}
.fancybox-lock-test {
overflow-y: hidden!important
}
.fancybox-overlay {
position: absolute;
top: 0;
left: 0;
overflow: hidden;
display: none;
z-index: 8010;
background: url(images-fancy/fancybox_overlay.png)
}
.fancybox-overlay-fixed {
position: fixed;
bottom: 0;
right: 0
}
.fancybox-lock .fancybox-overlay {
overflow: auto;
overflow-y: scroll
}
.fancybox-title {
visibility: hidden;
font: 400 13px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
position: relative;
text-shadow: none;
z-index: 8050
}
.fancybox-opened .fancybox-title {
visibility: visible
}
.fancybox-title-float-wrap {
position: absolute;
bottom: 0;
right: 50%;
margin-bottom: -35px;
z-index: 8050;
text-align: center
}
.fancybox-title-float-wrap .child {
display: inline-block;
margin-right: -100%;
padding: 2px 20px;
background: 0 0;
background: rgba(0, 0, 0, .8);
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
text-shadow: 0 1px 2px #222;
color: #FFF;
font-weight: 700;
line-height: 24px;
white-space: nowrap
}
.fancybox-title-outside-wrap {
position: relative;
margin-top: 10px;
color: #fff
}
.fancybox-title-inside-wrap {
padding-top: 10px
}
.fancybox-title-over-wrap {
position: absolute;
bottom: 0;
left: 0;
color: #fff;
padding: 10px;
background: #000;
background: rgba(0, 0, 0, .8)
}
.active-menu-topo {
color: #32326b;
font-weight: bold;
}
.active-menu-aside {
color: rgb(33, 114, 179);
background-color: rgba(33, 114, 179, 0.1);
border-left: 2px solid #2172b3;
font-weight: bold;
}
/*==========================================================================Tabela==========================================================================*/
.tg {
border-collapse: collapse;
border-spacing: 0;
table-layout: fixed;
width: 100%;
}
.tg td {
font-size: 12px;
text-align: center;
line-height: 30px;
border-style: solid;
border-width: 1px;
overflow: hidden;
word-break: normal;
color: #000;
}
.tg th {
font-size: 14px;
font-weight: normal;
padding: 10px 5px;
border-style: solid;
border-width: 1px;
overflow: hidden;
word-break: normal;
}
.tg .tg-kf0f {
background-color: #3166ff;
color: #000000
}
.tabela {
background: none repeat scroll 0% 0% rgb(33, 114, 179);
text-align: center;
line-height: 30px;
}
.tabela p {
text-align: center;
line-height: normal;
}
.tabela th{
border: 1px solid #000;
color: #ffffff;
}
.tabela-conteudo {
background: none repeat scroll 0% 0% rgb(229, 236, 244);
padding: 0cm;
}
.busca{
border: 1px solid;
width:  100%;
box-sizing:  border-box;
padding: 10px 15px;
border: 2px solid #ddd;
color: #666;
}
.busca:focus{
border: 2px solid #2172b3;
}
.barra-busca form{
position: relative;
}
.barra-busca{
background-color: #e4e4e4;
border-top: 1px solid #ccc;
padding: 10px 0;
box-sizing:  border-box;
}
.barra-busca .btn{
max-width: 100%;
position:  absolute;
margin: 0;
top: 3px;
right: 3px;
}
.barra-busca input[type="search"]{
width: 100%;
box-sizing:  border-box;
}
.barra-busca2 form{
position: relative;
}
.barra-busca2{
padding: 10px 0;
box-sizing:  border-box;
}
.barra-busca2 .btn{
max-width: 100%;
position:  absolute;
margin: 0;
top: 1px;
right: 1px;
font-size: 14px;
}
.barra-busca2 input[type="search"]{
width: 100%;
box-sizing:  border-box;
border-radius: 5px;
}
.topofixo .barra-busca2{
padding: 0;
}
/* ==========================================================================BOTAO TOPO========================================================================== */
#scrollUp {
bottom: 0;
right: 30px;
width: 50px;
height: 45px;
margin-bottom: -10px;
padding: 10px 5px;
font: 14px/20px sans-serif;
text-align: center;
text-decoration: none;
text-shadow: 0 1px 0 #fff;
color: #FFF;
border-radius: 5px 5px 0 0;
background-color: #2172b3;
-webkit-transition: margin-bottom 150ms linear;
-moz-transition: margin-bottom 150ms linear;
-o-transition: margin-bottom 150ms linear;
transition: margin-bottom 150ms linear;
}
#scrollUp:hover {
margin-bottom: 0;
color: #fff
}
#scrollUp-active {
display: none
}
/*========================================CSS Mobile========================================*/
/* TABLET */
@media only screen and (min-width:767px) and (max-width: 959px) {
.wrapper {
box-sizing: border-box;
padding: 0 10px;
}
header .right a {
margin: 0px 10px;
}
header .right {
width: 100%;
text-align: center;
}
header .logo {
text-align: center;
width: 100%;
}
header .logo img {
margin-top: 10px;
}
header nav a {
padding: 10px 0px;
width: 142px;
}
article img {
max-width: 100%;
}
.gallery li {
margin: 4px;
}
.js .slicknav_menu {/* display: block; *//* position: fixed; */z-index: 11;/* width: 100%; */}
.js #menu {
display: none;
}
.js #menu2 {
display: none;
}
.contact-footer a {
color: white;
text-decoration: none;
}
#servicosTabsDois .nav li a {
padding: 10px;
}
.col-m-1 {
width: 8.33% !important;
}
.col-m-2 {
width: 16.66% !important;
}
.col-m-3 {
width: 25% !important;
}
.col-m-4 {
width: 33.33% !important;
}
.col-m-5 {
width: 41.66% !important;
}
.col-m-6 {
width: 50% !important;
}
.col-m-7 {
width: 58.33% !important;
}
.col-m-8 {
width: 66.66% !important;
}
.col-m-9 {
width: 75% !important;
}
.col-m-10 {
width: 83.33% !important;
}
.col-m-11 {
width: 91.66% !important;
}
.col-m-12 {
width: 100% !important;
}
.hide-tablet {
display: none;
}
.topofixo {
position: relative;
}
#header-block {
display: none !important;
}
}
/* Mobile */
@media only screen and (max-width: 765px) {
.btn{
    display: inline-block;
}
.topofixo {
position: relative;
}
.owl-pagination {
display: none;
}
.title-breadcrumb h1 {
box-sizing: border-box;
padding: 5px;
}
.title-breadcrumb #breadcrumb {
float: none;
}
header .topo .social {
display: none;
}
.wrapper {
box-sizing: border-box;
padding: 0 10px;
}
header {
/* padding-top: 54px; */
}
header .logo a {
margin: 0 auto;
}
header .logo {
width: 100%;
display: block;
text-align: center;
}
header .logo img {
margin-top: 20px;
max-width: 100%;
}
header .right {
width: 100%;
text-align: center;
}
.topo .fright {
float: none;
}
.topo {
text-align: center;
}
article {
width: 100%;
}
aside {
width: 100%;
margin: 0;
}
.gallery img {
width: 100%;
}
.gallery li {
width: 45%
}
.thumbnails li {
width: 100%;
margin: 10px 0;
}
.thumbnails {
width: 100%;
box-sizing: border-box;
padding: 10px;
}
.thumbnails img {
width: 100%;
}
footer .wrapper {
text-align: center !important
}
.copyright-footer {
text-align: center
}
footer .menu-footer nav li {
display: block;
background: rgba(0, 0, 0, 0.2);
margin: 10px 0px;
text-align: center;
padding: 10px
}
.contact-footer {
float: none
}
.copyright-footer .wrapper {
text-align: center
}
footer .social {
float: none;
width: 100%
}
.copyright-footer .selos {
float: none;
margin: 10px 0px
}
.copyright-footer .selos a {
float: none;
display: block;
width: 100%;
background: rgba(0, 0, 0, 0.2);
padding: 10px 0px;
margin: 10px 0px
}
footer .social .social-icons {
float: none;
padding: 10px 0px;
margin: 10px 0px;
width: 100%;
text-align: center
}
.contact-footer a {
color: white;
text-decoration: none;
}
.contact-footer {
margin-right: 0;
}
.js #menu {
display: none;
}
.js #menu2 {
display: none;
}
.js .slicknav_menu {
display: block;
}
#servicosTabsDois .nav li a {
padding: 8px;
font-size: 13px;
width: 100%;
}
.hide-mobile {
display: none;
}
.contact {
padding: 0;
}
.form {
width: 100%;
}
.contact-form {
float: none;
width: 100%;
}
#header-block {
display: none !important;
}
}
/*=======================================VERSAO MOBILE PARA CELULARES PEQUENOS======================================*/
@media only screen and (max-width:480px) {
[class*="col-"] {
width: 100%;
}
#slide-show {
height: 880px !important;
}
.clique {
    width: 320px;
    box-sizing: border-box;
    padding: 25px;
    margin-top: 100px;
}
.representante {
    float: none;
    width: 325px;
    position: relative;
}
.record {
    position: absolute;
    width: 142px;
    height: 124px;
    left: 87%;
    bottom: -21%;
    background-image: url(../imagens/elementos/record.png);
    background-repeat: no-repeat;
}
.mapa {
    width: 100%;
    position: relative;
    /* background-color: #333; */
    height: 500px;
    left: -52%;
    z-index: 1;
}
.casas {
    width: 200px;
    display: block;
    float: none;
    margin: 100px auto 0px auto;
}
body {
    font-size: 1rem;
    font-family: 'Open Sans', sans-serif;
    color: #0055b3;
    background: #0057b5;
    background-image: url(../imagens/bg.png);
    background-size: cover;
    height: 100vh;
    background-repeat: no-repeat;
    background-position-x: center;
}
.bandeirola1 {
    width: 530px;
    left: -70%;
    display: none;
    top: -3%;
    position: absolute;
}
.bandeirola2 {
    width: 490px;
    right: -75%;
    top: -116%;
    display: none;
    position: absolute;
}
.logo-circuito {
    width: 100px;
    left: 40%;
    top: 90%;
    position: absolute;
}
.bandeira {
    width: 130px;
    left: 36%;
    top: -63%;
    position: absolute;
}
.mapa8-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/salvador.png);
    width: 382px;
    height: 124px;
    left: 39%;
    bottom: -21%;
}
.mapa5-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/maranhao.png);
    width: 262px;
    height: 124px;
    left: 65%;
    bottom: -21%;
}
.mapa1-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/piaui.png);
    width: 262px;
    height: 124px;
    left: 64%;
    bottom: -21%;
}
.mapa4-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/ceara.png);
    width: 262px;
    height: 124px;
    left: 65%;
    bottom: -21%;
}
.mapa3-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/rn.png);
    width: 262px;
    height: 124px;
    left: 62%;
    bottom: -21%;
}
.mapa2-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/paraiba.png);
    width: 262px;
    height: 124px;
    left: 65%;
    bottom: -21%;
}
.mapa6-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/pernambuco.png);
    width: 262px;
    height: 124px;
    left: 63%;
    bottom: -21%;
}
.mapa7-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/alagoas.png);
    width: 262px;
    height: 124px;
    left: 65%;
    bottom: -21%;
}
.mapa9-links:hover ~ .record {
    z-index: 9;
    background-image: url(../imagens/elementos/sergipe.png);
    width: 262px;
    height: 124px;
    left: 64%;
    bottom: -21%;
}
}
/*Mobile Menu Core Style*/
.slicknav_btn {
position: relative;
display: block;
vertical-align: middle;
float: right;
padding: 0.438em 0.625em 0.438em 0.625em;
line-height: 1.125em;
cursor: pointer;
}
.slicknav_menu .slicknav_menutxt {
display: block;
line-height: 1.188em;
float: left;
}
.slicknav_menu .slicknav_icon {
float: left;
margin: 0.188em 0 0 0.438em;
}
.slicknav_menu .slicknav_no-text {
margin: 0
}
.slicknav_menu .slicknav_icon-bar {
display: block;
width: 1.125em;
height: 0.125em;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.slicknav_btn .slicknav_icon-bar+.slicknav_icon-bar {
margin-top: 0.188em
}
.slicknav_nav {
clear: both
}
.slicknav_nav ul,
.slicknav_nav li {
display: block
}
.slicknav_nav .slicknav_arrow {
font-size: 0.8em;
margin: 0 0 0 0.4em;
}
.slicknav_nav .slicknav_item {
cursor: pointer;
}
.slicknav_nav .slicknav_row {
display: block;
}
.slicknav_nav a {
display: block
}
.slicknav_nav .slicknav_item a,
.slicknav_nav .slicknav_parent-link a {
display: inline
}
.slicknav_menu:before,
.slicknav_menu:after {
content: " ";
display: table;
}
.slicknav_menu:after {
clear: both
}
/*User Default StyleChange the following styles to modify the appearance of the menu.*/
.slicknav_menu {
font-size: 16px;
}
/* Button */
.slicknav_btn {
margin: 5px 5px 6px;
text-decoration: none;
text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
background-color: #222222;
}
/* Button Text */
.slicknav_menu .slicknav_menutxt {
color: #FFF;
font-weight: bold;
text-shadow: 0 1px 3px #000;
}
/* Button Lines */
.slicknav_menu .slicknav_icon-bar {
background-color: #f5f5f5;
}
.slicknav_menu {
background: #4c4c4c;
padding: 5px;
}
.slicknav_nav {
color: #fff;
margin: 0;
padding: 0;
font-size: 0.875em;
}
.slicknav_nav,
.slicknav_nav ul {
list-style: none;
overflow: hidden;
}
.slicknav_nav ul {
padding: 0;
margin: 0 0 0 20px;
}
.slicknav_nav .slicknav_row {
padding: 5px 10px;
margin: 2px 5px;
}
.slicknav_nav a {
padding: 5px 10px;
margin: 2px 5px;
text-decoration: none;
color: #fff;
}
.slicknav_nav .slicknav_item a,
.slicknav_nav .slicknav_parent-link a {
padding: 0;
margin: 0;
}
.slicknav_nav .slicknav_row:hover {
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
background: #ccc;
color: #fff;
}
.slicknav_nav a:hover {
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
background: #ccc;
color: #222;
}
.slicknav_nav .slicknav_txtnode {
margin-left: 15px;
}