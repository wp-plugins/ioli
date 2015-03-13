<div id="PUS_main" <?php if(isset($theme)) echo "class='".$theme."-c'"; ?>>					
	<div id="PUS_message"></div>				
	<!-- /#PUS_message -->
	<form action="<?php echo self::$config["shortener_url"]; ?>" id="PUS_form">
		<div id="PUS_main_input">
			<label for="PUS_main_input"><?php _e("Long URL",'shortener-plugin') ?></label>
			<input type="text" placeholder="http://" id="PUS_url">	
			<span id="PUS_loading"></span>			
	      <input type="hidden" id="PUS_share_text" value="<?php if(self::$config["shortener_share"]) echo self::$config["shortener_share"]?>" />
		  <input type="hidden" id="PUS_token" value="<?php if(self::$config["shortener_api"]) echo self::$config["shortener_api"]?>" />
          <button type="submit" class="PUS_custom_container">
		  <?php _e("Shorten",'shortener-plugin') ?>
		  </button>
		</div>
	</form>
	<!-- /#PUS_form -->
</div>	