<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 6/11/2019
 * Time: 6:29 PM
 */
namespace MVC;

// nạp namespace
use MVC\Controllers\EmployeeController;
use MVC\Controllers\ErrorController;

class Route {


    public function run() {
        /**
         * url : index.php?controller=employee&action=index
         * $controller = new EmployeeController();
         * $controller->index();
         *
         * url : index.php?controller=employee&action=edit
         * $controller = new EmployeeController();
         * $controller->edit();
         *
         * url : index.php?controller=employee&action=delete
         * $controller = new EmployeeController();
         * $controller->delete();
         *
         * url : index.php?controller=employee&action=create
         * $controller = new EmployeeController();
         * $controller->create();
         * $_REQUEST = $_POST + $_GET
         */

        if ($_REQUEST["controller"] == "employee") {
            $controller = new EmployeeController();
            if ($_REQUEST["action"] == "index") {
                $controller->index();
            }

            if ($_REQUEST["action"] == "create") {
                $controller->create();
            }

            if ($_REQUEST["action"] == "edit") {
                $controller->edit();
            }

            if ($_REQUEST["action"] == "delete") {
                $controller->delete();
            }

        }



    }

}