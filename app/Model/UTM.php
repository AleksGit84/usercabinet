<?php

namespace App\Model;

use Exception;
use App\Core;
use App\Utility;
use \GuzzleHttp\Client;

/**
 * User Model:
 *
 * @author Andrew Dyer <andrewdyer@outlook.com>
 * @since 1.0.2
 */
class UTM extends Core\Model {

//    public $login;
//    public $password;


    const URL = 'http://192.168.11.74';

    /** @var $instance Client */
    private static $instance;

    public static function instance()
    {
        if (static::$instance === null) {
            static::$instance = new Client(['base_uri' => self::URL]);
        }
        return static::$instance;
    }

    public static function checkUser($login)
    {
        if(!empty($login)) {

            $client = new Client(['base_uri' => 'http://192.168.11.74/api/']);
//            $response = $client->request('GET', 'http://192.168.11.74/api', ['user' => ['login' => $login]]);
            $response = $client->request('GET', 'user/'. $login);
//        echo $response->getStatusCode(); // 200
//        echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
            return json_decode($response->getBody()->getContents());

        }
    }


    public static function getUser($Id)
    {
        if(!empty($Id)) {

            $client = new Client(['base_uri' => 'http://192.168.11.74/api/']);
//            $response = $client->request('GET', 'http://192.168.11.74/api', ['user' => ['login' => $login]]);
            $response = $client->request('GET', 'user/'. $Id);
//        echo $response->getStatusCode(); // 200
//        echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
            return json_decode($response->getBody()->getContents());

        }
    }


    public static function tariffDesc($tariff)
    {
        $titles = [
            60002 => 'Социальный',
            70010 => 'Mini',
            70025 => 'Lite2016',
            70005 => 'ECO50',
            70001 => 'ECO100',
            60050 => 'Play50 подневный',
            60100 => 'Play100 подневный',
            61000 => 'Play1000 подневный',
            75090 => 'Play50 выгодный',
            71090 => 'Play100 выгодный',
            75050 => 'Play50 S подневный',
            70100 => 'Play100 S подневный',
            75051 => 'Business 50',
            70101 => 'Business 100',
            61001 => 'Business 1000',
            60365 => 'Год без забот',
            60367 => 'Год без забот Юбилейный',
            70102 => 'Лояльный',
            40030 => 'SoHo-TV-Базовый',
            40060 => 'SoHo-TV-Оптимальный',
            40090 => 'SoHo-TV-Максимальный',
            70103 => 'Play 1000 S подневный',
            70104 => 'Business 1000 S',
            70110 => 'Black Friday 2019 (ГБЗ)',
            70111 => 'Год без забот 2020',
            76000 => 'LITE 2020',
            76010 => 'ECO50 2020',
            76020 => 'ECO100 2020',
            76030 => 'PLAY50 подневный 2020',
            76040 => 'PLAY100 подневный 2020',
            76050 => 'PLAY1000 подневный 2020',
            76060 => 'PLAY50 выгодный 2020',
            76070 => 'PLAY100 выгодный 2020',
            60 => 'Кабельное',
            50 => 'Удержание линии',
            40 => 'Замороженный доступ',
            45 => 'Переход с Велтона',
        ];

        if(isset($titles[$tariff])) return $titles[$tariff];

        return $tariff;

    }


}
