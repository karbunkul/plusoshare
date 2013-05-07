<script type="text/javascript">(function() {
 if (window.pluso)if (typeof window.pluso.start == "function") return;
 var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
 s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
 s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
 var h=d[g]('head')[0] || d[g]('body')[0];
 h.appendChild(s);
})();</script>

<center>
  <div class="pluso" data-options="big,square,line,horizontal,nocounter,theme=06" data-services="vkontakte,facebook,google,twitter,odnoklassniki,moimir,evernote,blogger,bookmark,email,print" data-background="transparent" data-url="http://www.tgasu.ru/<?php print $_GET['q'];?>"></div>

</center>

<?php
  dsm($plusoshare);
?>