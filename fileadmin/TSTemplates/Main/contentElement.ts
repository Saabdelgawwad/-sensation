/*
 *    Project:	Sensation
 *    Version:	1.0.0
 *    Date      28.10.2013 14:32:54
 *    Author:	TheFlame
 */
lib.navigation = HMENU 
lib.navigation{
            1 = TMENU
            1 {
		expAll = 0
		noBlur = 1
		wrap = <ul>|</ul>
		NO = 1
		NO.wrapItemAndSub =  <li class="navigationFirst">|</li> |*| <li>|</li>|*| <li class="navigationLast">|</li>
		ACT = 1
		ACT.wrapItemAndSub =  <li class="navigationFirst activeLink">|</li> |*| <li class="activeLink">|</li>|*| <li class="navigationLast activeLink">|</li>
            }
            wrap = <div id="navigation">|</div>
}
