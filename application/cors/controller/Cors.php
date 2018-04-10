<?php

namespace app\cors\controller;

use think\Controller;

class Cors extends Controller
{
    public function isError()
    {
        echo 'no';
    }

    public function isSuccess()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Max-Age: 30");
        header("Access-Control-Allow-Methods: GET,POST,PUT,PATCH,DELETE");

        echo '恭喜跨域成功!';
    }
}