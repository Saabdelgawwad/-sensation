/*
 *    Project:	Sensation
 *    Version:	1.0.0
 *    Date:     21.10.2013 14:07:24
 *    Author:	TheFlame 
 *
 *    Header Data
 *    Viewport initial auf Bildschirmgröße setzen
 *    ViewPort-fix bei orientierungsänderung mobiler geräte
 */

page.headerData.10=TEXT
page.headerData.10.value (         
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
 
    <script type="text/javascript">
        (function(doc) {

          var addEvent = 'addEventListener',
              type = 'gesturestart',
              qsa = 'querySelectorAll',
              scales = [1, 1],
              meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

          function fix() {
            meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
            doc.removeEventListener(type, fix, true);
          }

          if ((meta = meta[meta.length - 1]) && addEvent in doc)
          {
            fix();
            scales = [.25, 1.6];
            doc[addEvent](type, fix, true);
          }

        }(document));

    </script>
)
