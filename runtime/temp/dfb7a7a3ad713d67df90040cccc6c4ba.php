<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"C:\wamp\www\myproject\public/../application/index\view\user\apply_lend.html";i:1555340128;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\header.html";i:1477625733;s:71:"C:\wamp\www\myproject\public/../application/index\view\user\footer.html";i:1555306651;}*/ ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>查看用户列表</title>
<style>
body{
    color: #333;
    font: 16px Verdana, "Helvetica Neue", helvetica, Arial, 'Microsoft YaHei', sans-serif;
    margin: 0px;
    padding: 20px;
}

a{
    color: #868686;
    cursor: pointer;
}
a:hover{
    text-decoration: underline;
}
h2{
    color: #4288ce;
    font-weight: 400;
    padding: 6px 0;
    margin: 6px 0 0;
    font-size: 28px;
    border-bottom: 1px solid #eee;
}
div{
margin:8px;
}
.info{
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}

.copyright{
    margin-top: 24px;
    padding: 12px 0;
  border-top: 1px solid #eee;
}
</style>
</head>
<body>
这是user 里面的 header

<h2>投资操作</h2>
<!-- 注意要在form表单中写上 enctype="multipart/form-data" 属性，否则文件上传不了-->
<FORM method="post" class="form" action="<?php echo $project_id; ?> ">
    借出金额：<INPUT type="text" class="text" name="lend_money"><br />
    <INPUT type="submit" class="btn" value=" 提交 ">
</FORM>
<!--
<div class="copyright">
    <a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a> 
    <span>V5</span> 
    <span>{ 十年磨一剑-为API开发设计的高性能框架 }</span>
</div>
-->
这里是user的底部，后期开发前台页面时，再进行更改渲染。
</body>
</html>