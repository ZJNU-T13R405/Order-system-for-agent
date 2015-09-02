<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆系统</title>

    <!-- header information -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Le styles -->
<link href="/Order-system-for-agent/Application/Admin/Common/Public/css/bootstrap-combined.min.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
<![endif]-->
    
</head>
<body>
    <h1>登陆</h1>
    <form action="<?php echo U(MODULE_NAME.'/Login/loginHandle');?>" method="post">
        <table>
            <tr>
                <td align="right">用户名：</td>
                <td>
                    <input type="text" name="username" />
                </td>
            </tr>
            <tr>
                <td align="right">密码：</td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="登陆" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>