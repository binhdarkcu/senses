var SiteMain = (function() {
    //INIT
	function init(){
		initEvent();
        initCSS();
	}
	
	function initEvent(){
	}

    function initCSS(){
    	$('#header').height($(window).height());
    	$(window).resize(function(){
    		$('#header').height($(window).height());
    	});
    }

	function openPopup(idDiv){
		jQuery('.popup').css('display','none');
		jQuery(idDiv).css('display','block');
	}
	
	function closePopup(){
		jQuery('.popup').css('display','none');
	}
	
	return {
		init:init
	};
	
})();		

$(document).ready( function() {
	SiteMain.init();
});