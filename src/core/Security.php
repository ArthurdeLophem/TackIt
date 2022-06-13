<?php

namespace tackit\core;

use Exception;
use tackit\Data\DB;
use PDO;

    class Security {

        public static function checkLoggedIn() {
            if (!isset($_SESSION['user'])) {
                header("Location: login.php");
                exit;
            }
        }

        public static function checkUserType() {
            if ($_SESSION['user']['Type'] != 1) {
                header("Location: dashboard.php");
                exit;
            }
        }

        public static function checkIfBurger() {
            if ($_SESSION['user']['Type'] != 0) {
                header("Location: dashboard.php");
                exit;
            }
        }


    }
