<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/var/www/html/www.xiaoxuannhs.xyz/app/index/view/index/details.html";i:1539844572;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $arr['pr_ctitle']; ?>--肖轩啦啦啦</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="thumbnail">
                <p class="text-center"><?php echo $arr['pr_ctitle']; ?></p>
                <p class="text-center"><?php echo $arr['pr_usname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $arr['pr_ctime']; ?></p>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="thumbnail">
                <p>
                    <?php echo $arr['pr_ccontent']; ?>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>