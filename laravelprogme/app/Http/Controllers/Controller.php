<?php

namespace App\Http\Controllers;

use App\someUser;
use App\UsersDataBase;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{

    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function stringDefense($str) {
        $str = strip_tags($str);
        return $str;

    }

    public function getsome($id, $login, $password) {
        $s = new someUser($id, $login, $password);
        echo $s->getid();
        return view('welcome',['obj'=>$s]);
    }
    public function  getsomepost($id) {
        return $id;
    }
    public function getuser($id, $login) {
        $s = UsersDataBase::instance();
        $s->adduser(1, "name1", "name1@gmail.com", 1111);
        $s->adduser(2, "name2", "name2@gmail.com", 2222);
        $s->adduser(3, "name3", "name3@gmail.com", 3333);
        $s->adduser(4, "name4", "name4@gmail.com", 4444);
        $id = htmlspecialchars($id);
        $login = htmlspecialchars($login);
        if ($s->checkloc($id, $login)) {
            echo "<script>alert(\"Hello $login!! Welcome to the site\")</script>";
        } else {
            echo "<script>alert(\"$login You enter from another device!\")</script>";
        }

        return view('pages/Users-page', ['usersobj'=>$s]);
    }
    public function form(Request $request) {
        if ($request->isMethod('post')) {
            $email = $this->stringDefense($request->input('email'));
            $pass = $this->stringDefense($request->input('pass'));

            $user = new someUser($email, $pass);
            echo "It is post</br>";
            echo "email: ".$user->getemail()."</br>";
            echo "password: ".$user->getpass()."</br>";
            echo "Авторизация успешно завершена</br>";
        } else if ($request->isMethod('get')) {
            echo "It is get</br>";
        }

        return  ;
    }



}
