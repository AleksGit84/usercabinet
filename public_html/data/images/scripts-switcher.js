function tabs(element) {
	if (element == "pin") {
		document.getElementById("pin").style.display = "block";
		document.getElementById("ccd").style.display = "none";
		document.getElementById("direct").style.display = "none";
	} else if (element == "ccd") {
		document.getElementById("ccd").style.display = "block";
		document.getElementById("pin").style.display = "none";
		document.getElementById("direct").style.display = "none";
	} else if (element == "direct") {
		document.getElementById("direct").style.display = "block";
		document.getElementById("ccd").style.display = "none";
		document.getElementById("pin").style.display = "none";
	}
}


function toggle(element, element2) {
	if (document.getElementById(element).style.display == "none") {
		document.getElementById(element).style.display = "block";
		document.getElementById(element2).style.display = "none";
	} else {
		document.getElementById(element).style.display = "none";
		document.getElementById(element2).style.display = "block";
	}
}


//Unit Switcher
jQuery(document).ready(function($) {
    var UnitValue = 6;	// 1 ���� = 6 ���	
     $('tr.total > td.number script').remove();
    
    
    function uah(){
        $.cookie('currency', 'uah');
        $('.currency-symbol').each(function(){
            $(this).text('������');
        });

        $('.currency-symbol-alt').each(function(){
            $(this).text('������');
        });

        $('.currency-value').each(function(){
            $(this).text( Number($(this).text() * UnitValue).toFixed(2));
        });
    };

    function unit(){
        $.cookie('currency', 'unit');
        $('.currency-symbol').each(function(){
            $(this).text('������');
        });

        $('.currency-symbol-alt').each(function(){
            $(this).text('�����');
        });

        $('.currency-value').each(function(){
            $(this).text( Number($(this).text() / UnitValue).toFixed(2));
        });
    };

    function currencyInit (){
        $('.ballance-text em, .supertable em, .supertable td.currency').addClass('currency-symbol');     //��������� ������ �����
        $('td .ballance > p, td.price, td.number, .supertable td.sum').addClass('currency-value');  	 //��������� ������ �����

        $('.supertable td.currency').addClass('currency-symbol-alt');     								 //��������� ������ �����

        $('.currency-value').each(function(){
            $(this).text(    Number($(this).text()).toFixed(2)    );
        })

        if($.cookie('currency')==='uah'){
            uah();
            $('#currency-swither').attr('checked', 'checked');
        }
        else if($.cookie('currency')==='unit'){
        }
    }currencyInit();

    $('#currency-swither').change(function() {
        if(this.checked) {
            uah();
        }
        else if (!this.checked){
            unit();
        };
    });    

});
//Unit Switcher
