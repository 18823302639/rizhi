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
use think\Paginator;

class Record extends Controller
{
    public function base(){
        return $this->view->fetch("record/rec_base");
    }

    public function resel(){
         $arr = Db::table('record')->order('rec_write_time desc')->select();
        return $arr;
    }

    public function index(){
        $arr = Db::table('record')->order("rec_write_time desc ")->paginate(10);
        if($arr){
            $this->assign("arr",$arr);
        }
        return $this->view->fetch();
    }

    //添加
    public function write(){

        if(Request::instance()->isPost()){
            $data = input('post.');
            $data['rec_write_time'] = date('Y/m/d H:i:s',time());
            $res = Db::table("record")->insert($data);
            if($res){
                $arr = $this->resel();
                return json_encode($arr);
            }else{
                return false;
            }
        }
        return $this->view->fetch("record/rec_write");

    }

    //删除
    public function rdel(){

        if(Request::instance()->isPost()){

            $data = input('post./a');

            print_r($data);
            $res = Db::table('record')->fetchSql(false)->delete($data['data']);

            echo $res;
            if($res){
                $arr = $this->resel();
                return json_encode($arr);
            }else{
                return false;
            }

        }

    }

}


