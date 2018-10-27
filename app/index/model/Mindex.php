<?php
namespace app\index\model;

use think\Model;
use think\Session;
use think\Request;
use think\Db;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/15
 * Time: 18:33
 */


class Mindex extends Model{

    public function index(){

        //查询数据
        $res = Db::table('pr_content')
                    ->where('pr_cflag',0)
                    ->select();
        return $res;

    }

    //登陆查询
    public function mregis(){

            $data = input('post.');
            $con = Db::table('pr_username')
                ->where('pr_name',$data['pr_name'])
                ->where('pr_pwd',$data['pr_pwd'])
                ->select();
            return $con;

    }

    //查询用户id、用户名
    public function pr_sele(){

        $sess = Session::get('name');
        $arr = Db::table('pr_username')
                    ->field('id,pr_name')
                    ->where('pr_name',$sess)
                    ->find();
        return $arr;

    }

    //写入日志
    public function write_content(){

        if(Request::instance()->isPost()){

            $arr = $this->pr_sele();
            $data = input('post.');
            $data['pr_usid'] = $arr['id'];
            $data['pr_usname'] = $arr['pr_name'];
            $time = date('Y-m-d H-i-s',time());
            $data['pr_ctime'] = $time;
            $sql = Db::table('pr_content')->insert($data);
            return $sql;

        }

    }

    /*
     *删除，判断是否有权限
     *本人于管理员
     */
    public function mdel($pr_id){
        $arr = Db::table('pr_content')
                    ->field('pr_id,pr_usid')
                    ->where('pr_id',$pr_id)
                    ->where('pr_usid','eq',function ($query){
                       $query->table('pr_username')->where('pr_name','eq',Session::get('name'))->field('id');
                    })
                    ->select();
//        echo $arr;die;
//        print_r($arr);die;
        if(count($arr)>0){
            //print_r($arr);
            $obj = Db::table('pr_content')->where('pr_id',$pr_id)->fetchSql(false)->delete();
            if($obj){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

}