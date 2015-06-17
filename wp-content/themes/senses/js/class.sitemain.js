var siteMain = (function () {
    //INIT
    function init() {
        createDatepicker('#birthday');
        //getCountries();
	}
    function scrolltoDiv(idSelector) {
		var targetOffset = $(idSelector).offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 1000);
    }
    function createDatepicker(idSelector) {
        $(idSelector).datepicker({
            inline: true,
            changeMonth: true,//this option for allowing user to select month
            changeYear: true, //this option for allowing user to select from year range,
            yearRange: '1900:c',
            beforeShow:function(textbox, instance){
                $('.birthdayCol').append($('#ui-datepicker-div'));
                $('#ui-datepicker-div').hide();
            },
            onChangeMonthYear: function (y, m, i) {
                var d = i.selectedDay;
                $(this).datepicker('setDate', new Date(y, m - 1, d));
            }
        });
        $('.ui-datepicker-trigger').click(function () {
            $(idSelector).datepicker().focus();
        });
    }
    function getCountries() {
        populateCountries("countries");
    }
	return {
		init:init,
		scrolltoDiv:scrolltoDiv
	};
})();
$(document).ready(function () {
    siteMain.init();
});

