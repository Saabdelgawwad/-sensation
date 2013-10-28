/*
 *    Project:	Sensation
 *    Version:	1.0.0
 *    Date      21.10.2013 14:06:11
 *    Author:	TheFlame 
 *
 *    Main Template
 */
//TYPOSCRIPT LIB
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/TSTemplates/Main/contentElement.ts">	

// TEMPLATE
page = PAGE
page.10 = FLUIDTEMPLATE
page.10 {
        partialRootPath = fileadmin/HTMLTemplates/partials/
        layoutRootPath = fileadmin/HTMLTemplates/layouts/
	file = fileadmin/HTMLTemplates/main.html
	variables {
            content < styles.content.get
            navigation < lib.navigation
	}
}

// INCLUDES
page.includeJSlibs {
  jquery = {$PATH.jquery}jquery-2.0.3.min.js
  twitterbootstrapJS = {$PATH.twitterbootstrapJS}bootstrap.min.js
}
page.includeCSS {
  global = {$PATH.css}global.css
  twitterbootstrapCSS = {$PATH.twitterbootstrapCSS}bootstrap.min.css
}

// RTE
lib.parseFunc_RTE.nonTypoTagStdWrap.encapsLines {
  addAttributes.P.class >
  removeWrapping = 1
}