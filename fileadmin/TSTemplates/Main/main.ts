/*
 *    Project:	Sensation
 *    Version:	1.0.0
 *    Date      21.10.2013 14:06:11
 *    Author:	TheFlame 
 *
 *    Main Template
 */

page = PAGE
page.10 = FLUIDTEMPLATE
page.10 {
        partialRootPath = fileadmin/HTMLTemplates/partials/
        layoutRootPath = fileadmin/HTMLTemplates/layouts/
	file = fileadmin/HTMLTemplates/main.html
	variables {
            content < styles.content.get
	}
}
page.includeJSlibs {
  jquery = {$PATH.jquery}jquery-2.0.3.min.js
  twitterbootstrapJS = {$PATH.twitterbootstrapJS}bootstrap.min.js
}
page.includeCSS {
  twitterbootstrapCSS = {$PATH.twitterbootstrapCSS}bootstrap.min.css
}