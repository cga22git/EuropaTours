<?php
header('content-type:text/css');

$mipais = utf8_decode($_GET["pais"]);

$paistxt = "";
if( $mipais!="otro" ){ $paistxt="-".$mipais; }
?>
@font-face{
	font-family:"TwCenMT";
	font-style:normal;
	font-weight:bold;
	src:url("TCCEB.TTF") format("truetype");
}

@font-face{
	font-family:"Josefin";
	font-style:normal;
	src:url("JosefinSans-Regular.ttf") format("truetype");
}
.clearLeft { clear:left; }
.clearRight { clear:right; }
.clearAll { clear:both; }

.ui-widget-content { background:#BBB; }

body { margin:0; padding:0; text-align:center; }

#cabe { margin:0; padding:0; position:relative; display:block; width:100%; height:auto; }
.cabe2{height:130px !important;}
#cabe #cabeGalFondo { margin:0; padding:0; position:absolute; top:0; left:0; display:block; width:100%; height:auto; text-align:center; border-bottom:solid 1px #000000; background: rgba(255, 255, 255, 0.48); z-index:50; }
#cabe #cabeGalFondo header { margin:0 auto; padding:0; display:block; width:1300px; height:auto; color:#FFF; text-align:center; }

#cabe #cabeGalFondo header #btnLisTel { margin:0 0 0 0; padding:0 0 0 0; display:none; width:auto; border:solid 1px #AAA; text-decoration:none; color:#000; font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:bold; }
#cabe #cabeGalFondo header #btnLisTel .btnTelTxt { margin:0 0 0 0; padding:0 0 0 0; display:table-cell; vertical-align:middle; }
#cabe #cabeGalFondo header #btnLisTel .btnTelImg { margin:0 0 0 0; padding:0 0 0 0; display:table-cell; }
#cabe #cabeGalFondo header #btnLisTel .btnTelImg img { border:0 !important; }

#cabe #cabeGalFondo header #fonoLis { margin:0 0 0 0; padding:0; display:none; width:100%; list-style:none; text-align:center; border:0; vertical-align:top; }
#cabe #cabeGalFondo header #fonoLis li { margin:0; padding:6px 0; display:table-cell; width:auto; border:solid 1px #95957B; text-align:center; color:#333; background:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:bold; }
#cabe #cabeGalFondo header #fonoLis li a { color:#06C; }
#cabe #cabeGalFondo header #fonoLis li .fonoTit { margin:0; padding:0; display:block; }
#cabe #cabeGalFondo header #fonoLis li .fonoTit img { width:20px; height:10px; border:0; }
#cabe #cabeGalFondo header #fonoLis #lisWApp { display:none; }

#cabe #cabeGalFondo header #logo { margin:12px 0 0 18px; padding:0; float:left; display:block; }
#cabe #cabeGalFondo header #logo img { margin:0; display:block; border:0 !important; }
#cabe #cabeGalFondo header .menu-resp{
	display: none;
}

#cabe #cabeGalFondo header #menuBtn { margin:0; padding:0; float:right; display:none; }
#cabe #cabeGalFondo header #menuBtn img { margin:0; display:block; border:0 !important; }

#cabe #cabeGalFondo header #telefonos { margin:0; padding:30px 20px 0 0; float:right; display:none; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
#cabe #cabeGalFondo header #telefonos #datoWhatsapp { display:block; }
#cabe #cabeGalFondo header #telefonos #datoWhatsapp img { margin:0; display:inline-block; vertical-align:top; }
#cabe #cabeGalFondo header #telefonos #datoWhatsapp span { margin:0; padding:6px 0; display:inline-block; border:0; color:#402000; vertical-align:top; }

#cabe #cabeGalFondo header #menuAdmin { margin:0 0 0 0; padding:0; display:block; width:65%; float:right; text-align:right; border:0; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu { margin:0 0 0 auto; padding:0; list-style:none; display:table; height:112px; border:0; vertical-align:top; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li { display:table-cell; width:auto; border:0; vertical-align:top; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp { margin:0 0 0 0; padding:45px 30px 0 15px; display:block; height:100%; border:0; text-align:center; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:18px; text-decoration:none; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu .opcion-resp{
	display:none;
}
#cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp:hover { text-decoration:underline; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li .opcAlto {  padding:25px 30px 0 15px; border:0; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li .opcAlto:hover { text-decoration:none; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminB { display:none; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminC { display:block; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminT { display:block; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminT #datoWhatsapp { display:block; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminT #datoWhatsapp img { margin:0; display:inline-block; vertical-align:top; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminT #datoWhatsapp span { margin:0; padding:6px 0; display:inline-block; border:0; color:#402000; vertical-align:top; }

#cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp span { display:block; }
#cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp img { display:none; }

#cabe #cabeGal { margin:0; padding:0; position:relative; display:block; width:100%; height:auto; text-align:center; border-bottom:solid 1px #000000; }
#cabe #cabeGal .cabeGalImg { margin:0 auto; position:absolute; top:0; left:0; display:block; width:100%; height:auto; background-position:center center; background-size:cover; background-repeat:no-repeat; }
#cabe #cabeGal .cabeGalImg img { margin:0; display:block; width:100%; height:auto; border:0 !important; }
#cabe #cabeGal #galImg1 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-1.jpg); -webkit-animation:ImgGal1 40s infinite; -moz-animation:ImgGal1 40s infinite; -ms-animation:ImgGal1 40s infinite; -o-animation:ImgGal1 40s infinite;}
#cabe #cabeGal #galImg2 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-2.jpg); -webkit-animation:ImgGal2 40s infinite; -moz-animation:ImgGal2 40s infinite; -ms-animation:ImgGal2 40s infinite; -o-animation:ImgGal2 40s infinite; }
#cabe #cabeGal #galImg3 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-3.jpg); -webkit-animation:ImgGal3 40s infinite; -moz-animation:ImgGal3 40s infinite; -ms-animation:ImgGal3 40s infinite; -o-animation:ImgGal3 40s infinite; }
#cabe #cabeGal #galImg4 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-4.jpg); -webkit-animation:ImgGal4 40s infinite; -moz-animation:ImgGal4 40s infinite; -ms-animation:ImgGal4 40s infinite; -o-animation:ImgGal4 40s infinite; }
#cabe #cabeGal #galImg5 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-5.jpg); -webkit-animation:ImgGal5 40s infinite; -moz-animation:ImgGal5 40s infinite; -ms-animation:ImgGal5 40s infinite; -o-animation:ImgGal5 40s infinite; }
#cabe #cabeGal #galImg6 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-6.jpg); -webkit-animation:ImgGal6 40s infinite; -moz-animation:ImgGal6 40s infinite; -ms-animation:ImgGal6 40s infinite; -o-animation:ImgGal6 40s infinite; }

#imgRelleno { margin:0 auto; display:block; width:100%; height:auto; border:0; }

#total { margin:0 auto; padding:0px 0px; display:block; max-width:1200px;}
.total { margin:0 auto; padding:0px 0px; display:block; max-width:1200px;}

#logoASTA { width:auto; height:auto; }
.contenidoTours>h3{
    background-color: #ffc27c;
    font-size:17px;
    padding:1%;   
font-family: Arial, Helvetica, sans-serif;
}

#secHome { margin:0; padding:0; display:block; border:0; }
#secHome #menuSecBtn { margin:0 0 0 0; padding:10px 0; display:none; width:auto; height:auto; text-align:center; border:solid 1px #006600; }
#secHome #menuSecBtn span { margin:0 0; padding:0 50px; display:inline-block; width:auto; height:58px; border:solid 1px #003399; }
#secHome #menuSecBtn img { margin:0 0; display:inline-block; width:auto; height:auto; }
#secHome #menuSec { margin:0 auto; padding:0; display:block; width:auto; list-style:none; }
#secHome #menuSec li { margin:0; padding:0; display:inline-block; }
#secHome #menuSec .opc { margin:0; padding:0; position:relative; display:block; width:234px; height:96px; border:0; text-align:center; text-decoration:none; }
#secHome #menuSec .opc .opcImg { margin:0; padding:0; position:absolute; bottom:0; left:0; display:block; width:234px; height:96px; border:0; opacity:0; transition:bottom 0.5s, opacity 0.5s; }
#secHome #menuSec .opc .opcTxt { margin:0 auto; padding:2px 0; position:absolute; bottom:0; left:0; display:block; width:100%; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#402000; background-color:#fff; transition:color,background-color 1s; }
#secHome #menuSec .opc .azul { background:#C7E9F2; }
#secHome #menuSec .opc .amar { background:#F9EFA7; }
#secHome #menuSec .opc:hover .opcImg { bottom:22px; opacity:1; }
#secHome #menuSec .opc:hover .opcTxt { background-color:#402000; color:#FFF; }

#secHome #menuSec .opc #img1 { background:url(../images/menu-opc1-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img2 { background:url(../images/menu-opc2-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img3 { background:url(../images/menu-opc3-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img4 { background:url(../images/menu-opc4-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img5 { background:url(../images/menu-opc5-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img6 { background:url(../images/menu-opc6-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img7 { background:url(../images/menu-opc7-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img8 { background:url(../images/menu-opc8-img.jpg) no-repeat center right; }
#secHome #menuSec .opc #img9 { background:url(../images/menu-opc9-img.jpg) no-repeat center right; }

#secHome #menuSec .opcActivo { margin:0 0 0 0; padding:0 0 0 0; position:relative; float:left; display:block; width:214px; height:86px; border:solid 1px #7A795F; text-align:center; text-decoration:none; }
#secHome #menuSec .opcActivo .opcImg {  margin:0; padding:0; position:absolute; bottom:22px; left:0; display:block; width:215px; height:96px; border:0; opacity:1; }
#secHome #menuSec .opcActivo .opcTxt { margin:0 auto; padding:2px 0; position:absolute; bottom:0; left:0; display:block; width:100%; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FFF; background-color:#222; }

#secHome #menuSec #op1 { background:url(../images/menu-opc1-img.jpg) no-repeat center left; } /* aqui deberia ir la imagen en blanco y negro para el cambio. */
#secHome #menuSec #op2 { background:url(../images/menu-opc2-img.jpg) no-repeat center left; }
#secHome #menuSec #op3 { background:url(../images/menu-opc3-img.jpg) no-repeat center left; }
#secHome #menuSec #op4 { background:url(../images/menu-opc4-img.jpg) no-repeat center left; }
#secHome #menuSec #op5 { background:url(../images/menu-opc5-img.jpg) no-repeat center left; }
#secHome #menuSec #op6 { background:url(../images/menu-opc6-img.jpg) no-repeat center left; }
#secHome #menuSec #op7 { background:url(../images/menu-opc7-img.jpg) no-repeat center left; }
#secHome #menuSec #op8 { background:url(../images/menu-opc8-img.jpg) no-repeat center left; }
#secHome #menuSec #op9 { background:url(../images/menu-opc9-img.jpg) no-repeat center left; }
/* Opcion solo para el Producto */
#secHome #menuSecBtn.soloProd { margin:0 0 0 0; padding:10px 0; position:static; display:block; width:100%; height:auto; text-align:center; border:0; background:#FFF; z-index:auto; }
#secHome #menuSecBtn.soloProd span { margin:0 0; padding:20px 50px 0 50px; display:inline-block; width:auto; height:38px; color:#333; border:solid 1px #CCCCCC; vertical-align:middle; background:#FFF; font-family:Arial, Helvetica, sans-serif; }
#secHome #menuSecBtn.soloProd img { margin:0 0; display:inline-block; width:auto; height:auto; border:0 !important; vertical-align:middle; }
#secHome #menuSec.soloProd { margin:0 auto; padding:0; display:block; width:100%; list-style:none; }
#secHome #menuSec.noActivo { display:none; }
/* Fin Opcion solo para el Producto */

#secHomeDatos { margin:0 0 30px 0; padding:0 0; display:block; width:100%; height:auto; vertical-align:top; }
#secHomeDatos h1 { margin:20px 0 20px 0; padding:0; display:block; width:100%; height:auto; color:#FF7A22; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:30px; }
#secHomeDatos h1 span { display:block; font-size:18px; }

#secHomeDatos #homeCuerpo { margin:0 auto 30px auto; display:table; width:100%; border-spacing: 25px 0;}
#secHomeDatos #homeCuerpo #descrip { 
	margin: 0 0 20px 0;
    padding: 20px;
    display: table-cell;
    width: 65%;
    height: auto;
    font-family: Arial, Helvetica, sans-serif;
    background: #f1f5ef;
    border: 1px solid #cbcac8;
    position:relative;
 }
#secHomeDatos #homeCuerpo #descrip h2{
	font-size: 30px;
    margin: 0 0 15px;
    font-family: 'Josefin', sans-serif;
    background: #ff6600;
    padding: 6px 0;
    color: white;
}
#secHomeDatos #homeCuerpo #descrip h2 i{
	transform: rotate(90deg);
    margin: 0 10px !important;;
    color: #ba0100;
    font-size: 30px;
    margin: 0;
}
#secHomeDatos #homeCuerpo #descrip .elemento{
    display: inline-block;
    font-size: 15px;
    margin: 12px 10px 0;
    text-decoration: none;
    width: 23%;
    box-sizing: border-box;
    color: #555;
    vertical-align: top;
}
#secHomeDatos #homeCuerpo #descrip .elemento .fa-phone{
    color: #0e889d;
}

#secHomeDatos #homeCuerpo #descrip .elemento .btn-elemento{
display: inline-block;
    font-size: 15px;
    text-decoration: none;
    height: 126px;
    box-sizing: border-box;
    width: 126px;
    box-sizing: border-box;
    padding: 15px 5px;
    border: 1px solid #ffa12d;
    border-radius: 100%;
    color: #555;
    background: rgba(255,181,54,1);
    background: -moz-linear-gradient(top, rgba(255,181,54,1) 0%, rgba(255,147,38,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,181,54,1)), color-stop(100%, rgba(255,147,38,1)));
    background: -webkit-linear-gradient(top, rgba(255,181,54,1) 0%, rgba(255,147,38,1) 100%);
    background: -o-linear-gradient(top, rgba(255,181,54,1) 0%, rgba(255,147,38,1) 100%);
    background: -ms-linear-gradient(top, rgba(255,181,54,1) 0%, rgba(255,147,38,1) 100%);
    background: linear-gradient(to bottom, rgba(255,181,54,1) 0%, rgba(255,147,38,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb536', endColorstr='#ff9326', GradientType=0 );
}


#secHomeDatos #homeCuerpo #descrip .elemento .btn-elemento:hover{
    background: rgba(255,147,38,1);
    background: -moz-linear-gradient(top, rgba(255,147,38,1) 0%, rgba(255,181,54,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,147,38,1)), color-stop(100%, rgba(255,181,54,1)));
    background: -webkit-linear-gradient(top, rgba(255,147,38,1) 0%, rgba(255,181,54,1) 100%);
    background: -o-linear-gradient(top, rgba(255,147,38,1) 0%, rgba(255,181,54,1) 100%);
    background: -ms-linear-gradient(top, rgba(255,147,38,1) 0%, rgba(255,181,54,1) 100%);
    background: linear-gradient(to bottom, rgba(255,147,38,1) 0%, rgba(255,181,54,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff9326', endColorstr='#ffb536', GradientType=0 );
    transition: all 0.3s ease
}

#secHomeDatos #homeCuerpo #descrip .elemento .btn-inactive{
    display:none;
}

