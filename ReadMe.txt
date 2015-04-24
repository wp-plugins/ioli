=== iOli URL Shortener ===
Contributors: iOli Seo®
Donate link: https://ioli.ru/v1/
Author URI: https://ioli.ru/v1/
Tags: iOli, link shorten, short link, shorten, shorten url, url, url shortener, seo,
Requires at least: 4.0
Tested up to: 4.2
Stable tag: 4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Official iOli Seo® plugin for WordPress. Replaces shared links with iOli Short URLs.

== Description ==

With our new WordPress plug-in you can automatically create iOli Seo links for new posts and have those short links pushed to your pre-existing social sharing tools.  Additionally, you can show a iOli sidebar widget that displays your most popular or most recent iOlimarks OR displays the top results from the iOli Seo universe for a search term of your choosing.  

This plugin uses the iOli Seo API (https://ioli.ru/v1/developers/) all links are stored in WordPress and with iOli Seo.

== Screenshots ==

1. screenshot-1.jpg
2. screenshot-2.jpg
3. screenshot-3.jpg


== Installation ==

1. Install the plugin either via the WordPress.org plugin directory, or by uploading the files to your server.
2. After activating the plugin, you will need to visit the plugin's settings page to finish the setup for link shortening.
3. If you want to use the sidebar widget, you should see a 'iOli iOlimarks' under your Available Widgets  (under your WP Appearance settings) which you can drag into the main sidebar
4. That's it. You're ready to go!

== Documentation ==

1.0 Configuration
Your API key can be found in the User Dashboard. Also please make sure that API feature is enabled in the script.
2.0 Shortcodes
You can use some shortcodes to either shorten a URL or to show the Ajax form in your page or post. To shorten a URL within your post or page, you can use the shortcode as defined in the options on the left side.
2.1 Shortcode Example

The shortcode has only 1 attribute and that is to show the html link (link=true). [shorten]http://google.com[/shorten] will ouput https://ioli.ru/SomeAlias.
[shorten link=true]http://google.com[/shorten] will output <a href='https://ioli.ru/SomeAlias' rel='nofollow' target='_blank'>https://ioli.ru/SomeAlias</a>.
2.2 Ajax Form in post or page

To show the Ajax form in your post or page, you can use the shortcode [show_shortener_form]. This shortcode doesn't have any attributes. The style can be changed via the options on left side.
3.0 Wdiget
You can use the widget by activating it in widget settings. The theme of the widget can be chosen from widget settings.

== Frequently asked questions ==

= What sharing tools does this work with? =

We have tested it on the following sharing tools:
Wordpress Jetpack, 
ShareThis, 
Facebook (official facebook plugin), 
Really simple Facebook Twitter Share

== Changelog ==

= coming =

= 1.5 =
* New Style, change Admin Page Settings.
* 
= 1.4 =
* Bug fixes, change cURL config Admin page.
* 
* Little fix
*
= 1.3 =
* Bug fixes, new check for CSS iOli Theme.
*
* Little fix
*
= 1.2 =
* Bug fixes, new check for CSS iOli Theme.
*
= 1.1 =
* Bug fixes, new check for cURL install. 
*
= 1.0 =
* Bug fixes, new check for cURL install and optional iOli QuickCopy implementation.   


== Upgrade Notice ==

= 1.5 =
* Update Admin Page Settings New Style.
* 
= 1.4 =
* Update change cURL config Admin page.
* 
= 1.3 =
* Update includes important bug fixes. 
*
= 1.2 =
* Update includes important bug fixes. 
*
= 1.1 =
* Bug fixes, new check for cURL install. 
*
= 1.0 =
* Update includes important bug fixes.

= SVN =

Actually I'm using SVN in a wrong way (deliberately). Usually development with SNV
should be done in this way:

* the trunk is where the latest (eventually not working code) is available
* the tags should contains some folders with public releases (stable or beta or alpha)
* the branches should contains some folders representing stable releases which are there to be eventually fixed

Actually, to make this tag available it should have been reported on the readme.txt
committed on the trunk.
