function search_init(){
	var bar = document.getElementById('edit-search-block-form-1');
	bar.value = "Search";
	bar.onfocus = function(){
		if(this.value == "Search") this.value="";
		$(this).addClass("focused");
	}
	bar.onblur = function(){
		if(this.value == "") {
			$(this).removeClass("focused");
			this.value="Search";
		}
	}
}

function addLoadEvent(func){
	var oldonload = window.onload;
	if(typeof window.onload != 'function'){
		window.onload = func;
	}else{
		window.onload = function(){
			oldonload();
			func();
		}
	}
}
addLoadEvent(search_init);