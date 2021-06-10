<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title>Пополнение счёта — Статистика пользователя SOHONET</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <link rel="icon" href="http://localhost/cabinet/public_html/data/images/refill-favicon.ico" />
    <link rel="stylesheet" type="text/css" href="http://localhost/cabinet/public_html/data/images/styles-main.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/cabinet/public_html/data/images/styles-refill.css?25.03.2016" />
    <!--[if IE 5.5000]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie55.css" type="text/css" media="screen" /><![endif]-->
    <!--[if lte IE 6]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="http://localhost/cabinet/public_html/data/images/styles-ie7.css" type="text/css" media="screen" /><![endif]-->
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-switcher.js"></script>
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-disableform.js"></script>
    <script type="text/javascript" src="http://localhost/cabinet/public_html/data/images/scripts-livevalidation.js"></script>
    <script type='text/javascript' src='http://localhost/cabinet/public_html/data/images/scripts-jquery.js'></script>
    <script type='text/javascript' src='http://localhost/cabinet/public_html/data/images/scripts-simplemodal.js'></script>
    <script type='text/javascript' src='http://localhost/cabinet/public_html/data/images/scripts-simplemodal-refill.js'></script>
</head>
<body>
<div id="wrap">
    <table id="layout">
        <tr id="header">
            <td class="logo"><a href="/cgi-bin/utm/$STAT_PL?cmd=user_report&sid=$SID"></a></td>
            <!-- Breadcrubms -->
            <td class="sublogo"><a href="/cgi-bin/utm/$STAT_PL?cmd=user_report&sid=$SID"></a><h1>Пополнение счёта</h1></td>
            <!-- / Breadcrubms -->
            <td class="logout">
                <a href="<?= $this->makeUrl('login/logout') ?>"><span>Выход</span> &rarr;</a>
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
                    <p>На этой странице вы можете пополнить свой счёт при помощи карточки пополнения или чека.</p>
                    <a href="/cgi-bin/utm/$STAT_PL?cmd=help&sid=$SID#refill" class="more"><span>Подробнее об этом разделе</span> &rarr;</a>
                </div>
                <!-- / Help box -->
            </td>
            <td class="content" colspan="2">
                <!-- Content -->
                <div class="refill">
                    <h1>Пополнение счёта</h1>
                    <p>— <a href="http://www.sohonet.ua/users/payment" target="_blank">Узнайте подробнее о возможностях пополнения.</a></p>
                    <div class="pin hide" id="pin" style="display:block;">
                        <div class="tabs">
                            <a href="javascript:tabs('pin')" class="active">Кодом пополнения</a>
                            <a href="javascript:tabs('ccd')">Кредитной картой</a>
                            <a href="javascript:tabs('direct')">Прямое пополнение в терминале</a>
                        </div>
                        <div class="form">
                            <form action="#" method="post" onSubmit="return disableForm(this);">
                                <p><input type="hidden" name="cmd" value="repl_icard" /><input type="hidden" name="sid" value="$SID" /></p>
                                <table>
                                    <tr>
                                        <td class="label"><label for="number">Номер карточки:</label></td>
                                        <td class="input"><input type="text" name="card_num" id="number" class="input-field" maxlength="18" /></td>
                                    </tr>
                                    <tr>
                                        <td class="label"><label for="pincode">Пин-код карточки:</label></td>
                                        <td class="input"><input type="text" name="card_serial" id="pincode" class="input-field"  maxlength="18" /></td>
                                    </tr>
                                    <tr>
                                        <td class="label"></td>
                                        <td class="input"><input type="submit" value="Пополнить" id="submit" /></td>
                                    </tr>
                                </table>
                            </form>
                            <script type="text/javascript">
                                var number = new LiveValidation('number');
                                number.add( Validate.Numericality );
                                number.add( Validate.Length, { minimum: 5, maximum: 7 } );
                                number.add( Validate.Presence );
                                var pincode = new LiveValidation('pincode');
                                pincode.add( Validate.Numericality );
                                pincode.add( Validate.Length, { is: 10 } );
                                pincode.add( Validate.Presence );
                            </script>
                        </div>
                        <div class="hide" id="card" style="display:block;">
                            <div class="instruction card">
                                <div class="switch"><a href="javascript:toggle('card', 'cheque')"><span>А у меня чек!</span></a></div>
                                <div class="text">
                                    <p>Для пополнения своего счёта в поле «<em>Номер карточки</em>» введите <strong>6</strong> цифр с номером, а в поле «<em>Пин-код карточки</em>» — <strong>10</strong> цифр пин-кода и нажмите «<em>Пополнить</em>». Никаких других символов вводить не нужно.</p>
                                    <p>При ошибке напротив поля, где вы совершили ошибку, появляется предупреждение.</p>
                                    <div class="after">
                                        <p class="big">После пополнения обязательно убедитесь, что у вас включен интернет!</p>
                                        <p>Посмотреть это можно, зайдя в раздел «<em>Управление услугами</em>», пункт «<em>Выключатель интернета</em>».</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show" id="cheque" style="display:none;">
                            <div class="instruction cheque">
                                <div class="switch"><a href="javascript:toggle('card', 'cheque')"><span>А у меня карточка!</span></a></div>
                                <div class="text">
                                    <p>Для пополнения своего счёта в поле «<em>Номер карточки</em>» введите <strong>6</strong> цифр, указанных в строке «Серийный номер» вашего чека. А в поле «<em>Пин-код карточки</em>» — <strong>10</strong> цифр из строки «Код» и нажмите «<em>Пополнить</em>».</p>
                                    <p>При ошибке напротив поля, где вы совершили ошибку, появляется предупреждение.</p>
                                    <div class="after">
                                        <p class="big">После пополнения обязательно убедитесь, что у вас включен интернет!</p>
                                        <p>Посмотреть это можно, зайдя в раздел «<em>Управление услугами</em>», пункт «<em>Выключатель интернета</em>».</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ccd show" id="ccd" style="display:none;">
                        <div class="warning">
                            <h3>Внимание! </h3>При проведении платежа кредитной картой вы будете перенаправлены на страницу платежной системы.
                        </div>
                        <div class="tabs">
                            <a href="javascript:tabs('pin')">Кодом пополнения</a>
                            <a href="javascript:tabs('ccd')" class="active">Кредитной картой</a>
                            <a href="javascript:tabs('direct')">Прямое пополнение в терминале</a>
                        </div>
                        <iframe name="formpay" id="formpay" src="https://nps.sohonet.ua?sid=$SID" width="600" height="740" align="left"></iframe>
                    </div>
                    <div class="direct hide" id="direct" style="display:none;">
                        <div class="tabs">
                            <a href="javascript:tabs('pin')">Кодом пополнения</a>
                            <a href="javascript:tabs('ccd')">Кредитной картой</a>
                            <a href="javascript:tabs('direct')" class="active">Прямое пополнение в терминале</a>
                        </div>
                        <p>Для удобства абонентов, пользующихся подневными пакетами введена система прямого пополнения счета на произвольную сумму. Система прямого пополнения используется параллельно с пополнением счета при помощи ваучеров и организована в терминальных сетях <em>24Non-Stop</em> и <em>EasyPay</em>. Прямое пополнение является более удобным способом оплаты услуг, поскольку не требует введения кода пополнения карточки.</p>
                        <div class="images">
                            <img src="http://localhost/cabinet/data/images/refill-easypay.png" />
                            <img src="http://localhost/cabinet/data/images/refill-24nonstop.png" />
                        </div>
                        <ol>
                            <li><span>В терминалах <strong>24Non-Stop</strong> или <strong>EasyPay</strong> найдите кнопку SOHO.NET (раздел «Интернет»).</span></li>
                            <li><span>Выберите пункт «<strong>Прямое пополнение</strong>».</span></li>
                            <li><span>В поле «<strong>Абонентский номер в системе</strong>» введите: <?= $this->user->id ?></span></li>
                            <li><span>Загрузите в терминал нужную сумму из расчета <strong>1 юнит = 6 грн.</strong> и нажмите «<strong>Оплатить</strong>», через несколько минут эта сумма зачислится вам на счет.</span></li>
                        </ol>
                    </div>
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
<div id="basic-modal-content">
    <iframe src="/banner/process.htm" width="430" height="550"></iframe>
    <div class="simplemodal-close-btm"><a href="#" class="simplemodal-close">&larr; <span>Вернуться назад</span></a></div>
</div>
</body>
</html>
<!-- Template file: stat_repl.tpl, stat_repl_icard.tpl -->