#secHomeDatos #homeCuerpo #descrip .elemento .btn-active{
    display: inline-block;
}

#secHomeDatos #homeCuerpo #descrip .elemento span{
    display: block;
    color: black;
}
#secHomeDatos #homeCuerpo #descrip .elemento .titu{
    font-weight: 700;
    font-size: 17px;
}
#secHomeDatos #homeCuerpo #descrip .elemento .numWhats{
    text-decoration: none;
    color: #015fc3;
    margin-top: 6px;
    display: block;
}

#secHomeDatos #homeCuerpo #descrip .elemento2{
	  width: 30%;
	  display:inline-block;
	  vertical-align: middle;
	  margin: 15px 25px 0 0;
}

#secHomeDatos #homeCuerpo #descrip .btn-elemento i{
	display: block;
    font-size: 60px;
    color: #189D0E;
    border-spacing: 24px 0;
}


#secHomeDatos #homeCuerpo #descrip .btn-elemento span{
	display: block;
    color: white;
}
#secHomeDatos #homeCuerpo #descrip p{
	margin: 0 0 7px;
}
#secHomeDatos #homeCuerpo #descrip h3{
	border-top: 2px solid rgba(185, 185, 185, 0.37);
    margin: 15px 0 0;
    padding: 15px 0 0;
    font-family: 'Josefin', sans-serif;
}

#secHomeDatos #homeCuerpo #descrip .inactive{
	text-decoration:none;
	display:none;
}

#secHomeDatos #homeCuerpo #homePromo { margin:0 0 20px 0;     padding: 0 405px 0 44px; display:table-cell; width:65%; height:auto; text-align:center; vertical-align:middle; border:solid 4px #DCD0C8; background:url(../images/home-promocion-fondo.jpg); font-family:Arial, Helvetica, sans-serif; background-size: cover;}
#secHomeDatos #homeCuerpo #homePromo #promoTit { margin:10px 0; padding:0 0 0 0; display:block; width:auto; text-align:center; color:#fff; font-weight:bold; font-size:22px; text-shadow:#000 2px 2px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #homePromo #promoCuerpo { margin:0 0 0 0; padding:20px 20px 15px 20px; display:block; width:auto; height:auto; background:url(../images/home-promocion-cuerpo-fondo.png); }
#secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoSubTit { margin:0 0 10px; 0; padding:0 0 0 0; display:block; text-align:center; }
#secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoSubTit a { color:#722800; font-size:30px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoSubTit a span { display:block; font-size:16px; }
#secHomeDatos #homeCuerpo #homePromo #promoCuerpo .promoDesc { margin:0 0 0 0; padding:0 0 0 0; display:block; text-align:center; color:#000; font-size:16px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoLink { margin:10px 0 0 0; padding:0 0 0 0; display:block; text-align:center; color:#722800; text-decoration:none; font-weight:bold; font-size:16px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoLink span { font-size:20px; }

#secHomeDatos #homeCuerpo #nosotros { margin:0 0 20px 0; padding:20px; display:table-cell; width:auto; height:auto; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #nosotros p { margin:0 auto 30px auto; width:70%; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #nosotros #somosMapa { padding:8px; width:auto; background-color:#FFF; text-align:center; color:#600; font-size:16px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; }
#secHomeDatos #homeCuerpo #nosotros ul { margin: 0 auto; width:70%; }
#secHomeDatos #homeCuerpo #nosotros ul li { text-align:left; }

#secHomeDatos #homeCuerpo #series { margin:0 0 20px 0; padding:20px; display:table-cell; width:auto; height:auto; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #series h3 { text-decoration:undeline; font-size:22px; }
#secHomeDatos #homeCuerpo #series .serieT { color:#0080FF; }
#secHomeDatos #homeCuerpo #series .serieC { color:#FF5C26; }
#secHomeDatos #homeCuerpo #series .serieM { color:#3E2F92; }
#secHomeDatos #homeCuerpo #series p { text-align:left; }
#secHomeDatos #homeCuerpo #series ul li { text-align:left; }

#secHomeDatos #homeCuerpo #infoGrupo { margin:0 0 20px 0; padding:20px; display:table-cell; width:auto; height:auto; text-align:center; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #infoGrupo h2 { margin:0 0 20px 0; padding:0 0 0 0; border-bottom:solid 1px #B9A090; color:#6A2900; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #infoGrupo h3 { margin:0 0 20px 0; padding:0 0 0 0; font-size:18px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #infoGrupo h4 { margin:0 0 20px 0; padding:0 0 0 0; font-size:18px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #infoGrupo p { margin:0 auto 20px auto; width:800px; text-align:left; font-size:14px; font-family:Arial, Helvetica, sans-serif;}
#secHomeDatos #homeCuerpo #infoGrupo .solo { text-align:center; }
#secHomeDatos #homeCuerpo #infoGrupo #grupoCapa { margin:0; padding:0; display:block; width:100%; overflow:scroll; }
#secHomeDatos #homeCuerpo #infoGrupo #grupoCapa .grupoTab { margin:0 auto 15px auto; width:800px; }
#secHomeDatos #homeCuerpo #infoGrupo #grupoCapa .grupoTab tr td { border-bottom:solid 1px #999; }
#secHomeDatos #homeCuerpo #infoGrupo #grupoCapa .grupoTab .gruposTit td { background:#666; color:#FFF; }

#secHomeDatos #homeCuerpo #homeFormu {     
  margin: 0;
  padding: 20px;
  width: 35%;
  height: auto;
  border: solid 4px #DCD0C8;
  font-family: sans-serif;
  font-size: 15px;
}

#secHomeDatos #homeCuerpo #homeFormu .close{ 
  display:none;
}

#secHomeDatos #homeCuerpo .telefonos-list{
	display: none ;
}
#secHomeDatos #homeCuerpo .formu-list{
	display:table-cell;
}

#secHomeDatos #homeCuerpo .telefonos-list ul{
	text-decoration: none;
    display: block;
    background: white;
    z-index: 2;
    padding: 0;
    text-align: left;
    margin: 0;
}

#secHomeDatos #homeCuerpo .telefonos-list ul li{
	display: block;
    box-sizing: border-box;
    padding: 10px;
    border: 1px solid #cbcac8;
    clear: both;
}
#secHomeDatos #homeCuerpo .telefonos-list ul li img{
	width: 25px;
    vertical-align: text-bottom;
}

#secHomeDatos #homeCuerpo #homeFormu h2 { margin:0 0 15px 0; padding:0 0 10px 0; border-bottom:solid 1px #B9A090; color:#6A2900; font-family:Arial, Helvetica, sans-serif; clear: both;}
#secHomeDatos #homeCuerpo #homeFormu p { font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #homeFormu .formuTxt { margin:0 auto; padding:6px; display:block; width:80%; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #homeFormu .formuComen { margin:0 auto; padding:6px; display:block; width:80%; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #homeFormu .formuBtn{ margin:0 auto; padding:10px; display:block; width:50%; border:0; background:#FFC9B0; color:#6A2900; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secHomeDatos #homeCuerpo #homeFormu .corto { display:inline-block; width:37%; }

#secHomeDatos #homeCuerpo #contacFormu p { font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #contacFormu #frmC .formuTxt { margin:0 auto 10px auto; padding:10px; display:block; width:50%; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #contacFormu #frmC .formuComen { margin:0 auto 10px auto; padding:10px; display:block; width:50%; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #contacFormu #frmC .formuBtn{ margin:0 auto 10px auto; padding:10px; display:block; width:50%; border:0; background:#FFC9B0; color:#6A2900; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secHomeDatos #homeCuerpo #contacFormu #frmC .corto { display:inline-block; width:24%; }

#secHomeDatos #homeCuerpo #contacFormu #frmC .formuTxt { margin:0 auto 10px auto; padding:10px; display:block; width:50%; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #contacFormu #frmC .formuComen { margin:0 auto 10px auto; padding:10px; display:block; width:50%; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpo #contacFormu #frmC .formuBtn{ margin:0 auto 10px auto; padding:10px; display:block; width:50%; border:0; background:#FFC9B0; color:#6A2900; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secHomeDatos #homeCuerpo #contacFormu #frmC .corto { display:inline-block; width:24%; }

#secHomeDatos #homeCuerpo #contacFormu #fonoLis { margin:0 0 0 0; padding:0; display:block; width:100%; list-style:none; text-align:center; border:0; vertical-align:top; }
#secHomeDatos #homeCuerpo #contacFormu #fonoLis li { margin:0; padding:10px; display:inline-block; width:auto; border:solid 1px #95957B; text-align:center; color:#333; background:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:bold; }
#secHomeDatos #homeCuerpo #contacFormu #fonoLis li a { color:#06C; }
#secHomeDatos #homeCuerpo #contacFormu #fonoLis li .fonoTit { margin:0; padding:0; display:block; }
#secHomeDatos #homeCuerpo #contacFormu #fonoLis li .fonoTit img { width:20px; height:10px; border:0; }
#secHomeDatos #homeCuerpo #contacFormu #fonoLis #lisWApp { display:none; }

#secHomeDatos #homeCuerpoInfo { margin:0 auto 30px auto; display:block; width:100%; text-align:center; }
#secHomeDatos #homeCuerpoInfo .gastosNivel { margin:0 0; display:inline-block; width:300px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpoInfo .gastosNivel tr td { margin:0 0 0 0; padding:6px; border:solid 1px #777; text-align:center; }
#secHomeDatos #homeCuerpoInfo .gastosNivel tr .nivelVerde { background:#0A0; color:#FFF; }
#secHomeDatos #homeCuerpoInfo .gastosNivel tr .nivelAzul { background:#00F; color:#FFF; }
#secHomeDatos #homeCuerpoInfo .gastosNivel tr .nivelRojo { background:#F00; color:#FFF; }

#secHomeDatos #homeCuerpoInfo .gastosTours { margin:0 auto; display:block; width:500px; font-family:Arial, Helvetica, sans-serif; }
#secHomeDatos #homeCuerpoInfo .gastosTours tr td { margin:0 0 0 0; padding:6px; border:solid 1px #777; text-align:center; }
#secHomeDatos #homeCuerpoInfo .gastosTours tr .nivelVerde { background:#0A0; color:#FFF; }
#secHomeDatos #homeCuerpoInfo .gastosTours tr .nivelAzul { background:#00F; color:#FFF; }
#secHomeDatos #homeCuerpoInfo .gastosTours tr .nivelRojo { background:#F00; color:#FFF; }
#secHomeDatos #homeCuerpoInfo .gastosTours tr .gasTourCabe { background:#777; color:#FFF; }

#menuInfo { margin:0; padding:0; display:table; width:100%; text-align:center; border:0; }
#menuInfo .circu { margin:0; padding:20px; display:table-cell; width:16%; height:138px; vertical-align:middle; border:0; }
#menuInfo .circu a { text-decoration:none; font-weight:bold; }
#menuInfo .celes { background:url(../images/home-ciurculo-azul.png) no-repeat center; }
#menuInfo .celes a { color:#FF56D9; }
#menuInfo .naran { background:url(../images/home-ciurculo-amarillo.png) no-repeat center; }
#menuInfo .naran a { color:#007900; }

#secHomePaises { margin:0 0 30px 0; padding:0; display:block; width:100%; height:auto; }
#secHomePaises h2 { margin:0 0 5px 0; padding:0; display:block; font-family:Arial, Helvetica, sans-serif; font-size:24px; }
#secHomePaises h2 span { display:block; font-size:16px; }
#secHomePaises #listaPaises { margin:0; padding:0; display:table; list-style:none; width:100%; }
#secHomePaises #listaPaises li { margin:0; padding:0; display:table-cell; width:216px; height:auto; border:solid 1px #333333; }
#secHomePaises #listaPaises li .pais { margin:0; padding:0; display:block; width:100%; height:auto; background:#0F0; }
#secHomePaises #listaPaises li .pais img { margin:0; padding:0; display:block; width:100%; height:auto; }
#secHomePaises #listaPaises li .pais span { margin:0; padding:10px 0; display:block; width:100%; background:#FFF; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:16px; }

.secHomeTours { margin:0 0 30px 0; display:block; width:100%; border:0; }
.secHomeTours h3 { margin:20px 0 5px 0; padding:0 10px; display:block; border:0; font-family:Arial, Helvetica, sans-serif; font-size:24px; }
.secHomeTours h3 span { display:block; font-size:16px; }

