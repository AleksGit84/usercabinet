<?php

namespace App\Controller;

use App\Core;
use App\Model;
use App\Utility;

/**
 * Index Controller:
 *
 * @author Andrew Dyer <andrewdyer@outlook.com>
 * @since 1.0
 */
class Index extends Core\Controller {

    /**
     * Index: Renders the index view. NOTE: This controller can only be accessed
     * by authenticated users!
     * @access public
     * @example index/index
     * @return void
     * @since 1.0
     */
    public function index()
    {

        Utility\Auth::checkAuthenticated();

        $userID = Utility\Session::get(Utility\Config::get("SESSION_USER"));
        if (!$User = Model\UTM::getUser($userID)) {
            Utility\Redirect::to(APP_URL);
        }

        $this->View->render("index/index", [
            "title" => "Index",
            "user" => $User
        ]);
    }


    public function payment()
    {
        Utility\Auth::checkAuthenticated();

        $userID = Utility\Session::get(Utility\Config::get("SESSION_USER"));
        if (!$User = Model\UTM::getUser($userID)) {
            Utility\Redirect::to(APP_URL);
        }

        $this->View->render("index/payment", [
            "title" => "Payment",
            "user" => $User
        ]);
    }

    public function messages()
    {
        Utility\Auth::checkAuthenticated();

        $userID = Utility\Session::get(Utility\Config::get("SESSION_USER"));
        if (!$User = Model\UTM::getUser($userID)) {
            Utility\Redirect::to(APP_URL);
        }

        $this->View->render("index/messages", [
            "title" => "Messages",
            "user" => $User
        ]);
    }

}
