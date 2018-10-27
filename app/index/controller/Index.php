<?php
namespace app\index\controller;

use app\index\model\Mindex;
use think\Controller;
use think\Session;
use think\Request;
//use think\facade\Session;
use think\Db;
use think\Model;

class Index extends Controller
{

    //前置操作
    protected $beforeActionList = [

//        ''  => [],
        'yz'  => ['only' => 'write'],

    ];

    public function yz(){

        if(!Session::has('name')){
            $this->error("您还未登陆，请先登陆",'index/landing');
        }

    }

    /**
     * @return mixed
     * 模板继承
     */
    public function base(){
        return $this->fetch();
    }

    //构造函数
    function __construct()
    {
        parent::__construct();
//        $m = new Mindex;
    }

    //退出session
    public function unst(){
        Session::delete('name');
        $this->success("退出成功",url('index/index'));
    }

    //查看日志详情
    public function details($pr_id){

        $arr = Db::table('pr_content')
                    ->where('pr_id',$pr_id)
                    ->find();
        $this->assign('arr',$arr);
        return $this->fetch();

    }

    //登陆首页
    public function index(){
        $m = new Mindex() ;
        $res = $m->index();
        $this->assign('res',$res);
        return $this->fetch();
    }

    //登陆
    public function landing(){
        $data = input('post.');
        if( Request::instance()->isPost()) {
            $m = new Mindex();
            $con = $m->mregis();
            if ($con) {
                Session::set('name', $data['pr_name']);
                $this->success('登陆成功', 'index/index');
            } else {
                $this->error('账号或者密码错误');
            }
        }
            return $this->fetch();

    }

    //注册
    public function register(){
        if($_POST){
            $data = input('post.');
            $con = Db::table('pr_username')->insert($data);
            if($con){
                $this->success('注册成功',"index/landing");
            }else{
                $this->error('注册失败');
            }
        }
        return $this->fetch();
    }

    public function cs(){
        return $this->fetch();
    }

    //写入
    public function write(){
        if(Request::instance()->isPost()) {
            $m = new Mindex();
            $con = $m->write_content();
            if ($con) {
                $this->success('写入日志成功', 'index/index');
            } else {
                $this->error('写入失败');
            }
        }
        return $this->fetch();

    }


    //删除
    public function del($pr_id){
        $m = new Mindex();
        $obj = $m->mdel($pr_id);
        var_dump($obj);
        if($obj != false){
            $this->success("已成功删除",url('index/index'));
        }else{
            $this->error("您没有权限删除别人的日志",url('index/index'));

        }

    }


}
