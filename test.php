
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Image Plugin - CKEditor 4 Documentation</title>
    <meta name="description" content="Learn how to install, integrate, configure and develop CKEditor Ecosystem products. Browse through API documentation and online samples.">
    <meta name="twitter:card" content="Learn how to install, integrate, configure and develop CKEditor Ecosystem products. Browse through API documentation and online samples.">
    <meta name="twitter:site" content="@ckeditor">
    <meta property="og:title" content="Easy Image Plugin - CKEditor 4 Documentation">
    <meta property="og:description" content="Learn how to install, integrate, configure and develop CKEditor Ecosystem products. Browse through API documentation and online samples.">
    <meta property="og:image" content="https://ckeditor.com/docs/assets/img/og/ogimage-ecosystem.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ckeditor.com/docs/examples/latest/examples/easyimage.html">
    <meta property="DC.language" content="en">
    <meta property="DC.publisher" content="CKSource">
    <meta property="DC.creator" content="CKEditor">
    <meta property="DC.title" content="Easy Image Plugin - CKEditor 4 Documentation">
    <meta property="DC.format" content="text/html">
    <meta property="DC.type" content="Text">
    <meta property="DC.description" content="Learn how to install, integrate, configure and develop CKEditor Ecosystem products. Browse through API documentation and online samples.">
    <link rel="canonical" href="https://ckeditor.com/docs/examples/latest/examples/easyimage.html">
    <link rel="icon" type="image/png" href="../assets/img/favicons/16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../assets/img/favicons/32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../assets/img/favicons/96x96.png" sizes="96x96">
    <link rel="apple-touch-icon" type="image/png" href="../assets/img/favicons/200x200.png">
    <link rel="stylesheet" href="../../../assets/0.13.4/css/styles.css" type="text/css" media="screen">
    <script>
      ( function() {
      	'use strict';
      	// Set up global variables;
      	if ( !window.umebrto ) {
      		window.umberto = {};
      	}
      	window.umberto.relativeAppPath = "../../../assets/0.13.4/scripts"
      
      	// Add app script
      	var el = document.createElement( 'script' );
      	el.setAttribute( 'async', 'async' );
      	el.setAttribute( 'defer', 'defer' );
      	if ( typeof Symbol === 'function' && typeof Symbol() === 'symbol' ) {
      		el.src = "../../../assets/0.13.4/scripts/app.js";
      	} else {
      		el.src = "../../../assets/0.13.4/scripts/app-polyfill.js";
      	}
      	document.getElementsByTagName( 'head' )[ 0 ].appendChild( el );
      } )();
    </script>
    <!-- Google Tag Manager-->
    <script>if (["ckeditor.com"].indexOf(location.hostname) !== -1) {
          (function (w, d, s, l, i) {
              w[l] = w[l] || [];
              w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
              var f = d.getElementsByTagName(s)[0],
                  j = d.createElement(s),
                  dl = l != 'dataLayer' ? '&l=' + l : '';
              j.async = true;
              j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
              f.parentNode.insertBefore(j, f);
          })( window, document, 'script', 'dataLayer', 'GTM-KFSS6L' );
      }
      
    </script>
    <!-- End Google Tag Manager-->
  </head>
  <body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFSS6L" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript)-->
    <header class="top" data-project="ckeditor4">
      <div class="header__main">
        <div class="header__main-rwd-button"><a href="#"><span></span><span></span><span></span></a></div>
        <div class="header__main-title"><a class="header__main-title-home" href="../../../index.html">CKEditor Ecosystem Documentation</a></div>
        <div class="top__search">
          <input class="top__search__box" type="text" id="docsearch_input" placeholder="Search in CKEditor 4">
          <div class="top__search__button"><img src="../../../assets/0.13.4/img/loupe.svg" alt="Search"></div>
        </div>
      </div>
      <div class="header__sub">
        <ul class="top__menu">
          <li class="top__menu-project-logo"><a href="../index.html">CKEditor 4</a></li>
          <li><a href="../guide/index.html">Guides</a></li>
          <li><a class="top__menu__item--active" href="index.html">Examples</a></li>
          <li><a class="top__menu__api" href="../api/index.html">API</a></li>
        </ul>
      </div>
      <div class="header__menu-rwd">
        <ul class="header__menu-rwd__projects">
          <li data-project="ckeditor5"><a href="../../../ckeditor5/latest/index.html">CKEditor 5</a></li>
          <li data-project="ckeditor4"><a href="../../latest/index.html">CKEditor 4
              <ul class="tree header__menu-rwd__projects-pages">
                <li data-group="guide"><a href="../guide/index.html">Guides</a>
                  <!-- Display subpages for active project.-->
                </li>
                <li data-group="sdk"><a href="index.html">Examples</a>
                  <!-- Display subpages for active project.-->
                  <ul class="header__menu-rwd__projects-subpages">
                                        <li>
                                          <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">End-user Features</span></div>
                                          <ul class="tree__item-nested-list">
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">User Interface</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="uicolor.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">UI Color</span></div></a></li>
                                                                                        <li><a href="uilanguages.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">UI Language</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor Resizing</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="size.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Editor Size</span></div></a></li>
                                                                                        <li><a href="autogrow.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Editor Auto Grow</span></div></a></li>
                                                                                        <li><a href="resize.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Resizing Customization</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Inserting Images</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="image.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Default Image Plugin</span></div></a></li>
                                                                                        <li><a href="image2.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Enhanced Image Plugin</span></div></a></li>
                                                                                        <li><a href="easyimage.html">
                                                                                            <div class="tree__item__wrapper tree__item__wrapper--active"><span class="tree__item--sdk tree__item__text">Easy Image Plugin</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Inserting Content</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="pastefromword.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Paste from Word</span></div></a></li>
                                                                                        <li><a href="pastefromexcel.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Paste from Excel</span></div></a></li>
                                                                                        <li><a href="fileupload.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">File Upload</span></div></a></li>
                                                                                        <li><a href="mediaembed.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Embedding Media Resources</span></div></a></li>
                                                                                        <li><a href="table.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Tables with Column Resizing</span></div></a></li>
                                                                                        <li><a href="codesnippet.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Code Snippets</span></div></a></li>
                                                                                        <li><a href="mathjax.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Mathematical Formulas</span></div></a></li>
                                                                                        <li><a href="placeholder.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Placeholders</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Styling and Formatting</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="basicstyles.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Basic Text Styles</span></div></a></li>
                                                                                        <li><a href="copyformatting.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Copying Text Formatting</span></div></a></li>
                                                                                        <li><a href="removeformat.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Removing Text Formatting</span></div></a></li>
                                                                                        <li><a href="styles.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Styles and Stylesheet Parser</span></div></a></li>
                                                                                        <li><a href="format.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Text Formats</span></div></a></li>
                                                                                        <li><a href="colorbutton.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Text and Background Color</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Working with Document</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="spellchecker.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Spell Checking</span></div></a></li>
                                                                                        <li><a href="mentions.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Mentions, Tags and Emoji</span></div></a></li>
                                                                                        <li><a href="autocomplete.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Autocomplete</span></div></a></li>
                                                                                        <li><a href="sourcearea.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Source Code Editing</span></div></a></li>
                                                                                        <li><a href="magicline.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Magic Line</span></div></a></li>
                                                                                        <li><a href="language.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Multilingual Content</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Accessibility Support</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="accessibility.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Accessibility and Keyboard Shortcuts</span></div></a></li>
                                                                                        <li><a href="accessibilitychecker.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Accessibility Checker</span></div></a></li>
                                                                                        <li><a href="tabindex.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">&quot;Tab&quot; Key Navigation</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                          </ul>
                                        </li>
                                        <li>
                                          <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Integration Features</span></div>
                                          <ul class="tree__item-nested-list">
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor Types</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="classic.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Classic Editor</span></div></a></li>
                                                                                        <li><a href="inline.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Inline Editor</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor UI</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="fixedui.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Fixed User Interface</span></div></a></li>
                                                                                        <li><a href="floatingui.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Floating User Interface</span></div></a></li>
                                                                                        <li><a href="sharedspace.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Shared User Interface</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor Presets</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="basicpreset.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Basic Preset</span></div></a></li>
                                                                                        <li><a href="standardpreset.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Standard Preset</span></div></a></li>
                                                                                        <li><a href="fullpreset.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Full Preset</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Framework Integration</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="react.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">React Integration</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Toolbar</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="toolbar.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Custom Toolbar</span></div></a></li>
                                                                                        <li><a href="balloontoolbar.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Balloon Toolbar</span></div></a></li>
                                                                                        <li><a href="toolbarlocation.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Toolbar Location</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Content Filtering</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="acf.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">ACF – Automatic Mode</span></div></a></li>
                                                                                        <li><a href="acfcustom.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">ACF – Custom Mode</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Saving Data</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="savetextarea.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Saving Textarea Data</span></div></a></li>
                                                                                        <li><a href="saveajax.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Saving in Ajax Applications</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Output Control</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="htmlformatting.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">HTML Output Formatting</span></div></a></li>
                                                                                        <li><a href="fullpage.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Editing Complete HTML Pages</span></div></a></li>
                                                                                        <li><a href="enterkey.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Enter Key Configuration</span></div></a></li>
                                                                                        <li><a href="bbcode.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">BBCode Editing</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">API Usage</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="api.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Using CKEditor API</span></div></a></li>
                                                                                        <li><a href="readonly.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Read-Only Mode</span></div></a></li>
                                                                                        <li><a href="draganddrop.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Drag and Drop Integration</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Utilities</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="devtools.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Developer Tools</span></div></a></li>
                                                                                        <li><a href="uicolorpicker.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">UI Color Picker</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                                                <li>
                                                                  <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Tutorials</span></div>
                                                                  <ul class="tree__item-nested-list">
                                                                                        <li><a href="timestamp.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Timestamp Plugin</span></div></a></li>
                                                                                        <li><a href="abbr.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Abbreviation Plugin</span></div></a></li>
                                                                                        <li><a href="simplebox.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Custom Widget</span></div></a></li>
                                                                                        <li><a href="autotag.html">
                                                                                            <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Autotag Plugin</span></div></a></li>
                                                                  </ul>
                                                                </li>
                                          </ul>
                                        </li>
                  </ul>
                </li>
                <li data-group="api-reference"><a href="../api/index.html">API</a>
                  <!-- Display subpages for active project.-->
                </li>
              </ul></a></li>
          <li data-project="letters"><a href="../../../letters/latest/guides/overview.html">Letters</a></li>
          <li data-project="cs"><a href="../../../cs/latest/guides/overview.html">Cloud Services</a></li>
          <li data-project="ckfinder"><a href="../../../ckfinder/latest/index.html">CKFinder</a></li>
        </ul>
      </div>
    </header>
    <main class="main">
      <section class="main__content formatted main__content--sdk">
        <div class="main__content-inner">
          <div class="github-contrib"><a href="https://github.com/ckeditor/ckeditor-docs/blob/master/docs/sdk/examples/easyimage.html" title="Contribute to this guide"><img src="../../../assets/0.13.4/img/edit.svg" alt="Contribute to this guide"></a><a href="https://github.com/ckeditor/ckeditor-docs/issues/new" title="Report an issue"><img src="../../../assets/0.13.4/img/exclamation-circle.svg" alt="Report an issue"></a>
          </div>
          <div class="rwd-breadcrumbs"><a href="../../../index.html">Home</a><span class="rwd-breadcrumbs__separator">/</span><a href="../index.html">CKEditor 4</a><span class="rwd-breadcrumbs__separator">/</span><a href="index.html">Examples</a>
          </div>
          <script src="../../../vendors/4.11.1/ckeditor/ckeditor.js"></script>
          <script src="assets/icons.js"></script>
			<script src="assets/easyimage/optimizations.js"></script>
			<style>
				.sdk-row {
					display: table;
				}
				.sdk-col {
					display: table-cell;
					padding: 0 10px;
					vertical-align: top;
					width: 50%;
				}
				.sdk-col-main {
					width: 70%;
				}
				.sdk-col-aside {
					width: 30%;
				}

				.ei-image, .ei-placeholder {
					max-width: 100%;
				}
				.ei-placeholder {
					opacity: .4;
				}

				.sdk-col .ei-optimization {
					display: table;
					border-collapse: collapse;
					table-layout: fixed;
					border: 1px #000 solid;
					min-width: 500px;
					font-family: Arial;
					margin-top: 1.2em;
				}

				.ei-optimization caption {
					display: table-caption;
					text-align: -webkit-center;
				}

				.ei-optimization-head {
					display: table-header-group;
					vertical-align: middle;
					border-color: inherit;
					background: #ddd;
					font-weight: bold;
				}

				.ei-optimization th {
					font-weight: normal;
				}

				.ei-optimization tr {
					display: table-row;
					vertical-align: inherit;
					border-color: inherit;
				}

				.ei-optimization td, .ei-optimization th {
					padding: 6px;
					border: 1px solid #AAAAAA;
					font-size: 12px;
					height: 26px;
				}

				.ei-optimization th[scope=col] {
					font-weight: bold;
				}

				.ei-optimization-head th:first-child {
					width: 40%;
				}

				.ei-optimization td {
				padding-left: 20px;
				}

				.ei-optimization-body {
					display: table-row-group;
					vertical-align: middle;
					border-color: inherit;
				}

				.ei-optimization-body tr:nth-child( odd ) {
					background: #f5f5f5;
					color: #000;
				}
			</style>

			<h1>Easy Image Plugin <a class="documentation" href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_easyimage.html">Documentation</a></h1>

			<p>
				The optional <a href="https://ckeditor.com/cke4/addon/easyimage">Easy Image</a> plugin, introduced in CKEditor 4.9, supports uploading and inserting images into the editor content. It provides the following features when compared to two alternative image plugins, the default <a href="./image.html">Image</a> plugin and the optional <a href="./image2.html">Enhanced Image</a> plugin:
			</p>
			<ul>
				<li>
					It allows for adding <strong>image captions</strong> (that will not be separated from the image when its location changes).
				</li>
				<li>
					It allows for uploading images to <a href="https://ckeditor.com/ckeditor-cloud-services/">CKEditor Cloud Services</a> that <strong>optimizes images</strong> by rescaling them and compressing, resulting in smaller sizes and faster download times.
				</li>
				<li>
					It produces <strong>responsive markup</strong>, so inserted images are suitable for a wide range of devices (including mobile ones).
				</li>
				<li>
					It allows for adding <strong>custom styles</strong> for inserted images.
				</li>
				<li>
					It uses a <strong>customizable balloon toolbar</strong> for every image.
				</li>
				<li>
					It does not produce any content reflow, resulting in smoother and better user experience.
				</li>
				<li>
					Images uploaded to CKEditor Cloud Services are <strong>stored in the cloud</strong> and delivered through a <strong>blazing-fast CDN</strong>.
				</li>
			</ul>

			<p>
				A few configuration options are available to fine-tune this feature, including <a href="https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-easyimage_styles">adding custom styles</a>, <a href="https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-easyimage_toolbar">customizing the image widget&apos;s toolbar</a> or setting a <a href="https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-easyimage_class">custom CSS class</a> for the widget. Refer to the <a href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_easyimage.html">Easy Image Plugin</a> article to learn more about this feature.
			</p>

			<p>Note: The example below uses some configuration options mentioned above to add additional image styles (pink and blue gradient) with respective balloon toolbar buttons and context menu entries.</p>


			<textarea cols="80" id="editor1" name="editor1" rows="10" data-sample="1" data-sample-short="">
				&lt;h1&gt;Walking the capitals of Europe: Warsaw&lt;/h1&gt;

				&lt;figure class=&quot;easyimage&quot;&gt;
					&lt;img alt=&quot;Picture of the Warsaw Old Town.&quot; width=&quot;4288&quot; srcset=&quot;https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_430 430w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_860 860w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_1290 1290w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_1720 1720w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_2150 2150w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_2580 2580w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_3010 3010w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_3440 3440w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_3870 3870w, https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg/w_4288 4288w&quot; sizes=&quot;100vw&quot; src=&quot;https://33333.cdn.cke-cs.com/0fNqCUeBSal4ENvGfd7K/images/c12cb88e596270d8d963b7c87bef1767880f42d94fb2ec43_warsaw01.jpg&quot;&gt;
					&lt;figcaption&gt;Medieval Old Town square, destroyed in 1944 &amp;amp; rebuilt after WWII.&lt;/figcaption&gt;
				&lt;/figure&gt;

				&lt;p&gt;If you enjoyed my previous articles in which we discussed wandering around &lt;a href=&quot;https://en.wikipedia.org/wiki/Copenhagen&quot;&gt;Copenhagen&lt;/a&gt; and &lt;a href=&quot;https://en.wikipedia.org/wiki/Vilnius&quot;&gt;Vilnius&lt;/a&gt;, you&#x2019;ll definitely love exploring &lt;a href=&quot;https://en.wikipedia.org/wiki/Warsaw&quot;&gt;Warsaw&lt;/a&gt;.&lt;/p&gt;

				&lt;h2&gt;Time to put comfy sandals on!&lt;/h2&gt;

				&lt;p&gt;Best time to visit the city is July and August, when it&#x2019;s cool enough to not break a sweat and hot enough to enjoy summer. The city which has quite a combination of both old and modern textures is located by the river of Vistula.&lt;/p&gt;

				&lt;p&gt;The historic &lt;strong&gt;Old Town&lt;/strong&gt;, which was reconstructed after the World War II, with its late 18th century characteristics, is a must-see. You can start your walk from the &lt;strong&gt;Nowy &#x15A;wiat Street&lt;/strong&gt; which will take you straight to the Old Town.&lt;/p&gt;

				&lt;p&gt;Then you can go to the &lt;strong&gt;Powi&#x15B;le&lt;/strong&gt; area and take a walk on the newly renovated promenade on the riverfront. There are also lots of cafes, bars and restaurants where you can shake off the exhaustion of the day. On Sundays, there are many parks where you can enjoy nature or listen to pianists from around the world playing Chopin.&lt;/p&gt;

				&lt;p&gt;For museum lovers, you can add these to your list:&lt;/p&gt;

				&lt;ul&gt;
					&lt;li&gt;&lt;a href=&quot;http://www.polin.pl/en&quot;&gt;POLIN&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;http://www.1944.pl/en&quot;&gt;Warsaw Uprising Museum&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;http://chopin.museum/en&quot;&gt;Fryderyk Chopin Museum&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;

				&lt;h2&gt;Next destination&lt;/h2&gt;

				&lt;p&gt;We will go to Berlin and have a night&apos;s walk in the city that never sleeps! Make sure you subscribe to our newsletter!&lt;/p&gt;
			</textarea>
			<h2>Image Optimization</h2>
			<p>
				Easy Image guarantees that all images inserted into your content are responsive. With a single image upload, several optimized versions of the image are created after upload by <a href="https://ckeditor.com/ckeditor-cloud-services/">CKEditor Cloud Services</a>, for different sizes of displays. All this is transparent to the end user who uploaded the image. Rescaled and optimized images are delivered through a CDN.
			</p>
			<div id="optimizations">
				<p>
					<strong>Please upload some image to the editor above to see the level of optimization for a number of popular device types.</strong>
				</p>
			</div>

			<p class="tip">
				If you are looking for pixel-perfect image alignment with vertical and horizotal whitespace, configurable image border and file manager integration, try the default <a href="./image.html">Image</a> plugin. If you need more modern image support with features such as image captions, drag and drop positioning, click and drag resizing, image alignment (including centering) with inline styles or CSS classes and custom image styles, but without cloud storage support with optimized images and responsive markup, try <a href="./image2.html">Enhanced Image</a>.
			</p>

			<h2>Related Features</h2>
			<ul>
				<li><a href="./image.html">Inserting Images &#x2013; Default Image Plugin</a></li>
				<li><a href="./image.html">Inserting Images &#x2013; Enhanced Image Plugin</a></li>
				<li><a href="./styles.html#widget-styles">Styling and Formatting &#x2013; Applying Styles to Editor Content</a></li>
			</ul>
			<script>
				CKEDITOR.once( 'instanceCreated', function( evt ) {
					evt.editor.once( 'configLoaded', function( evt ) {
						delete evt.editor.config.uploadUrl;
						delete evt.editor.config.filebrowserBrowseUrl;
						delete evt.editor.config.filebrowserImageBrowseUrl;
						delete evt.editor.config.filebrowserUploadUrl;
						delete evt.editor.config.filebrowserImageUploadUrl;
					} );
				} );
			</script>
			<script data-sample="1">
				// Don't forget to add CSS for your custom styles.
				CKEDITOR.addCss( 'figure[class*=easyimage-gradient]::before { content: ""; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
					'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
					'.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
					'.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }' );

				CKEDITOR.replace( 'editor1', {
					extraPlugins: 'easyimage',
					removePlugins: 'image',
					removeDialogTabs: 'link:advanced',
					toolbar: [
						{ name: 'document', items: [ 'Undo', 'Redo' ] },
						{ name: 'styles', items: [ 'Format' ] },
						{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
						{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList' ] },
						{ name: 'links', items: [ 'Link', 'Unlink' ] },
						{ name: 'insert', items: [ 'EasyImageUpload' ] }
					],
					height: 630,
					cloudServices_uploadUrl: 'https://33333.cke-cs.com/easyimage/upload/',
					// Note: this is a token endpoint to be used for CKEditor 4 samples only. Images uploaded using this token may be deleted automatically at any moment.
					// To create your own token URL please visit https://ckeditor.com/ckeditor-cloud-services/.
					cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
					easyimage_styles: {
						gradient1: {
							group: 'easyimage-gradients',
							attributes: {
								'class': 'easyimage-gradient-1'
							},
							label: 'Blue Gradient',
							icon: '../../../ckeditor4/4.11.1/examples/assets/easyimage/icons/gradient1.png',
							iconHiDpi: '../../../ckeditor4/4.11.1/examples/assets/easyimage/icons/hidpi/gradient1.png'
						},
						gradient2: {
							group: 'easyimage-gradients',
							attributes: {
								'class': 'easyimage-gradient-2'
							},
							label: 'Pink Gradient',
							icon: '../../../ckeditor4/4.11.1/examples/assets/easyimage/icons/gradient2.png',
							iconHiDpi: '../../../ckeditor4/4.11.1/examples/assets/easyimage/icons/hidpi/gradient2.png'
						},
						noGradient: {
							group: 'easyimage-gradients',
							attributes: {
								'class': 'easyimage-no-gradient'
							},
							label: 'No Gradient',
							icon: '../../../ckeditor4/4.11.1/examples/assets/easyimage/icons/nogradient.png',
							iconHiDpi: '../../../ckeditor4/4.11.1/examples/assets/easyimage/icons/hidpi/nogradient.png'
						}
					},
					easyimage_toolbar: [
						'EasyImageFull',
						'EasyImageSide',
						'EasyImageGradient1',
						'EasyImageGradient2',
						'EasyImageNoGradient',
						'EasyImageAlt'
					]
				} );
			</script>

			<script>
				CKEDITOR.once( 'instanceReady', function( evt ) {
					setupOptimizationsCalculator( evt.editor, '#optimizations' );
				} );
			</script>
		
          <h2>Get Sample Source Code</h2>
          <ul class="sdk-sample-source-code">
            <li><a class="sdk-sample-source-code__button" href="#">Easy Image Plugin</a>
              <pre class="sdk-sample-source-code__code-block">
                <div class="sdk-sample-source-code__code-block-action-buttons"><a class="sdk-sample-source-code__code-block-copy" href="#">Copy</a><a class="sdk-sample-source-code__code-block-download" href="#">Download</a></div><code class="html">&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;

&lt;head&gt;
  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;meta name=&quot;robots&quot; content=&quot;noindex, nofollow&quot;&gt;
  &lt;title&gt;Easy Image Plugin&lt;/title&gt;
  &lt;script src=&quot;https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
  &lt;textarea cols=&quot;80&quot; id=&quot;editor1&quot; name=&quot;editor1&quot; rows=&quot;10&quot;&gt;&amp;lt;p&amp;gt;This is some &amp;lt;strong&amp;gt;sample text&amp;lt;/strong&amp;gt;. You are using &amp;lt;a href=&amp;quot;https://ckeditor.com/&amp;quot;&amp;gt;CKEditor&amp;lt;/a&amp;gt;.&amp;lt;/p&amp;gt;&lt;/textarea&gt;
  &lt;script&gt;
    // Don't forget to add CSS for your custom styles.
    CKEDITOR.addCss('figure[class*=easyimage-gradient]::before { content: &quot;&quot;; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
      'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
      '.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
      '.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }');

    CKEDITOR.replace('editor1', {
      extraPlugins: 'easyimage',
      removePlugins: 'image',
      removeDialogTabs: 'link:advanced',
      toolbar: [{
          name: 'document',
          items: ['Undo', 'Redo']
        },
        {
          name: 'styles',
          items: ['Format']
        },
        {
          name: 'basicstyles',
          items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
        },
        {
          name: 'paragraph',
          items: ['NumberedList', 'BulletedList']
        },
        {
          name: 'links',
          items: ['Link', 'Unlink']
        },
        {
          name: 'insert',
          items: ['EasyImageUpload']
        }
      ],
      height: 630,
      cloudServices_uploadUrl: 'https://33333.cke-cs.com/easyimage/upload/',
      // Note: this is a token endpoint to be used for CKEditor 4 samples only. Images uploaded using this token may be deleted automatically at any moment.
      // To create your own token URL please visit https://ckeditor.com/ckeditor-cloud-services/.
      cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
      easyimage_styles: {
        gradient1: {
          group: 'easyimage-gradients',
          attributes: {
            'class': 'easyimage-gradient-1'
          },
          label: 'Blue Gradient',
          icon: 'https://ckeditor.com/docs/ckeditor4/4.11.1/examples/assets/easyimage/icons/gradient1.png',
          iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.11.1/examples/assets/easyimage/icons/hidpi/gradient1.png'
        },
        gradient2: {
          group: 'easyimage-gradients',
          attributes: {
            'class': 'easyimage-gradient-2'
          },
          label: 'Pink Gradient',
          icon: 'https://ckeditor.com/docs/ckeditor4/4.11.1/examples/assets/easyimage/icons/gradient2.png',
          iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.11.1/examples/assets/easyimage/icons/hidpi/gradient2.png'
        },
        noGradient: {
          group: 'easyimage-gradients',
          attributes: {
            'class': 'easyimage-no-gradient'
          },
          label: 'No Gradient',
          icon: 'https://ckeditor.com/docs/ckeditor4/4.11.1/examples/assets/easyimage/icons/nogradient.png',
          iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.11.1/examples/assets/easyimage/icons/hidpi/nogradient.png'
        }
      },
      easyimage_toolbar: [
        'EasyImageFull',
        'EasyImageSide',
        'EasyImageGradient1',
        'EasyImageGradient2',
        'EasyImageNoGradient',
        'EasyImageAlt'
      ]
    });
  &lt;/script&gt;
&lt;/body&gt;

&lt;/html&gt;</code></pre>
            </li>
          </ul>
        </div>
      </section>
      <div class="side-navigation side-navigation--sdk">
        <div class="side-navigation__wrapper">
          <nav class="side-navigation__inner">
            <ul class="tree sdk-tree">
                            <li>
                              <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">End-user Features</span></div>
                              <ul class="tree__item-nested-list">
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">User Interface</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="uicolor.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">UI Color</span></div></a></li>
                                                                <li><a href="uilanguages.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">UI Language</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor Resizing</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="size.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Editor Size</span></div></a></li>
                                                                <li><a href="autogrow.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Editor Auto Grow</span></div></a></li>
                                                                <li><a href="resize.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Resizing Customization</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Inserting Images</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="image.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Default Image Plugin</span></div></a></li>
                                                                <li><a href="image2.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Enhanced Image Plugin</span></div></a></li>
                                                                <li><a href="easyimage.html">
                                                                    <div class="tree__item__wrapper tree__item__wrapper--active"><span class="tree__item--sdk tree__item__text">Easy Image Plugin</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Inserting Content</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="pastefromword.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Paste from Word</span></div></a></li>
                                                                <li><a href="pastefromexcel.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Paste from Excel</span></div></a></li>
                                                                <li><a href="fileupload.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">File Upload</span></div></a></li>
                                                                <li><a href="mediaembed.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Embedding Media Resources</span></div></a></li>
                                                                <li><a href="table.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Tables with Column Resizing</span></div></a></li>
                                                                <li><a href="codesnippet.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Code Snippets</span></div></a></li>
                                                                <li><a href="mathjax.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Mathematical Formulas</span></div></a></li>
                                                                <li><a href="placeholder.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Placeholders</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Styling and Formatting</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="basicstyles.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Basic Text Styles</span></div></a></li>
                                                                <li><a href="copyformatting.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Copying Text Formatting</span></div></a></li>
                                                                <li><a href="removeformat.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Removing Text Formatting</span></div></a></li>
                                                                <li><a href="styles.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Styles and Stylesheet Parser</span></div></a></li>
                                                                <li><a href="format.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Text Formats</span></div></a></li>
                                                                <li><a href="colorbutton.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Text and Background Color</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Working with Document</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="spellchecker.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Spell Checking</span></div></a></li>
                                                                <li><a href="mentions.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Mentions, Tags and Emoji</span></div></a></li>
                                                                <li><a href="autocomplete.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Autocomplete</span></div></a></li>
                                                                <li><a href="sourcearea.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Source Code Editing</span></div></a></li>
                                                                <li><a href="magicline.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Magic Line</span></div></a></li>
                                                                <li><a href="language.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Multilingual Content</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Accessibility Support</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="accessibility.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Accessibility and Keyboard Shortcuts</span></div></a></li>
                                                                <li><a href="accessibilitychecker.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Accessibility Checker</span></div></a></li>
                                                                <li><a href="tabindex.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">&quot;Tab&quot; Key Navigation</span></div></a></li>
                                                </ul>
                                              </li>
                              </ul>
                            </li>
                            <li>
                              <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Integration Features</span></div>
                              <ul class="tree__item-nested-list">
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor Types</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="classic.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Classic Editor</span></div></a></li>
                                                                <li><a href="inline.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Inline Editor</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor UI</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="fixedui.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Fixed User Interface</span></div></a></li>
                                                                <li><a href="floatingui.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Floating User Interface</span></div></a></li>
                                                                <li><a href="sharedspace.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Shared User Interface</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Editor Presets</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="basicpreset.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Basic Preset</span></div></a></li>
                                                                <li><a href="standardpreset.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Standard Preset</span></div></a></li>
                                                                <li><a href="fullpreset.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Full Preset</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Framework Integration</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="react.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">React Integration</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Toolbar</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="toolbar.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Custom Toolbar</span></div></a></li>
                                                                <li><a href="balloontoolbar.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Balloon Toolbar</span></div></a></li>
                                                                <li><a href="toolbarlocation.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Toolbar Location</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Content Filtering</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="acf.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">ACF – Automatic Mode</span></div></a></li>
                                                                <li><a href="acfcustom.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">ACF – Custom Mode</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Saving Data</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="savetextarea.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Saving Textarea Data</span></div></a></li>
                                                                <li><a href="saveajax.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Saving in Ajax Applications</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Output Control</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="htmlformatting.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">HTML Output Formatting</span></div></a></li>
                                                                <li><a href="fullpage.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Editing Complete HTML Pages</span></div></a></li>
                                                                <li><a href="enterkey.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Enter Key Configuration</span></div></a></li>
                                                                <li><a href="bbcode.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">BBCode Editing</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">API Usage</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="api.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Using CKEditor API</span></div></a></li>
                                                                <li><a href="readonly.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Read-Only Mode</span></div></a></li>
                                                                <li><a href="draganddrop.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Drag and Drop Integration</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Utilities</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="devtools.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Developer Tools</span></div></a></li>
                                                                <li><a href="uicolorpicker.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">UI Color Picker</span></div></a></li>
                                                </ul>
                                              </li>
                                              <li>
                                                <div class="tree__item__wrapper"><span class="tree__item--folder tree__item__text">Tutorials</span></div>
                                                <ul class="tree__item-nested-list">
                                                                <li><a href="timestamp.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Timestamp Plugin</span></div></a></li>
                                                                <li><a href="abbr.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Abbreviation Plugin</span></div></a></li>
                                                                <li><a href="simplebox.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Custom Widget</span></div></a></li>
                                                                <li><a href="autotag.html">
                                                                    <div class="tree__item__wrapper"><span class="tree__item--sdk tree__item__text">Autotag Plugin</span></div></a></li>
                                                </ul>
                                              </li>
                              </ul>
                            </li>
            </ul>
          </nav>
        </div>
      </div>
    </main>
    <footer class="footer footer--bordered">
      <p>&copy; 2017-2018 <a href="http://cksource.com">CKSource</a>. All rights reserved.</p>
    </footer>
  </body>
</html>