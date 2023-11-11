# Algori PDF Viewer

Contributors: [Kevin Bazira](http://kevinbazira.com)

Tags: gutenberg, block, block editor, pdf viewer, pdf embedder, pdf print, pdf download, pdf file viewer, pdf reader, embed documents

Requires at least: WP 5.0.0
* Tested up to: WP 6.4.1
* Stable tag: 1.0.7
* License: GNU General Public License v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.en.html

Algori PDF Viewer is a Gutenberg Block Plugin that enables you to easily display PDF documents directly on your website.

<p align="center">
  <img src="https://ps.w.org/algori-pdf-viewer/assets/screenshot-1.gif" alt="Algori PDF Viewer">
</p>

# Description 

Algori PDF Viewer is a Gutenberg Block Plugin that enables you to easily display PDF documents on your website. **This will allow your visitors to view and easily interact with your PDF files directly on your site**.

This free plugin has a lot to offer. Even more can be found in the Premium version of this Plugin, please see [all features of the Premium plugin here](http://www.kevinbazira.com/blog/article/algori-pdf-viewer-pro-for-wordpress-gutenberg#features).

# Features

* No Browser Plugins Needed ( No Flash or Adobe Acrobat )
* Compatible with Modern Browsers like Chrome, Firefox, IE11, Edge, Opera and Safari.
* Compatible with Modern OS and devices including Windows, iOS, Linux and Android.
* Supports Printing PDF document.
* Supports Downloading PDF file.
* Supports Navigation for Next page and Previous page.
* Supports Zoom with zoom in, zoom out, page fit and restore normal zoom.
* Supports Document Rotation to clockwise or counterclockwise.
* Supports presentation mode.
* One can enable the hand tool.
* One can enable the text selection tool.
* Supports Text Search for General text or Match case. All this is done with text highlights.
* Supports document outline in the expandible and collapsible sidebar.
* Supports keyboard shortcuts.
* Translatable into 100+ languages.
* Multiple PDF documents can be loaded on a single page.
* Supports left, right, wide and full width alignments.
* Easy to use and does not require any coding skills.

These features are enabled by default and can't be disabled in the free version. We released a Premium Plugin with many more exciting features that will enable you to enable/disable all the PDF viewer settings as you wish.

Have a look at the [Premium Plugin here](http://www.kevinbazira.com/blog/article/algori-pdf-viewer-pro-for-wordpress-gutenberg).

# Installation

* Download the plugin, unzip it and move the unzipped folder to the "wp-content/plugins" directory in your WordPress installation.
* In your admin panel, go to Plugins and you'll find Algori PDF Viewer in the plugins section.
* Click on the 'Activate' button to use your new plugin right away.
* Go [here for a guide on how to embed and display PDF documents on your WordPress site](http://www.kevinbazira.com/blog/article/algori-pdf-viewer-pro-for-wordpress-gutenberg#documentation).
* Done :)
* PS: Remember to click the **Enable auto-updates** link for this plugin so that you don't miss cool new features as they come in.

# How to use 

* After installing and activating the Algori PDF Viewer plugin in your WordPress website.
* Navigate to your blog post or page and use the Gutenberg editor to add a PDF Viewer block.
* Use the PDF Viewer block to add, embed and display a PDF on your web page.
* At this point, you can adjust your PDF's dimensions (width and height) using the Gutenberg block inspector section.
* Click "Publish" to view your new web page with an embedded PDF document.
* Congratulations :D

# Frequently Asked Questions

= Can I use this plugin with other page builders I am using? =

Nope. Algori PDF Viewer only works with Gutenberg.

= What theme works with Algori PDF Viewer? =

Most WordPress themes that are optimized for Gutenberg will work well with Algori PDF Viewer. To get a full experience of the next-generation WordPress block editor, youâ€™ll need a Gutenberg-ready WordPress theme, like [Algori Blogger](https://wordpress.org/themes/algori-blogger/) or [Algori Shop](https://wordpress.org/themes/algori-shop/).

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

# Changelog

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
* Added Social call to action into README.md

= 1.0.1 - Nov 12 2018 =
* Changed MediaPlaceholder and MediaUpload "type" to "allowedTypes" to support Gutenberg >= 4.2.0

= 1.0.0 - Sept 13 2018 =
* Initial Release


Algori PDF Viewer WordPress Plugin, Copyright 2024 Kevin Bazira.<br/>
Algori PDF Viewer is distributed under the terms of the GNU GPL.<br/><br/>


_If you like this project, please 🌟 star it here_ [![GitHub stars](https://img.shields.io/github/stars/kevinbazira/algori-pdf-viewer-lite.svg?label=Stars&style=social)](https://github.com/kevinbazira/algori-pdf-viewer-lite)
<br/>
_Follow me 👋 on Twitter for more projects like this_ [![Tweet to say Hi](https://img.shields.io/twitter/follow/kevinbazira.svg?style=social&label=Tweet%20@kevinbazira)](https://twitter.com/kevinbazira/)
