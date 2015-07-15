<div class="wrap">
  <p>
    <?php if($updated): ?>
  </p>
  <div id="message" class="admin-message"><p>iOli® Settings Updated.</p></div>	
<?php endif ?>

<div id="admin-header-new">

        <img src="<?php echo plugins_url('ioli'); ?>/assets/Logo.png" style="vertical-align: middle;">

        <a href="https://wordpress.org/plugins/ioli/" target="_blank" style="font-weight: bold; font-size: 13px; text-transform: uppercase">
        <?php _e('URL Shortener Settings', 'shortener-plugin'); ?> | <?php _e('Version 1.5', 'shortener-plugin'); ?>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a href="https://ioli.ru/v1/developers/" target="_blank"><i class="fa fa-file-text"></i> Documentation</a>
        &nbsp;&nbsp;
        <a href="https://ioli.ru/v1/contact/" target="_blank"><i class="fa fa-life-ring"></i> Contact</a>
        &nbsp;&nbsp;
        <a href="https://www.facebook.com/iOli.Ru" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a>

    </div>


    <h2>iOli Main Configuration</h2>


    <div class="admin-separator"></div>

        <div id="tabs">

            <ul>
                <li><a href="#tabs-settings">SETTINGS</a></li>
                <li><a href="#tabs-Documentation">DOCUMENTATION</a></li>
            </ul>
            
                    <div id="tabs-settings">

                <p>
                    <strong>Important!</strong>
                    <strong><a href="https://ioli.ru/user/login" target="_blank">Your API key</a></strong>
