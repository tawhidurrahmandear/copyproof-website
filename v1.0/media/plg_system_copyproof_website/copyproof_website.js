// Copyproof Joomla Website | Joomla Extension
// Download from https://dearstore.gumroad.com/l/Copyproof-Joomla-Website 
// Copyright (C) Tawhidur Rahman Dear. All rights reserved.
// License - GNU General Public License version 2 or later; see LICENSE.txt

function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
