function setmessage(text) {
	var txtarea = document.post.message;
	var txtarea2 = document.post.message;
	text = '' + text + '';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
		txtarea2.focus();
	} else {
		if (txtarea.value == '')
		{
			txtarea.value  += text;
		}
		else
		{			txtarea.value  += '\n' + text;
		}
		txtarea2.focus();
	}

	textCounter(txtarea, document.post.remLen, 700);
}


function showTextPlan(){
var F, opt;
F = document.post;
opt = F.plan.options;

if (F.message.value == '')
{
	F.message.value = 'Прошу изменить мой тарифный план на ' + opt[opt.selectedIndex].text + ' с начала следующего учетного периода. ';
}
else
{	F.message.value += '\nПрошу изменить мой тарифный план на ' + opt[opt.selectedIndex].text + ' с начала следующего учетного периода. ';
}
textCounter(F.message,F.remLen,700);

}

function showTextOnhold(){
var F, opt;
F = document.post;
opt = F.onhold.options;

if (F.message.value == '')
{
	F.message.value = 'Прошу заморозить мой счет ' + opt[opt.selectedIndex].text + ' с начала следующего учетного периода. ';
}
else
{
	F.message.value += '\nПрошу заморозить мой счет ' + opt[opt.selectedIndex].text + ' с начала следующего учетного периода. ';
}
textCounter(F.message,F.remLen,700);

}