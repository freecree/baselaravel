<?php

namespace App;


class UsersDataBase extends SingleClass {
    private $usersarr= [];
    public function adduser($id, $login, $email, $pass) {
        $this->usersarr["$id"] = array("login"=>$login,
            "email"=>$email, "password"=>$pass);

    }
    public function getusers() {
        return $this->usersarr;
    }
    public function showusers() {
        foreach ($this->usersarr as $key => $val) {
            foreach ($val as $k => $v) {
                echo "[$key][$k] $v"."</br>";
            }

        }
    }
    public function checkloc($id, $login) {
        if (isset($this->usersarr[$id]["login"])) {


            if ($this->usersarr[$id]["login"] == $login) {
                return true;
            }
            echo $this->usersarr[$id]["login"];
        }
        echo "NO</br>";
        return false;
    }

}
