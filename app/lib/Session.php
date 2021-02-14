<?php

    namespace app\lib;
    
    class Session
    {
        public static function init()
        {
            if (version_compare(phpversion(), '7.3.8', '<')) {
                if (session_id() == '') {
                    session_start();
                }
            } else {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
            }
        }

        public static function set($key, $val)
        {
            $_SESSION[$key] = $val;
        }

        public static function get($key)
        {
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            } else {
                return false;
            }
        }

        public static function checkSession()
        {
            self::init();
            if (self::get("adminlogin") == false) {
                self::destroy();
                header("Location:login.php");
            }
        }

        public static function checkLogin()
        {
            self::init();
            if (self::get("adminlogin") == true) {
                header("Location:dashboard.php");
            }
        }

            //pharmacy session check
        public static function checkPhamSession()
        {
            self::init();
            if (self::get("phamlogin") == false) {
                self::destroy();
                header("Location:login.php");
            }
        }


        public static function checkPharmacyLogin()
        {
            self::init();
            if (self::get("phamlogin") == true) {
                header("Location:dashboard.php");
            }
        }

        // lab session check
        public static function checkLabSession()
        {
            self::init();
            if (self::get("lablogin") == false) {
                self::destroy();
                header("Location:login.php");
            }
        }

        public static function checkLabLogin()
        {
            self::init();
            if (self::get("lablogin") == true) {
                header("Location:dashboard.php");
            }
        }


        public static function destroy()
        {
            session_destroy();
            header("Location:login.php");
        }

    }
