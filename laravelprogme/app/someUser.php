<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//class someUser extends Model
class someUser {
    protected $email;
    protected $password;

    function __construct($email, $password) {

        $this->email = $email;
        $this->password = $password;
    }
    function getemail() {
        return $this->email;
    }
    function getpass() {
        return $this->password;
    }
}