.secHomeTours .tourHomeList { margin:0 0 0 0; padding:0 0 0 0; position:relative; display:inline-block; width:338px; height:280px; vertical-align:top; }
.secHomeTours .tourHomeList .imgfondo { margin:0 0 0 0; position:absolute; top:0; left:0; z-index:-1; }
.secHomeTours .tourHomeList h4 { margin:0 0 0 0; padding:15px; text-align:left; }
.secHomeTours .tourHomeList h4 a { margin:0 0 0 0; padding:0 0 0 0; color:#fff; font-size:34px; text-decoration:none; text-shadow:#000 2px 2px; font-family:"TwCenMT"; }
.secHomeTours .tourHomeList .paises { margin:0 0 0 15px; padding:0 0 0 0; display:none; color:#fff; text-align:left; text-shadow:#000 1px 1px; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
.secHomeTours .tourHomeList .ciudades { margin:0 0 0 15px; padding:0 150px 0 0; color:#fff; text-align:left; text-shadow:#555 1px 1px, #555 -1px 1px, 1px 1px 0.2em black; font-size:15px; font-family:Arial, Helvetica, sans-serif; }
.secHomeTours .tourHomeList .precio { margin:0 0 0 0; padding:7px 0 0 0; position:absolute; bottom:0; left:0; display:block; width:100%; color:#fff; text-shadow:#000 2px 2px; font-size:22px; text-decoration:none; font-family:"TwCenMT"; }
.secHomeTours .tourHomeList .precio .verTour { margin:-15px 0 0 0; padding:15px; float:right; display:block; background:#FF9326; color:#FFF; text-shadow:none; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
.secHomeTours .listaVerMas { margin:0 0 0 0; padding:60px 5px 0 5px; display:inline-block; width:55px; height:220px; text-align:center; text-decoration:none; color:#777; border:solid 1px #FF9326; background:url(../images/icono-lista-flecha.gif) no-repeat center 75%; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
.secHomeTours .medio { margin: 0 50px; }

#social { margin:0 0 30px 0; padding:0; display:table; width:100%; }
#social #facebook { margin:0; padding:0; display:table-cell; width:50%; height:auto; border:0; vertical-align:top; }
#social #otrosMundo { margin:0; padding:0; display:table-cell; width:50%; height:auto; border:0; vertical-align:top; }
#social #otrosMundo #listaTitu { margin:5px auto; width:90%; font-family:Arial, Helvetica, sans-serif; }
#social #otrosMundo #listaOtros { margin:0; padding:0; display:block; width:99%; height:auto; list-style:none; background:#FFF; border:0; }
#social #otrosMundo #listaOtros li { display:inline-block; width:32%; height:auto; }
#social #otrosMundo #listaOtros li a { margin:0; padding:0; display:block; width:100%; height:auto; color:#333; border:solid 1px #999; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:center; }
#social #otrosMundo #listaOtros li a img { margin:0; border:0 !important; width:100%; height:auto; }
#social #otrosMundo #listaOtros li a span { display:block; padding:10px 0; width:100%; background:#FFF; }

/* Listado */
#listaCuerpo { margin:0px 0 30px 0; padding:0; display:table; width:auto; height:auto; }
#secLista { margin:0; padding:30px 60px; display:table-cell; width:80%; border:solid 4px #CCC; }
#secLista h1 { margin:0 0 30px 0; border:0; color:#FF3366; font-family:Arial, Helvetica, sans-serif; }
#secLista h1 span { display:block; font-size:14px; }
#secLista h2 { margin:0 0 30px 0; border:0; color:#FF3366; font-size:16px; font-family:Arial, Helvetica, sans-serif; }
#secLista h2 span { display:block; font-size:14px; }
##secLista h3 { margin:0 0 30px 0; border:0; font-family:Arial, Helvetica, sans-serif; }

#secLista .opcionMes { padding:10px; background:#FFFFBF; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
#secLista .resulMsn { font-size:14px; font-family:Arial, Helvetica, sans-serif; }

#secLista .paisTxt { text-align:justify; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista { margin:0 0 20px 0; padding:0 0 20px 0; display:table; width:100%; height:auto; border-bottom:solid 1px #666666; }
#secLista .tourLista div { margin:0; padding:0; display:table-cell; width:30%; border:0; vertical-align:middle; text-align:left; }
#secLista .tourLista div h3 { margin:0 30px 10px 30px; padding:0; }
#secLista .tourLista div h3 span { display:block; color:#FF3366; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista div h3 a { margin:0; padding:0; color:#333; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista div .paises { margin:0 30px; padding:0; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista .salidas { margin:0 0 0 0; padding:0; display:table-cell; width:19%; border:0; vertical-align:middle; text-align:center; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista .salidas .catalogAct { margin:0 0 0 0; padding:10px; display:block; color:#FFF; background:#E35B5A; }
#secLista .tourLista .salidas .mesesAct { margin:0 0 0 0; padding:5px; display:block; color:#E35B5A; }

#secLista .tourLista .precio { margin:0; padding:0; display:table-cell; width:20%; border:0; vertical-align:middle; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista .precio span { display:block; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista .precio strong { display:block; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista .precio a { margin:0; padding:0; color:#FF3366; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secLista .tourLista .imagen { margin:0 0 0 0; padding:0; display:table-cell; width:30%; border:0; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourLista .imagen a { margin:0; padding:0; }
#secLista .tourLista .numdias { color:#FF3366; }

#secLista .tourListaDet { margin:0 0 20px 0; padding:0 0 0 0; display:table; width:100%; }
#secLista .tourListaDet .columna { margin:0; padding:10px; display:table-cell; width:30%; border-top:solid 1px #a7a; border-bottom:solid 1px #a7a; border-left:solid 1px #a7a; vertical-align:middle; text-align:left; }
#secLista .tourListaDet .columna h3 { margin:0 30px 10px 30px; padding:0; color:#333; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .columna h3 span { display:block; color:#FF3366; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .columna h3 a { margin:0; padding:0; color:#333; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .columna .paises { margin:0 30px; padding:0; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .columna .numdias { color:#FF3366; }
#secLista .tourListaDet .fila { margin:0; padding:10px; display:table-cell; width:70%; border-top:solid 1px #a7a; border-bottom:solid 1px #a7a; border-right:solid 1px #a7a; vertical-align:middle; text-align:center; }
#secLista .tourListaDet .fila .detalle { margin:0; padding:10px 0; display:table; width:100%; border:0; vertical-align:middle; text-align:center; }
#secLista .tourListaDet .fila .detalle .salidas { margin:0 0 0 0; padding:0; display:table-cell; width:33%; border:0; vertical-align:middle; text-align:center; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .fila .detalle .salidas .catalogAnt { margin:0 0 0 0; padding:10px; display:block; color:#FFF; background:#578EBE; }
#secLista .tourListaDet .fila .detalle .salidas .catalogAct { margin:0 0 0 0; padding:10px; display:block; color:#FFF; background:#E35B5A; }
#secLista .tourListaDet .fila .detalle .salidas .mesesAnt { margin:0 0 0 0; padding:5px; display:block; color:#578EBE; }
#secLista .tourListaDet .fila .detalle .salidas .mesesAct { margin:0 0 0 0; padding:5px; display:block; color:#E35B5A; }
#secLista .tourListaDet .fila .detalle .precio { margin:0; padding:0; display:table-cell; width:27%; border:0; vertical-align:middle; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .fila .detalle .precio span { display:block; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .fila .detalle .precio strong { display:block; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .fila .detalle .precio .linkDetallesAnt { margin:0; padding:0; color:#578EBE; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secLista .tourListaDet .fila .detalle .precio .linkDetallesAct { margin:0; padding:0; color:#E35B5A; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secLista .tourListaDet .fila .detalle .imagen { margin:0 0 0 0; padding:0; display:table-cell; width:40%; border:0; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
#secLista .tourListaDet .fila .detalle .imagen span { font-size:14px; }
#secLista .tourListaDet .fila .bordeUp { border-top:solid 1px #ccc; }

#secListaNotas { margin:0; padding:30px; display:table-cell; width:20%; border:solid 4px #CCC; }
#secListaNotas h3 { margin:0 0 0 0; padding:20px 0; border:0; background:#333; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secListaNotas p { text-align:justify; font-family:Arial, Helvetica, sans-serif; }

#secBusqueda { margin:30px 0 30px 0; padding:0; display:block; width:auto; border:0; font-family:Arial, Helvetica, sans-serif; }
#secBusqueda h1 { margin:0 0 10px 0; border:0; color:#FF3366; font-family:Arial, Helvetica, sans-serif; }

/* -----buscador index------------------------------------------------------------- */
#buscadorIndex{
	font-family: Arial, Helvetica, sans-serif;
	text-align: left;
	position:relative;
}

#buscadorIndex #frmC{
	color:white;
	font-family: Arial, Helvetica, sans-serif;
	text-align: left;
	position: absolute;
    top: -323px;
    width: 100%;
}
#buscadorIndex #frmC #content h2{
    margin: 0 0 10px;
    text-shadow: 2px 2px 1px rgba(0, 0, 0, 1);
}
#buscadorIndex #frmC #content #tabs{
	margin:0;
}
#buscadorIndex #frmC #content #tabs li{
	display:inline-block;
}

#buscadorIndex #frmC #content #tabs li .active{
    background: darkcyan;
    text-decoration: none;
    	display: inline-block;
    box-sizing: border-box;
    padding: 10px 15px;
    color: white;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}
#buscadorIndex #frmC #content #tabs li .inactive{
	background: #313832;
    text-decoration: none;
    	display: inline-block;
    box-sizing: border-box;
    padding: 10px 15px;
    color: white;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}
#buscadorIndex #frmC #content{
    width: 820px;
    margin: 0 auto;
}

#buscadorIndex #frmC #content .busqSeccion{
	background: rgba(255, 102, 0, 0.79);
	padding: 10px 0 25px;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
}

#buscadorIndex #frmC .busqSubSecc{
    display: inline-block;
    box-sizing: border-box;
    
    padding: 0 15px;
    box-sizing: border-box;
    text-align: center;
     width: 60%;
}

#buscadorIndex #frmC .botonBuscarSec{
	display: inline-block;
    box-sizing: border-box;
  
    padding: 12px 15px;
    box-sizing: border-box;
	text-align: center;
}
#buscadorIndex #frmC .mostrar{
	display:inline-block;
        width: 100%;
}
#buscadorIndex #frmC .ocultar{
	display:none;
       
}
#buscadorIndex #frmC .busqSubSecc p{
	margin: 0px 0 10px;
}
#otrospaises{
 width: 25%;
}

#buscadorIndex #frmC .busqSubSecc .selectize-input {
    text-align: left;
    vertical-align: middle;
    box-sizing: border-box;
    display: inline-block;
    width: 100%;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
#buscadorIndex #frmC .busqSubSecc .selectize-input > input {
    padding: 0 !important;
    min-height: 0 !important;
    max-height: none !important;
    max-width: 100% !important;
    margin: 0 2px 0 0 !important;
    text-indent: 0 !important;
    border: 0 none !important;
    background: none !important;
    line-height: inherit !important;
    -webkit-user-select: auto !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
#buscadorIndex #frmC .botonBuscarSec button{
    background-color: #208686;
    color: #fff !important;
    cursor: pointer;
    margin: 20px 0 0;
    vertical-align: baseline;
    box-sizing: border-box;
    display: inline-block;
    /* width: 100%; */
    height: 30px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    /* background-color: #fff; */
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}


/* -----buscador PRINCIPAL------------------------------------------------------------- */
#buscadorPrincipal{
	font-family: Arial, Helvetica, sans-serif;
	text-align: left;
	color: white;
    width: 100%;
}

#buscadorPrincipal #content h2{
    margin: 0 0 10px;
    text-shadow: 2px 2px 1px rgba(0, 0, 0, 1);
}
#buscadorPrincipal #content #tabs{
	margin:0;
}
#buscadorPrincipal #content #tabs li{
	display:inline-block;
}

#buscadorPrincipal #content #tabs li .active{
    background: darkcyan;
    text-decoration: none;
    	display: inline-block;
    box-sizing: border-box;
    padding: 10px 15px;
    color: white;
        border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}
#buscadorPrincipal #content #tabs li .inactive{
	background: #313832;
    text-decoration: none;
    	display: inline-block;
    box-sizing: border-box;
    padding: 10px 15px;
    color: white;
        border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    
}
#buscadorPrincipal #content{
    width: 100%;
    margin: 0 auto;
}

#buscadorPrincipal #content .busqSeccion{
	background: #FF6600;
	padding: 10px 0 25px;
            border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}

#buscadorPrincipal .busqSubSecc{
    display: inline-block;
    box-sizing: border-box;
    width:100%;
    padding: 0 15px;
    box-sizing: border-box;
	text-align: center;
}
#buscadorPrincipal .busqSubSecc span{
	display: inline-block;
	padding: 0 10px;
}
#buscadorPrincipal .botonBuscarSec{
	display: inline-block;
    box-sizing: border-box;
    width: 10%;
    padding: 0 15px;
    box-sizing: border-box;
	text-align: center;
}
#buscadorPrincipal .mostrar{
	display:inline-block;
}
#buscadorPrincipal .ocultar{
	display:none ;
}
#buscadorPrincipal .busqSubSecc p{
	margin: 0px 0 10px;
            text-align: center;
}
#buscarEuropaises .ocultar{
  display:none;
}

#buscarOtrpaises .ocultar{
display:none;
   
}
#buscarEuropaises #paises{
float:left;
margin-right:15px;
    width: 35%;
}
#buscarEuropaises #paises2{
float:left;
margin-right:15px;
    width: 27%;
}
#buscarOtrpaises #otrospaises{
float: left;
    margin: 0 auto;
    width: 66%;
}
#buscarPorNom #busqnombre{
float: left;
    margin: 0 auto;
    width: 66%;
}

#buscarEuropaises #ciudadesCont{
float:left;
margin-lef;
    width: 35%;
}

#buscadorPrincipal .busqSubSecc .selectize-input, select {
    text-align: left;
    vertical-align: middle;
    box-sizing: border-box;
    display: inline-block;
    width: 246px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
#buscadorPrincipal .busqSubSecc .selectize-input > input {
    padding: 0 !important;
    min-height: 0 !important;
    max-height: none !important;
    max-width: 100% !important;
    margin: 0 2px 0 0 !important;
    text-indent: 0 !important;
    border: 0 none !important;
    background: none !important;
    line-height: inherit !important;
    -webkit-user-select: auto !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
#buscadorPrincipal .botonBuscarSec button{
    background-color: #208686;
    color: #fff !important;
    cursor:pointer;
    margin: 20px 0 0;
    vertical-align: baseline;
    box-sizing: border-box;
    display: inline-block;
    /* width: 100%; */
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    /* background-color: #fff; */
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

/* -----buscador PRINCIPAL filtro------------------------------------------------------------- */

#listaCuerpo #secLista .listaFiltroTitulo{
	display: inline;
	font-family: Arial, Helvetica, sans-serif;
	
}
#listaFiltro{
    font-family: Arial, Helvetica, sans-serif;
    <!--float: left;-->
    width: 80%;
    }
#listaCuerpo img{
      width: auto;
     display: inline;
    vertical-align: top;
}
.discount-banner {
    width: 100%;
    text-align: center;
    margin-bottom: 35px;
    color: rgb(0, 0, 0);
    padding: 15px 15px;
    font: 400 18px/24px Raleway, sans-serif;
    border-top: 1px solid rgb(206, 205, 205);
    border-bottom: 1px solid rgb(206, 205, 205);
    overflow: hidden;
}
.discount-banner2 {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
    color: rgb(0, 0, 0);
    font: 400 18px/24px Raleway, sans-serif;
   
}
.discount-banner span{
  color:#f60;
}
#listaCuerpo #secLista .listaFiltro li{
	display: inline-block;
}
#listaCuerpo #secLista .listaFiltro li a{
	padding: 10px 15px;
    text-decoration: none;
    
    font: 600 16px/20px "Raleway", sans-serif;
    color: #333;
}
#listaCuerpo #secLista .listaFiltro li a:hover{
	border-bottom: 2px solid #ff6600;
    color: #333333;
    font-weight: 600;
}

