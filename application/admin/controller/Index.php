<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    function index()
    {
        halt(Db::table('users')->all());
        $this->fetch();
    }
    function login()
    {
        return $this->fetch();
    }
}
