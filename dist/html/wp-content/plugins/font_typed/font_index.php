

<div id="pageparentdiv" class="postbox ">
<h3 class="hndle"><span>Control panel</span></h3>
<div class="inside">

      <p><input type="submit" class="subm2 button-primary button button-large" value="Save" style=" float:left; width: 47%; ; " >
<input type="submit" class="subm button-primary button button-large" value="Preview" style="      float: right;    width: 47%;    "></p>
<p>
<button style="float:left; width:47%;margin-bottom:5px;margin-top: 10px" class="button button-large add">Add sentence</button><button style="float: right;    width:47%;margin-top: 10px	" class="button button-large remove">Remove</button>
</p>
  <form method="post" id="form" class="form" style="clear:both">
  <input type="text" name="dir" style="opacity:0;position:absolute" value="<?php echo plugin_dir_url(__FILE__);?>">
  
 <div class="sentence"> <p><strong>Text intro (fixed)</strong></p>
<input type="text" style="      " value="welcome"   name="text[]">
</div>
  <p><strong>Font</strong></p>
<select style="      " name="font" style="  ">
<?php error_reporting(0); //echo plugin_dir_path(__FILE__);


if ($handle = opendir(plugin_dir_path(__FILE__).'/font')) {
$i=0;
    while (false !== ($entry = readdir($handle))) {

	echo ($entry!="." && $entry!="..")?'<option value="'.$entry.'">'.(substr($entry,0,-4)).'</option>':"";

	}
    


    closedir($handle);
}
  ?>
 </select>
  <p><strong>  font size (px)</strong></p>
      <input type="number" value="12"  name="size" >
  <p><strong>Typing Speed (ms)</strong></p>
 <input type="number"   name="typeSpeed" value="0">

      <p><strong> Delay before start (ms) </strong></p>
 <input type="number"   name="startDelay" value="0">
   
   <p><strong> Back Speed (ms) </strong></p>
 <input type="number"   name="backSpeed" value="0">
 
    <p><strong> Back Delay (ms) </strong></p>
 <input type="number"   name="backDelay" value="0">
 
 
 <p><strong>  Loop? &nbsp;
  <input style=";" type="checkbox"  name="loop" > </strong></p>
 
    
     <p><strong>   Loop count (false = infinite) </strong></p>
    
      <input type="text" value="false"  name="loopCount" >

     <p><strong> Randomize type speed (default = 100) </strong></p>
    
      <input type="text" value="100"  name="randomize" >

	  
     <p><strong> Show cursor? &nbsp;
	 <input style=";" type="checkbox"  name="showCursor" ></strong></p>
        <p><strong> Cursor blink ? &nbsp;
	 <input style=";" type="checkbox"  name="blinkCursor" ></strong></p>
     <p><strong> Cursor character</strong></p>
      <input type="text" value="|"  name="cursorChar" >
    <p><strong>Text color</strong><strong style="    margin-left: 70px;">Cursor color</strong></p>
      <input type="color" style="width: 16%;height: 36px;" value="#000000"  name="color" >
     
       <input type="color" style="width: 16%;height: 36px;margin-left: 86px;" value="#000000"  name="cursorColor" >
   <p>
  
 </p>

</form>
<p style="
    margin-left: 27px;
">
<a href="mailto:a.rousseau17@hotmail.fr?subject=Font%20anim%20plugin">
  <img src="
<?php echo plugin_dir_url(__FILE__);?>
img/icon_mail.png" style="display:inline-block;margin: 13px;">
</a>
<a href="http://www.facebook.com/sharer.php?u=http://codecanyon.net/item/font-anim/6719796">
  <img src="
<?php echo plugin_dir_url(__FILE__);?>
img/facebook.png" style="display:inline-block;margin: 13px 0px;width: 30px;">
</a>
<a href="https://plus.google.com/share?url=http://codecanyon.net/item/font-anim/6719796">
  <img src="
<?php echo plugin_dir_url(__FILE__);?>
img/google.png" style="display:inline-block;margin: 13px 9px;width: 30px;">
</a>
<a href="http://twitter.com/share?url=http://codecanyon.net/item/font-anim/6719796">
  <img src="
<?php echo plugin_dir_url(__FILE__);?>
img/twitter.png" style="display:inline-block;margin: 13px 0px;width: 30px;">
</a></p>
</div>
</div>
</div>
</div>


</div>
<div id="div" style="  margin: 152px 316px; float: left; display: inline-block; position: absolute; border: 1px solid rgb(219, 219, 219); padding-top: 96px; min-width:73%; min-height: 200px; ">
</div>
<?php 	
wp_register_script( 'ftanmscripts1', plugins_url( 'js/script.js', __FILE__ ) );
wp_enqueue_script( 'ftanmscripts1' );

?>

<?php if ($code!="") : 
$code= urldecode($code); $code=str_replace('\n','\\\n',$code);

$code_arr0 = array( 
"text" => "Welcome","typeSpeed" => 0,"startDelay" => 0,"backSpeed" => 0,"backDelay" => 0,"loop" => "false","loopCount" => "false","showCursor" => "false", "cursorChar" => "\"" );
// echo $code;
$code_arr= ( eval('return '. $code . ';'));
$code_arr = array_merge($code_arr0, $code_arr);
?>

<?php $conte=	"jQuery(document).ready(function() {
jQuery('.sentence').first().find('input').val(\"".$code_arr["text"][0]."\");
jQuery('input[name=typeSpeed]').val('".$code_arr["typeSpeed"]."');
jQuery('input[name=color]').val('".$code_arr["color"]."');
jQuery('input[name=size]').val('".$code_arr["size"]."');
jQuery('input[name=randomize]').val('".$code_arr["randomize"]."');
jQuery('input[name=cursorColor]').val('".$code_arr["cursorColor"]."');
jQuery('select[name=font]').val('".$code_arr["font"]."');
jQuery('input[name=startDelay]').val('".$code_arr["startDelay"]."');
jQuery('input[name=backSpeed]').val('".$code_arr["backSpeed"]."');
jQuery('input[name=backDelay]').val('".$code_arr["backDelay"]."');
jQuery('input[name=loopCount]').val('".$code_arr["loopCount"]."');
jQuery('input[name=cursorChar]').val('".$code_arr["cursorChar"]."');
jQuery('input[name=loop]').attr('checked', ".$code_arr["loop"].");
jQuery('input[name=showCursor]').attr('checked', ".$code_arr["showCursor"].");
jQuery('input[name=blinkCursor]').attr('checked', ".$code_arr["blinkCursor"].");
jQuery('.subm').click();
});";
array_shift ($code_arr["text"]);
foreach ($code_arr["text"] as $key=>$col) 
				{
				$conte .= "jQuery('.sentence').last().after('<div style=\"display:none\" class=\"new sentence\"> <p><strong>Sentence ".($key+1)." </strong></p><input type=\"text\" style=\"\" value=\"".(addslashes($col))."\"   name=\"text[]\"></div>');\n jQuery('.sentence.new').slideDown();";
				}
				
else : $conte=""; endif; 

$data = array('conte' =>
$conte,'site_url' =>
(plugins_url( 'font_anim_ajax.php',__FILE__   )));
wp_localize_script('ftanmscripts1', 'php_data', $data);

?>