#secBusqueda #buscador { tex-align:center; }
#secBusqueda #buscador h2 { margin:0 0 30px 0; font-family:Arial, Helvetica, sans-serif; }
#secBusqueda #buscador .busqSeccion { margin:15px; border:solid 1px #AAA993; }
#secBusqueda #buscador .busqSubSecc { margin:15px; }
#secBusqueda #buscador .icoMas { margin:0 0 -10px 0; cursor:pointer; cursor:hand; }
#secBusqueda #buscador .seleccionados { margin:0 auto; padding:2px; display:block; width:40%; border:solid 1px #aaa; color:#777; font-size:14px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secBusqueda #buscador .seleccionados .paisSel { margin:0 10px 0 0; padding:4px; display:inline-block; color:#868695; border:solid 1px #AAA993; background-color:#FBDBC8; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
#secBusqueda #buscador .seleccionados .paisSel a { margin:0 0 0 0; padding:0; }
#secBusqueda #buscador .seleccionados .paisSel a img { margin:0 0 -10px 0; display:inline-block; }
#secBusqueda #buscador input { padding:6px; font-family:Arial, Helvetica, sans-serif; }
#secBusqueda #buscador select { padding:6px; font-family:Arial, Helvetica, sans-serif; }
#secBusqueda #buscador #btnBuscador { padding:10px 20px; font-size:18px; font-family:Arial, Helvetica, sans-serif; }
#secBusqueda #buscador #opcOtros { position:relative; display:block; width:auto; border:solid 1px #3a7; text-align:center; }
#secBusqueda #buscador #opcOtros span { margin:0 auto; position:relative; display:block; }
#secBusqueda #buscador #opcOtros #frotros { margin:0 auto; position:relative; display:block; }
#secBusqueda #buscador #opcOtros #sugerencias { position:absolute; bottom:-150px; left:40%; display:none; width:350px; height:150px; overflow:auto; border:solid 1px #a7c; background:#FFF; z-index:100; }
#secBusqueda #buscador #opcOtros #sugerencias .opctxt { margin:1px; padding:10px 2px; display:block; width:95%; color:#888; border:solid 1px #ccc; }
.ui-autocomplete {position:absolute;top:0;left:0;cursor:default}
.ui-front{z-index:100}
.ui-menu{padding:0;margin:0;display:block}
.ui-menu .ui-menu-item { background:#fff; border:solid 1px #ccc; color:#888; position:relative; margin:0; padding:4px 1px 4px 1px; cursor:pointer; min-height:0; list-style-image:url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7); font-size:16px; font-family:Arial, Helvetica, sans-serif; }

/* Listado Paises */
#secListaPaises { margin:0; padding:30px 60px; display:table-cell; width:80%; border:solid 4px #CCC; }
#secListaPaises h1 { margin:0 0 10px 0; border:0; color:#FF3366; font-size:26px; font-family:Arial, Helvetica, sans-serif; }
#secListaPaises h2 { margin:0 0 30px 0; border:0; color:#FF3366; font-size:16px; font-family:Arial, Helvetica, sans-serif; }
#secListaPaises h2 span { display:block; }
#secListaPaises .tourHome { margin-bottom:20px; position:relative; display:block; width:100%; border:solid 1px #000; vertical-align:top; font-size:14px; }
#secListaPaises .tourHome h4 { margin:0; padding:10px 0; float:left; width:49%; }
#secListaPaises .tourHome h4 a { color:#000; font-size:22px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#secListaPaises .tourHome .paises { margin:0 0 20px 0; padding:0 20px; float:left; width:45%; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
#secListaPaises .tourHome .imagen { position:relative; float:right; width:50%; }
#secListaPaises .tourHome .imagen a { margin:0; padding:0; }
#secListaPaises .tourHome .imagen a img { margin:0; width:100%; height:auto; border:0 !important; }
#secListaPaises .tourHome .imagen a span { margin:0; padding:0 10px; position:absolute; bottom:9px; left:0; color:#FFF; background:#000; font-family:Arial, Helvetica, sans-serif; font-size:33px; }

/* Producto */
#producto { margin:20px 0; padding:0; display:table; width:100%; border:solid 5px #DDD; box-sizing:border-box; }
#prodCuerpo { margin:0; padding:20px; display:table-cell; width:100%; }


/* quitar al terminar producto */
#prodCuerpo #prodInfo { margin:0 0 20px 0; padding:0 0 0 0; }
#prodCuerpo #prodInfo h1 { margin:0; padding:20px; display:block; width:auto; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #prodInfo p { margin:0 0 6px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #prodInfo .dias { font-size:18px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #prodInfo .precio { font-size:18px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #prodInfo .precio span { margin:0; padding:0; }
#prodCuerpo #prodMenu { margin:0 0 20px 0; padding:0 0 5px 0; list-style:none; border-bottom:solid 1px #CCCCCC; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #prodMenu li { margin:0; padding:0; display:inline-block; border-right:solid 1px #CCCCCC; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #prodMenu li a { margin:0; padding:20px 40px; display:block; color:#8A855B; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #prodMenu li a.actual { background:#F93; color:#FFF; } 
#prodCuerpo #prodMenu li a:hover { background:#F93; color:#FFF; } 
#prodCuerpo #prodMenu li.ultimo { border-right:none; }
/* quitar al terminar producto */


#prodCuerpo #prodInfo { margin:0 0 0 0; padding:0 0 0 0; display:table; width:100%; border:0; }
#prodCuerpo #prodInfo #infoIzq { margin:0 0 0 0; padding:0 0 0 0; display:table-cell; width:70%; text-align:left; vertical-align:top; }
#prodCuerpo #prodInfo #infoIzq h1 { margin:0 0 0 0; padding:0 15px 0 0; width:auto; font-family:Arial, Helvetica, sans-serif; font-size:25px; font-weight:bold; }
#prodCuerpo #prodInfo #infoIzq p { margin:0 0 0 0; padding:0 15px 0 0; width:auto; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
#prodCuerpo #prodInfo #infoIzq .dias { margin:6px 0 6px 0; color:#E76615; font-weight:bold; }

#prodCuerpo #prodInfo #infoDer { margin:0 0 0 0; padding:0 0 0 0; display:table-cell; width:30%; }
#prodCuerpo #prodInfo #infoDer #itiIconos { margin:0 0 0 0; padding:0 0 0 0; list-style:none; }
#prodCuerpo #prodInfo #infoDer #itiIconos li { margin:0 5px 0 0; display:inline-block; }
#prodCuerpo #prodInfo #infoDer .precio { margin:15px auto 0 auto; padding:15px 0; display:block; width:auto; color:#FFF; background-color:#E76615; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:25px; }

#prodCuerpo #prodQuote { margin:0 0 10px 0; padding:0 0 0 0; display:none; width:100%; height:auto; border:0; }
#prodCuerpo #prodQuote #quoteBtn { margin:0 15px 0 0; padding:20px 6px 0 6px; float:left; display:block; width:68px; height:80px; color:#FFF; text-decoration:none; background-color:#7B7960; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; }
#prodCuerpo #prodQuote #quoteBtn i { margin:0 0 10px 0; display:block;	 font-size:24px; }
#prodCuerpo #prodQuote #quoteBtn:hover { text-decoration:underline; }
#prodCuerpo #prodQuote #quoteTitu { margin:0 0 0 0; padding:15px 0 15px 0; text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:25px; font-weight:bold; }
#prodCuerpo #prodQuote #quoteSub { margin:0 0 0 0; padding:0 0 0 0; text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:18px; }

#prodCuerpo #prodOpc { margin:0 0 10px 0; padding:0 0 0 0; display:block; width:100%; height:auto; border:0; }
#prodCuerpo #prodOpc #prodMenu { margin:0 0 0 0; padding:0 0 0 0; float:left; display:block; width:70%; height:auto; list-style:none; vertical-align:top; }
#prodCuerpo #prodOpc #prodMenu p { margin:0 0 0 0; padding:0 0 0 0; display:table; width:100%; height:150px; }
#prodCuerpo #prodOpc #prodMenu p a { 
    margin: 0 0 0 0;
    padding: 0 0 0 0;
    display: table-cell;
    width: 24%;
    vertical-align: middle;
    border: solid 1px #BBB;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
    color: #7b7960;
    font-weight: 700;
}
#prodCuerpo #prodOpc #prodMenu p a i{
	display: block;
    /* background-color: white; */
    font-size: 31px;
    margin: 9px 0;
    color: #ff9c00;
}
#prodCuerpo #prodOpc #prodMenu p a i:hover{
	transform: rotate(720deg); -webkit-transform: rotate(720deg); -moz-transform: rotate(720deg); -o-transform: rotate(720deg); -ms-transform: rotate(720deg);
    transition: all ease 0.5s; -webkit-transition: all ease 0.5s; -moz-transition: all ease 0.5s; -o-transition: all ease 0.5s; -ms-transition: all ease 0.5s;
}

#prodCuerpo #prodOpc #prodMenusub { margin:0 0 0 0; padding:0 0 0 0; float:right; display:block; width:30%; vertical-align:top; }
#prodCuerpo #prodOpc #prodMenusub #prodQuoteBtn { margin:0 auto 15px auto; padding:15px 0; display:block; width:auto; color:#FFF; background-color:#7B7960; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:25px; }
#prodCuerpo #prodOpc #prodMenusub #prodMapa { margin:0 auto; padding:0 0 0 0; display:block; width:250px; height:auto; }

#prodCuerpo #hoteles { margin:0 10px 20px 10px; padding:0 0 0 0; display:none; text-align:left; }
#prodCuerpo #hoteles h2 { padding-top:10px; text-align:left; border-top:solid 1px #999; }
#prodCuerpo #hoteles h3 { margin-bottom:1px; text-align:left; }

#prodCuerpo #detallado { margin:0 0 20px 0; padding:0 0 0 0; display:none; text-align:left; }

#prodCuerpo article { font-family:Arial, Helvetica, sans-serif; }

#prodCuerpo #itinerario { margin:0 0 20px 0; padding:0 0 0 0; display:none; }
#prodCuerpo #itinerario h2 { margin:0 0 20px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #itinerario #itiIconos { margin:0; padding:0; }
#prodCuerpo #itinerario #itiIconos img { margin:0 10px; padding:0; }
#prodCuerpo #itinerario p { margin:20px 0 0 0; padding:0; text-align:left; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #itinerario p strong { display:block; width:auto; text-align:left; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #itinerario p span { margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #itinerario { font-family:Verdana, Arial, Helvetica; font-size:12px; text-align:left; padding:0 15px;  background-image:url(../images/fondo-home.gif) }

#prodCuerpo #itinerario .secc{
	display:none;
}
#prodCuerpo #itinerario .activo{
	display:block;
}

#prodCuerpo #itinerario .dia { 
	font-size: 12px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 0px;
	/* border-top: 1px solid #aaaaaa; */
	margin: 15px 0 0 0;
	background: rgb(255, 206, 157);
	display: table;
	/* width: 25%; */
}
#prodCuerpo #itinerario .det { font-size:12px; font-weight:bold; margin: 5px 0 0 0 }
#prodCuerpo #itinerario .otros { margin: 8px 0 0 0; padding:8px; border: 1px solid #990000; }
	
#prodCuerpo #itinerario #tabPrec { margin-top:20px; width:100%; }
#prodCuerpo #itinerario #tabPrec tr td { padding:12px; text-align:center; border:solid 1px #CCCCCC; }
	
#prodCuerpo #itinerario #tabHotel { margin-top:20px; width:100%; }
#prodCuerpo #itinerario #tabHotel tr td { padding:12px; text-align:center; border:solid 1px #CCCCCC; }
	
#prodCuerpo #itinerario #contenedor { margin:0; padding:0; display:block; width:640px; height:auto; overflow:scroll; border:solid 1px #000; }
#prodCuerpo #itinerario #tablaTS { width:100%; }
#prodCuerpo #itinerario #tablaTS td { padding:4px; text-align:center; border:solid 1px #CCCCCC; }
#prodCuerpo #itinerario #tablaTS .cabe1 td { color:#FFF; background:#333; border:0; }
#prodCuerpo #itinerario #tablaTS .cabe2 td { color:#FFF; background:#999; border:0; }
#prodCuerpo #itinerario #tablaTS .cabe3 td { color:#FFF; background:#666; border:0; font-size:12px; }
#prodCuerpo #itinerario #contenedor #tablaTS { width:1300px; }
	
#prodCuerpo #itinerario .tablaTS { width:100%; }
#prodCuerpo #itinerario .tablaTS td { padding:4px; text-align:center; border:solid 1px #CCCCCC; }
#prodCuerpo #itinerario .tablaTS .cabe1 td { color:#FFF; background:#333; border:0; }
#prodCuerpo #itinerario .tablaTS .cabe2 td { color:#FFF; background:#999; border:0; }
#prodCuerpo #itinerario .tablaTS .cabe3 td { color:#FFF; background:#666; border:0; font-size:12px; }
	
#prodCuerpo #itinerario .tablaART {}
#prodCuerpo #itinerario .tablaART tr td { padding:5px; border:solid 1px #CCCCCC; text-align:center; }
#prodCuerpo #itinerario .tablaART .cabe1 td { background:#666; color:#FFF; }
#prodCuerpo #itinerario .tablaART .celizq { text-align:left; background:#996; color:#FFF; }
	
#prodCuerpo #itinerario .tablaARTpeq { width:400px; }
#prodCuerpo #itinerario .tablaARTpeq tr td { padding:5px; border:solid 1px #CCCCCC; text-align:center; }
#prodCuerpo #itinerario .tablaARTpeq .cabe1 td { background:#666; color:#FFF; }
#prodCuerpo #itinerario .tablaARTpeq .celizq { text-align:left; background:#996; color:#FFF; }

#prodCuerpo #itinerario #prodWord { margin:15px 0; display:block; width:200px; }
#prodCuerpo #itinerario #prodWord img { float:right; }

#prodCuerpo #fechas { margin:0 0 20px 0; padding:0 0 0 0; display:none; }
#prodCuerpo #fechas h2 { margin:0 0 20px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #fechas p { margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #fechas p strong { margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #fechas .fechaMes { margin:15px 0 0 0; padding:0 0 0 0; display:inline; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }

#prodCuerpo #precios { margin:0 0 20px 0; padding:0 0 0 0; display:none; text-align:center; }
#prodCuerpo #precios h2 { margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #precios #precLis { margin:0 auto; padding:15px; border:0; list-style:none; }
#prodCuerpo #precios #precLis .precTemp { margin:0 10px; padding:15px; display:inline-block; border:solid 1px #BBB; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #precios #precLis .precTemp h3 { margin:0 0 20px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #precios #precLis .precTemp h3.Baja { color:#f00; }
#prodCuerpo #precios #precLis .precTemp h3.Media { color:#00f; }
#prodCuerpo #precios #precLis .precTemp h3.Alta { color:#000; }
#prodCuerpo #precios #precLis .precTemp h3.Extra { color:#0f0; }

#prodCuerpo #precios #fechasLista { width:100%; text-align:center; }
#prodCuerpo #precios #fechasLista #fechasMenuMeses { margin:0 auto 0 auto; padding:10px 0 10px 110px; display:block; width:360px; color:#006666; font-size:18px; box-sizing:border-box; background:#D7ECF7; }
#prodCuerpo #precios #fechasLista .fechasMes { margin:0 auto 0 auto; padding:0 0 0 0; display:none; width:360px; border:solid 1px #ccc; }
#prodCuerpo #precios #fechasLista .fechasMes .fechaMesTit { margin:0 0 0 0; padding:10px 0 10px 0; display:block; width:100%; color:#FFF; background:#CCC; font-weight:bold; }
#prodCuerpo #precios #fechasLista .fechasMes .fechaMesTit span { display:inline-block; width:33%; } 
#prodCuerpo #precios #fechasLista .fechasMes .fechasFila { margin:0 0 0 0; padding:10px 0 10px 0; display:block; width:100%; border-bottom:solid 1px #CCC; }
#prodCuerpo #precios #fechasLista .fechasMes .fechasFila span { display:inline-block; width:33%; text-decoration:undeline; }

