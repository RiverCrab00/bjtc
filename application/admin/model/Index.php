<?php

namespace app\admin\model;

use think\Db;
use think\Model;

class Index extends Model
{
    function sel(){
        $res=Db::table('user')->all();
        return $res;
    }
}
