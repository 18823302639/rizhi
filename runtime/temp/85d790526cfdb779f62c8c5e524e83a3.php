<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"E:\myphp_www\WWW\practice/app/index\view\index\index.html";i:1539599097;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎来到我的日记管理系统</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        th{text-align:center;}
    </style>
</head>
<body>
<div class="container ">
    <table class="table table-warning text-center ">
        <tr class="active">
            <th> <a href="<?php echo url('index/landing'); ?>">   <?php if(session('?name')){echo session('name');}else{echo "登陆/注册"; } ?> </a>   </th>
            <th ><a href="<?php echo url('index/write'); ?>">写日志/文章</a> </th>
        </tr>
    </table>
    <table class="table table-hover table-bordered text-center ">
        <tr>
            <th style="width:10%">发布类型</th>
            <th>发布内容</th>
            <th style="width:10%">发布作者</th>
            <th style="width:10%">发布时间</th>
            <th style="width:10%">操作</th>
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
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>


</body>
</html>