#prodCuerpo .tempoAlta { color:#000; font-size:16px; font-weight:normal; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo .tempoMedia { color:#900; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo .tempoBaja { color:#009; font-size:17px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo .tempoExtra { color:#090; font-weight:bold; font-size:16px; font-weight:normal; font-family:Arial, Helvetica, sans-serif; }

#prodCuerpo #incluye { margin:0 0 20px 0; padding:0; display:none; text-align:center; }
#prodCuerpo #incluye h2 { margin:0 0 20px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #incluye h3 { margin:20px 0 5px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #incluye ul { margin:0 auto; width:60%; }
#prodCuerpo #incluye ul li { text-align:left; font-family:Arial, Helvetica, sans-serif; }

#prodCuerpo #formu { margin:0 auto 30px auto; padding:0; display:none; width:100%; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #formu .txt { margin:0 auto 5px auto; padding:6px; display:block; width:325px; border:solid 1px #666666; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #formu .area { margin:0 auto 5px auto; padding:6px; display:block; width:325px; height:80px; border:solid 1px #666666; font-family:Arial, Helvetica, sans-serif; }
#prodCuerpo #formu .btn { margin:0 auto; padding:10px 0; display:block; width:160px; color:#FFF; background:#79795F; cursor:pointer; border:0; font-family:Arial, Helvetica, sans-serif; text-decoration:none; }
#prodCuerpo #formu #envioMensaje { color:#FB7303; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
#prodCuerpo #formu #fecsal { padding:5px; display:inline; }

#prodOtros { margin:0; padding:20px; display:table-cell; width:20%; border-left:solid 5px #DDD; }
#prodOtros h3 { margin:0 0 20px 0; padding:20px 0; display:block; width:auto; background:#666; color:#FFF; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
#prodOtros .prodSimil { margin:0 0 15px 0; padding:0 0 15px 0; border-bottom:solid 2px #CCC; }
#prodOtros .prodSimil a { margin:0; padding:0; color:#333; font-family:Arial, Helvetica, sans-serif; }
#prodOtros .prodSimil a h4 { margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodOtros .prodSimil a span { margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; }
#prodOtros .prodSimil a p { margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; }

.textoDescrip{
    background: #eaeaea;
    padding: 10px;
    margin-top: 60px;
    font-family: Arial, Helvetica, sans-serif;
}
.textoDescrip h2{
	color: #ff8000;
}

.textoDescrip .total .parr{
	width: 48%;
    text-align: left;
    display: inline-block;
}

/* Pie */
#pieFondo { width:100%; background:#666; }
#pieFondo #pie { margin:0 auto; padding:20px; display:block; width:1260px; background:#000; }
#pieFondo #pie #pieMenuIni { margin:0 auto; padding:0 0 0 0; display:table; width:100%; border-bottom:solid 1px #777; }
#pieFondo #pie #pieMenuIni li { margin:0 0 0 0; padding:0 0 0 0; display:table-cell; }
#pieFondo #pie #pieMenuIni li a { margin:0 0 10px 0; padding:15px; display:block; color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
#pieFondo #pie #pieMenuIni li a span { display:block; }
#pieFondo #pie #pieMenuIni li a img { display:none; }
#pieFondo #pie #pieCols { display:table; width:100%; }
#pieFondo #pie #pieCols .datos { display:table-cell; width:25%; }
#pieFondo #pie #pieCols .datos h3 { color:#FFF; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
#pieFondo #pie #pieCols .datos ul { margin:0; padding:0; list-style:none; }
#pieFondo #pie #pieCols .datos ul li { margin:0 0 15px 0; padding:0; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
#pieFondo #pie #pieCols .datos ul li a { color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
#pieFondo #pie #pieCols .datos ul li a span { display:inline; }
#pieFondo #pie #pieCols .datos ul li a img { margin:0; padding:0; display:none; border:0 !important; }
#pieFondo #pie #pieCols .datos ul #datoWhatsapp { display:block; }
#pieFondo #pie #pieCols .datos ul #datoWhatsapp img { margin:0; display:inline-block; vertical-align:top; }
#pieFondo #pie #pieCols .datos ul #datoWhatsapp span { margin:0; padding:6px 0; display:inline-block; border:0; vertical-align:top; }
#pieFondo #pie .lista { margin:0 0 0 0; padding:15px 0 0 0; display:block; width:100%; border-top:solid 1px #999999; }
#pieFondo #pie .lista a { color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
#pieFondo #pie #numCST { display:block; color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:12px; }
	
/* Resoluciones ---------------------------------------------------------------------------------------------------------------------------- */
@media screen and (max-width: 890px) {
   #buscadorPrincipal .busqSubSecc .selectize-input, select {
    text-align: left;
    vertical-align: middle;
    box-sizing: border-box;
    display: inline-block;
    width: 102%;
    }
    #buscadorPrincipal .busqSubSecc p {
    margin: 0px 0 12px;
    text-align: center;
    font-size: 12px;
}
}
@media screen and (max-width: 800px) {
	#cabe { margin:0; padding:0; position:relative; display:block; width:100%; height:auto; }
	#cabe #cabeGalFondo { margin:0; padding:0; position:relative; top:auto; left:auto; display:block; width:100%; height:auto; text-align:center; border-bottom:solid 1px #000000; background:url(../images/cuerpo-fondo-transparente.png) repeat-x; z-index:1; }
	#cabe #cabeGalFondo header { margin:0 auto; padding:0; display:block; width:100%; height:auto; color:#FFF; text-align:center; }
        .cabe2{height:auto !important;}
    #cabe #cabeGalFondo header #btnLisTel { margin:0 0 0 0; padding:0 0 0 0; display:table; width:100%; border:solid 1px #AAA; }
    #cabe #cabeGalFondo header #fonoLis { margin:0 0 0 0; padding:0; display:none; width:100%; list-style:none; text-align:center; border:0; vertical-align:top; }
	#cabe #cabeGalFondo header #fonoLis li { margin:0; padding:6px 0; display:block; width:auto; border:solid 1px #95957B; text-align:center; color:#333; background:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:bold; }
    
	#cabe #cabeGalFondo header #logo { margin:12px 0 0 18px; padding:0; float:left; display:block; }
	#cabe #cabeGalFondo header #logo img { margin:0; display:block; border:0 !important; }
	
	#cabe #cabeGalFondo header #menuBtn { margin:20px; padding:0; float:right; display:none; }
	#cabe #cabeGalFondo header #menuBtn img { margin:0; display:block; border:0 !important; }
	
	#cabe #cabeGalFondo header #telefonos { margin:0; padding:30px 20px 0 0; float:right; display:inline-block; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:16px; }

    #cabe #cabeGalFondo header #menuAdmin { margin:0 0 0 0; padding:0; display:block; width:auto; float:none; text-align:right; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu { margin:0 auto 0 auto; padding:0 0 0 0; list-style:none; display:table; width:90%; height:auto; vertical-align:top; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li { display:table-cell; width:auto; border:0; vertical-align:top; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp { margin:0 0 0 0; padding:20px 0; display:block; height:100%; border:0; text-align:center; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:18px; text-decoration:none; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp:hover { text-decoration:underline; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .opcAlto { display:none }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .opcAlto:hover { text-decoration:none; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminT { display:none; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp span { display:block; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp img { display:none; }

	#cabe #cabeGal .cabeGalImg { margin:0 auto; position:absolute; top:0; left:0; display:block; width:100%; height:auto; background-position:center center; background-size:cover; background-repeat:no-repeat; }
	#cabe #cabeGal #galImg1 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-1x800.jpg); -webkit-animation:ImgGal1 40s infinite; -moz-animation:ImgGal1 40s infinite; -ms-animation:ImgGal1 40s infinite; -o-animation:ImgGal1 40s infinite; }
	#cabe #cabeGal #galImg2 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-2x800.jpg); -webkit-animation:ImgGal2 40s infinite; -moz-animation:ImgGal2 40s infinite; -ms-animation:ImgGal2 40s infinite; -o-animation:ImgGal2 40s infinite; }
	#cabe #cabeGal #galImg3 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-3x800.jpg); -webkit-animation:ImgGal3 40s infinite; -moz-animation:ImgGal3 40s infinite; -ms-animation:ImgGal3 40s infinite; -o-animation:ImgGal3 40s infinite; }
	#cabe #cabeGal #galImg4 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-4x800.jpg); -webkit-animation:ImgGal4 40s infinite; -moz-animation:ImgGal4 40s infinite; -ms-animation:ImgGal4 40s infinite; -o-animation:ImgGal4 40s infinite; }
	#cabe #cabeGal #galImg5 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-5x800.jpg); -webkit-animation:ImgGal5 40s infinite; -moz-animation:ImgGal5 40s infinite; -ms-animation:ImgGal5 40s infinite; -o-animation:ImgGal5 40s infinite; }
	#cabe #cabeGal #galImg6 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-6x800.jpg); -webkit-animation:ImgGal6 40s infinite; -moz-animation:ImgGal6 40s infinite; -ms-animation:ImgGal6 40s infinite; -o-animation:ImgGal6 40s infinite; }
	
	/* ----------------buscador index------------ */

	#buscadorIndex #frmC{
		position: initial;
		padding: 10px 0 0;
	}
	#buscadorIndex #frmC #content {
    width: 100%;
    margin: 0 auto;
	}
	#buscadorIndex #frmC #content h2 {
    margin: 0 50px 10px;
    text-shadow: none;
    color: #ff6600;
	}
	#buscadorIndex #frmC #content #tabs {
    margin: 0;
    padding: 0;
    text-align: center;
	}

	#buscadorIndex #frmC #content .busqSeccion {
    background:rgba(255, 102, 0, 0.79);
    padding: 10px 35px 26px;
    margin-bottom: 15px;
	}
        #buscarEuropaises #paises2{
float:left;
margin-right:15px;
    width: 100%;
}

	/* ----------------buscador principal------------ */

	#buscadorPrincipal{
		position: initial;
		padding: 10px 0 0;
	}
	#buscadorPrincipal #content {
    width: 100%;
    margin: 0 auto;
	}
	#buscadorPrincipal #content h2 {
    margin: 0 50px 10px;
    text-shadow: none;
    color: #ff6600;
	}
	#buscadorPrincipal #content #tabs {
    margin: 0;
    padding: 0;
    text-align: center;
	}

	#buscadorPrincipal #content .busqSeccion {
    background: #FF6600;
    padding: 10px 35px 26px;
    margin-bottom: 15px;
	}
	#buscadorPrincipal .busqSubSecc .selectize-input{
		width: 100%;
	}
        #buscarEuropaises #paises{
