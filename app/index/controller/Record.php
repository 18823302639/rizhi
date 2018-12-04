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
use think\Request;
use think\Session;

class Record extends Controller
{
    public function base(){
        return $this->view->fetch("record/rec_base");
    }

    public function index(){
        $arr = Db::table('record')->select();
        if($arr){
            $this->assign("arr",$arr);
        }
        return $this->view->fetch();
    }

    public function write(){

        if(Request::instance()->isPost()){
            $data = input('post.');
            $data['rec_write_time'] = date('Y-m-d H-i-s',time());
            $res = Db::table("record")->insert($data);
            if($res){
                return true;
            }else{
                return false;
            }
        }
        return $this->view->fetch("record/rec_write");

    }

}


