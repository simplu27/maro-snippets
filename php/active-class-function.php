<?php
// In meniu, adauga clasa "active-menu" in functie de pagina
// <li><a <!php activeClass('homePage'); !>href="/">Home</a></li>
	function activeClass($currPage) {
		global $pageId; // Ex: $pageId = 'homePage';
		if (isset($pageId) && ($pageId == $currPage)){
			echo 'class="active-menu" ';
		}
	} // activeClass

// Example: (replace ! with ?)
//	<ul>
//		<li><a <!php activeClass('homePage'); !>href="/">Home</a></li>
//		<li><a <!php activeClass('page1Page'); !>href="/page1">Page 1</a></li>
//		<li><a <!php activeClass('contactPage'); !>href="/contact">Contact</a></li>
//	</ul>
?>
