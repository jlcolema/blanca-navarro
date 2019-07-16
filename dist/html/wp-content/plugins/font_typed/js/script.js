 jQuery(function($) {
				
subst1="";
$(".subm2").click(function(){
 subst1="";

 $('input[name="text[]"]').each(function() {                    
     subst1+=$(this).val()+'","';
});


subs='<\?php include (\'font_anim.php\'); \n font_anim( array(  "text" => array("'+subst1.slice(0,-3)+'") ,"randomize" => "'+$('input[name="randomize"]').val()+'","typeSpeed" => "'+$('input[name="typeSpeed"]').val()+'","startDelay" => "'+$('input[name="startDelay"]').val()+'","color" => "'+$('input[name="color"]').val()+'","font" => "'+$('select[name="font"]').val()+'","cursorColor" => "'+$('input[name="cursorColor"]').val()+'","size" => "'+$('input[name="size"]').val()+'","backSpeed" => "'+$('input[name="backSpeed"]').val()+'","backDelay" => "'+$('input[name="backDelay"]').val()+'","loop" => "'+$('input[name="loop"]').prop('checked')+'","blinkCursor" => "'+$('input[name="blinkCursor"]').prop('checked')+'","loopCount" => "'+$('input[name="loopCount"]').val()+'","showCursor" => "'+$('input[name="showCursor"]').prop('checked')+'", "cursorChar" => "'+$('input[name="cursorChar"]').val()+'" )); ?>';

 // $('#div2').val(subs);
 // alert (subs);
  $('.textar').val(subs);
  
  if ($(this).hasClass('subb')) {
  $('.submm0').click();
  } else {   $('.subm0').click();
} 
  
});
// $('input,select').change(function(){ 
	 // delay(function(){
     // $('#form').submit();
    // }, 100 );

	// });	

		
$(".subm").click(function(){
	  
	  var querystring = $('#form').serialize();

        $.ajax({
            url: php_data.site_url,
            type: "POST",
            data: querystring,
            success: function(data) {
              $('#div').html(data);
                    }
            });
            return false;
        });
						
	eval(php_data.conte);
	// $('.subm').click();
	// });
	$("#form table select,#form table input").hover(function(){
   $(this).parent().find('.helper').show();
},function(){
   $(this).parent().find('.helper').hide();
});

jQuery('input[type=color]').each(function(i,element){  
	var target = jQuery(element); 
	jQuery(element).ColorPicker({
	color: jQuery(element).val().substr(1,6),
	onChange: function (hsb, hex, rgb) {
	target.val( '#' + hex);
		}
	}) ; });

col=$(".sentence").size();
$(".remove").click(function(){
if (col!=1) {
$('.sentence').last().slideUp("normal", function() { $(this).remove(); } );
col--;
}
return false;
});
$(".add").click(function(){
col++;
$('.sentence').last().after(' <div style="display:none" class="sentence"> <p><strong>Sentence '+col+' </strong></p><input type="text" style="" value=""   name="text[]"></div>');
$('.sentence').last().slideDown();

return false;

});
});