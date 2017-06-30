<?php
if (!$mobileLayout) echo '<a href="#" onclick="enableMobileLayout(1); return false;" rel="nofollow">Mobile view</a>';
else echo '<a href="#" onclick="enableMobileLayout(-1); return false;" rel="nofollow">Disable mobile view</a>';
?>
<br>
<br>
<?php $bucket = "footer"; include("./lib/pluginloader.php");?>
Powered by <a href="https://github.com/Pokemonfan1000/Moline/tree/master">Moline</a> 1.0<br />
By Pokemonfan1000, et al.
<br>
Based off of ABXD as made by Dirbaio, xfix, Kawa, StapleButter, Nina, et al.<br />
AcmlmBoard &copy; Jean-Fran&ccedil;ois Lapointe<br />
<?php print __("<!-- English translation by The ABXD Team -->")?>
<br>
<br>
<img src="img/poweredbyacmlm.gif">
<br>
<br>
<form><select onchange=window.open(this.options[this.selectedIndex].value)>
               <OPTION selected>Forum affiliates:
<Option value=http://www.visitquadcities.com>Visit Quad Cities
<Option value=http://www.kwqc.com>KWQC TV6 news
<Option value=http://www.wqad.com>WQAD news 8
<Option value=http://www.ourquadcities.com>WHBF Local 4 news
<Option value=http://tswails.com>The Guy Does Weather Right
<Option value=http://radioboard.netor.ga/index.html>Pokemonfan1000's rom and console hack domain
<Option value=http://www.vizzed.com>Vizzed board
<Option value=http://board.antireality.net>Randy53215's anti-reality
<Option value=http://rosey.78.lt>Rosey's board
<Option value=http://xeogaming.net>Xeogaming forums
<Option value=http://jul.rustedlogic.net>Jul
<Option value=https://tcrf.net>The Cutting Room Floor wiki
<Option value=http://acmlm.kafuka.org/board>Board 2
<Option value=http://wiihackingdomain.h05t.gq/ >Wii hacking forum
<Option value=http://99pluskfmh.com>Rock, blues, jazz, reggae and alternative 24/7
<Option value=http://smwcentral.net>Super Mario World Central
<Option value=http://kuribo64.net/board>Kuribo64 forums
       </select></form><br>

<?php print (isset($footerButtons) ? $footerButtons : "")?>
<?php print (isset($footerExtensionsB) ? $footerExtensionsB : "")?>


