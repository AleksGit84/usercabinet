<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title>Сообщения администратору — Статистика пользователя SOHO.NET</title>
    <meta http-equiv="Cache-Control" content="no-cache" />
    <link rel="icon" href="http://localhost/cabinet/public_html/data/images/messages-favicon.ico" />
    <link rel="stylesheet" type="text/css" href="http://localhost/cabinet/public_html/data/images/styles-main.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/cabinet/public_html/data/images/styles-messages.css" />
    <!--[if IE 5.5000]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/mages/styles-ie55.css" type="text/css" media="screen" /><![endif]-->
    <!--[if lte IE 6]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie7.css" type="text/css" media="screen" /><![endif]-->
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-disableform.js"></script>
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-setmessage.js"></script>
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-counter.js"></script>
    <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
</head>
<body>
<div id="wrap">
    <table id="layout">
        <tr id="header">
            <td class="logo"><a href="/cgi-bin/utm/$STAT_PL?cmd=user_report&sid=$SID"></a></td>
            <!-- Breadcrubms -->
            <td class="sublogo"><a href="/cgi-bin/utm/$STAT_PL?cmd=user_report&sid=$SID"></a><h1>Сообщения администратору</h1></td>
            <!-- / Breadcrubms -->
            <td class="logout">
                <a href="/cgi-bin/utm/$STAT_PL?cmd=users_bye&sid=$SID"><span>Выход</span> &rarr;</a>
                <div class="un">
                    <div class="tooltip">
                        <div class="border">
                            Ваш абонентский номер в системе, введите его в терминале оплаты для <a href="/cgi-bin/utm/utm_stat?cmd=help&sid=$SID#refill-direct">прямого пополнения счета</a>.
                        </div>
                    </div>
                    <a href="/cgi-bin/utm/utm_stat?cmd=help&sid=$SID#refill-direct" class="no"><span><?= $this->user->id ?></span></a>
                    <input type="hidden" name="uid-hidden" value="<?= $this->user->id ?>" />
                </div>
            </td>
        </tr>
        <tr id="page">
            <td class="side">
                <!-- Menu -->
                <?php include_once('stat_menu.php') ?>
                <!-- / Menu -->
                <!-- Help box -->
                <div class="info">
                    <h1>Справка</h1>
                    <p>На этой странице вы можете связаться с администратором, заказать или изменить какие-либо услуги или сообщить о проблеме.</p>
                    <p>Для смены тарифного плана, заказа дополнительных услуг и т. п. вы можете воспользоваться помощником (просто выбирая нужные вам пункты и он составит текст сообщения за вас) или написать сообщение в вольной форме.</p>
                    <a href="/cgi-bin/utm/$STAT_PL?cmd=help&sid=$SID#messages" class="more"><span>Подробнее об этом разделе</span> &rarr;</a>
                </div>
                <!-- / Help box -->
            </td>
            <td class="content" colspan="2">
                <!-- Content -->
                <div class="messages"></div>

                <div class="received"></div>

                <div class="sent"></div>
                <!-- / Content -->
            </td>
        </tr>
        <tr id="footer">
            <td class="container" colspan="3">
                <table>
                    <tr>
                        <td class="copyright">
                            <p>&copy; 1998-<script type="text/javascript">document.write(new Date().getFullYear());</script><br /><span>Телекоммуникационный проект «SOHO.NET»</span></p>
                        </td>
                        <td class="email">
                            <a href="mailto:soho@sohonet.ua">soho@sohonet.ua</a>
                        </td>
                        <td class="phone">
                            <p><span>(048) </span>743-25-35<br /><span>(0482) </span>390-403</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
<!-- Template files: stat_admin_messages.tpl, stat_admin_messages_received.tpl, stat_admin_messages_sent.tpl -->

<script>

    function newForm()
    {
        var uid = $('[name="uid-hidden"]').val();
        $('.content').load("https://manager.sohonet.ua/message/message/message?uid="+ uid);
    }


    $(document).ready(function() {
        console.log('document ready');
        var uid = $('[name="uid-hidden"]').val();
        $('.content').load("https://manager.sohonet.ua/message/message/message?uid="+ uid);
    });

</script>