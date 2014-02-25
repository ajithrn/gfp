=== Gravity Forms - Placeholders add-on ===
Contributors: neojp, ajithrn
Tags: gravityforms, gravity, forms, placeholders, html5, jquery.placeholders.js
Requires at least: 3.0
Tested up to: WP 3.8.1, and Gravity Form 1.8.4
Stable tag: 1.2.1

Adds HTML5 placeholder support to Gravity Forms' fields with a Javascript fallback. Javascript & jQuery are required.

== Description ==
Adds HTML5 placeholder support to the Gravity Forms plugin copying the Field's label as the placeholder and hidding it. Javascript fallback is used for old browsers that don't support the HTML5 placeholder attribute.

== Installation ==
1. Works only with my custom roots fork
1. Upload all files to the `/assets/plugins/` directory
2. Activate the plugin through the 'function.php' [require_once locate_template('/assets/plugins/gfp/gravityforms-placeholders.php');]
3. Add the CSS class `gplaceholder` to text fields or textareas as needed, you can also add it to the form itself to enable this feature to all fields within it.

== GitHub original source code ==
http://github.com/neojp/gravity-forms-placeholders/
