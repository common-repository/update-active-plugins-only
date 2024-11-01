=== Update Active Plugins Only ===
Contributors: johnbillion
Tags: update, updates, plugin, plugins
Requires at least: 3.1
Tested up to: 3.4
Stable tag: trunk

Tells WordPress to only check for updates to active plugins

== Description ==

If you have a large number of inactive plugins on your site you may notice the plugins screen slows down as it checks all these plugins for updates. This plugin tells WordPress to only check for updates to active plugins.

== Installation ==

1. Unzip the ZIP file and drop the folder straight into your wp-content/plugins directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go make me a sandwich.

== Frequently Asked Questions ==

= Isn't there a possibility that an inactive plugin has a security vulnerability which could be exploited if I'm not notified of the update? =

Yes, but the likelihood of this happening in reality is negligable. There are better things to worry about.

= How does this affect update checks in Multisite? =

With this plugin active, a Multisite install of WordPress will only check for updates to network activated plugins and plugins which are active on the main site.

== Changelog ==

= 1.1 =
* Check for updates to network active plugins too.

= 1.0 =
* Initial release.
