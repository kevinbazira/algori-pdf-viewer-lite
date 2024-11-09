=== Algori PDF Viewer ===
Contributors: kevinbazira
Donate link: http://kevinbazira.com
Tags: gutenberg, block, block editor, pdf viewer, pdf embedder, pdf print, pdf download, pdf file viewer, pdf reader, embed documents
Requires at least: 5.0.0
Tested up to: 6.6.2
Requires PHP: 5.6.0
Stable tag: 1.0.8
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.en.html

Algori PDF Viewer is a Gutenberg Block Plugin that enables you to easily display PDF documents directly on your website.

== Description ==

Algori PDF Viewer is a Gutenberg Block Plugin that enables you to easily display PDF documents on your website. **This will allow your visitors to view and easily interact with your PDF files directly on your site**.

This free plugin has a lot to offer. Even more can be found in the Premium version of this Plugin, please see [all features of the Premium plugin here](http://www.kevinbazira.com/blog/article/algori-pdf-viewer-pro-for-wordpress-gutenberg#features).

== Features ===

1. No Browser Plugins Needed ( No Flash or Adobe Acrobat )
2. Compatible with Modern Browsers like Chrome, Firefox, IE11, Edge, Opera and Safari.
3. Compatible with Modern OS and devices including Windows, iOS, Linux and Android.
4. Supports Printing PDF document.
5. Supports Downloading PDF file.
6. Supports Navigation for Next page and Previous page.
7. Supports Zoom with zoom in, zoom out, page fit and restore normal zoom.
8. Supports Document Rotation to clockwise or counterclockwise.
9. Supports presentation mode.
10. One can enable the hand tool.
11. One can enable the text selection tool.
12. Supports Text Search for General text or Match case. All this is done with text highlights.
13. Supports document outline in the expandible and collapsible sidebar.
14. Supports keyboard shortcuts.
15. Translatable into 100+ languages.
16. Multiple PDF documents can be loaded on a single page.
17. Supports left, right, wide and full width alignments.
18. Easy to use and does not require any coding skills.

These features are enabled by default and can't be disabled in the free version. We released a Premium Plugin with many more exciting features that will enable you to enable/disable all the PDF viewer settings as you wish.

Have a look at the [Premium Plugin here](https://codecanyon.net/item/algori-pdf-viewer-pro-for-wordpress-gutenberg/22588592).

== Installation ==

1. Download the plugin, unzip it and move the unzipped folder to the "wp-content/plugins" directory in your WordPress installation.
2. In your admin panel, go to Plugins and you'll find Algori PDF Viewer in the plugins section.
3. Click on the 'Activate' button to use your new plugin right away.
4. Go [here for a guide on how to embed and display PDF documents on your WordPress site](http://www.kevinbazira.com/blog/article/algori-pdf-viewer-pro-for-wordpress-gutenberg#documentation).
5. Done :)
6. PS: Remember to click the **Enable auto-updates** link for this plugin so that you don't miss cool new features as they come in.

== How to use == 

1. After installing and activating the Algori PDF Viewer plugin in your WordPress website.
2. Navigate to your blog post or page and use the Gutenberg editor to add a PDF Viewer block.
3. Use the PDF Viewer block to add, embed and display a PDF on your web page.
4. At this point, you can adjust your PDF's dimensions (width and height) using the Gutenberg block inspector section.
5. Click "Publish" to view your new web page with an embedded PDF document.
6. Congratulations :D

== Screenshots ==

1. Admin View - Algori PDF Viewer Gutenberg Block in action. 
   ( Upload a PDF file, adjust its dimensions and use color pallete to change PDF Viewer theme color to match your site )

== Frequently Asked Questions ==

= Can I use this plugin with other page builders I am using? =

Nope. Algori PDF Viewer only works with Gutenberg.

= What theme works with Algori PDF Viewer? =

Most WordPress themes that are optimized for Gutenberg will work well with Algori PDF Viewer. To get a full experience of the next-generation WordPress block editor, you’ll need a Gutenberg-ready WordPress theme, like [Algori Blogger](https://wordpress.org/themes/algori-blogger/) or [Algori Shop](https://wordpress.org/themes/algori-shop/).

= Why upgrade to Pro? =

* **More customization features:** The Premium version includes new features that will enable you to enable/disable the PDF viewer settings that are enabled by default and can't be disabled in the free version. It also has other cool features like changing PDF Viewer theme color to beautifully match your site and much more.
* **No Need to Register Anywhere:** You do not need to create an account at our website to use this plugin.
* **No Middle Layer:** Plugin runs totally on your website server without any communication to our servers.
* **Absolutely Simple:** Plugin configuration is kept dead simple. Customization options designed to be intuitive to setup without being a rocket scientist.
* **Optimized Loading time:** Loading time of PDF Viewer is optimized and if you compare with other plugins, you will find it less than that of all those plugins.
* **Lightweight Code:** Our developers follow best coding practices to ensure efficient loading and performance.
* **No Coding Skills Required:** Algori PDF Viewer Plugin is easy to use and does almost everything for you without touching the code.
* We promise to provide **best quality** among other similar plugins. If you find our plugin lacking certain feature that you need, please feel free to email us and we will do our best to include that feature in our plugin as soon as possible.
* **Priority support:** Our support team is working 24/7 to answer your inquiries as fast as possible.

See more details here [Premium Plugin features](http://www.kevinbazira.com/blog/article/algori-pdf-viewer-pro-for-wordpress-gutenberg)

== Changelog ==

= 1.0.8 - Nov 07 2024 =
* Updated pdf.js from 1.9.426 to 4.8.69
* Tested up to WP 6.6.2

= 1.0.7 - Aug 29 2020 =
* Added block preview using example metadata
* Updated Algori PDF Viewer namespace
* Replaced block category 'common' with 'media'
* Added block.json for WP block directory

= 1.0.6 - June 17 2020 =
* Removed Toolbar, MediaUploadCheck and deprecated wp.components.IconButton
* Added MediaReplaceFlow component that enables users to edit/replace a PDF by using the Media Library or by inserting a URL or by uploading new media.

= 1.0.5 - Feb 06 2020 =
* Added algoriPDFViewerPluginDirectoryPath to support smooth upgrades from versions <= 1.0.3
* Fixed cgbGlobal conflict by using localized cgbGlobal_AlgoriPDFViewer

= 1.0.4 - Jan 29 2020 =
* Upgraded cgb-scripts from 1.13.0 to 1.22.0
* Replaced algoriPDFViewerPluginDirectoryPath with cgbGlobal.pluginDirUrl.
* Updated deprecated wp.editor.BlockControls to wp.blockEditor.BlockControls.
* Updated deprecated wp.editor.MediaPlaceholder to wp.blockEditor.MediaPlaceholder.
* Updated deprecated wp.editor.MediaUploadCheck to wp.blockEditor.MediaUploadCheck.
* Updated deprecated wp.editor.MediaUpload to wp.blockEditor.MediaUpload.

= 1.0.3 - Apr 30 2019 =
* Upgraded cgb-scripts from 1.11.1 to 1.13.0
* Improved documentation to match WP standards
* Added MediaUploadCheck wrapper onto MediaUpload to make sure the current user has Upload permissions.
* Removed unused styles from editor.scss

= 1.0.2 - Nov 28 2018 =
* Fixed PDF viewer file path
* Added Default PDF viewer width (600px) and height (300px)
* Added "Insert from URL" button to MediaPlaceholder
* Removed MediaPlaceholder labels name
* Added MediaPlaceholder labels instructions
* Removed BlockAlignmentToolbar
* Added wp-editor dependency to editor_assets

= 1.0.1 - Nov 12 2018 =
* Changed MediaPlaceholder and MediaUpload "type" to "allowedTypes" to support Gutenberg >= 4.2.0

= 1.0.0 - Sept 13 2018 =
* Initial Release
