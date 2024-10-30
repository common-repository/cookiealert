<?php

if(intval($duration) == 0){
	$duration = 30; // sec
}

if(intval($popup_interval) == 0){
	$popup_interval = 5; // 5min
}

?>
<div class="wrap">
 
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
 
 
 <div class="welcome-panel">
	<form method="POST" action="?page=CookieAlert" >
		
	<table id="form-table striped" style="width:70%">
	<thead>

	</thead>
	<tbody id="the-list">


	
	<tr>
		<td class="left">
			Button Text
		</td>
		
		<td>
			<input type="text" name="cookiealert[btn_text]" id="cookiealertbtn" value="<?php echo $btn_text ;?>" placeholder="GOT IT" />
			
			
		</td>
	</tr>


	<tr>
		<td class="left">
			Alert Message
		</td>
		
		<td>
			
			<?php wp_editor( $message, 'message', array( 'textarea_name' => 'cookiealert[message]', 'theme_advanced_buttons1' => 'bold, italic, ul, pH, pH_min', "media_buttons" => true, "textarea_rows" => 8, "tabindex" => 4 ) ); ?>
			
		</td>
	</tr>
	

	
	<tr>
		<td class="left">
			
		</td>
		
		<td>
			<input type="submit" value="Save" class="button button-primary button-hero" />
		</td>
	</tr>		
	
	
	
	</tbody>
</table>

</form>
</div>




 
</div><!-- .wrap -->