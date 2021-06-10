<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title>Âõîä  Ñòàòèñòèêà ïîëüçîâàòåëÿ SOHO.NET</title>
    <link rel="icon" href="../../data/images/password-favicon.ico" />
    <link rel="stylesheet" type="text/css" href="data/images/styles-auth.css" />
    <!--[if IE 5.5000]><link rel="stylesheet" href="data/images/styles-ie55.css" type="text/css" media="screen" /><![endif]-->
    <!--[if lte IE 6]><link rel="stylesheet" href="data/images/styles-ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="data/images/styles-ie7.css" type="text/css" media="screen" /><![endif]-->
    <script type="text/javascript">
        <!--
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if(e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }
        //-->
    </script>
</head>
<body onload="document.forms[0].login.focus();">
<div id="wrap">
    <div id="header"></div>
    <div id="auth">
        <div class="login">

            <form action="<?= $this->makeUrl("login/_login"); ?>" method="post">
                <table>
                    <tr>
                        <td class="label"><label for="login">Ëîãèí:</label></td>
                    </tr>
                    <tr>
                        <td class="input"><input type="text" name="login" class="input-field" /></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="password">Ïàðîëü:</label></td>
                    </tr>
                    <tr>
                        <td class="input"><input type="password" name="password" class="input-field" /></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="csrf_token" value="<?php echo App\Utility\Token::generate(); ?>">
                        <td class="submit"><input type="submit" value="Âîéòè" /></td>
                    </tr>
                </table>
            </form>
            <div class="lostpass"><a href="#" onclick="toggle_visibility('lostpass');">Çàáûëè ëîãèí èëè ïàðîëü?</a></div>
        </div>
        <div id="lostpass">
            <div class="text">
                <p class="intro">Ëîãèí è ïàðîëü îò ñòàòèñòèêè àáîíåíòà çàïèñàí â êàðòî÷êå àáîíåíòà, ïðèëàãàåìîé ê äîãîâîðó.</p>
                <p>Åñëè âû ïîòåðÿëè êàðòî÷êó àáîíåíòà  ñâÿæèòåñü ñî ñëóæáîé òåõíè÷åñêîé ïîääåðæêè è ìû ïîìîæåì âàì åå âîññòàíîâèòü.</p>
            </div>
            <div class="tel numone"><span>(048) </span><strong>743-25-35</strong></div>
            <div class="tel numtwo"><span>(0482) </span><strong>390-403</strong></div>
            <div class="hours">ñ 9:00 äî 00:00</div>
            <div class="mail"><a href="mailto:support@sohonet.ua">support@sohonet.ua</a></div>
        </div>
    </div>
    <iframe src="https://sohonet.ua/company/news/external" width="820" height="600" border="0"></iframe>
</div>
</body>
</html>
