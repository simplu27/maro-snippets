// Open external links in new tab
// Markup:
// <a href="http://www.google.com" rel="external">Google</a>

$('a[rel^="external"],a[rel$="external"]').attr({target:"_blank",title:"Opens in a new tab or window"}).append('');

// https://perishablepress.com/code-snippets/