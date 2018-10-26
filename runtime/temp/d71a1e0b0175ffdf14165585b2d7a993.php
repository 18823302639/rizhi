<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/var/www/html/www.xiaoxuannhs.xyz/app/index/view/index/write.html";i:1539829537;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>写日志/文章</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row" style="margin-top:50px;">
        <div class="col-xs-10 col-xs-offset-1">
            <div class=" center-black">
                <form action="<?php echo url('index/write'); ?>" method="post">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">标题</span>
                            <input type="text" name="pr_ctitle" id="us"  class="form-control" placeholder="title" aria-describedby="basic-addon1" />
                            <!--<input type="hidden" name="p_id" value="0">-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label class="input-group-addon">日志内容</label>
                        </div>
                        <textarea id="fcontent" class="form-control" id="exampleInputPassword1" placeholder="写点什么吧！" name="pr_ccontent"></textarea>

                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary"  >发布留言</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script charset="utf-8" src="/public/static/kindeditor/kindeditor-all.js"></script>
<script charset="utf-8" src="/public/static/kindeditor/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/public/static/kindeditor/zh-CN.js"></script>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#fcontent');
    });
</script>