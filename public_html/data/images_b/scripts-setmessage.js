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
	F.message.value = '����� �������� ��� �������� ���� �� ' + opt[opt.selectedIndex].text + ' � ������ ���������� �������� �������. ';
}
else
{	F.message.value += '\n����� �������� ��� �������� ���� �� ' + opt[opt.selectedIndex].text + ' � ������ ���������� �������� �������. ';
}
textCounter(F.message,F.remLen,700);

}

function showTextOnhold(){
var F, opt;
F = document.post;
opt = F.onhold.options;

if (F.message.value == '')
{
	F.message.value = '����� ���������� ��� ���� ' + opt[opt.selectedIndex].text + ' � ������ ���������� �������� �������. ';
}
else
{
	F.message.value += '\n����� ���������� ��� ���� ' + opt[opt.selectedIndex].text + ' � ������ ���������� �������� �������. ';
}
textCounter(F.message,F.remLen,700);

}