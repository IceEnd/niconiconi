// Ctrl + Enter 提交表单
function cmt_submit(){
	if(event.ctrlKey && window.event.keyCode==13) {
		document.getElementById("cmt_form").submit.click();
	};
};

// 代码可编辑
function dpt_code(){
	var controls = document.getElementsByTagName('pre');
	for(var i=0; i<controls.length; i++){
		controls[i].spellcheck = false;
		controls[i].setAttribute("contenteditable","true")
	};
	var controls = document.getElementsByTagName('code');
	for(var i=0; i<controls.length; i++){
		controls[i].spellcheck = false;
		controls[i].setAttribute("contenteditable","true");
	};
}

// 滚动 Fixed
function scroll_top(){
	var scrollPos;
	if (typeof window.pageYOffset != 'undefined') {
		 scrollPos = window.pageYOffset;
	}
	else if (typeof document.compatMode != 'undefined' &&
		 document.compatMode != 'BackCompat') {
		 scrollPos = document.documentElement.scrollTop; 
	}
	else if (typeof document.body != 'undefined') {
		 scrollPos = document.body.scrollTop;
	}
	return scrollPos;
}

function scroll_nav() {
	var nav = document.getElementById("nav");
	if (scroll_top() > 180) {
		nav.className = "nav_s";
	} else {
		nav.className = "";
	}
}

document.onkeydown = cmt_submit;
window.onload = dpt_code;
window.onscroll = scroll_nav;

console.log('Theme Kapok by Cononico')
console.log('http://coolecho.net')