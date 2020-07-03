<?php
session_start();
/**
 * Class SessionManager
 *
 * @author Taha KOÇAK
 * @web http://www.tahakocak.com.tr
 * @mail info@tahakocak.com.tr
 */
class SessionManager {
    /**
     * Toplu veya tek şekilde session oluşturulmak için kullanılır.
     */
    static function createSession ($array=[]){
        foreach ($array as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }
    /**
     * Tek session silmek için kullanılır.
     * @param $name
     * @return none
     */
    static function deleteSession($name){
        unset($_SESSION[$name]);
    }

    /**
     * Tüm sessionları öldürür.
     */
    static function alldeletesession() {
        session_destroy();
    }

    /**
     * Session Kontorlü
     * @param $session_name
     * @param null $value
     * @return bool
     */
    static function checkSession($session_name,$value=null){
        if ($value){
            return ($_SESSION[$session_name] == $value)? true : false;
        }else{
            return ($_SESSION[$session_name])? true : false;
        }
    }

}
