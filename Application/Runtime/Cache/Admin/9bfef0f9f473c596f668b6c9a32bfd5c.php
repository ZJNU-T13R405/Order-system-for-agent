<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看商品分类</title>

    <!-- header information -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Le styles -->
<link href="/Order-system-for-agent/Application/Admin/Common/Public/Css/bootstrap-combined.min.css" rel="stylesheet">

<script src="/Order-system-for-agent/Application/Admin/Common/Public/Js/jquery.js"></script>
<script src="/Order-system-for-agent/Application/Admin/Common/Public/Js/bootstrap.min.js"></script>
<link href="/Order-system-for-agent/Application/Admin/Common/Public/Css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
<![endif]-->
    
</head>
<body>
    <h1>查看所有商品分类</h1>
    <ul>
        <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li>编号：<?php echo ($v["id"]); ?>
                <ul>
                    <li>名称：<?php echo ($v["title"]); ?></li>
                    <li>排序：<?php echo ($v["sort"]); ?></li>
                    [<a href="<?php echo U(MODULE_NAME.'/Category/alterCate', array('id' => $v['id'], 'title' => $v['title'], 'sort' => $v['sort']));?>">修改</a>]
                    [<a href="<?php echo U(MODULE_NAME.'/Category/deleteCate', array('id' => $v['id']));?>">删除</a>]
                </ul>
            </li><br /><?php endforeach; endif; ?>
    </ul>
</body>
</html>