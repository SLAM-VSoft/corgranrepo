<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CoRGraN - Colegio Rionegrino de graduados en nutrición</title>

    <meta name="description" content="Sitio web del Colegio Rionegrino de graduados en nutrición">
    <meta name="keywords" content="colegio, rionegrino, nutricion, nutrición, graduados, alimentación, salud, colegiados">
    <meta name="author" content="Slamcoop - VSoft">

    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="all" href="css/stellarnav.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/stellarnav.js"></script>
    <script type="text/javascript" src="js/jssor.slider-27.1.0.min.js"></script>
    <!-- <script type="text/javascript" src="js/scripts.js"></script> -->
    
</head>
<body>
    <div class="container-fluid">
		<!-- HEADER -->
	    <div class="row align-items-end mb-3">
		    <div class="col-lg-3">
			    <a href="index.php"><img id="imglogo" alt="Colegio Rionegrino de graduados en nutrición" src="img/logocrgn250.jpg" /></a>
		    </div>
		    <div class="col-lg-9">
		    	<!-- MENU -->
<!-- MENU DEPENDE menu.php o menu-col.php -->
<?php
    if($_SESSION["admin"] =="admin"){
        require_once 'menu-col.php';
    }else{
      require_once 'menu.php';  
    }
?>
				<!-- MENU -->
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							jQuery('.stellarnav').stellarNav({
								theme: 'light',
							});
							
/* Aquí comienza el bloque que se incluye solo en el index.php */
							
							var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,sX:-1,sY:-1},{b:100,d:400,sX:1,sY:1,e:{sX:7,sY:7}}],
              [{b:-1,d:1,o:-1,c:{t:-465}},{b:500,d:800,x:-107,o:1,c:{t:465},e:{c:{t:7}}}],
              [{b:-1,d:1,c:{x:286.0,t:-286.0}},{b:400,d:200,c:{x:-286.0,t:286.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,c:{x:286.0,t:-286.0}},{b:400,d:200,c:{x:-286.0,t:286.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,c:{x:0.5,t:-0.5}},{b:400,d:200,c:{x:-0.5,t:0.5},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,c:{x:0.5,t:-0.5}},{b:400,d:200,c:{x:-0.5,t:0.5},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:1600,d:240,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:140.0,t:-140.0}},{b:100,d:500,c:{x:-140.0,t:140.0},e:{c:{x:7,t:7}}}],
              [{b:300,d:400,o:-1}],
              [{b:-1,d:1,c:{m:-82}},{b:1000,d:700,x:-51,c:{m:82},e:{x:7,c:{m:7}}}],
              [{b:200,d:400,o:-1,e:{o:7}}],
              [{b:-1,d:1,c:{x:120.0,t:-120.0}},{b:100,d:480,c:{x:-120.0,t:120.0},e:{c:{x:10,t:10}}}],
              [{b:200,d:400,o:-1,e:{o:7}}],
              [{b:-1,d:1,c:{x:120.0,t:-120.0}},{b:100,d:480,c:{x:-120.0,t:120.0},e:{c:{x:10,t:10}}}],
              [{b:200,d:400,o:-1,e:{o:7}}],
              [{b:-1,d:1,c:{x:120.0,t:-120.0}},{b:100,d:480,c:{x:-120.0,t:120.0},e:{c:{x:10,t:10}}}],
              [{b:200,d:400,o:-1,e:{o:7}}],
              [{b:-1,d:1,c:{x:120.0,t:-120.0}},{b:100,d:480,c:{x:-120.0,t:120.0},e:{c:{x:10,t:10}}}],
              [{b:100,d:500,x:595,e:{x:7}},{b:600,d:100,o:-1,e:{o:7}},{b:700,d:100,o:1,e:{o:7}},{b:800,d:100,o:-1,e:{o:7}},{b:900,d:100,o:1,e:{o:7}}],
              [{b:-1,d:1,o:-1},{b:100,d:300,y:-423,o:1,e:{y:7,o:7}},{b:400,d:100,y:13,o:-1,e:{y:7,o:7}},{b:500,d:100,o:1,e:{o:7}},{b:600,d:100,o:-1,e:{o:7}},{b:700,d:100,o:1,e:{o:7}}],
              [{b:-1,d:1,c:{m:-73}},{b:1000,d:700,y:-277,c:{m:73},e:{y:7,c:{m:7}}}],
              [{b:-1,d:1,o:-1},{b:1600,d:300,o:1,e:{o:7}}],
              [{b:-1,d:1,c:{t:-280}},{b:500,d:300,o:-0.9,c:{t:280},e:{c:{t:7}}}],
              [{b:-1,d:1,o:-1},{b:100,d:300,x:-594,o:1,e:{x:7}},{b:400,d:100,y:13,o:-1,e:{y:7,o:7}},{b:500,d:100,y:-13,o:1,e:{y:7,o:7}},{b:600,d:100,o:-1,e:{o:7}},{b:700,d:100,x:10,o:1,e:{x:7,o:7}}],
              [{b:-1,d:1,c:{m:-73}},{b:1000,d:700,x:-8,y:-280,c:{m:73},e:{x:7,y:7,c:{m:7}}}],
              [{b:-1,d:1,o:-1,e:{o:5}},{b:1600,d:300,o:1,e:{o:7}}],
              [{b:300,d:400,o:-1}],
              [{b:-1,d:1,c:{x:140.0,t:-140.0}},{b:100,d:500,c:{x:-140.0,t:140.0},e:{c:{x:7,t:7}}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlayInterval: 5000,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //make sure to clear margin of the slider container element
            jssor_1_slider.$Elmt.style.margin = "";

            /*#region responsive code begin*/

            /*
                parameters to scale jssor slider to fill parent container

                MAX_WIDTH
                    prevent slider from scaling too wide
                MAX_HEIGHT
                    prevent slider from scaling too high, default value is original height
                MAX_BLEEDING
                    prevent slider from bleeding outside too much, default value is 1
                    0: contain mode, allow up to 0% to bleed outside, the slider will be all inside parent container
                    1: cover mode, allow up to 100% to bleed outside, the slider will cover full area of parent container
                    0.1: flex mode, allow up to 10% to bleed outside, this is better way to make full window slider, especially for mobile devices
            */

            var MAX_WIDTH = 3000;
            var MAX_HEIGHT = 500;
            var MAX_BLEEDING = 0;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {
                    var originalWidth = jssor_1_slider.$OriginalWidth();
                    var originalHeight = jssor_1_slider.$OriginalHeight();

                    var containerHeight = containerElement.clientHeight || originalHeight;

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

                    //scale the slider to expected size
                    jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight, MAX_BLEEDING);

                    //position slider at center in vertical orientation
                    jssor_1_slider.$Elmt.style.top = ((containerHeight - expectedHeight) / 2) + "px";

                    //position slider at center in horizontal orientation
                    jssor_1_slider.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);

/* Aquí termina el bloque que se incluye solo en el index.php */
            
});
					</script>
		    </div>
	    </div>
	</div>