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


function showTextPlan()
{
	var F, opt;
	F = document.post;
	opt = F.plan.options;

	if (F.message.value == '')
	{
		F.message.value = getTextMessage(opt[opt.selectedIndex].text);
	}
	else
	{
		var txt_message = getTextMessage(opt[opt.selectedIndex].text);		F.message.value += ((txt_message !== '') ? '\n' : '') + getTextMessage(opt[opt.selectedIndex].text);
	}
	textCounter(F.message,F.remLen,700);
}

function getTextMessage(txt)
{
	if (txt === '-') 
	{
		return '';
	} 
	else if (txt === 'Light') 
	{
		return 'Прошу изменить мой тарифный план на ' + txt + ' с начала следующего учетного периода. ';
	} 
	else 
	{
		return 'Прошу изменить мой тарифный план на ' + txt + ' с начала следующего учетного периода. ';
	}
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