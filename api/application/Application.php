<?php
//responsing to client
require_once('ISKombat/ISKombat.php');
require_once("user/User.php");

class Application {

    function __construct() {
        $this->iskombat = new ISKombat();
        $this->user = new User();
    } 
    // user
    public function login($params) {
        if ($params["login"] && $params["pass"]) {
            return $this->user->login($params["login"], $params["pass"]);
        }
        return false;
    }
    // game
    public function move($params) {
        if ($params["id"] && $params["direction"]) {
            return $this->iskombat->move(
                $params['id'],           
                $params['direction'] 
            );
        }
        return false;
    }

    public function hit($params) {
        if ($params["id"] && $params["hitType"]) {
            return $this->iskombat->hit(
                $params['id'],       
                $params['hitType']     
            );
        }
        return false;
    }

    public function setState($params) {
        if ($params["id"] && $params["state"]) {
            return $this->iskombat->setState(
                $params['id'],      
                $params['state']      
            );
        }
        return false;
    }
}
