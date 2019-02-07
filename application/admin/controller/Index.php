<?php

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    function index()
    {
        $this->fetch();
    }
    function login()
    {
        return $this->fetch();
    }
}