Your API key can be found in the User Dashboard. Also please make sure that API feature is enabled in the script.
                </p>

                <h3>SETTINGS</h3>

                <table class="form-table">

                    <tr valign="top">
                        <td>
                        <form method="post" action="options.php" class="form-table">					
					    <?php settings_fields('shortener_setting_group'); ?>					
					    <input type="hidden" name="shortener_settings[shortener_url]" id="shortener_settings[shortener_url]" value="<?php echo self::$config['shortener_url']; ?>" />
                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="66%"><span class="subdescription">An API key is required to shorten URLs using your URL Shortener.</span></td>
                        <td width="34%">
                        <label class="description" for="shortener_settings[shortener_api]"><?php _e('Enter Your API key ', 'shortener-plugin'); ?></label><p>				
					    <input type="text" name="shortener_settings[shortener_api]" id="shortener_settings[shortener_api]" value="<?php echo self::$config['shortener_api']; ?>" />
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <span class="subdescription">Choose a theme for the URL shortener widget (change and see preview on the right side).</span>
                        </td>
                        <td>
                        <label class="description" for="shortener_settings[shortener_theme]">Default Widget and Ajax Form Theme</label><p>
                        <select name="shortener_settings[shortener_theme]" id="shortener_settings[shortener_theme]" class="PUS_theme-trigger">							
						<option <?php if(!self::$config["shortener_theme"]=="default") echo 'selected="selected"' ?> value="default">Default</option>
						<option <?php if(self::$config["shortener_theme"]=="tb") echo 'selected="selected"' ?> value="tb">iOli Theme</option>
						</select>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <span class="subdescription">Enabling this will shorten all external URLs in the comment section.</span>
                        </td>
                        <td>
                        <label class="description" for="shortener_settings[shortener_comment]">Comment URL Shortening</label><p>
						<select name="shortener_settings[shortener_comment]" id="shortener_settings[shortener_comment]">
					    <option <?php if(self::$config["shortener_comment"]) echo 'selected="selected"' ?> value="1">Enabled</option>
					    <option <?php if(!self::$config["shortener_comment"]) echo 'selected="selected"' ?> value="0">Disabled</option>
						</select>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <span class="subdescription">Enabling this will allow you to use shortcodes to shorten URLs within your post (Choose shortcode below).</span>
                        </td>
                        <td>
                        <label class="description" for="shortener_settings[shortener_shortcode]">Shortcode</label><p>
                        <select name="shortener_settings[shortener_shortcode]" id="shortener_settings[shortener_shortcode]">							
						<option <?php if(!self::$config["shortener_shortcode"]) echo 'selected="selected"' ?> value="0">Disabled</option>
						<option <?php if(self::$config["shortener_shortcode"]=="shorten") echo 'selected="selected"' ?> value="shorten">[shorten]</option>
						<option <?php if(self::$config["shortener_shortcode"]=="shorten_url") echo 'selected="selected"' ?> value="shorten_url">[short_url]</option>
						<option <?php if(self::$config["shortener_shortcode"]=="srt") echo 'selected="selected"' ?> value="srt">[srt]</option>
						</select>
                        </td>
                      </tr>
                      <tr>
                        <td>
                       <span class="subdescription">
					   Choose whether to use Javascript or PHP to shorten URL when using shortcode. Javascript is faster but PHP shows the short URL in the source code. PHP is recommended if you want to shorten less than 3 links in your posts/page and Javascript is recommended if you want to shorten more than 3 links.
					   </span>
                        </td>
                        <td>
                       <label class="description" for="shortener_settings[shortener_shortcode_type]">Choose Shortening Type for the Short Code</label><p>

					   <select name="shortener_settings[shortener_shortcode_type]" id="shortener_settings[shortener_shortcode_type]">
					   <option <?php if(self::$config["shortener_shortcode_type"]=="php") echo 'selected="selected"' ?> value="php">PHP (Server-Side)</option>
					   <option <?php if(self::$config["shortener_shortcode_type"]=="js") echo 'selected="selected"' ?> value="js">Javascript (Client-Side)</option>
					   </select>
                        </td>
                      </tr>
                      <tr>
                        <td>
                       <span class="subdescription">The custom text to pre-fill tweets with (e.g. Shortened via <?php echo self::$config["shortener_url"] ?>)   </span>
                        </td>
                        <td>
                       <label class="description" for="shortener_settings[shortener_share]">Twitter Custom Text</label>
					   <textarea name="shortener_settings[shortener_share]" id="shortener_settings[shortener_share]"><?php if(self::$config["shortener_share"]) echo self::$config["shortener_share"] ?>
                       </textarea>
                        </td>
                      </tr>
                      <tr>
                        <td>

                        </td>
                        <td>
                       <p class="submit">
					   <input class="admin-button" type="submit" name="Save" value="<?php _e('Save Changes', 'shortener-plugin'); ?>" />
					   </p>
                        </td>
                      </tr>
                    </table>
				       </form></td>
                    </tr>
                   </table>

            </div>

            <div id="tabs-Documentation">

                <p>
                    With our new WordPress plug-in you can automatically create iOli links for new posts and have those short links pushed to your pre-existing social sharing tools. Additionally, you can show a iOli sidebar widget that displays your most popular or most recent iOlimarks OR displays the top results from the iOli universe for a search term of your choosing.
                    Themes may not use all these fields and/or have specific alternate configurations. All fields are <strong>optional</strong>.
                </p>

                <h3>Documentation</h3>

                <table class="form-table">
                        <tr valign="top">
                        <th></th>
                        <td>
				<h3 id="conf">1.0 Configuration</h3>
				<p>
					Your API key can be found in the User Dashboard. Also please make sure that API feature is enabled in the script.
				</p>
				<h3 id="sc">2.0 Shortcodes</h3>
				<p>
					You can use some shortcodes to either shorten a URL or to show the Ajax form in your page or post. To shorten a URL within your post or page, you can use the shortcode as defined in the options on the left side. 
				</p>
					<h4>2.1 Shortcode Example</h4>
				<p>
					The shortcode has only 1 attribute and that is to show the html link (link=true).
					<code>[shorten]http://google.com[/shorten]</code> will ouput <code><?php if(self::$config["shortener_url"]) echo self::$config["shortener_url"]?>SomeAlias</code>.
				</p>
				<p>
					<code>[shorten link=true]http://google.com[/shorten]</code> will output <code>&lt;a href='<?php if(self::$config["shortener_url"]) echo self::$config["shortener_url"]?>SomeAlias' rel='nofollow' target='_blank'&gt;<?php if(self::$config["shortener_url"]) echo self::$config["shortener_url"]?>SomeAlias&lt;/a&gt;</code>.					
				</p>
				<h4>2.2 Ajax Form in post or page</h4>
				<p>To show the Ajax form in your post or page, you can use the shortcode <code>[show_shortener_form]</code>. This shortcode doesn't have any attributes. The style can be changed via the options on left side.</p>

				<h3 id="wd">3.0 Wdiget</h3>
				<p>You can use the widget by activating it in widget settings. The theme of the widget can be chosen from widget settings.</p>

				<h3 id="support">4.0 iOli Pro</h3>
				<p>Choose Plan !  <a href="https://ioli.ru/upgrade" target="_blank">Price</a></p>
                </br>
                   iOli Seo® &copy; &reg; 2015 </td>
                    </tr>
                </table>
                
             </div>
             