float:left;
margin-right:15px;
    width: 100%;
}
#buscarEuropaises #ciudadesCont{
float:left;
margin-right:15px;
    width: 100%;
}

	#total { margin:0 auto; padding:0px; display:block; width:100%; }
	
	#secHome { margin:0; padding:0; display:block; border:0; }
	
	#secHome #menuSecBtn { margin:-80px 0 0 0; padding:10px 0; position:absolute; display:block; width:100%; height:auto; text-align:center; border:0; z-index:90; }
	#secHome #menuSecBtn span { margin:0 0; padding:20px 50px 0 50px; display:inline-block; width:auto; height:38px; color:#333; border:solid 1px #CCCCCC; vertical-align:middle; background:#FFF; font-family:Arial, Helvetica, sans-serif; }
	#secHome #menuSecBtn img { margin:0 0; display:inline-block; width:auto; height:auto; border:0 !important; vertical-align:middle; }
	#secHome #menuSec { margin:0 auto; padding:0; display:block; width:100%; list-style:none; }
	#secHome #menuSec.noActivo { display:none; }

	#secHome #menuSec li { margin:0; padding:0; display:inline-block; }
	#secHome #menuSec .opc { margin:0; padding:0; position:relative; display:inline-block; width:200px; height:96px; border:0; text-align:center; text-decoration:none; }
	#secHome #menuSec .opc .opcImg { margin:0; padding:0; position:absolute; bottom:0; left:0; display:block; width:100%; height:96px; border:0; opacity:0; transition:bottom 0.5s, opacity 0.5s; }
	
	#secHomeDatos #homeCuerpo #homePromo { margin: 0 auto 20px auto;
    padding: 0 44px 0 44px;
    display: block;
    width: auto;
    height: auto;
    text-align: center;
    vertical-align: middle;
    border: solid 4px #DCD0C8;
    background: url(../images/home-promocion-fondo.jpg);
    font-family: Arial, Helvetica, sans-serif;
    background-size: cover;
    background-position: center; }
    #secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoSubTit span { display:block; font-size:18px; }
	
	
	#secHomeDatos #homeCuerpo #descrip { 
        margin: 0 0 20px 0;
        padding: 20px;
        display: block;
        width: 93%;
        height: auto;
        vertical-align: middle;
        font-family: Arial, Helvetica, sans-serif;
    }
	#secHomeDatos #homeCuerpo #descrip .parr2 { display:none; }
    
    #secHomeDatos #homeCuerpo #nosotros { margin:0 0 20px 0; padding:20px; display:table-cell; width:auto; height:auto; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #nosotros p { margin:0 auto 30px auto; width:90%; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #nosotros #somosMapa { padding:8px; width:auto; background-color:#FFF; text-align:center; color:#600; font-size:16px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; }
  #secHomeDatos #homeCuerpo .bg-large{
    position: fixed;
    background: rgba(0, 0, 0, 0.38);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 1;
  }
  
	#secHomeDatos #homeCuerpo #homeFormu { 
    background-color: white;
    margin: 0 auto;
    padding: 0 20px 20px;
    display: none;
    width: auto;
    height: auto;
    border: solid 4px #DCD0C8;
    position: fixed;
    z-index: 8;
    top: 36%;
    left: 20%;
    /* margin: 0 21%; */
    width: 426px;
    box-sizing: border-box;
    }
    #secHomeDatos #homeCuerpo #homeFormu .close{
      color: #727272;
      font-size: 23px;
      display: inline-block;
      float: right;
      padding: 10px;
    }
	
	#menuInfo { margin:0; padding:0; display:block; width:100%; text-align:center; border:0; }
	#menuInfo .circu { margin:0; padding:0; display:inline-block; width:198px; height:145px; vertical-align:auto; border:0; }
	#menuInfo .circu a { padding:60px 20px; display:block; text-align:center; text-decoration:none; font-weight:bold; }

	.secHomeTours .tourHomeList { margin:0 0 10px 0; padding:0 0 0 0; position:relative; display:inline-block; width:346px; height:280px; vertical-align:top; }
	.secHomeTours .listaVerMas { margin:0 auto 0 auto; padding:15px 0 15px 0; display:block; width:95%; height:auto; text-align:center; text-decoration:none; color:#777; border:solid 1px #FF9326; background:url(../images/icono-lista-flecha.gif) no-repeat 75% center; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
	.secHomeTours .medio { margin:0 0 10px 0; }
	
	#secHomePaises #listaPaises li { margin:0; padding:0; display:table-cell; width:16%; height:auto; border:solid 1px #333333; }
	#secHomePaises #listaPaises li .pais span { margin:0; padding:10px 0; display:block; width:100%; background:#FFF; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:14px; }

	#social { margin:0 0 30px 0; padding:0; display:block; width:100%; }
	#social #facebook { margin:0; padding:0; display:block; width:auto; height:auto; border:0; vertical-align:top; }
	#social #otrosMundo { margin:20px 0 0 0; padding:0; display:block; width:auto; height:auto; border:0; vertical-align:top; }

	#listaCuerpo { margin:30px 0 30px 0; padding:0; display:block; width:auto; height:auto; }
	#secLista { margin:0; padding:30px 0; display:table; width:auto; border:solid 4px #CCC; }
	#secLista .tourLista div { margin:0; padding:0; display:table-cell; width:45%; border:0; vertical-align:middle; text-align:left; }
	#secLista .tourLista div h3 { margin:0 10px 10px 20px; padding:0; }
	#secLista .tourLista div .paises { margin:0 10px 0 20px; padding:0; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio { margin:0; padding:0; display:table-cell; width:23%; border:0; vertical-align:middle; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .imagen { margin:0; padding:0; display:table-cell; width:31%; border:0; vertical-align:middle; }
	#secListaNotas { margin:0; padding:30px; display:block; width:auto; border:solid 4px #CCC; }
    
    #secListaPaises { margin:0; padding:30px 30px; display:table-cell; width:90%; border:solid 4px #CCC; }
    #secListaPaises .tourHome .imagen { position:relative; float:right; width:48%; }
    #secListaPaises .tourHome .paises { margin:0 0 20px 0; padding:0 20px; float:left; width:43%; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
	
	#producto { margin:20px 0; padding:0; display:block; width:auto; border:none; }
	#prodCuerpo { margin:0; padding:20px; display:block; width:auto; border:solid 5px #DDD; }
	#prodOtros { margin:0; padding:20px; display:block; width:auto; border:solid 5px #DDD; }
	
	#pieFondo { width:100%; background:#666; }
	#pieFondo #pie { margin:0 auto; padding:15px 0; display:block; width:100%; background:#000; }
	#pieFondo #pie #pieCols { margin:0 auto; display:table; width:95%; }
	#pieFondo #pie #pieCols .datos { display:table-cell; width:33%; }
	#pieFondo #pie #pieCols .datos h3 { color:#FFF; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul { margin:0; padding:0; list-style:none; }
	#pieFondo #pie #pieCols .datos ul li { margin:0 0 15px 0; padding:0; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul li a { color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie .lista { margin:0 auto; padding:15px 0 0 0; display:block; width:95%; border-top:solid 1px #999999; }
	#pieFondo #pie .lista a { color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
}
@media screen and (max-width: 480px) {
   #buscadorPrincipal #content #tabs li {
    display: inline-block;
    width: 25%;
    font-size: 15px;
}
#buscadorPrincipal #content .busqSeccion {
    background: #FF6600;
    padding: 10px 51px 14px;
    margin-bottom: 15px;
}
#buscadorPrincipal .busqSubSecc p {
    margin: 0px 0 11px;
    text-align: center;
    font-size: 14px;
}
}
@media screen and (max-width: 390px) {
	#logoASTA { width:100%; height:auto; }
    
	#cabe { margin:0; padding:0; position:relative; display:block; width:100%; height:auto; }
	#cabe #cabeGalFondo { margin:0; padding:0; position:relative; top:auto; left:auto; display:block; width:100%; height:auto; text-align:center; border-bottom:solid 1px #000000; background:url(../images/cuerpo-fondo-transparente.png) repeat-x; z-index:50; }
	#cabe #cabeGalFondo header { margin:0 auto; padding:0; display:block; width:100%; height:auto; color:#FFF; text-align:right; }
  #cabe #cabeGalFondo header .head-container{
		display:inline-block;
		position: fixed;
		background: white;
		width: 100%;
		z-index: 2;
		top: 0;
		right: 0;
  }
    #cabe #cabeGalFondo header #btnLisTel { margin:95px 0 0 0; padding:0 0 0 0; display:table; width:100%; border:solid 1px #AAA; position:relative;}
    #cabe #cabeGalFondo header #fonoLis { margin:0 0 0 0; padding:0; display:none; width:100%; list-style:none; text-align:center; border:0; vertical-align:top; }
	#cabe #cabeGalFondo header #fonoLis li { margin:0; padding:12px 0; display:block; width:auto; border:solid 1px #95957B; text-align:center; color:#333; background:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:15px; font-weight:bold; }
    #cabe #cabeGalFondo header #fonoLis #lisWApp { display:block; }
    
	#cabe #cabeGalFondo header #logo { margin:12px 0 10px 4px; padding:0; float:left; display:block; width:45%; }
	#cabe #cabeGalFondo header #logo img { margin:0; display:block; border:0 !important; width:100%; height:auto; }
	#cabe #cabeGalFondo header .menu-resp{
		display: inline-block;
    font-size: 40px;
		padding: 7px 17px;
		color: #6d8089;
		margin: 16px 6px;
	}
	#cabe #cabeGalFondo header .menu-resp:hover{
		color: #445156;
	}
	#cabe #cabeGalFondo header #menuBtn { margin:20px; padding:0; float:right; display:none; }
	#cabe #cabeGalFondo header #menuBtn img { margin:0; display:block; border:0 !important; }
	
	#cabe #cabeGalFondo header #telefonos { margin:0; padding:30px 20px 0 0; float:right; display:none; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
	
    #cabe #cabeGalFondo header #menuAdmin { margin:0 0 0 0; padding:0; display:block; width:100%; float:right; text-align:right; border:0; }
	#cabe #cabeGalFondo header #menuAdmin .drop_menu { 
    margin: 0 0 0 auto;
    padding: 0 0 177px;
    list-style: none;
    display: none;
    width: 100%;
    border: 0;
    vertical-align: top;
    height: 524px;
    overflow-y: scroll;
    position: absolute;
    z-index: 15;
    background: white;
  }
	#cabe #cabeGalFondo header #menuAdmin .drop_menu li{     
			padding: 0 0 0 0;
			display:block;
			width: auto;
			border: 0;
    }
  #cabe #cabeGalFondo header #menuAdmin .drop_menu .opcion-resp{
  	display:block;
  }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu .opcion-resp a {
			margin: 0 0 0 0;
			padding: 19px 0;
			display: block;
			height: auto;
			border: 0;
			text-align: center;
			color: #402000;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 18px;
			text-decoration: none;
			border-bottom: 1px solid;
    }

    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp { margin:0 0 0 0; padding: 19px 0; display:block; height:auto; border:0; text-align:center; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:18px; text-decoration:none; border-bottom: 1px solid;}
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminB { display:block; }
	#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminC { display:none; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminT { display:none; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp span { display:block; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp img { margin:25px auto; display:block;  }
	
    #cabe #cabeGal .cabeGalImg { margin:0 auto; position:absolute; top:0; left:0; display:block; width:100%; height:auto; background-position:center center; background-size:cover; background-repeat:no-repeat; }
   	#cabe #cabeGal #galImg1 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-1x375.jpg); -webkit-animation:ImgGal1 40s infinite; -moz-animation:ImgGal1 40s infinite; -ms-animation:ImgGal1 40s infinite; -o-animation:ImgGal1 40s infinite; }
	#cabe #cabeGal #galImg2 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-2x375.jpg); -webkit-animation:ImgGal2 40s infinite; -moz-animation:ImgGal2 40s infinite; -ms-animation:ImgGal2 40s infinite; -o-animation:ImgGal2 40s infinite; }
	#cabe #cabeGal #galImg3 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-3x375.jpg); -webkit-animation:ImgGal3 40s infinite; -moz-animation:ImgGal3 40s infinite; -ms-animation:ImgGal3 40s infinite; -o-animation:ImgGal3 40s infinite; }
	#cabe #cabeGal #galImg4 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-4x375.jpg); -webkit-animation:ImgGal4 40s infinite; -moz-animation:ImgGal4 40s infinite; -ms-animation:ImgGal4 40s infinite; -o-animation:ImgGal4 40s infinite; }
	#cabe #cabeGal #galImg5 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-5x375.jpg); -webkit-animation:ImgGal5 40s infinite; -moz-animation:ImgGal5 40s infinite; -ms-animation:ImgGal5 40s infinite; -o-animation:ImgGal5 40s infinite; }
	#cabe #cabeGal #galImg6 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-6x375.jpg); -webkit-animation:ImgGal6 40s infinite; -moz-animation:ImgGal6 40s infinite; -ms-animation:ImgGal6 40s infinite; -o-animation:ImgGal6 40s infinite; }

	/* ----------------buscador index------------ */
	#buscadorIndex #frmC #content #tabs span{
	display:none;
	}

	#buscadorIndex #frmC #content #tabs .opcBusc {
	    text-transform: capitalize;
	}
	#buscadorIndex #frmC #content #tabs li .active {
		padding: 10px 10px;
	}
	#buscadorIndex #frmC #content #tabs li .inactive {
		padding: 10px 5px;
	}

	#buscadorIndex #frmC .busqSubSecc {
    	width: 100%;
	}

	#buscadorIndex #frmC .busqSubSecc .selectize-input {
		padding: 8px 12px;
	}
	#buscadorIndex #frmC .botonBuscarSec {
			display: block;
    	width: 100%;
	}

	/* ----------------buscador principal------------ */
	#buscadorPrincipal #content #tabs span{
	display:none;
	}
	#buscadorPrincipal #content .busqSeccion {
		padding: 10px 0 26px;
	}
	#buscadorPrincipal .busqSubSecc p {
	    margin: 15px 0 10px;
	}
        
        #buscarEuropaises #paises{
