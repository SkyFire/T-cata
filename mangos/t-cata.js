//HOW HARD IS IT FOR MS TO MAKE A % HEIGHT LIKE THEY DO WITH
//BELOW WILL HOPEFULLY FIX THIS OR T-CATA WILL LOOK VERY WERID.
//IF WORKS WITH FF - YOUR ON YOUR OWN WITH ANY OTHER BROWSERS
//http://www.codingforums.com/archive/index.php/t-95086.html
function setIframeHeight(iframeName) {
	//var iframeWin = window.frames[iframeName];
	var iframeEl = document.getElementById? document.getElementById(iframeName): document.all? document.all[iframeName]: null;
	if (iframeEl) {
		iframeEl.style.height = "auto"; // helps resize (for some) if new doc shorter than previous
		//var docHt = getDocHeight(iframeWin.document);
		// need to add to height to be sure it will all show
		var h = alertSize();
		var new_h = (h-148);
		iframeEl.style.height = new_h + "px";
		//alertSize();
	}
}

function alertSize() {
	var myHeight = 0;
	if( typeof( window.innerWidth ) == 'number' ) {
		//Non-IE
		myHeight = window.innerHeight;
		} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
		//IE 6+ in 'standards compliant mode'
		myHeight = document.documentElement.clientHeight;
		} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
		//IE 4 compatible
		myHeight = document.body.clientHeight;
	}
	//window.alert( 'Height = ' + myHeight );
	return myHeight;
}

function popUp(URL,h) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=800,height="+h+",left = 320,top = 150');");
}