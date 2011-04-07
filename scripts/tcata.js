function popup(url) {
	newwindow=window.open(url,'name','height=500,width=500,scrollbars=yes');
	if (window.focus) {newwindow.focus()}
	return false;
}
