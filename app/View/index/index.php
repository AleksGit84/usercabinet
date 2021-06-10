<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title>Общие данные — Статистика пользователя SOHONET</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <link rel="icon" href="http://localhost/cabinet/public_html/data/images/general-favicon.ico" />
    <link rel="stylesheet" type="text/css" href="http://localhost/cabinet/public_html/data/images/styles-main.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/cabinet/public_html/data/images/styles-general.css" />
    <!--[if IE 5.5000]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie55.css" type="text/css" media="screen" /><![endif]-->
    <!--[if lte IE 6]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-jquery.js"></script>
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/jquery.cookie.js"></script>
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-switcher.js"></script>
</head>
<body>

<div id="wrap">
    <table id="layout">
        <tr id="header">
            <td class="logo"><a href="/cgi-bin/utm/$STAT_PL?cmd=user_report&sid=$SID"></a></td>
            <!-- Breadcrubms -->
            <td class="sublogo"><a href="/cgi-bin/utm/$STAT_PL?cmd=user_report&sid=$SID"></a><h1>Общие данные</h1></td>
            <!-- / Breadcrubms -->
            <td class="logout">


                <a href="<?= $this->makeUrl("login/logout") ?>"><span>Выход</span> &rarr;</a>
                <input type="hidden" name="uid-hidden" value="<?= $this->user->id ?>" />


                <div class="un">
                    <div class="tooltip">
                        <div class="border">
                            Ваш абонентский номер в системе, введите его в терминале оплаты для <a href="/cgi-bin/utm/utm_stat?cmd=help&sid=$SID#refill-direct">прямого пополнения счета</a>.
                        </div>
                    </div>
                    <a href="/cgi-bin/utm/utm_stat?cmd=help&sid=$SID#refill-direct" class="no"><span><?= $this->user->id ?></span></a>
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
                    <p>На этой странице вы можете посмотреть состояние своего счёта, текущий тарифный план, заказанные услуги, а так же, отчёты за предыдущие учётные периоды.</p>
                    <a href="/cgi-bin/utm/$STAT_PL?cmd=help&sid=$SID#general" class="more"><span>Подробнее об этом разделе</span> &rarr;</a>
                </div>
                <!-- / Help box -->
            </td>
            <td class="content" colspan="2">
                <!-- Content -->
                <div class="general">
                    <h1>Общие данные</h1>
                    <!-- Switcher -->
                    <div class="switcher-container">
                        <div class="switcher">
                            <input type="checkbox" id="currency-swither" />
                            <label for="currency-swither"></label>
                        </div>
                    </div>
                    <!-- Switcher -->
                    <table class="name">
                        <tr>
                            <td class="text" rowspan="2">
                                <p><span>Логин: </span><?= $this->user->login ?></p>
                                <p><span>Полное имя: </span><?= $this->user->full_name ?></p>
                                <p><span>IP-адрес: </span><?= implode(', ', $this->user->ip) ?></p>
                                <p><span>Секретный код: </span><b class="secret"></b></p>
                                <div class="un-box">
                                    <p><span>Абонентский номер в системе: </span><?= $this->user->id ?></p>
                                    &nbsp;— <a href="/cgi-bin/utm/utm_stat?cmd=help&sid=$SID#refill-direct">Прямое пополнение счета в терминалах</a>
                                </div>
                            </td>
                            <td class="ballance-text">
                                <p>Баланс:<br /><span>(<em>юнитов</em>)</span></p>
                            </td>
                            <td class="ballance">
                                <p><?= (float)$this->user->bill / 6 ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="status-text">
                                <p><span>Состояние <br />счёта:</span><br /></p>
                            </td>
                            <td class="status">
                                <?php if($this->user->block) { ?>
                                    <span style="color:red;">Заблокирован</span>
                                <?php } else { ?>
                                    <span style="color:green;">Не заблокирован</span>
                                <?php } ?>
                            </td>
                        </tr>
                    </table>
                    <table class="plan">
                        <tr>
                            <td class="text">
                                <p><span>Текущий тарифный план:</span><br /><a href="http://www.sohonet.ua/services/internet" target="_blank"><?= \App\Model\UTM::tariffDesc($this->user->tariff) ?></a></p>
                            </td>
                            <td class="text">
                                <p><span>Дата начала текущего учётного периода:</span><br /><?= date('Y-m-d H:i', $this->user->ab_pstart) ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text">
                                <p><span>Следующий тарифный план:</span><br /><a href="http://www.sohonet.ua/services/internet" target="_blank"><?= \App\Model\UTM::tariffDesc($this->user->tariff_next) ?></a></p>
                            </td>
                            <td class="text">
                                <p><span>Дата начала следующего учётного периода:</span><br /><?= date('Y-m-d H:i', $this->user->ab_pend) ?></p>
                            </td>
                        </tr>
                    </table>
                    <div class="instructions">
                        <p>Дата начала текущего или следующего учетного периода не изменяется <br />вследствие пополнения счета или включения/выключения интернета.</p>
                        <p class="more">Для изменения тарифного плана с начала следующего учетного периода отправьте запрос в разделе <a href="https://ss.soho.net.ua/cgi-bin/utm/utm_stat?cmd=admin_messages&sid=$SID">Сообщение администратору</a>. Изменение текущего тарифного плана не предусмотрено.</p>
                    </div>
                </div>
                <script type="text/javascript">
                    var c = 0;
                </script>
                <div class="services">
                    <h1>Включённые услуги</h1>
                    <table class="supertable" cellspacing="0">
                        <tr>
                            <th>Наименование</th>
                            <th>Сумма <span>(<em>юнитов</em>)</span></th>
                        </tr>
                        $PROD_ROWS
                        <tr class="total">
                            <td class="label">Итого:</td>
                            <td class="number">
                                <script type="text/javascript">document.write(c.toPrecision(5));</script>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="reports">
                    <div class="hide" id="hide-reports" style="display:block;">
                        <h1><a href="javascript:toggle('hide-reports', 'show-reports')"><span>Отчёты</span> &darr;</a></h1>
                    </div>
                    <div class="show" id="show-reports" style="display:none;">
                        <h1 class="reports"><a href="javascript:toggle('show-reports', 'hide-reports')"><span>Отчёты</span> &uarr;</a></h1>
                        <ul class="list">
                            $VALUES
                        </ul>
                        <div class="hide"><a href="javascript:toggle('show-reports', 'hide-reports')"><span>Скрыть отчёты</span> &uarr;</a></div>
                    </div>
                    <noscript>
                        <ul class="list">
                            $VALUES
                        </ul>
                    </noscript>
                </div>
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
                            <a href="mailto:soho@sohonet.ua">support@sohonet.ua</a>
                        </td>
                        <td class="phone">
                            <p><span>(048) </span>743-25-35<br />
                                <span>(063) </span>743-25-35<br />
                                <span>(095) </span>743-25-35<br />
                                <span>(097) </span>743-25-35<br />
                                <span>(0482) </span>390-403</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
<!-- Template files: stat_report.tpl, users_official_report_prod.tpl, stat_report_values1.tpl -->
<script>
    $(document).ready(function() {

        var uid = $('[name="uid-hidden"]').val();
        $.get('https://manager.sohonet.ua/message/message/generate-code', {uid:uid}, function(data) {
            var data = JSON.parse(data);
            $('.secret').text(data.code);
        })
    })
</script>





