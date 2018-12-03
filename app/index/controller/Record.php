<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/3
 * Time: 22:12
 * 工作事项记录
 */

namespace app\index\Controller;
use think\Model;
use think\Controller;
use think\Db;
use think\Session;

class Record extends Controller
{
    public function base(){
        return $this->view->fetch("record/rec_base");
    }

    public function index(){
        return $this->view->fetch();
    }

    public function write(){

        return $this->view->fetch("record/rec_write");

    }

}


