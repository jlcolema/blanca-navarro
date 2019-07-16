  <?php 
error_reporting(0);
  // print_r ($_POST);
  if (!function_exists('font_anim')) {
  function font_anim($params = array())
{   $rand=rand(100,999);

    $defaults = array( 
        "text" => array("Welcome"),"dir" => 0,"typeSpeed" => 0,"randomize" => 100,"startDelay" => 0,"backSpeed" => 0,"backDelay" => 0,"loop" => "false","blinkCursor" => "true","loopCount" => "false","showCursor" => "false", "cursorChar" => "\"" 
    );

    $params = array_merge($defaults, $params);
	
  ?>
 <style>
 @font-face {
  font-family: "myfont<?php echo $rand;?>";
  src: url("<?php echo plugin_dir_url(__FILE__);?>/font/<?php echo $params['font']?>") format("truetype")
}


        /* code for animated blinking cursor */
		.cl<?php echo $rand;?>,.typed_ {	 font-family: "myfont<?php echo $rand;?>";	color:<?php echo $params['color']?>;
				font-size:<?php echo $params['size']?>px;}
        .cl<?php echo $rand;?> .typed-cursor{ font-family: "myfont<?php echo $rand;?>";
		color:<?php echo $params['cursorColor']?>;
					font-size:<?php echo $params['size']?>px;
            opacity: 1;
            font-weight: 100;
<?php if ( $params['blinkCursor']=="true" ): ?>         
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
	
	<span id="typed_div" class="cl<?php echo $rand;?>"><?php echo ($params['text'][0]); ?><span id="typed" style="display:inline-block"></span></span>
    <script src="<?php echo plugin_dir_url(__FILE__);?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo plugin_dir_url(__FILE__);?>/js/typed.js" type="text/javascript"></script>
	
	
 <script>
    (function($){

        $(".cl<?php echo $rand;?> #typed").typed({
            strings: ["<?php unset ($params['text'][0]); $text0='';
			foreach ($params['text'] as $text) {$text0.= $text.'","';}
							$text0 = substr($text0,0,-3);$text0 = str_replace("\n",'\n',$text0);  echo $text0;?>"],
            typeSpeed: <?php echo $params['typeSpeed']; ?>,
            backSpeed: <?php echo $params['backSpeed']; ?>,
            startDelay: <?php echo $params['startDelay']; ?>,
            backDelay: <?php echo $params['backDelay']; ?>,
            randomize: <?php echo $params['randomize']; ?>,
            cursorChar: '<?php echo $params['cursorChar']; ?>',
            showCursor:<?php echo ($params['showCursor']); ?>,
            loop:<?php echo ($params['loop']); ?>,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: <?php echo $params['loopCount']; ?>,
            callback: function(){ 
				// Uncomment these lines to make the cursor disappear after 2s. (2000 -> 2 s) 
				// setTimeout(function(){
				// jQuery(".typed-cursor").hide(); 
				// }, 2000);
			},
            resetCallback: function() { newTyped(); }
        });


    }(jQuery.noConflict(true)));

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
	<?php } 
}
?>