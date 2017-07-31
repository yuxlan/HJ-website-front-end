<?php
/* Smarty version 3.1.30, created on 2017-07-31 20:19:00
  from "D:\php\wamp\www\BaiJiaHao\application\views\home\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f2034261055_37946173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3680094ee036fd7d661fce41e96160d20c1fd0e0' => 
    array (
      0 => 'D:\\php\\wamp\\www\\BaiJiaHao\\application\\views\\home\\login.html',
      1 => 1501139094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f2034261055_37946173 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>

    <link rel="stylesheet" href="public/css/login.css" type="text/css" />
</head>
<body>

<div class="modal fade" id="myModal">
    <!--<div id="myModal">-->
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h4>登录</h4>
            </div>
            <div class="zhanghao-login">
                <div class="modal-body">
                    <a href="javascript:;" class="modal-body-login-quikly"><img src="public/imgs/icons/phone.png" class="modal-logo-phone">&nbsp; 短信快捷登录</a>
                    <form action="" method="" id="">
                        <input type="text" class="form-control form-control-user"  value="" placeholder="     手机/邮箱/用户名" id="username" />
                        <input type="password" class="form-control form-control-pwd" value="" placeholder="     密码" id="pwd" />
                        <input type="checkbox" checked="checked" id="checked" />下次自动登录
                        <a href="javascript:;" class="modal-body-a">登录遇到问题</a>
                        <input type="submit" class="form-control-button btn btn-primary" id="send" name="send" value="登录" />
                        <a href="?m=register" class="modal-body-a" target="_blank">立即注册</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>可以使用以下方式登录</p>
                    <img src="public/imgs/icons/weibo-login.png" class="modal-logo-weibo" />
                    <img src="public/imgs/icons/qq-login.png" class="modal-logo-qq" />
                </div>
                <a class="modal-logo-erweima" href="javascript:;">
                    <img src="public/imgs/icons/pass_login_icons_erweima.png">
                </a>
            </div>

            <div class="erweima-login">
                <div class="modal-body">
                    <h1 class="erweima-login-h1"><strong>请使用<a>手机百度APP扫码</a>登录</strong></h1>
                    <img src="public/imgs/icons/qrcode.png" class="erweima-login-img">
                    <p class="erweima-login-p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;百度技术加密，保障您的隐私安全</p>
                </div>
                <a class="modal-logo-zhanghao" href="javascript:;">
                    <img src="public/imgs/icons/pass_login_icons_zhanghao.png">
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}