float:left;
margin-right:15px;
    width: 100%;
}
        
        
	#buscadorPrincipal #content #tabs .opcBusc {
	    text-transform: capitalize;
	}
	#buscadorPrincipal #content #tabs li .active {
		padding: 10px 10px;
                border-top-right-radius: 5px;
    border-top-left-radius: 5px;
	}
	#buscadorPrincipal #content #tabs li .inactive {
		padding: 10px 5px;
                border-top-right-radius: 5px;
    border-top-left-radius: 5px;
	}

	#buscadorPrincipal .busqSubSecc {
    	width: 100%;
	}

	#buscadorPrincipal .busqSubSecc .selectize-input {
		padding: 8px 12px;
	}
	#buscadorPrincipal .botonBuscarSec {
			display: block;
    	width: 100%;
	}

    #total { margin:0 auto; padding:0px; display:block; width:100%; }
	
	#secHome { margin:0; padding:0; display:block; border:0; }
	#secHome #menuSecBtn { margin:0 0 0 0; padding:10px 0; position:static; display:block; width:auto; height:auto; text-align:center; border:0; }
	#secHome #menuSecBtn span { margin:0 0; padding:20px 40px 0 40px; display:inline-block; width:auto; height:38px; color:#333; border:solid 1px #CCCCCC; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
	#secHome #menuSecBtn.soloProd span { margin:0 0; padding:20px 40px 0 40px; display:inline-block; width:auto; height:38px; color:#333; border:solid 1px #CCCCCC; vertical-align:middle; background:#FFF; font-family:Arial, Helvetica, sans-serif; }
	#secHome #menuSecBtn img { margin:0 0; display:inline-block; width:auto; height:auto; border:0 !important; vertical-align:middle; }
	#secHome #menuSec { margin:0 auto; padding:0; display:block; width:100%; list-style:none; }
	#secHome #menuSec.noActivo { display:table; }
	#secHome #menuSec li { margin:0; padding:0; display:block; }
	#secHome #menuSec .opc { margin:0; padding:0; position:static; display:table; width:100%; height:70px; border:0; border-bottom:solid 1px #FFF; text-align:center; text-decoration:none; }
	#secHome #menuSec .opc .opcImg { margin:0; padding:0; position:static; bottom:auto; left:auto; display:table-cell; width:65%; height:70px; border:0; opacity:0; transition:bottom 0.5s, opacity 0.5s; }
	#secHome #menuSec .opc .opcTxt { margin:0 auto; padding:0 0; position:static; bottom:auto; left:auto; display:table-cell; width:35%; height:70px; border-bottom:solid 1px #CCCCCC; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#402000; background-color:#fff; transition:color,background-color 1s; }
	
	#secHomeDatos h1 { margin:20px 0 20px 0; padding:0; display:block; width:100%; height:auto; color:#FF7A22; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:26px; }
	
	#secHomeDatos #homeCuerpo { margin:0 auto 30px auto; display:block; width:100%; }
	#secHomeDatos #homeCuerpo #descrip { margin:0 0 20px 0; padding:20px; display:none; width:65%; height:auto; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }

	#secHomeDatos #homeCuerpo #homePromo { margin:0 auto 20px auto; padding:0 44px 0 44px; display:block; width:auto; height:auto; text-align:center; vertical-align:middle; border:solid 4px #DCD0C8; background:url(../images/home-promocion-fondo-movil.jpg); font-family:Arial, Helvetica, sans-serif; }
    #secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoSubTit span { display:block; font-size:18px; }
	
    #secHomeDatos #homeCuerpo #nosotros { margin:0 0 20px 0; padding:20px; display:block; width:auto; height:auto; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #nosotros p { margin:0 auto 30px auto; width:auto; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #nosotros #somosMapa { padding:8px; width:auto; background-color:#FFF; text-align:center; color:#600; font-size:16px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; }
    
    #secHomeDatos #homeCuerpo #infoGrupo { margin:0 0 20px 0; padding:0; display:block; width:100%; height:auto; text-align:center; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
    #secHomeDatos #homeCuerpo #infoGrupo p { margin:0 auto 20px auto; width:100%; text-align:left; font-size:14px; font-family:Arial, Helvetica, sans-serif;}
    
	#secHomeDatos #homeCuerpo #homeFormu { margin:0; padding:20px; display:none; width:auto; height:auto; border:solid 4px #DCD0C8; }
    #secHomeDatos #homeCuerpo #contacFormu { margin:0; padding:20px; display:block; width:auto; height:auto; border:solid 4px #DCD0C8; }
	#secHomeDatos #homeCuerpo #contacFormu #frmC .formuTxt { margin:0 auto 10px auto; padding:10px; display:block; width:90%; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #contacFormu #frmC .formuComen { margin:0 auto 10px auto; padding:10px; display:block; width:90%; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #contacFormu #frmC .formuBtn{ margin:0 auto 10px auto; padding:10px; display:block; width:50%; border:0; background:#FFC9B0; color:#6A2900; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
	#secHomeDatos #homeCuerpo #contacFormu #frmC .corto { display:inline-block; width:40%; }
	
	#menuInfo { margin:0; padding:0; display:block; width:100%; text-align:center; border:0; list-style:none; }
	#menuInfo .circu { margin:0 0 10px 0; padding:0; display:inline-block; width:auto; height:60px; vertical-align:auto; border:0; }
	#menuInfo .circu a { margin:0; padding:20px; display:block; width:auto; height:auto; text-decoration:none; font-weight:bold; }
	#menuInfo .celes { background:none; border:solid 1px #00BFDA; }
	#menuInfo .celes a { color:#FF56D9; }
	#menuInfo .naran { background:none; border:solid 1px #FF7D2B; }
	#menuInfo .naran a { color:#007900; }
	
	.secHomeTours .tourHomeList { margin:0 0 10px 0; padding:0 0 0 0; position:relative; display:inline-block; width:100%; height:280px; vertical-align:top; }
    .secHomeTours .tourHomeList .imgfondo { margin:0 0 0 0; position:absolute; top:0; left:0; width:100%; height:280px; z-index:-1; }
	.secHomeTours .listaVerMas { margin:0 auto 0 auto; padding:15px 0 15px 0; display:block; width:95%; height:auto; text-align:center; text-decoration:none; color:#777; border:solid 1px #FF9326; background:url(../images/icono-lista-flecha.gif) no-repeat 75% center; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
	.secHomeTours .medio { margin:0 0 10px 0; }
	
	#secHomePaises #listaPaises { margin:0; padding:0; display:block; list-style:none; width:100%; }
	#secHomePaises #listaPaises li { margin:0; padding:0; display:inline-block; width:135px; height:auto; border:solid 1px #333333; }

	#social { margin:0 0 30px 0; padding:0; display:none; width:100%; }
	
	#listaCuerpo { margin:30px 0 30px 0; padding:0; display:block; width:auto; height:auto; }
	#secLista { margin:0; padding:30px 10px; display:block; width:auto; border:solid 4px #CCC; }
	#secLista .tourLista div { margin:0; padding:0; display:block; width:auto; border:0; vertical-align:middle; text-align:center; }
	#secLista .tourLista div h2 { margin:0 10px 10px 0; padding:0; }
	#secLista .tourLista div .paises { margin:0 10px 10px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourLista .salidas { margin:0 0 10px 0; padding:0; display:block; width:auto; border:0; vertical-align:middle; text-align:center; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio { margin:0; padding:0; display:block; width:auto; border:0; vertical-align:middle; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio span { display:block; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio strong { display:inline; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio a { display:block; margin:0; padding:0; color:#FF3366; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; }
	#secLista .tourLista .imagen { margin:10px 0 0 0; padding:0; display:block; width:auto; border:0; vertical-align:middle; }
    
	#secLista .tourListaDet { margin:0 0 20px 0; padding:0 0 0 0; display:block; width:100%; box-sizing:border-box; }
    #secLista .tourListaDet .columna { margin:0; padding:10px; display:inline-block; width:100%; box-sizing:border-box; border-bottom:0; border-top:solid 1px #a7a; border-left:solid 1px #a7a; border-right:solid 1px #a7a; vertical-align:middle; text-align:center; }
    #secLista .tourListaDet .columna h3 { margin:0 10px 10px 10px; padding:0; }
	#secLista .tourListaDet .columna .paises { margin:0 10px; padding:0; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila { margin:0; padding:10px; display:inline-block; width:100%; box-sizing:border-box; border-top:0; border-bottom:solid 1px #a7a; border-left:solid 1px #a7a; border-right:solid 1px #a7a; vertical-align:middle; text-align:left; }
    #secLista .tourListaDet .fila .detalle { margin:0; padding:10px 0; display:block; width:100%; box-sizing:border-box; border:solid 1px #ccc; vertical-align:middle; text-align:left; }
    #secLista .tourListaDet .fila .detalle .salidas { margin:0 0 0 0; padding:5px; display:block; width:auto; border:0; vertical-align:middle; text-align:left; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .detalle .precio { margin:0; padding:5px; display:block; width:auto; border:0; vertical-align:middle; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .detalle .precio span { display:inline-block; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourListaDet .fila .detalle .precio strong { display:inline-block; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .detalle .imagen { margin:0 0 0 0; padding:5px; display:block; width:auto; border:0; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .bordeUp { border-top:0; }
    
    #secListaNotas { margin:0; padding:30px; display:none; width:auto; border:solid 4px #CCC; }
    
    #secListaPaises { margin:0; padding:30px 10px; display:block; width:auto; border:solid 4px #CCC; }
    #secListaPaises .tourHome h4 { margin:0; padding:10px 10px; float:none; width:auto; }
	#secListaPaises .tourHome .paises { margin:0 0 20px 0; padding:0 20px; float:none; width:auto; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
    #secListaPaises .tourHome .imagen { position:relative; float:none; width:auto; }
	
    #secBusqueda #buscador .seleccionados { margin:0 auto; padding:2px; display:block; width:95%; border:solid 1px #aaa; color:#777; font-size:14px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
    
	#producto { margin:20px 0; padding:0; display:block; width:auto; border:none; }
	#prodCuerpo { margin:0; padding:0; display:block; width:auto; border:solid 5px #DDD; }
    #prodCuerpo #itinerario .otros { margin: 8px 0 0 0; padding:5px; border: 1px solid #990000; }
    #prodCuerpo #itinerario #contenedor { margin:0; padding:0; display:block; width:100%; height:auto; overflow:scroll; border:solid 1px #000; }
    
    #prodCuerpo #prodInfo { margin:0 0 0 0; padding:0 0 0 0; display:block; width:100%; border:0; }
	#prodCuerpo #prodInfo #infoIzq { margin:0 0 0 0; padding:5px 5px 5px 5px; display:block; width:100%; box-sizing:border-box; text-align:center; vertical-align:top; }
    #prodCuerpo #prodInfo #infoIzq p { margin:0 0 0 0; padding:0 0 5px 0; width:auto; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
	#prodCuerpo #prodInfo #infoDer { margin:0 0 0 0; padding:0 0 0 0; display:block; width:100%; }
    
	#prodCuerpo #prodOpc #prodMenu { margin:0 0 0 0; padding:0 0 0 0; float:none; display:block; width:100%; height:auto; list-style:none; vertical-align:top; }
    #prodCuerpo #prodOpc #prodMenu p { margin:0 0 0 0; padding:0 0 0 0; display:table; width:100%; height:auto; }
    #prodCuerpo #prodOpc #prodMenu p a { margin: 0 0 0 0; padding:10px 0 0 0; display: table-cell; width:24%; vertical-align:middle; border:solid 1px #BBB; font-family:Arial, Helvetica, sans-serif; text-decoration:none; color: #7b7960; font-weight: 700; }
	#prodCuerpo #prodOpc #prodMenusub { margin:0 0 0 0; padding:0 0 0 0; float:none; display:block; width:100%; vertical-align:top; }
    
    #prodCuerpo #prodQuote #quoteTitu { margin:0 0 0 0; padding:15px 0 15px 0; text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; }
	#prodCuerpo #prodQuote #quoteSub { margin:0 0 0 0; padding:0 0 0 0; text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
    
    #prodCuerpo #fechas .fechaMes { margin:15px 0 0 0; padding:0 0 0 0; display:block; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
	#prodCuerpo #prodMenu li a { margin:0; padding:20px 20px; display:block; color:#8A855B; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
	#prodCuerpo #formu .txt { margin:0 auto 5px auto; padding:6px; display:block; width:80%; border:solid 1px #666666; font-family:Arial, Helvetica, sans-serif; }
	#prodCuerpo #formu .area { margin:0 auto 5px auto; padding:6px; display:block; width:80%; height:80px; border:solid 1px #666666; font-family:Arial, Helvetica, sans-serif; }
    #prodCuerpo #formu #fecsal { margin:0 auto; padding:5px; display:block; width:80%; }
	#prodOtros { margin:0; padding:20px; display:block; width:auto; border:solid 5px #DDD; }
	
	.textoDescrip .total .parr{
		width: 100%;
	    text-align: center;
	    display: inline-block;
	}
	.textoDescrip .total img{
		max-width:95%;
	}

	#pieFondo { width:100%; background:#666; }
	#pieFondo #pie { margin:0 auto; padding:15px 0; display:block; width:100%; background:#000; }
    #pieFondo #pie #pieMenuIni { margin:0 auto; padding:0 0 0 0; display:block; width:100%; border-bottom:solid 1px #777; }
	#pieFondo #pie #pieMenuIni li { margin:0 0 0 0; padding:0 0 0 0; display:inline-block; }
    #pieFondo #pie #pieMenuIni li a span { display:none; }
	#pieFondo #pie #pieMenuIni li a img { display:block; }
	#pieFondo #pie #pieCols { margin:0 auto; display:block; width:95%; }
	#pieFondo #pie #pieCols .datos { display:block; width:100%; }
	#pieFondo #pie #pieCols .datos h3 { color:#FFF; text-align:center; border-bottom:solid 1px #fff; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul { margin:0; padding:0; list-style:none; }
	#pieFondo #pie #pieCols .datos ul li { margin:0 0 15px 0; padding:0; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul li a { color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul li a span { display:none; }
	#pieFondo #pie #pieCols .datos ul li a img { margin:0; padding:0; display:inline; border:0 !important; }
	#pieFondo #pie #pieCols .datos #webs { text-align:center; }
	#pieFondo #pie #pieCols .datos #webs li { display:inline-block; }
	#pieFondo #pie .lista { margin:0 auto; padding:15px 0 0 0; display:none; width:95%; border-top:solid 1px #999999; }
}

