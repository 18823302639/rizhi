<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"E:\myphp_www\WWW\practice/app/index\view\index\index.html";i:1543910277;s:56:"E:\myphp_www\WWW\practice\app\index\view\index\base.html";i:1543910277;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>欢迎来到我的日记管理系统</title>
    <style>
        th{text-align:center;}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <table class="table table-warning text-center ">
        <tr class="active">
            <th ><a href="<?php echo url('index/index'); ?>">回到首页</a> </th>
            <th ><a href="<?php echo url('Record/index'); ?>">工作事项</a></th>
            <th><?php if(\think\Request::instance()->session('name') != ''): ?>
                    <a href="<?php echo url('index/unst'); ?>"> <?php echo \think\Request::instance()->session('name'); ?> /退出 </a>
                <?php else: ?> <a href="<?php echo url('index/landing'); ?>">登陆/注册 </a>
                <?php endif; ?>
            </th>
            <th ><a href="<?php echo url('index/write'); ?>">写日志/文章</a> </th>
        </tr>
    </table>
</div>





<div class="container ">

    <table class="table table-hover table-bordered text-center ">
        <tr>
            <th style="width:10%">发布类型</th>
            <th>发布内容</th>
            <th style="width:10%">发布作者</th>
            <th style="width:10%">发布时间</th>
            <th style="width:20%">操作</th>
        </tr>
        <tr>
            <td>文章</td>
            <a href="">
            <td>123</td>
            </a>
            <td>xiaoxuan</td>
            <td>2018-08-12</td>
            <td>
                <a href=""><button class="btn btn-default">删除</button></a><br>
                <a href=""><button class="btn btn-default">修改</button></a>
            </td>
        </tr>
        <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>文章</td>
                <td>
                    <?php echo strip_tags(mb_substr($vo['pr_ccontent'],0,200,'utf-8'));  ?>
                </td>
                <td><?php echo $vo['pr_usname']; ?></td>
                <td><?php echo $vo['pr_ctime']; ?></td>
                <td>
                    <a href="<?php echo url('index/details','pc_id='.$vo['pr_id']); ?>"><button class="btn btn-default">查看</button></a>
                    <a href="<?php echo url('index/write'); ?>"><button class="btn btn-default">新增</button></a><br>
                    <a href="<?php echo url('index/upd'); ?>"><button class="btn btn-default">修改</button></a>
                    <a href="<?php echo url('index/del','pr_id='.$vo['pr_id']); ?>"><button class="btn btn-default">删除</button></a>
                </td>
            </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>




</body>
</html>