  <?php 
  // print_r ($_POST);
error_reporting(0);  
  function font_anim($params = array())
{ 

    $defaults = array( "dir"=>"", "text" => array ("Welcome"),"randomize" => 100,"typeSpeed" => 0,"blinkCursor" => "true","startDelay" => 0,"color" => '#000',"cursorColor" => '#000',"font" => '',"size" => 12,"backSpeed" => 0,"backDelay" => 0,"loop" => "false","loopCount" => "false","showCursor" => "false", "cursorChar" => "\"" 
    );

    $params = array_merge($defaults, $params);
	
  ?>
 <style>
 @font-face {
  font-family: "Myfont";
  src: url("<?php echo $params['dir']; ?>/font/<?php echo $params['font']?>") format("truetype")
}


        /* code for animated blinking cursor */
		#ptyped {	 font-family: "Myfont";	color:<?php echo $params['color']?>;
				font-size:<?php echo $params['size']?>px;}
        .typed-cursor{ font-family: "Myfont";
		color:<?php echo $params['cursorColor']?>;
					font-size:<?php echo $params['size']?>px;
            opacity: 1;
            font-weight: 100;
<?php if ( $params['blinkCursor']=="on" ): ?>         
		 -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
			<?php endif; ?>
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
    </style>
	
	<span id='ptyped'><?php echo ($params['text'][0]); ?><span id="typed" style="white-space:pre;"></span></span>
    <script src="<?php echo $params['dir']; ?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $params['dir']; ?>/js/typed.js" type="text/javascript"></script>
	
	
 <script>
    $(function(){

        $("#typed").typed({
            strings: ["<?php 
			unset ($params['text'][0]);
			foreach ($params['text'] as $text) {$text0.= $text.'","';}
							$text0 = substr($text0,0,-3); echo $text0;?>"],
            typeSpeed: <?php echo $params['typeSpeed']; ?>,
            backSpeed: <?php echo $params['backSpeed']; ?>,
            startDelay: <?php echo $params['startDelay']; ?>,
            randomize: <?php echo $params['randomize']; ?>,
            backDelay: <?php echo $params['backDelay']; ?>,
            cursorChar: '<?php echo $params['cursorChar']; ?>',
            loop:<?php echo ($params['loop']=='on')?'true':'false'; ?>,
            showCursor:<?php echo ($params['showCursor']=='on')?'true':'false'; ?>,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: <?php echo $params['loopCount']; ?>,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
	<?php } 
font_anim( array(      
		'text' => $_POST['text'],
		'dir' => $_POST['dir'],
		// 'text' => "Welcome",
        'typeSpeed' => $_POST['typeSpeed'],
        'startDelay' => $_POST['startDelay'],
        'backSpeed' => $_POST['backSpeed'],
        'backDelay' => $_POST['backDelay'],
        'randomize' => $_POST['randomize'],
        'blinkCursor' => $_POST['blinkCursor'],
        'font' => $_POST['font'],
        'loopCount' => $_POST['loopCount'],
        'cursorChar' => $_POST['cursorChar'],
        'cursorColor' => $_POST['cursorColor'],
        'size' => $_POST['size'],
        'color' => $_POST['color'],
        'loop' => $_POST['loop'],
        'showCursor' => $_POST['showCursor'],
));


?>