@media screen and (max-width: 300px) {
	#logoASTA { width:100%; height:auto; }
    
	#cabe { margin:0; padding:0; position:relative; display:block; width:100%; height:auto; }
	#cabe #cabeGalFondo { margin:0; padding:0; position:relative; top:auto; left:auto; display:block; width:100%; height:auto; text-align:center; border-bottom:solid 1px #000000; background:url(../images/cuerpo-fondo-transparente.png) repeat-x; z-index:50; }
	#cabe #cabeGalFondo header { margin:0 auto; padding:0; display:block; width:100%; height:auto; color:#FFF; text-align:center; }
    
    #cabe #cabeGalFondo header #btnLisTel { margin:0 0 0 0; padding:0 0 0 0; display:table; width:100%; border:solid 1px #AAA; }
    #cabe #cabeGalFondo header #fonoLis { margin:0 0 0 0; padding:0; display:none; width:100%; list-style:none; text-align:center; border:0; vertical-align:top; }
	#cabe #cabeGalFondo header #fonoLis li { margin:0; padding:12px 0; display:block; width:auto; border:solid 1px #95957B; text-align:center; color:#333; background:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:bold; }
    #cabe #cabeGalFondo header #fonoLis #lisWApp { display:block; }
    
	#cabe #cabeGalFondo header #logo { margin:12px 0 20px 18px; padding:0; float:left; display:block; }
	#cabe #cabeGalFondo header #logo img { margin:0; display:block; border:0 !important; width:90%; height:auto; }
	
	#cabe #cabeGalFondo header #menuBtn { margin:20px; padding:0; float:right; display:none; }
	#cabe #cabeGalFondo header #menuBtn img { margin:0; display:block; border:0 !important; }
	
	#cabe #cabeGalFondo header #telefonos { margin:0; padding:30px 20px 0 0; float:right; display:none; color:#402000; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
	
	#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminB { display:block; }
	#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminC { display:none; }
	#cabe #cabeGalFondo header #menuAdmin .drop_menu li #adminT { display:none; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp span { display:none; }
    #cabe #cabeGalFondo header #menuAdmin .drop_menu li .adminOp img { display:block; }
	
    #cabe #cabeGal .cabeGalImg { margin:0 auto; position:absolute; top:0; left:0; display:block; width:100%; height:auto; background-position:center center; background-size:cover; background-repeat:no-repeat; }
	#cabe #cabeGal #galImg1 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-1x340.jpg); -webkit-animation:ImgGal1 40s infinite; -moz-animation:ImgGal1 40s infinite; -ms-animation:ImgGal1 40s infinite; -o-animation:ImgGal1 40s infinite; }
	#cabe #cabeGal #galImg2 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-2x340.jpg); -webkit-animation:ImgGal2 40s infinite; -moz-animation:ImgGal2 40s infinite; -ms-animation:ImgGal2 40s infinite; -o-animation:ImgGal2 40s infinite; }
	#cabe #cabeGal #galImg3 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-3x340.jpg); -webkit-animation:ImgGal3 40s infinite; -moz-animation:ImgGal3 40s infinite; -ms-animation:ImgGal3 40s infinite; -o-animation:ImgGal3 40s infinite; }
	#cabe #cabeGal #galImg4 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-4x340.jpg); -webkit-animation:ImgGal4 40s infinite; -moz-animation:ImgGal4 40s infinite; -ms-animation:ImgGal4 40s infinite; -o-animation:ImgGal4 40s infinite; }
	#cabe #cabeGal #galImg5 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-5x340.jpg); -webkit-animation:ImgGal5 40s infinite; -moz-animation:ImgGal5 40s infinite; -ms-animation:ImgGal5 40s infinite; -o-animation:ImgGal5 40s infinite; }
	#cabe #cabeGal #galImg6 { background-image:url(../images/cabecera-fondo<?php echo $paistxt; ?>-6x340.jpg); -webkit-animation:ImgGal6 40s infinite; -moz-animation:ImgGal6 40s infinite; -ms-animation:ImgGal6 40s infinite; -o-animation:ImgGal6 40s infinite; }

	#total { margin:0 auto; padding:75px; display:block; width:100%; }
	
	#secHome { margin:0; padding:0; display:block; border:0; }
	#secHome #menuSecBtn { margin:0 0 0 0; padding:10px 0; position:static; display:block; width:auto; height:auto; text-align:center; border:0; }
	#secHome #menuSecBtn span { margin:0 0; padding:20px 20px 0 20px; display:inline-block; width:auto; height:38px; color:#333; border:solid 1px #CCCCCC; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
	#secHome #menuSecBtn.soloProd span { margin:0 0; padding:20px 20px 0 20px; display:inline-block; width:auto; height:38px; color:#333; border:solid 1px #CCCCCC; vertical-align:middle; background:#FFF; font-family:Arial, Helvetica, sans-serif; }
	#secHome #menuSecBtn img { margin:0 0; display:inline-block; width:auto; height:auto; border:0 !important; vertical-align:middle; }
	#secHome #menuSec { margin:0 auto; padding:0; display:block; width:100%; list-style:none; }
	#secHome #menuSec.noActivo { display:none; }
	#secHome #menuSec li { margin:0; padding:0; display:block; }
	#secHome #menuSec .opc { margin:0; padding:0; position:static; display:table; width:100%; height:70px; border:0; border-bottom:solid 1px #FFF; text-align:center; text-decoration:none; }
	#secHome #menuSec .opc .opcImg { margin:0; padding:0; position:static; bottom:auto; left:auto; display:table-cell; width:55%; height:70px; border:0; opacity:0; transition:bottom 0.5s, opacity 0.5s; }
	#secHome #menuSec .opc .opcTxt { margin:0 0; padding:0 10px; position:static; bottom:auto; left:auto; display:table-cell; width:45%; height:70px; border-bottom:solid 1px #CCCCCC; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#402000; background-color:#fff; transition:color,background-color 1s; }
	
	#secHomeDatos h1 { margin:20px 0 20px 0; padding:0; display:block; width:100%; height:auto; color:#FF7A22; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:26px; }
	
	#secHomeDatos #homeCuerpo { margin:0 auto 30px auto; display:block; width:100%; }
	
	#secHomeDatos #homeCuerpo #homePromo { margin:0 auto 20px auto; padding:0 44px 0 44px; display:block; width:auto; height:auto; text-align:center; vertical-align:middle; border:solid 4px #DCD0C8; background:url(../images/home-promocion-fondo-movil.jpg); font-family:Arial, Helvetica, sans-serif; }
    #secHomeDatos #homeCuerpo #homePromo #promoCuerpo #promoSubTit span { display:block; font-size:18px; }


	#secHomeDatos #homeCuerpo #descrip { margin:0 0 20px 0; padding:20px; display:none; width:65%; height:auto; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
    
	#secHomeDatos #homeCuerpo #nosotros { margin:0 0 20px 0; padding:20px; display:block; width:auto; height:auto; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #nosotros p { margin:0 auto 30px auto; width:auto; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
	#secHomeDatos #homeCuerpo #nosotros #somosMapa { padding:8px; width:auto; background-color:#FFF; text-align:center; color:#600; font-size:16px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; }
    
    #secHomeDatos #homeCuerpo #infoGrupo { margin:0 0 20px 0; padding:0; display:block; width:100%; height:auto; text-align:center; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
    #secHomeDatos #homeCuerpo #infoGrupo p { margin:0 auto 20px auto; width:100%; text-align:left; font-size:14px; font-family:Arial, Helvetica, sans-serif;}
    
	#secHomeDatos #homeCuerpo #homeFormu { margin:0; padding:20px; display:none; width:auto; height:auto; border:solid 4px #DCD0C8; }
    
    #secHomeDatos #homeCuerpo #contacFormu { margin:0; padding:20px; display:block; width:auto; height:auto; border:solid 4px #DCD0C8; }
	
	#menuInfo { margin:0; padding:0; display:block; width:100%; text-align:center; border:0; list-style:none; }
	#menuInfo .circu { margin:0 0 10px 0; padding:0; display:inline-block; width:auto; height:60px; vertical-align:auto; border:0; }
	#menuInfo .circu a { margin:0; padding:20px; display:block; width:auto; height:auto; text-decoration:none; font-weight:bold; }
	#menuInfo .celes { background:none; border:solid 1px #00BFDA; }
	#menuInfo .celes a { color:#FF56D9; }
	#menuInfo .naran { background:none; border:solid 1px #FF7D2B; }
	#menuInfo .naran a { color:#007900; }
	
	.secHomeTours .tourHomeList { margin:0 0 10px 0; padding:0 0 0 0; position:relative; display:inline-block; width:100%; height:280px; vertical-align:top; }
    .secHomeTours .tourHomeList .imgfondo { margin:0 0 0 0; position:absolute; top:0; left:0; width:100%; height:280px; z-index:-1; }
	.secHomeTours .listaVerMas { margin:0 auto 0 auto; padding:15px 0 15px 0; display:block; width:95%; height:auto; text-align:center; text-decoration:none; color:#777; border:solid 1px #FF9326; background:url(../images/icono-lista-flecha.gif) no-repeat 75% center; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
	.secHomeTours .medio { margin:0 0 10px 0;  }
	
	#secHomePaises #listaPaises { margin:0; padding:0; display:block; list-style:none; width:100%; }
	#secHomePaises #listaPaises li { margin:0; padding:0; display:inline-block; width:135px; height:auto; border:solid 1px #333333; }

	#social { margin:0 0 30px 0; padding:0; display:none; width:100%; }
	
	#listaCuerpo { margin:30px 0 30px 0; padding:0; display:block; width:auto; height:auto; }
	#secLista { margin:0; padding:30px 10px; display:block; width:auto; border:solid 4px #CCC; }
	#secLista .tourLista div { margin:0; padding:0; display:block; width:auto; border:0; vertical-align:middle; text-align:center; }
	#secLista .tourLista div h2 { margin:0 10px 10px 0; padding:0; }
	#secLista .tourLista div .paises { margin:0 10px 10px 0; padding:0; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .salidas { margin:0 0 10px 0; padding:0; display:block; width:auto; border:0; vertical-align:middle; text-align:center; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourLista .precio { margin:0; padding:0; display:block; width:auto; border:0; vertical-align:middle; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio span { display:block; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio strong { display:inline; font-size:24px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourLista .precio a { display:block; margin:0; padding:0; color:#FF3366; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; }
	#secLista .tourLista .imagen { margin:10px 0 0 0; padding:0; display:block; width:auto; border:0; vertical-align:middle; }
    
    #secLista .tourListaDet { margin:0 0 20px 0; padding:0 0 0 0; display:block; width:100%; box-sizing:border-box; }
    #secLista .tourListaDet .columna { margin:0; padding:10px; display:inline-block; width:100%; box-sizing:border-box; border-bottom:0; border-top:solid 1px #a7a; border-left:solid 1px #a7a; border-right:solid 1px #a7a; vertical-align:middle; text-align:center; }
    #secLista .tourListaDet .columna h3 { margin:0 10px 10px 10px; padding:0; }
	#secLista .tourListaDet .columna .paises { margin:0 10px; padding:0; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila { margin:0; padding:10px; display:inline-block; width:100%; box-sizing:border-box; border-top:0; border-bottom:solid 1px #a7a; border-left:solid 1px #a7a; border-right:solid 1px #a7a; vertical-align:middle; text-align:left; }
    #secLista .tourListaDet .fila .detalle { margin:0; padding:10px 0; display:block; width:100%; box-sizing:border-box; border:solid 1px #ccc; vertical-align:middle; text-align:left; }
    #secLista .tourListaDet .fila .detalle .salidas { margin:0 0 0 0; padding:5px; display:block; width:auto; border:0; vertical-align:middle; text-align:left; font-size:14px; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .detalle .precio { margin:0; padding:5px; display:block; width:auto; border:0; vertical-align:middle; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .detalle .precio span { display:inline-block; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
	#secLista .tourListaDet .fila .detalle .precio strong { display:inline-block; font-size:20px; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .detalle .imagen { margin:0 0 0 0; padding:5px; display:block; width:auto; border:0; vertical-align:middle; font-family:Arial, Helvetica, sans-serif; }
    #secLista .tourListaDet .fila .bordeUp { border-top:0; }
    
	#secListaNotas { margin:0; padding:30px; display:none; width:auto; border:solid 4px #CCC; }
    
    #secListaPaises { margin:0; padding:30px 0; display:block; width:auto; border:solid 4px #CCC; }
    #secListaPaises .tourHome h4 { margin:0; padding:10px 10px; float:none; width:auto; }
	#secListaPaises .tourHome .paises { margin:0 0 20px 0; padding:0 20px; float:none; width:auto; text-align:justify; font-family:Arial, Helvetica, sans-serif; }
    #secListaPaises .tourHome .imagen { position:relative; float:none; width:auto; }
	
    #secBusqueda #buscador .seleccionados { margin:0 auto; padding:2px; display:block; width:95%; border:solid 1px #aaa; color:#777; font-size:14px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; }
    
	#producto { margin:20px 0; padding:0; display:block; width:auto; border:none; }
	#prodCuerpo { margin:0; padding:0; display:block; width:auto; border:solid 5px #DDD; }
    #prodCuerpo #itinerario .otros { margin: 8px 0 0 0; padding:5px; border: 1px solid #990000; }
    #prodCuerpo #itinerario #contenedor { margin:0; padding:0; display:block; width:100%; height:auto; overflow:scroll; border:solid 1px #000; }
    
    #prodCuerpo #prodInfo { margin:0 0 0 0; padding:0 0 0 0; display:block; width:100%; border:0; }
	#prodCuerpo #prodInfo #infoIzq { margin:0 0 0 0; padding:5px 5px 5px 5px; display:block; width:100%; box-sizing:border-box; text-align:center; vertical-align:top; }
    #prodCuerpo #prodInfo #infoIzq p { margin:0 0 0 0; padding:0 0 5px 0; width:auto; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
	#prodCuerpo #prodInfo #infoDer { margin:0 0 0 0; padding:0 0 0 0; display:block; width:100%; }
    
	#prodCuerpo #prodOpc #prodMenu { margin:0 0 0 0; padding:0 0 0 0; float:none; display:block; width:100%; height:auto; list-style:none; vertical-align:top; }
    #prodCuerpo #prodOpc #prodMenu p { margin:0 0 0 0; padding:0 0 0 0; display:table; width:100%; height:auto; }
    #prodCuerpo #prodOpc #prodMenu p a { margin: 0 0 0 0; padding:10px 0 0 0; display: table-cell; width:24%; vertical-align:middle; border:solid 1px #BBB; font-family:Arial, Helvetica, sans-serif; text-decoration:none; color: #7b7960; font-weight: 700; }
	#prodCuerpo #prodOpc #prodMenusub { margin:0 0 0 0; padding:0 0 0 0; float:none; display:block; width:100%; vertical-align:top; }
    
    #prodCuerpo #prodQuote #quoteTitu { margin:0 0 0 0; padding:15px 0 15px 0; text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; }
	#prodCuerpo #prodQuote #quoteSub { margin:0 0 0 0; padding:0 0 0 0; text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
    
    #prodCuerpo #fechas .fechaMes { margin:15px 0 0 0; padding:0 0 0 0; display:block; font-weight:bold; font-family:Arial, Helvetica, sans-serif; }
	#prodCuerpo #formu .txt { margin:0 auto 5px auto; padding:6px; display:block; width:80%; border:solid 1px #666666; font-family:Arial, Helvetica, sans-serif; }
	#prodCuerpo #formu .area { margin:0 auto 5px auto; padding:6px; display:block; width:80%; height:80px; border:solid 1px #666666; font-family:Arial, Helvetica, sans-serif; }
    #prodCuerpo #formu #fecsal { margin:0 auto; padding:5px; display:block; width:80%; }
	#prodOtros { margin:0; padding:20px; display:block; width:auto; border:solid 5px #DDD; }
	
	#pieFondo { width:100%; background:#666; }
	#pieFondo #pie { margin:0 auto; padding:15px 0; display:block; width:100%; background:#000; }
    #pieFondo #pie #pieMenuIni { margin:0 auto; padding:0 0 0 0; display:block; width:100%; border-bottom:solid 1px #777; }
	#pieFondo #pie #pieMenuIni li { margin:0 0 0 0; padding:0 0 0 0; display:inline-block; }
    #pieFondo #pie #pieMenuIni li a span { display:none; }
	#pieFondo #pie #pieMenuIni li a img { display:block; }
	#pieFondo #pie #pieCols { margin:0 auto; display:block; width:95%; }
	#pieFondo #pie #pieCols .datos { display:block; width:100%; }
	#pieFondo #pie #pieCols .datos h3 { color:#FFF; text-align:center; border-bottom:solid 1px #fff; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul { margin:0; padding:0; list-style:none; }
	#pieFondo #pie #pieCols .datos ul li { margin:0 0 15px 0; padding:0; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul li a { color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; }
	#pieFondo #pie #pieCols .datos ul li a span { display:none; }
	#pieFondo #pie #pieCols .datos ul li a img { margin:0; padding:0; display:inline; border:0 !important; }
	#pieFondo #pie #pieCols .datos #webs { text-align:center; }
	#pieFondo #pie #pieCols .datos #webs li { display:inline-block; }
	#pieFondo #pie .lista { margin:0 auto; padding:15px 0 0 0; display:none; width:95%; border-top:solid 1px #999999; }
}

/* Animaciones ----------------------------------------------------------------------------------------------------------------------------- */
@keyframes ImgGal1 { 0%  { opacity:0.0; } 	8% { opacity:1.0; } 	 16% { opacity:1.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@keyframes ImgGal2 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:1.0; } 	 32% { opacity:1.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@keyframes ImgGal3 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:1.0; }  48% { opacity:1.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@keyframes ImgGal4 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:1.0; } 	 64% { opacity:1.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@keyframes ImgGal5 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:1.0; } 	 80% { opacity:1.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@keyframes ImgGal6 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:1.0; } 100%{ opacity:1.0; } }

@-o-keyframes ImgGal1 { 0%  { opacity:0.0; } 	8% { opacity:1.0; } 	 16% { opacity:1.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-o-keyframes ImgGal2 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:1.0; } 	 32% { opacity:1.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-o-keyframes ImgGal3 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:1.0; }  48% { opacity:1.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-o-keyframes ImgGal4 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:1.0; } 	 64% { opacity:1.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-o-keyframes ImgGal5 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:1.0; } 	 80% { opacity:1.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-o-keyframes ImgGal6 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:1.0; } 100%{ opacity:1.0; } }

@-webkit-keyframes ImgGal1 { 0%  { opacity:0.0; } 	8% { opacity:1.0; } 	 16% { opacity:1.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-webkit-keyframes ImgGal2 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:1.0; } 	 32% { opacity:1.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-webkit-keyframes ImgGal3 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:1.0; }  48% { opacity:1.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-webkit-keyframes ImgGal4 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:1.0; } 	 64% { opacity:1.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-webkit-keyframes ImgGal5 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:1.0; } 	 80% { opacity:1.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-webkit-keyframes ImgGal6 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:1.0; } 100%{ opacity:1.0; } }

@-moz-keyframes ImgGal1 { 0%  { opacity:0.0; } 	8% { opacity:1.0; } 	 16% { opacity:1.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-moz-keyframes ImgGal2 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:1.0; } 	 32% { opacity:1.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-moz-keyframes ImgGal3 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:1.0; }  48% { opacity:1.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-moz-keyframes ImgGal4 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:1.0; } 	 64% { opacity:1.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-moz-keyframes ImgGal5 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:1.0; } 	 80% { opacity:1.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-moz-keyframes ImgGal6 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:1.0; } 100%{ opacity:1.0; } }

@-ms-keyframes ImgGal1 { 0%  { opacity:0.0; } 	8% { opacity:1.0; } 	 16% { opacity:1.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-ms-keyframes ImgGal2 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:1.0; } 	 32% { opacity:1.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-ms-keyframes ImgGal3 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:1.0; }  48% { opacity:1.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-ms-keyframes ImgGal4 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:1.0; } 	 64% { opacity:1.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-ms-keyframes ImgGal5 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:1.0; } 	 80% { opacity:1.0; } 88% { opacity:0.0; } 100%{ opacity:0.0; } }
@-ms-keyframes ImgGal6 { 0%  { opacity:0.0; } 	8% { opacity:0.0; } 	 16% { opacity:0.0; } 	 24% { opacity:0.0; } 	 32% { opacity:0.0; } 	 40% { opacity:0.0; }  48% { opacity:0.0; } 	 56% { opacity:0.0; } 	 64% { opacity:0.0; } 72% { opacity:0.0; } 	 80% { opacity:0.0; } 88% { opacity:1.0; } 100%{ opacity:1.0; } }