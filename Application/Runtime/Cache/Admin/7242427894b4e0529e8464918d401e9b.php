<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>代理规则设置</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Le styles -->
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
<![endif]-->
</head>
<body>
    <h1>代理规则设置</h1>
    <form action="<?php echo U(MODULE_NAME.'/Agent/agentRuleHandle');?>" method="post">
        <table>
            <tr>
                <td>规则名</td>
                <td>
                    <input type="text" name="rulename" />
                </td>
            </tr>
            <tr>
                <td>针对等级</td>
                <td>
                    <input type="text" name="level" />
                </td>
            </tr>
            <tr>
                <td>折扣</td>
                <td>
                    <input type="text" name="discount" />折
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="确认添加" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>