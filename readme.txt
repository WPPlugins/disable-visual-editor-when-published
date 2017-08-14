=== Disable Visual Editor When Published ===
Contributors: jeremyweathers
Tags: disable, visual editor, html
Requires at least: 4.0
Tested up to: 4.4.2
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows the visual editor for drafts, and then removes the visual editor (regardless of user settings) when content is published.

== Description ==

We frequently prefer to use the visual editor to quickly draft new posts, and then polish the markup in the HTML editor before publishing. We've wasted hours cleaning up existing content that was mangled because *someone* switched over to the visual editor.

We wanted to make sure that existing content would be safe from mangling, but we still wanted the convenience of the visual editor.

This plugin automatically blocks the visual editor - on a per-post basis - only when the post is published.

This plugin does not rely on, or override, per-user settings. This plugin does not rely on per-post settings. This automated strategy works well for us - give it a try!

== Installation ==

1. Upload the `disable-visusal-editor-when-published` directory to the `/wp-content/plugins/` 
directory of your site.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= I'm not sure this is for me. Will you support other strategies for disabling the visual editor? =

No. When possible, we want code to do one thing, well. There are other plugins that might work better for you:

* https://wordpress.org/plugins/always-edit-in-html/
* https://wordpress.org/plugins/disable-visual-editor/
* https://wordpress.org/plugins/disable-visual-editor-wysiwyg/
* https://wordpress.org/plugins/dont-break-the-code/

== Changelog ==

= 1.0.2 =

* Tested with latest WordPress version.

= 1.0.1 =

* Fixed a typo in the readme.

= 1.0 =

* Initial version.